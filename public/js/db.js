// IndexedDB 保存。申請例(cases)と進捗(progress: キー caseId:fieldKey)を端末内に持つ。

const DB_NAME = "touki-anki";
const DB_VERSION = 1;
let dbPromise = null;

const req = (r) =>
  new Promise((resolve, reject) => {
    r.onsuccess = () => resolve(r.result);
    r.onerror = () => reject(r.error);
  });

const done = (tx) =>
  new Promise((resolve, reject) => {
    tx.oncomplete = () => resolve();
    tx.onerror = () => reject(tx.error);
    tx.onabort = () => reject(tx.error ?? new Error("transaction aborted"));
  });

function db() {
  dbPromise ??= new Promise((resolve, reject) => {
    const open = indexedDB.open(DB_NAME, DB_VERSION);
    open.onupgradeneeded = () => {
      const d = open.result;
      d.createObjectStore("cases", { keyPath: "id" });
      d.createObjectStore("progress");
      d.createObjectStore("meta");
    };
    open.onsuccess = () => resolve(open.result);
    open.onerror = () => reject(open.error);
  });
  return dbPromise;
}

/** テスト用:接続を閉じて次回開き直す */
export async function closeDb() {
  if (dbPromise) (await dbPromise).close();
  dbPromise = null;
}

/** 申請例と進捗を読み込む。初回起動時は初期データを投入する。 */
export async function loadAll(seedCases, retiredSeedIds = []) {
  const d = await db();
  await syncSeedCases(d, seedCases, retiredSeedIds);
  await addMissingSeedFields(d, seedCases);
  const tx = d.transaction(["cases", "progress"]);
  const cases = await req(tx.objectStore("cases").getAll());
  const store = tx.objectStore("progress");
  const [keys, values] = await Promise.all([req(store.getAllKeys()), req(store.getAll())]);
  const progress = {};
  keys.forEach((k, i) => (progress[k] = values[i]));
  return { cases: sortCases(cases, seedCases), progress };
}

/**
 * 同梱の申請例を端末に反映する。初回は全件を入れる。以降は、まだ入れたことのない同梱申請例だけを足し
 * (利用者が読み込みで消したものは戻さない)、retiredSeedIds の旧見本は取り除く。
 */
async function syncSeedCases(d, seedCases, retiredSeedIds) {
  const tx = d.transaction(["cases", "meta"], "readwrite");
  const cases = tx.objectStore("cases");
  const meta = tx.objectStore("meta");
  const [seeded, seedIds, storedIds] = await Promise.all([
    req(meta.get("seeded")),
    req(meta.get("seedIds")),
    req(cases.getAllKeys()),
  ]);
  // seedIds がない旧版の端末では、いま保存されている申請例を「入れたことがある」とみなす
  const offered = new Set(seedIds ?? (seeded ? storedIds : []));
  for (const c of seedCases) if (!offered.has(c.id)) cases.put(c);
  for (const id of retiredSeedIds) if (storedIds.includes(id)) cases.delete(id);
  meta.put(true, "seeded");
  meta.put([...new Set([...offered, ...seedCases.map((c) => c.id)])], "seedIds");
  await done(tx);
}

/**
 * 項目が追加されたとき、保存済みの同梱申請例に足りない項目だけを初期データから補う。
 * 利用者が編集した既存の項目は上書きしない。
 */
async function addMissingSeedFields(d, seedCases) {
  const seedById = new Map(seedCases.map((c) => [c.id, c]));
  const tx = d.transaction("cases", "readwrite");
  const store = tx.objectStore("cases");
  for (const c of await req(store.getAll())) {
    const seed = seedById.get(c.id);
    if (!seed || seed.category !== c.category) continue;
    const missing = Object.keys(seed.fields).filter((k) => !(k in (c.fields ?? {})));
    if (missing.length === 0) continue;
    const fields = { ...c.fields };
    for (const k of missing) fields[k] = seed.fields[k];
    store.put({ ...c, fields });
  }
  await done(tx);
}

function sortCases(cases, seedCases) {
  const order = new Map(seedCases.map((c, i) => [c.id, i]));
  return [...cases].sort(
    (a, b) =>
      (a.category === b.category ? 0 : a.category === "不動産" ? -1 : 1) ||
      (order.get(a.id) ?? 1e9) - (order.get(b.id) ?? 1e9) ||
      a.title.localeCompare(b.title, "ja"),
  );
}

export async function saveProgress(key, p) {
  const tx = (await db()).transaction("progress", "readwrite");
  tx.objectStore("progress").put(p, key);
  await done(tx);
}

export async function resetProgress() {
  const tx = (await db()).transaction("progress", "readwrite");
  tx.objectStore("progress").clear();
  await done(tx);
}

/** バックアップで申請例と進捗を置き換える */
export async function restoreBackup(b) {
  const tx = (await db()).transaction(["cases", "progress", "meta"], "readwrite");
  const cases = tx.objectStore("cases");
  const progress = tx.objectStore("progress");
  cases.clear();
  progress.clear();
  for (const c of b.cases) cases.put(c);
  for (const [k, p] of Object.entries(b.progress)) progress.put(p, k);
  tx.objectStore("meta").put(true, "seeded");
  await done(tx);
}
