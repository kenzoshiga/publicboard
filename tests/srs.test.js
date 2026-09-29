import assert from "node:assert/strict";
import { describe, it } from "node:test";
import { applyGrade, isDue } from "../public/js/logic.js";
import { config, DAY, HOUR } from "./bootstrap.js";

const NOW = 1_800_000_000_000;

describe("applyGrade", () => {
  it("○: 未学習からは level 1、1日後", () => {
    assert.deepEqual(applyGrade(config, undefined, "good", NOW), { level: 1, due: NOW + DAY, count: 1 });
  });
  it("○: level が1上がり、level に応じた間隔後になる", () => {
    assert.deepEqual(applyGrade(config, { level: 2, due: 0, count: 4 }, "good", NOW), { level: 3, due: NOW + 7 * DAY, count: 5 });
  });
  it("○: 上限は5で30日後", () => {
    const p = applyGrade(config, { level: 5, due: 0, count: 9 }, "good", NOW);
    assert.equal(p.level, 5);
    assert.equal(p.due, NOW + 30 * DAY);
  });
  it("○: level 0 からは1", () => {
    assert.equal(applyGrade(config, { level: 0, due: 0, count: 1 }, "good", NOW).level, 1);
  });
  it("△: level は変えず(最低1)、12時間後", () => {
    assert.deepEqual(applyGrade(config, { level: 3, due: 0, count: 2 }, "vague", NOW), { level: 3, due: NOW + 12 * HOUR, count: 3 });
    assert.equal(applyGrade(config, { level: 0, due: 0, count: 2 }, "vague", NOW).level, 1);
    assert.deepEqual(applyGrade(config, undefined, "vague", NOW), { level: 1, due: NOW + 12 * HOUR, count: 1 });
  });
  it("×: level 0 に戻し、即時に復習対象", () => {
    const p = applyGrade(config, { level: 4, due: NOW + DAY, count: 7 }, "miss", NOW);
    assert.deepEqual(p, { level: 0, due: NOW, count: 8 });
    assert.equal(isDue(p, NOW), true);
  });
  it("間隔の定数は 0/1/3/7/14/30日", () => {
    assert.deepEqual(config.levelIntervals.map((ms) => ms / DAY), [0, 1, 3, 7, 14, 30]);
  });
});
