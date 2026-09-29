// 画面。サーバーから受け取った項目定義・初期データをもとに、4つのタブを素の DOM で描画する。
import * as L from "./logic.js";
import * as DB from "./db.js";

const { config, seedCases } = JSON.parse(document.getElementById("bootstrap").textContent);
const GRADE_SYMBOL = { good: "○", vague: "△", miss: "×" };
const GRADE_TEXT = { good: "正解", vague: "あいまい", miss: "誤り" };
const GRADE_BUTTONS = [
  ["good", "言えた"],
  ["vague", "あいまい"],
  ["miss", "出なかった"],
];
const MARK_TEXT = { correct: "正解", missing: "不足", extra: "過剰" };

const state = {
  cases: null,
  progress: {},
  tab: "cloze",
  /** モードごとの出題中の申請例と、その問題の画面状態 */
  q: { cloze: null, attach: null, tax: null },
  lastId: { cloze: null, attach: null, tax: null },
  error: "",
  message: "",
};

const panel = document.getElementById("panel");
const tabs = [...document.querySelectorAll('[role="tab"]')];

// ---- DOM ヘルパー ----

function h(tag, attrs, ...children) {
  const el = document.createElement(tag);
  for (const [k, v] of Object.entries(attrs ?? {})) {
    if (v === null || v === undefined || v === false) continue;
    if (k.startsWith("on")) el.addEventListener(k.slice(2), v);
    else if (k === "class") el.className = v;
    else if (k in el && typeof v !== "string") el[k] = v;
    else el.setAttribute(k, v === true ? "" : v);
  }
  el.append(...children.flat(Infinity).filter((c) => c !== null && c !== undefined && c !== false));
  return el;
}

const yen = (n) => `${n.toLocaleString("ja-JP")}円`;
const multiline = (text) => h("span", { class: "multiline" }, text ?? "");
const labelsOf = (c) => Object.fromEntries(L.fieldsOf(config, c.category).map((f) => [f.key, f.label]));
const gradeBadge = (g) =>
  h("span", { class: `grade-badge grade-${g}` }, h("span", { "aria-hidden": "true" }, GRADE_SYMBOL[g]), ` ${GRADE_TEXT[g]}`);

// ---- 状態の変更 ----

function newQuestion(mode, c, round) {
  const base = { caseId: c.id, round };
  if (mode === "cloze") {
    // 出題時点で隠す項目を確定させる(採点で進捗が変わっても付箋は増減させない)
    return { ...base, hidden: L.hiddenFields(config, c, state.progress, Date.now()), revealed: new Set(), graded: {} };
  }
  if (mode === "attach") {
    const options = L.shuffle([...new Set([...config.pools.attach[c.category], ...c.attach])]);
    return { ...base, options, selected: new Set(), result: null };
  }
  const pool = (p, answer) => L.shuffle([...new Set([...p, answer])]);
  return L.isCommercialTax(c.tax)
    ? { ...base, ratePool: pool(config.pools.coTaxRate, c.tax.rate), rate: "", baseKind: "", base: "", amount: "", result: null }
    : {
        ...base,
        basePool: pool(config.pools.reTaxBase, c.tax.base),
        ratePool: pool(config.pools.reTaxRate, c.tax.rate),
        base: "",
        rate: "",
        amount: "",
        result: null,
      };
}

function advance(mode, forcedId) {
  const prev = state.q[mode];
  const c = L.pickCase(config, state.cases, mode, state.progress, Date.now(), {
    lastId: prev?.caseId ?? state.lastId[mode],
    forcedId,
  });
  state.q[mode] = c ? newQuestion(mode, c, (prev?.round ?? 0) + 1) : null;
  if (c) state.lastId[mode] = c.id;
}

function grade(caseId, fieldKey, g) {
  const key = L.progressKey(caseId, fieldKey);
  const next = L.applyGrade(config, state.progress[key], g, Date.now());
  state.progress = { ...state.progress, [key]: next };
  DB.saveProgress(key, next).catch((e) => {
    state.error = `保存に失敗しました:${e.message}`;
    render();
  });
}

function setTab(tab, { focusTab = false } = {}) {
  state.tab = tab;
  render();
  window.scrollTo(0, 0);
  if (focusTab) tabs.find((t) => t.dataset.tab === tab)?.focus();
}

// ---- 描画 ----

let focusSelector = null;

