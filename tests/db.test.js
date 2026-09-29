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
    await saveProgress("re-baibai:cause", { level: 1, due: 123, count: 1 });
    await closeDb();
    const again = await loadAll(seedCases);
    assert.deepEqual(again.progress["re-baibai:cause"], { level: 1, due: 123, count: 1 });
  });

  it("保存済みの同梱申請例に、追加された項目だけを補う", async () => {
    const old = seedCases.map((c) => {
      const { price, ...fields } = c.fields;
      return { ...c, fields: c.id === "re-baibai" ? { ...fields, cause: "編集した原因" } : fields };
    });
    await loadAll(old);
    await closeDb();
    const r = await loadAll(seedCases);
    const baibai = r.cases.find((c) => c.id === "re-baibai");
    assert.equal(baibai.fields.price, "金2,000万円");
    assert.equal(baibai.fields.cause, "編集した原因");
  });

  it("リセットで進捗だけ消える", async () => {
    await loadAll(seedCases);
    await saveProgress("re-baibai:cause", { level: 1, due: 123, count: 1 });
    await resetProgress();
    const r = await loadAll(seedCases);
    assert.deepEqual(r.progress, {});
    assert.equal(r.cases.length, seedCases.length);
  });

  it("JSONで書き出し・読み込みできる", async () => {
    const { cases } = await loadAll(seedCases);
    const b = makeBackup(cases.slice(0, 2), { "re-baibai:tax": { level: 2, due: 5, count: 3 } });
    await restoreBackup(parseBackup(JSON.stringify(b)));
    const r = await loadAll(seedCases);
    assert.deepEqual(r.cases.map((c) => c.id), cases.slice(0, 2).map((c) => c.id));
    assert.deepEqual(r.progress, { "re-baibai:tax": { level: 2, due: 5, count: 3 } });
  });

  it("不正なバックアップは拒否する", () => {
    assert.throws(() => parseBackup("{"));
    assert.throws(() => parseBackup(JSON.stringify({ app: "other" })));
    assert.throws(() =>
      parseBackup(JSON.stringify({ app: "touki-anki", version: 1, cases: [], progress: { x: { level: "a" } } })),
    );
  });
});
