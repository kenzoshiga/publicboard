// 採点・間隔反復・出題選択のロジック。DOM に依存しない純粋関数だけを置く(node --test でテストする)。

export const progressKey = (caseId, fieldKey) => `${caseId}:${fieldKey}`;

export function fieldsOf(config, category) {
  return config.fieldDefs[category] ?? [];
}

export function fieldsForMode(config, category, mode) {
  return fieldsOf(config, category).filter((f) => f.mode === mode);
}

/** 申請例に合わせた項目名(例:登記原因が相続なら「申請人」を「相続人」と表示) */
export function fieldLabel(config, c, fieldKey) {
  const def = fieldsOf(config, c.category).find((f) => f.key === fieldKey);
  for (const r of config.labelRules ?? []) {
    if (r.category !== c.category || r.field !== fieldKey) continue;
    const v = String(c.fields?.[r.when.field] ?? "").trim();
    if (v.endsWith(r.when.suffix)) return r.label;
  }
  return def?.label ?? fieldKey;
}

/** 申請例ごとの項目名を反映した項目定義 */
export function fieldsOfCase(config, c) {
  return fieldsOf(config, c.category).map((f) => ({ ...f, label: fieldLabel(config, c, f.key) }));
}

export function isCommercialTax(tax) {
  return typeof tax.base !== "string";
}

// ---- 間隔反復 ----

/** 採点結果(good=○ / vague=△ / miss=×)から次の進捗を計算する。prev が undefined なら未学習。 */
export function applyGrade(config, prev, grade, now) {
  const intervals = config.levelIntervals;
  const maxLevel = intervals.length - 1;
  const count = (prev?.count ?? 0) + 1;
  if (grade === "good") {
    const level = prev ? Math.min(maxLevel, prev.level + 1) : 1;
    return { level, due: now + intervals[level], count };
  }
  if (grade === "vague") {
    const level = Math.max(1, prev?.level ?? 1);
    return { level, due: now + config.vagueInterval, count };
  }
  if (grade === "miss") return { level: 0, due: now + intervals[0], count };
  throw new Error(`unknown grade: ${grade}`);
}

export function isDue(p, now) {
  return p !== undefined && p.due <= now;
}

// ---- 採点 ----

/** 完全一致=○、過剰のみ=△、不足が1つでもあれば=× */
export function gradeAttach(options, selected, answer) {
  const sel = new Set(selected);
  const ans = new Set(answer);
  const marks = {};
  let missing = 0;
  let extra = 0;
  for (const o of new Set([...options, ...answer])) {
    if (sel.has(o) && ans.has(o)) marks[o] = "correct";
    else if (ans.has(o)) {
      marks[o] = "missing";
      missing++;
    } else if (sel.has(o)) {
      marks[o] = "extra";
      extra++;
    } else marks[o] = "none";
  }
  const grade = missing > 0 ? "miss" : extra > 0 ? "vague" : "good";
  return { grade, marks };
}

function combine(classOk, amountOk) {
  if (!classOk) return "miss";
  return amountOk ? "good" : "vague";
}

/** 不動産:すべて正解=○、区分(課税標準・税率)は正しいが金額が誤り=△、区分の誤り=× */
export function gradeRealEstateTax(tax, a) {
  const checks = {
    base: a.base === tax.base,
    rate: a.rate === tax.rate,
    amount: a.amount === tax.answer,
  };
  return { grade: combine(checks.base && checks.rate, checks.amount), checks };
}

/**
 * 商業:区分(税額の定め)は正しいが課税標準金額・税額が誤り=△、区分の誤り=×。
 * a.base が null =「定額のため記載なし」を選択。a.baseBlank = 金額記載を選んだが空欄・不正。
 * 課税標準金額は、定額の登記では「記載なし」を選んだ場合のみ正解。
 */
export function gradeCommercialTax(tax, a) {
  const baseOk = a.baseBlank ? false : tax.base === null ? a.base === null : a.base === tax.base;
  const checks = {
    rate: a.rate === tax.rate,
    base: baseOk,
    amount: a.amount === tax.answer,
  };
  return { grade: combine(checks.rate, checks.base && checks.amount), checks };
}

/** "400,000" "400000円" "４０，０００" などを数値にする。数値でなければ null。 */
export function parseAmount(input) {
  const s = String(input)
    .replace(/[０-９]/g, (c) => String.fromCharCode(c.charCodeAt(0) - 0xfee0))
    .replace(/[,，\s円]/g, "");
  if (!/^\d+$/.test(s)) return null;
  return Number(s);
}