function render() {
  for (const t of tabs) {
    const selected = t.dataset.tab === state.tab;
    t.setAttribute("aria-selected", String(selected));
    t.tabIndex = selected ? 0 : -1;
  }
  panel.setAttribute("aria-labelledby", `tab-${state.tab}`);
  const children = [];
  if (state.error) children.push(h("p", { class: "error", role: "alert" }, state.error));
  if (!state.cases) {
    if (!state.error) children.push(h("p", { class: "hint" }, "読み込み中…"));
  } else if (state.tab === "weak") {
    children.push(renderWeak(), renderData());
  } else {
    const mode = state.tab;
    if (!state.q[mode]) advance(mode);
    const { due, fresh } = L.countPending(config, state.cases, mode, state.progress, Date.now());
    children.push(
      h("p", { class: "pending", "aria-live": "polite" }, "復習待ち ", h("strong", {}, String(due)), " 件",
        h("span", { class: "pending-sep" }, "/"), `未学習 ${fresh} 件`),
    );
    const q = state.q[mode];
    const c = q && state.cases.find((x) => x.id === q.caseId);
    if (!c) children.push(h("p", { class: "hint" }, "出題できる申請例がありません。"));
    else children.push(mode === "cloze" ? renderCloze(c, q) : mode === "attach" ? renderAttach(c, q) : renderTax(c, q));
  }
  panel.replaceChildren(...children);
  if (focusSelector) {
    panel.querySelector(focusSelector)?.focus();
    focusSelector = null;
  }
}

function caseHeader(c) {
  return [h("h2", { class: "case-title" }, c.title), h("p", { class: "scene" }, c.scene)];
}

function sheetRow(label, value, valueClass = "") {
  return h("div", { class: "form-row" }, h("dt", { class: "form-label" }, label), h("dd", { class: `form-value ${valueClass}` }, value));
}

function nextButton(mode) {
  return h(
    "div",
    { class: "next-row" },
    h("button", { type: "button", class: "primary next-btn", onclick: () => { advance(mode); render(); window.scrollTo(0, 0); } }, "次の申請例へ"),
  );
}

// 穴埋め
function renderCloze(c, q) {
  const rows = L.fieldsOf(config, c.category).map((f) => {
    const isHidden = q.hidden.includes(f.key);
    let value;
    if (f.mode !== "cloze") {
      value = h("span", { class: "form-elsewhere" }, "専用タブで出題");
    } else if (isHidden && !q.revealed.has(f.key)) {
      value = h(
        "button",
        {
          type: "button",
          class: "sticky",
          "aria-label": `${f.label}(隠れています。押すと答えを表示)`,
          onclick: () => {
            q.revealed.add(f.key);
            q.justRevealed = f.key;
            focusSelector = `[data-grade-for="${f.key}"] .grade-good`;
            render();
          },
        },
        "?",
      );
    } else {
      const graded = q.graded[f.key];
      value = [
        h("span", { class: q.justRevealed === f.key ? "answer reveal" : "answer" }, multiline(c.fields[f.key])),
        isHidden &&
          h(
            "div",
            { class: "grade-row", role: "group", "aria-label": `${f.label}の採点`, "data-grade-for": f.key },
            GRADE_BUTTONS.map(([g, label]) =>
              h(
                "button",
                {
                  type: "button",
                  class: `grade-btn grade-${g}`,
                  "aria-pressed": String(graded === g),
                  disabled: graded !== undefined && graded !== g,
                  onclick: () => {
                    if (q.graded[f.key]) return;
                    q.graded[f.key] = g;
                    q.justRevealed = null;
                    grade(c.id, f.key, g);
                    const nextHidden = q.hidden.find((k) => !q.revealed.has(k));
                    focusSelector = q.hidden.every((k) => q.graded[k])
                      ? ".next-btn"
                      : nextHidden
                        ? `.form-row[data-key="${nextHidden}"] .sticky`
                        : null;
                    render();
                  },
                },
                h("span", { "aria-hidden": "true" }, GRADE_SYMBOL[g]),
                ` ${label}`,
              ),
            ),
          ),
      ];
    }
    const row = sheetRow(f.label, value);
    row.dataset.key = f.key;
    return row;
  });
  return h(
    "section",
    { "aria-label": "穴埋め" },
    caseHeader(c),
    h("div", { class: "form-sheet" },
      h("div", { class: "form-title" }, c.category === "不動産" ? "登 記 申 請 書" : "株式会社変更登記申請書"),
      h("dl", { class: "form-grid" }, rows)),
    q.hidden.every((k) => q.graded[k]) && nextButton("cloze"),
  );
}

