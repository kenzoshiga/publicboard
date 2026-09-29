import assert from "node:assert/strict";
import { describe, it } from "node:test";
import { casePriority, countPending, fieldLabel, fieldsOfCase, hiddenFields, pickCase } from "../public/js/logic.js";
import { config, DAY, seedCases } from "./bootstrap.js";

const NOW = 1_800_000_000_000;
const re = seedCases.find((c) => c.id === "re-baibai");
const co = seedCases.find((c) => c.id === "co-shougou");
const zero = () => 0;

describe("hiddenFields", () => {
  it("初めて出る申請例では記述項目がすべて隠れる", () => {
    assert.deepEqual(hiddenFields(config, re, {}, NOW), ["purpose", "cause", "matters", "applicant", "price"]);
    assert.deepEqual(hiddenFields(config, co, {}, NOW), ["jiyu", "jiko"]);
  });
  it("未学習と復習時期到来の項目だけを隠す", () => {
    const p = {
      "re-baibai:purpose": { level: 3, due: NOW + DAY, count: 3 },
      "re-baibai:cause": { level: 1, due: NOW - 1, count: 1 },
      "re-baibai:matters": { level: 2, due: NOW + DAY, count: 2 },
    };
    assert.deepEqual(hiddenFields(config, re, p, NOW), ["cause", "applicant", "price"]);
  });
  it("隠す対象がなければ最も定着度の低い1項目だけ隠す", () => {
    const p = {
      "re-baibai:purpose": { level: 3, due: NOW + DAY, count: 3 },
      "re-baibai:cause": { level: 4, due: NOW + DAY, count: 4 },
      "re-baibai:matters": { level: 1, due: NOW + DAY, count: 1 },
      "re-baibai:applicant": { level: 2, due: NOW + DAY, count: 2 },
      "re-baibai:price": { level: 5, due: NOW + DAY, count: 5 },
    };
    assert.deepEqual(hiddenFields(config, re, p, NOW), ["matters"]);
  });
});

describe("pickCase", () => {
  const learnedAll = (level, due) => {
    const p = {};
    for (const c of seedCases) for (const k of [...Object.keys(c.fields), "attach", "tax"]) p[`${c.id}:${k}`] = { level, due, count: 1 };
    return p;
  };
  it("復習時期到来の申請例を最優先", () => {
    const p = learnedAll(3, NOW + DAY);
    p["co-yakuin:tax"] = { level: 4, due: NOW - 1, count: 5 };
    assert.equal(pickCase(config, seedCases, "tax", p, NOW, { random: zero }).id, "co-yakuin");
  });
  it("復習時期到来がなければ未学習を優先", () => {
    const p = learnedAll(3, NOW + DAY);
    delete p["re-netei:attach"];
    assert.equal(pickCase(config, seedCases, "attach", p, NOW, { random: zero }).id, "re-netei");
  });
  it("同順位では level が低いほど優先", () => {
    const p = learnedAll(3, NOW + DAY);
    p["re-teitou:cause"] = { level: 1, due: NOW + DAY, count: 2 };
    assert.equal(pickCase(config, seedCases, "cloze", p, NOW, { random: zero }).id, "re-teitou");
    assert.equal(casePriority(config, re, "cloze", p, NOW), 23);
  });
  it("直前と同じ申請例は避ける", () => {
    const p = learnedAll(3, NOW + DAY);
    p["re-teitou:cause"] = { level: 0, due: NOW, count: 2 };
    assert.notEqual(pickCase(config, seedCases, "cloze", p, NOW, { random: zero, lastId: "re-teitou" }).id, "re-teitou");
  });
  it("申請例が1件しかなければ直前と同じでも出題する", () => {
    assert.equal(pickCase(config, [re], "cloze", {}, NOW, { lastId: re.id }).id, re.id);
  });
  it("弱点表から指定された申請例を優先", () => {
    const p = learnedAll(5, NOW + DAY);
    p["re-teitou:tax"] = { level: 0, due: NOW, count: 2 };
    assert.equal(pickCase(config, seedCases, "tax", p, NOW, { forcedId: "co-shougou", lastId: "co-shougou" }).id, "co-shougou");
  });
  it("乱数は優先度の順位を入れ替えない", () => {
    const p = learnedAll(3, NOW + DAY);
    p["co-zoushi:jiko"] = { level: 2, due: NOW + DAY, count: 2 };
    for (let i = 0; i < 50; i++) assert.equal(pickCase(config, seedCases, "cloze", p, NOW).id, "co-zoushi");
  });
});

describe("countPending", () => {
  it("復習待ちと未学習を数える", () => {
    const p = {
      "re-baibai:attach": { level: 0, due: NOW, count: 1 },
      "co-yakuin:attach": { level: 2, due: NOW + DAY, count: 1 },
    };
    assert.deepEqual(countPending(config, seedCases, "attach", p, NOW), { due: 1, fresh: 6 });
    assert.deepEqual(countPending(config, seedCases, "cloze", {}, NOW), { due: 0, fresh: 5 * 5 + 3 * 2 });
  });
});

describe("fieldLabel", () => {
  const souzoku = seedCases.find((c) => c.id === "re-souzoku");
  it("登記原因に相続を含むなら申請人の項目名は相続人", () => {
    assert.equal(fieldLabel(config, souzoku, "applicant"), "相続人");
    assert.deepEqual(fieldsOfCase(config, souzoku).map((f) => f.label), [
      "登記の目的", "登記原因", "上記以外の申請事項等", "相続人", "添付情報", "課税価格", "登録免許税",
    ]);
  });
  it("相続を含む登記原因はすべて相続人、含まなければ申請人のまま", () => {
    const withCause = (cause) => ({ ...re, fields: { ...re.fields, cause } });
    assert.equal(fieldLabel(config, re, "applicant"), "申請人");
    assert.equal(fieldLabel(config, withCause("令和8年3月1日遺贈"), "applicant"), "申請人");
    for (const cause of ["令和8年3月1日相続", "令和8年3月1日相続分の売買", "令和8年3月1日数次相続"]) {
      assert.equal(fieldLabel(config, withCause(cause), "applicant"), "相続人");
    }
  });
  it("他の項目・商業には影響しない", () => {
    assert.equal(fieldLabel(config, souzoku, "cause"), "登記原因");
    assert.equal(fieldLabel(config, co, "jiyu"), "登記の事由");
  });
});