// ---- 出題 ----

/** 項目の優先度。復習時期到来=0、未学習=1、それ以外=2。同順位は level が低いほど優先。 */
export function fieldPriority(p, now) {
  if (p === undefined) return 1;
  return (isDue(p, now) ? 0 : 2) * 10 + p.level;
}

/** 申請例の優先度 = モードの出題対象項目の最小値 */
export function casePriority(config, c, mode, progress, now) {
  let min = Infinity;
  for (const f of fieldsForMode(config, c.category, mode)) {
    min = Math.min(min, fieldPriority(progress[progressKey(c.id, f.key)], now));
  }
  return min;
}

/** 出題する申請例を選ぶ。forcedId(弱点表から指定)を優先し、直前と同じ申請例は避ける。 */
export function pickCase(config, cases, mode, progress, now, opts = {}) {
  const targets = cases.filter((c) => fieldsForMode(config, c.category, mode).length > 0);
  if (targets.length === 0) return null;
  if (opts.forcedId) {
    const forced = targets.find((c) => c.id === opts.forcedId);
    if (forced) return forced;
  }
  const rand = opts.random ?? Math.random;
  const scored = targets
    .map((c) => ({ c, score: casePriority(config, c, mode, progress, now) + rand() * 0.9 }))
    .sort((a, b) => a.score - b.score);
  return (scored.find((s) => s.c.id !== opts.lastId) ?? scored[0]).c;
}

/** モードの「復習待ち」(復習時期が来た項目)と未学習の件数 */
export function countPending(config, cases, mode, progress, now) {
  let due = 0;
  let fresh = 0;
  for (const c of cases) {
    for (const f of fieldsForMode(config, c.category, mode)) {
      const p = progress[progressKey(c.id, f.key)];
      if (p === undefined) fresh++;
      else if (isDue(p, now)) due++;
    }
  }
  return { due, fresh };
}

/**
 * 穴埋めで付箋を貼る項目。未学習と復習時期到来の項目はすべて隠す。
 * 対象がなければ最も定着度の低い1項目だけを隠す。
 */
export function hiddenFields(config, c, progress, now) {
  const fields = fieldsForMode(config, c.category, "cloze");
  const hidden = fields
    .filter((f) => {
      const p = progress[progressKey(c.id, f.key)];
      return p === undefined || isDue(p, now);
    })
    .map((f) => f.key);
  if (hidden.length > 0 || fields.length === 0) return hidden;
  let weakest = fields[0];
  for (const f of fields) {
    if (progress[progressKey(c.id, f.key)].level < progress[progressKey(c.id, weakest.key)].level) weakest = f;
  }
  return [weakest.key];
}

export function shuffle(items, random = Math.random) {
  const a = [...items];
  for (let i = a.length - 1; i > 0; i--) {
    const j = Math.floor(random() * (i + 1));
    [a[i], a[j]] = [a[j], a[i]];
  }
  return a;
}

// ---- バックアップ ----

export function makeBackup(cases, progress, now = new Date()) {
  return { app: "touki-anki", version: 1, exportedAt: now.toISOString(), cases, progress };
}

/** 読み込んだ JSON を検証する。不正なら例外。 */
export function parseBackup(json) {
  let b;
  try {
    b = JSON.parse(json);
  } catch {
    throw new Error("JSONとして読み込めません");
  }
  if (!b || b.app !== "touki-anki" || !Array.isArray(b.cases) || typeof b.progress !== "object" || b.progress === null) {
    throw new Error("このアプリのバックアップファイルではありません");
  }
  for (const c of b.cases) {
    if (
      !c ||
      typeof c.id !== "string" ||
      (c.category !== "不動産" && c.category !== "商業") ||
      typeof c.title !== "string" ||
      typeof c.fields !== "object" ||
      !Array.isArray(c.attach) ||
      typeof c.tax !== "object"
    ) {
      throw new Error(`申請例の形式が正しくありません: ${String(c?.title ?? c?.id ?? "")}`);
    }
  }
  for (const [k, p] of Object.entries(b.progress)) {
    if (!p || typeof p.level !== "number" || typeof p.due !== "number" || typeof p.count !== "number") {
      throw new Error(`進捗の形式が正しくありません: ${k}`);
    }
  }
  return b;
}