// 添付情報・書面
function renderAttach(c, q) {
  const heading = config.attachHeading[c.category];
  const labels = labelsOf(c);
  const locked = q.result !== null;
  return h(
    "section",
    { "aria-label": heading },
    caseHeader(c),
    h("div", { class: "form-sheet" },
      h("dl", { class: "form-grid" }, config.attachContext[c.category].map((k) => sheetRow(labels[k], multiline(c.fields[k]))))),
    h(
      "fieldset",
      { class: "choice-set" },
      h("legend", {}, `${heading}(当てはまるものをすべて選択)`),
      h(
        "ul",
        { class: "choices" },
        q.options.map((o) => {
          const mark = q.result?.marks[o] ?? "none";
          return h(
            "li",
            { class: `choice mark-${mark}` },
            h(
              "label",
              {},
              h("input", {
                type: "checkbox",
                checked: q.selected.has(o),
                disabled: locked,
                onchange: (e) => (e.target.checked ? q.selected.add(o) : q.selected.delete(o)),
              }),
              h("span", { class: "choice-text" }, o),
              MARK_TEXT[mark] && h("span", { class: "mark-tag" }, MARK_TEXT[mark]),
            ),
          );
        }),
      ),
    ),
    !locked
      ? h(
          "div",
          { class: "next-row" },
          h("button", {
            type: "button",
            class: "primary",
            onclick: () => {
              q.result = L.gradeAttach(q.options, [...q.selected], c.attach);
              grade(c.id, "attach", q.result.grade);
              focusSelector = ".next-btn";
              render();
            },
          }, "採点する"),
        )
      : h(
          "div",
          { class: "result", role: "status" },
          gradeBadge(q.result.grade),
          h("p", { class: "result-note" }, "判定:完全一致=○、過剰のみ=△、不足が1つでもあれば=×"),
          nextButton("attach"),
        ),
  );
}

