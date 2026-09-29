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
export async function loadAll(seedCases) {
  const d = await db();
  const seeded = await req(d.transaction("meta").objectStore("meta").get("seeded"));
  if (!seeded) {
    const tx = d.transaction(["cases", "meta"], "readwrite");
    for (const c of seedCases) tx.objectStore("cases").put(c);
    tx.objectStore("meta").put(true, "seeded");
    await done(tx);
  }
  const tx = d.transaction(["cases", "progress"]);
  const cases = await req(tx.objectStore("cases").getAll());
  const store = tx.objectStore("progress");
  const [keys, values] = await Promise.all([req(store.getAllKeys()), req(store.getAll())]);
  const progress = {};
  keys.forEach((k, i) => (progress[k] = values[i]));
  return { cases: sortCases(cases, seedCases), progress };
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
