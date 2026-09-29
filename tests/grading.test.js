import assert from "node:assert/strict";
import { describe, it } from "node:test";
import { gradeAttach, gradeTax, taxFormula, taxItems } from "../public/js/logic.js";

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

describe("gradeTax(不動産)", () => {
  const tax = { base: "不動産の価額", rate: "1000分の20", example: "", answer: 400000 };
  const ok = { base: "不動産の価額", rate: "1000分の20" };
  it("区分が正しく、金額の穴埋めが○なら○", () => {
    assert.equal(gradeTax(tax, ok, { amount: "good" }).grade, "good");
  });
  it("区分は正しいが金額が△・×なら△", () => {
    assert.equal(gradeTax(tax, ok, { amount: "vague" }).grade, "vague");
    assert.equal(gradeTax(tax, ok, { amount: "miss" }).grade, "vague");
  });
  it("課税標準か税率の誤りは、金額が○でも×", () => {
    const r = gradeTax(tax, { ...ok, base: "債権額" }, { amount: "good" });
    assert.equal(r.grade, "miss");
    assert.deepEqual(r.checks, { base: false, rate: true });
    assert.equal(gradeTax(tax, { ...ok, rate: "1000分の4" }, { amount: "good" }).grade, "miss");
  });
  it("金額の正解は既定で「金40,000円」の形、answerText があればそれを使う", () => {
    assert.deepEqual(taxItems({ ...tax, answer: 40000 }).blanks, [{ key: "amount", label: "登録免許税の額", answer: "金40,000円" }]);
    const kubun = { ...tax, answerText: "建物 金4万円\n敷地権 金20万円\n合計 金24万円" };
    assert.equal(taxItems(kubun).blanks[0].answer, kubun.answerText);
  });
});

describe("gradeTax(商業)", () => {
  const fixed = { rate: "申請件数1件につき3万円", base: null, example: "", answer: 30000 };
  const ratio = { rate: "増加した資本金の額の1000分の7", base: 10000000, example: "", answer: 70000 };
  it("課税標準金額と税額の2つを穴埋めで出す。定額は「定額のため記載なし」", () => {
    assert.deepEqual(taxItems(fixed).blanks.map((b) => [b.key, b.answer]), [
      ["base", "定額のため記載なし"],
      ["amount", "金30,000円"],
    ]);
    assert.equal(taxItems(ratio).blanks[0].answer, "金10,000,000円");
    assert.deepEqual(taxItems(ratio).choices.map((c) => c.key), ["rate"]);
  });
  it("税額の定めが正しく、穴埋めがすべて○なら○", () => {
    assert.equal(gradeTax(ratio, { rate: ratio.rate }, { base: "good", amount: "good" }).grade, "good");
  });
  it("穴埋めのどれかが△・×なら△", () => {
    assert.equal(gradeTax(fixed, { rate: fixed.rate }, { base: "miss", amount: "good" }).grade, "vague");
    assert.equal(gradeTax(fixed, { rate: fixed.rate }, { base: "good" }).grade, "vague");
  });
  it("税額の定めの誤りは×", () => {
    assert.equal(gradeTax(ratio, { rate: fixed.rate }, { base: "good", amount: "good" }).grade, "miss");
  });
});

describe("taxFormula", () => {
  it("formula があればそれを使い、なければ条件と税率から作る", () => {
    assert.equal(taxFormula({ base: "債権額", rate: "1000分の4", example: "債権額 1,000万円", answer: 40000 }), "債権額 1,000万円 × 1000分の4 = 金40,000円");
    assert.equal(taxFormula({ rate: "申請件数1件につき3万円", base: null, example: "", answer: 30000 }), "定額:申請件数1件につき3万円 → 金30,000円");
    assert.equal(taxFormula({ base: "x", rate: "y", example: "", answer: 1, formula: "手書きの式" }), "手書きの式");
  });
});
