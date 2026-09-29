import "fake-indexeddb/auto";
import assert from "node:assert/strict";
import { beforeEach, describe, it } from "node:test";
import { closeDb, loadAll, resetProgress, restoreBackup, saveProgress } from "../public/js/db.js";
import { makeBackup, parseBackup } from "../public/js/logic.js";
import { seedCases } from "./bootstrap.js";

const wipe = () =>
  new Promise((resolve) => {
    const r = indexedDB.deleteDatabase("touki-anki");
    r.onsuccess = r.onerror = () => resolve();
  });

describe("IndexedDB 保存", () => {
  beforeEach(async () => {
    await closeDb();
    await wipe();
  });

  it("初回起動で初期データを投入し、進捗は再読み込み後も残る", async () => {
    const first = await loadAll(seedCases);
    assert.equal(first.cases.length, seedCases.length);
    assert.deepEqual(first.progress, {});
    await saveProgress("re-h1-01:cause", { level: 1, due: 123, count: 1 });
    await closeDb();
    const again = await loadAll(seedCases);
    assert.deepEqual(again.progress["re-h1-01:cause"], { level: 1, due: 123, count: 1 });
  });

  it("保存済みの同梱申請例に、追加された項目だけを補う", async () => {
    const old = seedCases.map((c) => {
      const { price, ...fields } = c.fields;
      return { ...c, fields: c.id === "re-h1-01" ? { ...fields, cause: "編集した原因" } : fields };
    });
    await loadAll(old);
    await closeDb();
    const r = await loadAll(seedCases);
    const baibai = r.cases.find((c) => c.id === "re-h1-01");
    assert.equal(baibai.fields.price, "金1000万円");
    assert.equal(baibai.fields.cause, "編集した原因");
  });

  it("旧版の端末に新しい同梱申請例を足し、旧見本を取り除き、利用者が消した申請例は戻さない", async () => {
    const old = { ...seedCases[0], id: "re-old-sample" };
    // 旧版:seedIds を持たず、旧見本と同梱申請例の一部だけが入っている
    await loadAll([old, seedCases[1], seedCases[2]]);
    await closeDb();
    const d = await new Promise((res) => {
      const r = indexedDB.open("touki-anki");
      r.onsuccess = () => res(r.result);
    });
    await new Promise((res) => {
      const tx = d.transaction("meta", "readwrite");
      tx.objectStore("meta").delete("seedIds");
      tx.oncomplete = res;
    });
    d.close();
    const r = await loadAll(seedCases, ["re-old-sample"]);
    const ids = r.cases.map((c) => c.id);
    assert.ok(!ids.includes("re-old-sample"));
    assert.equal(ids.length, seedCases.length);

    // 利用者が読み込みで申請例を減らした場合、同梱分でも勝手には戻さない
    await restoreBackup({ app: "touki-anki", version: 1, cases: [seedCases[0]], progress: {} });
    const again = await loadAll(seedCases, []);
    assert.deepEqual(again.cases.map((c) => c.id), [seedCases[0].id]);
  });

  it("リセットで進捗だけ消える", async () => {
    await loadAll(seedCases);
    await saveProgress("re-h1-01:cause", { level: 1, due: 123, count: 1 });
    await resetProgress();
    const r = await loadAll(seedCases);
    assert.deepEqual(r.progress, {});
    assert.equal(r.cases.length, seedCases.length);
  });

  it("JSONで書き出し・読み込みできる", async () => {
    const { cases } = await loadAll(seedCases);
    const b = makeBackup(cases.slice(0, 2), { "re-h1-01:tax": { level: 2, due: 5, count: 3 } });
    await restoreBackup(parseBackup(JSON.stringify(b)));
    const r = await loadAll(seedCases);
    assert.deepEqual(r.cases.map((c) => c.id), cases.slice(0, 2).map((c) => c.id));
    assert.deepEqual(r.progress, { "re-h1-01:tax": { level: 2, due: 5, count: 3 } });
  });

  it("不正なバックアップは拒否する", () => {
    assert.throws(() => parseBackup("{"));
    assert.throws(() => parseBackup(JSON.stringify({ app: "other" })));
    assert.throws(() =>
      parseBackup(JSON.stringify({ app: "touki-anki", version: 1, cases: [], progress: { x: { level: "a" } } })),
    );
  });
});