// 登録免許税
function renderTax(c, q) {
  const tax = c.tax;
  const labels = labelsOf(c);
  const contextKey = c.category === "不動産" ? "purpose" : "jiyu";
  const commercial = L.isCommercialTax(tax);
  const locked = q.result !== null;
  const checks = q.result?.checks;

  const check = (ok, answer) =>
    checks && (ok ? h("span", { class: "check ok" }, "✓ 正解") : h("span", { class: "check ng" }, `✗ 正解は「${answer}」`));

  const select = (label, key, pool, answer) =>
    h(
      "label",
      { class: "tax-field" },
      h("span", { class: "tax-label" }, label),
      h(
        "select",
        { required: true, disabled: locked, onchange: (e) => (q[key] = e.target.value) },
        h("option", { value: "" }, "選択してください"),
        pool.map((o) => h("option", { value: o, selected: q[key] === o }, o)),
      ),
      check(checks?.[key], answer),
    );

  const amountInput = (label, key, hideLabel = false) =>
    h(
      "label",
      { class: "tax-field" },
      h("span", { class: hideLabel ? "visually-hidden" : "tax-label" }, label),
      h(
        "span",
        { class: "amount" },
        h("input", {
          type: "text",
          inputmode: "numeric",
          autocomplete: "off",
          required: true,
          disabled: locked,
          placeholder: "例 30000",
          value: q[key],
          oninput: (e) => (q[key] = e.target.value),
        }),
        h("span", { "aria-hidden": "true" }, "円"),
      ),
    );

  let fields;
  let formula;
  if (commercial) {
    const baseAmount = amountInput("課税標準金額", "base", true);
    baseAmount.hidden = q.baseKind !== "amount";
    const radio = (kind, text) =>
      h(
        "label",
        { class: "radio" },
        h("input", {
          type: "radio",
          name: "baseKind",
          required: true,
          checked: q.baseKind === kind,
          onchange: () => {
            q.baseKind = kind;
            baseAmount.hidden = kind !== "amount";
            baseAmount.querySelector("input").required = kind === "amount";
          },
        }),
        text,
      );
    baseAmount.querySelector("input").required = q.baseKind === "amount";
    fields = [
      select("税額の定め", "rate", q.ratePool, tax.rate),
      h("fieldset", { class: "tax-field base-set", disabled: locked },
        h("legend", { class: "tax-label" }, "課税標準金額"),
        radio("amount", "金額を記載"), baseAmount, radio("none", "定額のため記載なし")),
      check(checks?.base, tax.base === null ? "定額のため記載なし" : yen(tax.base)),
      amountInput("登録免許税の額", "amount"),
      check(checks?.amount, yen(tax.answer)),
    ];
    formula =
      tax.base === null
        ? `定額:${tax.rate} → ${yen(tax.answer)}`
        : `課税標準金額 ${yen(tax.base)} × ${tax.rate} = ${yen(tax.answer)}`;
  } else {
    fields = [
      select("課税標準", "base", q.basePool, tax.base),
      select("税率・税額の定め", "rate", q.ratePool, tax.rate),
      amountInput("登録免許税の額", "amount"),
      check(checks?.amount, yen(tax.answer)),
    ];
    formula = `${tax.example} × ${tax.rate} = ${yen(tax.answer)}`;
  }

  const submit = (e) => {
    e.preventDefault();
    if (locked) return;
    if (commercial) {
      const parsedBase = q.baseKind === "amount" ? L.parseAmount(q.base) : null;
      q.result = L.gradeCommercialTax(tax, {
        rate: q.rate,
        base: parsedBase,
        baseBlank: q.baseKind !== "none" && parsedBase === null,
        amount: L.parseAmount(q.amount),
      });
    } else {
      q.result = L.gradeRealEstateTax(tax, { base: q.base, rate: q.rate, amount: L.parseAmount(q.amount) });
    }
    grade(c.id, "tax", q.result.grade);
    focusSelector = ".next-btn";
    render();
  };

  return h(
    "section",
    { "aria-label": "登録免許税" },
    caseHeader(c),
    h("div", { class: "form-sheet" },
      h("dl", { class: "form-grid" },
        sheetRow(labels[contextKey], multiline(c.fields[contextKey])),
        sheetRow("条件", tax.example, "condition"))),
    h(
      "form",
      { class: "tax-form", onsubmit: submit },
      fields,
      !locked
        ? h("div", { class: "next-row" }, h("button", { type: "submit", class: "primary" }, "採点する"))
        : h(
            "div",
            { class: "result", role: "status" },
            gradeBadge(q.result.grade),
            h("p", { class: "formula" }, formula),
            tax.note && h("p", { class: "result-note" }, `補足:${tax.note}`),
            nextButton("tax"),
          ),
    ),
  );
}

// 弱点表
function levelClass(p) {
  if (!p) return "lv-none";
  if (p.level === 0) return "lv-0";
  if (p.level <= 2) return "lv-low";
  if (p.level <= 4) return "lv-mid";
  return "lv-max";
}

function renderWeak() {
  const now = Date.now();
  const blocks = Object.keys(config.fieldDefs).map((cat) => {
    const rows = state.cases.filter((c) => c.category === cat);
    if (rows.length === 0) return null;
    const cols = L.fieldsOf(config, cat);
    return h(
      "div",
      { class: "weak-block" },
      h("h2", { class: "weak-heading" }, cat),
      h(
        "div",
        { class: "table-scroll", tabindex: "0", role: "region", "aria-label": `${cat}の弱点表` },
        h(
          "table",
          { class: "weak-table" },
          h("thead", {}, h("tr", {}, h("th", { scope: "col" }, "申請例"), cols.map((f) => h("th", { scope: "col" }, f.label)))),
          h(
            "tbody",
            {},
            rows.map((c) =>
              h(
                "tr",
                {},
                h("th", { scope: "row" }, c.title),
                cols.map((f) => {
                  const p = state.progress[L.progressKey(c.id, f.key)];
                  const due = L.isDue(p, now);
                  const st = p ? `定着度${p.level}${due ? "、復習待ち" : ""}` : "未学習";
                  return h(
                    "td",
                    {},
                    h(
                      "button",
                      {
                        type: "button",
                        class: `cell ${levelClass(p)}`,
                        title: st,
                        "aria-label": `${c.title} ${f.label}:${st}。押すと出題`,
                        onclick: () => {
                          advance(f.mode, c.id);
                          setTab(f.mode);
                        },
                      },
                      h("span", { "aria-hidden": "true" }, p ? String(p.level) : "–", due && h("span", { class: "due-dot" }, "●")),
                    ),
                  );
                }),
              ),
            ),
          ),
        ),
      ),
    );
  });
  const legend = [
    ["lv-none", "–", "未学習"],
    ["lv-0", "0", "定着度0"],
    ["lv-low", "1", "1〜2"],
    ["lv-mid", "3", "3〜4"],
    ["lv-max", "5", "5"],
  ];
  return h(
    "section",
    { "aria-label": "弱点表" },
    blocks,
    h(
      "ul",
      { class: "legend", "aria-label": "凡例" },
      legend.map(([cls, sym, text]) => h("li", {}, h("span", { class: `cell ${cls}` }, sym), text)),
      h("li", {}, h("span", { class: "due-dot" }, "●"), "復習待ち"),
    ),
  );
}

