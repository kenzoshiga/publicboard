import assert from "node:assert/strict";
import { describe, it } from "node:test";
import { gradeAttach, gradeCommercialTax, gradeRealEstateTax, parseAmount } from "../public/js/logic.js";

describe("gradeAttach", () => {
  const options = ["A", "B", "C", "D"];
  const answer = ["A", "B"];
  it("完全一致は○", () => {
    const r = gradeAttach(options, ["B", "A"], answer);
    assert.equal(r.grade, "good");
    assert.deepEqual(r.marks, { A: "correct", B: "correct", C: "none", D: "none" });
  });
  it("過剰のみは△", () => {
    const r = gradeAttach(options, ["A", "B", "C"], answer);
    assert.equal(r.grade, "vague");
    assert.equal(r.marks.C, "extra");
  });
  it("不足が1つでもあれば×(過剰があっても)", () => {
    assert.equal(gradeAttach(options, ["A"], answer).grade, "miss");
    const r = gradeAttach(options, ["A", "C", "D"], answer);
    assert.equal(r.grade, "miss");
    assert.deepEqual(r.marks, { A: "correct", B: "missing", C: "extra", D: "extra" });
  });
  it("何も選ばなければ×", () => {
    assert.equal(gradeAttach(options, [], answer).grade, "miss");
  });
});

describe("gradeRealEstateTax", () => {
  const tax = { base: "不動産の価額", rate: "1000分の20", example: "", answer: 400000 };
  it("すべて正解は○", () => {
    assert.equal(gradeRealEstateTax(tax, { base: "不動産の価額", rate: "1000分の20", amount: 400000 }).grade, "good");
  });
  it("区分は正しいが金額が誤りは△", () => {
    assert.equal(gradeRealEstateTax(tax, { base: "不動産の価額", rate: "1000分の20", amount: 40000 }).grade, "vague");
    assert.equal(gradeRealEstateTax(tax, { base: "不動産の価額", rate: "1000分の20", amount: null }).grade, "vague");
  });
  it("課税標準か税率の誤りは×", () => {
    assert.equal(gradeRealEstateTax(tax, { base: "債権額", rate: "1000分の20", amount: 400000 }).grade, "miss");
    assert.equal(gradeRealEstateTax(tax, { base: "不動産の価額", rate: "1000分の4", amount: 400000 }).grade, "miss");
  });
});

describe("gradeCommercialTax", () => {
  const fixed = { rate: "申請件数1件につき3万円", base: null, example: "", answer: 30000 };
  const ratio = { rate: "増加した資本金の額の1000分の7", base: 10000000, example: "", answer: 70000 };
  it("定額の登記は「記載なし」を選んだ場合のみ課税標準金額が正解", () => {
    const ok = gradeCommercialTax(fixed, { rate: fixed.rate, base: null, amount: 30000 });
    assert.equal(ok.checks.base, true);
    assert.equal(ok.grade, "good");
    const num = gradeCommercialTax(fixed, { rate: fixed.rate, base: 30000, amount: 30000 });
    assert.equal(num.checks.base, false);
    assert.equal(num.grade, "vague");
    const blank = gradeCommercialTax(fixed, { rate: fixed.rate, base: null, baseBlank: true, amount: 30000 });
    assert.equal(blank.checks.base, false);
  });
  it("定率の登記で「記載なし」は誤り", () => {
    const r = gradeCommercialTax(ratio, { rate: ratio.rate, base: null, amount: 70000 });
    assert.equal(r.checks.base, false);
    assert.equal(r.grade, "vague");
  });
  it("課税標準金額・税額が合えば○", () => {
    assert.equal(gradeCommercialTax(ratio, { rate: ratio.rate, base: 10000000, amount: 70000 }).grade, "good");
  });
  it("税額の定めの誤りは×", () => {
    assert.equal(gradeCommercialTax(ratio, { rate: fixed.rate, base: 10000000, amount: 70000 }).grade, "miss");
  });
});

describe("parseAmount", () => {
  it("カンマ・円・全角数字を受け付ける", () => {
    assert.equal(parseAmount("400,000"), 400000);
    assert.equal(parseAmount("400000円"), 400000);
    assert.equal(parseAmount("４０，０００"), 40000);
    assert.equal(parseAmount(" 2000 "), 2000);
  });
  it("数値でなければ null", () => {
    assert.equal(parseAmount(""), null);
    assert.equal(parseAmount("4万"), null);
    assert.equal(parseAmount("-1"), null);
  });
});