// データ管理
function renderData() {
  const fileInput = h("input", {
    type: "file",
    accept: "application/json,.json",
    hidden: true,
    onchange: async (e) => {
      const f = e.target.files?.[0];
      e.target.value = "";
      if (!f) return;
      try {
        const b = L.parseBackup(await f.text());
        await DB.restoreBackup(b);
        await reload();
        state.message = `読み込みました(申請例 ${b.cases.length} 件)。`;
      } catch (err) {
        state.message = `読み込めませんでした:${err.message}`;
      }
      render();
    },
  });
  const dialog = h(
    "dialog",
    { class: "confirm", "aria-labelledby": "reset-title" },
    h(
      "form",
      { method: "dialog" },
      h("h3", { id: "reset-title" }, "進捗をすべて消去しますか?"),
      h("p", {}, "申請例は残り、すべての項目が未学習に戻ります。元に戻せません。"),
      h(
        "div",
        { class: "data-actions" },
        h("button", { value: "cancel", autofocus: true }, "やめる"),
        h("button", { value: "ok", class: "danger" }, "消去する"),
      ),
    ),
  );
  dialog.addEventListener("close", async () => {
    if (dialog.returnValue !== "ok") return;
    await DB.resetProgress();
    state.progress = {};
    state.q = { cloze: null, attach: null, tax: null };
    state.message = "進捗を消去しました。";
    render();
  });
  const exportJson = () => {
    const b = L.makeBackup(state.cases, state.progress);
    const url = URL.createObjectURL(new Blob([JSON.stringify(b, null, 2)], { type: "application/json" }));
    h("a", { href: url, download: `touki-anki-${b.exportedAt.slice(0, 10)}.json` }).click();
    URL.revokeObjectURL(url);
    state.message = "書き出しました。";
    render();
  };
  return h(
    "section",
    { class: "data-panel", "aria-labelledby": "data-heading" },
    h("h2", { id: "data-heading", class: "weak-heading" }, "データ管理"),
    h("p", { class: "hint" }, "進捗と申請例はこの端末内に保存されます。機種変更の前に書き出してください。"),
    h(
      "div",
      { class: "data-actions" },
      h("button", { type: "button", onclick: exportJson }, "JSONに書き出す"),
      h("button", { type: "button", onclick: () => fileInput.click() }, "JSONを読み込む"),
      fileInput,
      h("button", { type: "button", class: "danger", onclick: () => dialog.showModal() }, "進捗をリセット"),
    ),
    state.message && h("p", { class: "hint", role: "status" }, state.message),
    dialog,
  );
}

// ---- 起動 ----

async function reload() {
  const { cases, progress } = await DB.loadAll(seedCases);
  state.cases = cases;
  state.progress = progress;
  state.q = { cloze: null, attach: null, tax: null };
}

tabs.forEach((t, i) => {
  t.addEventListener("click", () => setTab(t.dataset.tab));
  t.addEventListener("keydown", (e) => {
    const d = e.key === "ArrowRight" ? 1 : e.key === "ArrowLeft" ? -1 : 0;
    if (!d) return;
    e.preventDefault();
    setTab(tabs[(i + d + tabs.length) % tabs.length].dataset.tab, { focusTab: true });
  });
});

render();
reload()
  .catch((e) => (state.error = `データを読み込めませんでした:${e.message}`))
  .finally(render);

if ("serviceWorker" in navigator) {
  navigator.serviceWorker.register("sw.php").catch(() => {});
}

