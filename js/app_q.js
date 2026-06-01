  const STORAGE_KEY = 'steps::' + PAGE_ID;
  const OLD_STORAGE_KEY = 'steps::' + location.pathname;
  function migrateOldStepsIfNeeded(){
    try {
      const current = localStorage.getItem(STORAGE_KEY);
      const old = localStorage.getItem(OLD_STORAGE_KEY);
      if (!current && old) {
        localStorage.setItem(STORAGE_KEY, old);
      }
    } catch(e) {}
  }
  function loadSteps(){ try { return JSON.parse(localStorage.getItem(STORAGE_KEY) || '{}'); } catch(e){ return {}; } }
  function saveSteps(obj){ localStorage.setItem(STORAGE_KEY, JSON.stringify(obj)); }
  function getAllQuestionIds(){ return Array.from(document.querySelectorAll('section.q[id]')).map(sec => sec.id); }
  function clampLevel(v){ v = Number(v || 0); if (v < 0) return 0; if (v > 2) return 2; return v; }
    function renderStep(btn, level, cardEl){
      btn.dataset.level = String(level);
      btn.textContent = (level === 0) ? '' : (level === 1 ? '済' : '再');
      btn.setAttribute('aria-pressed', level > 0 ? 'true' : 'false');
      btn.setAttribute('aria-label', `チェック段階 ${level}`);
      // ★ 起動時は btn.closest が効かないことがあるので card を優先
      const card = cardEl || btn.closest('.q');
      if (card){
        card.classList.remove('lv1');
        if (level === 1) card.classList.add('lv1');
      }
    }
  // ===== font-size (buttons only) =====
  const FONT_KEY = 'baseFontPx::' + location.pathname;
  const FONT_MIN = 12, FONT_MAX = 24, FONT_STEP = 1, FONT_DEFAULT = 16;
  function clampFont(n){
    n = Number(n);
    if (!Number.isFinite(n)) n = FONT_DEFAULT;
    return Math.max(FONT_MIN, Math.min(FONT_MAX, n));
  }
  function getCurrentFont(){
    return parseInt(
      getComputedStyle(document.documentElement)
        .getPropertyValue('--base-font'),
      10
    ) || FONT_DEFAULT;
  }
  function applyFont(px, save){
    px = clampFont(px);
    document.documentElement.style.setProperty('--base-font', px + 'px');
    if (save){
      try { localStorage.setItem(FONT_KEY, String(px)); } catch(e){}
    }
  }
  function loadFont(){
    let saved = null;
    try { saved = localStorage.getItem(FONT_KEY); } catch(e){}
    const px = saved ? parseInt(saved, 10) : FONT_DEFAULT;
    applyFont(px, false);
  }
  function ensureHeaderTools(){
    const wrap = document.querySelector('header .wrap');
    if (!wrap) return;
    // 既に2段構造なら何もしない
    if (wrap.querySelector('.hrow1') && wrap.querySelector('.hrow2')) return;
    // 既存要素を退避（h1 と a）
    const h1 = wrap.querySelector('h1');
    const a  = wrap.querySelector('a');
    // 中身を組み立て直す
    wrap.innerHTML = '';
    // 1段目：タイトル左／テキストへ右
    const row1 = document.createElement('div');
    row1.className = 'hrow1';
    if (h1) row1.appendChild(h1);
    if (a)  row1.appendChild(a);
    wrap.appendChild(row1);
    // 2段目：文字サイズボタン＋全操作
    const row2 = document.createElement('div');
    row2.className = 'hrow2';
    // 文字サイズ（見た目だけ。実際にフォントサイズ変更するなら後でJS追加）
    const size = document.createElement('div');
    size.className = 'hsize';
    const bDec = document.createElement('button');
    bDec.type = 'button';
    bDec.className = 'btn';
    bDec.id = 'btn-font-dec';
    bDec.textContent = '-';
    const bStd = document.createElement('button');
    bStd.type = 'button';
    bStd.className = 'btn';
    bStd.id = 'btn-font-std';
    bStd.textContent = 'Aa';
    const bInc = document.createElement('button');
    bInc.type = 'button';
    bInc.className = 'btn';
    bInc.id = 'btn-font-inc';
    bInc.textContent = '+';
    size.appendChild(bDec);
    size.appendChild(bStd);
    size.appendChild(bInc);
    row2.appendChild(size);
    // 全操作
    const bClear = document.createElement('button');
    bClear.type = 'button';
    bClear.className = 'btn';
    bClear.id = 'btn-clear';
    bClear.textContent = 'reset';
    const bAll1 = document.createElement('button');
    bAll1.type = 'button';
    bAll1.className = 'btn';
    bAll1.id = 'btn-all1';
    bAll1.textContent = '全済';
    const bAll2 = document.createElement('button');
    bAll2.type = 'button';
    bAll2.className = 'btn';
    bAll2.id = 'btn-all2';
    bAll2.textContent = '全再';
    row2.appendChild(bClear);
    row2.appendChild(bAll1);
    row2.appendChild(bAll2);
    wrap.appendChild(row2);
  }
  function ensureFontTools(tools){
    if (document.getElementById('fs-up')) return;
    const down = document.createElement('button');
    down.type = 'button';
    down.className = 'btn small';
    down.id = 'fs-down';
    down.textContent = '-';
    down.addEventListener('click', () =>
      applyFont(getCurrentFont() - FONT_STEP, true)
    );
    const reset = document.createElement('button');
    reset.type = 'button';
    reset.className = 'btn small';
    reset.id = 'fs-reset';
    reset.textContent = 'Aa';
    reset.addEventListener('click', () =>
      applyFont(FONT_DEFAULT, true)
    );
    const up = document.createElement('button');
    up.type = 'button';
    up.className = 'btn small';
    up.id = 'fs-up';
    up.textContent = '+';
    up.addEventListener('click', () =>
      applyFont(getCurrentFont() + FONT_STEP, true)
    );
    tools.prepend(up);
    tools.prepend(reset);
    tools.prepend(down);
  }
  function updateProgress(){
    const all = getAllQuestionIds();
    const saved = loadSteps();
    let c1 = 0, c2 = 0;
    all.forEach(id => {
      const lv = clampLevel(saved[id]);
      if (lv >= 1) c1++;
      if (lv >= 2) c2++;
    });
    const prog = document.getElementById('prog');
    if (prog) prog.textContent = `1以上:${c1}/${all.length} ・ 2:${c2}/${all.length}`;
  }
  function ensureStepButtons(){
    const saved = loadSteps();
    document.querySelectorAll('section.q[id]').forEach(sec => {
      const qid = sec.id;
      const head = sec.querySelector('.qhead');
      const left = sec.querySelector('.left');
      if (!head || !left) return;
      // 既に生成済みならスキップ
      if (head.querySelector('button.qstep')) return;
      // ===== チェックUI作成 =====
      const wrap = document.createElement('div');
      wrap.className = 'qcheck';
      const btn = document.createElement('button');
      btn.type = 'button';
      btn.className = 'qstep';
      btn.setAttribute('data-qid', qid);
      wrap.appendChild(btn);
      // ===== 挿入（← 先にDOMへ入れるのが重要） =====
      left.prepend(wrap);
      // ===== 保存済みレベル取得 =====
      const level = clampLevel(saved[qid]);
      // ===== 描画（card要素を渡す） =====
      renderStep(btn, level, sec);
    });
    updateProgress();
  }
  function setAllLevels(level){
    const all = getAllQuestionIds();
    const saved = loadSteps();
    all.forEach(id => { saved[id] = clampLevel(level); });
    saveSteps(saved);
    document.querySelectorAll('button.qstep').forEach(btn => {
      renderStep(btn, clampLevel(level));
    });
    updateProgress();
  }
  function cycleLevel(current){ return (current + 1) % 3; }
  document.addEventListener('click', (e) => {
    if (e.target.closest('#btn-clear')) { setAllLevels(0); return; }
    if (e.target.closest('#btn-all1')) { setAllLevels(1); return; }
    if (e.target.closest('#btn-all2')) { setAllLevels(2); return; }
    const stepBtn = e.target.closest('button.qstep');
    if (stepBtn){
      const qid = stepBtn.getAttribute('data-qid');
      const saved = loadSteps();
      const cur = clampLevel(saved[qid]);
      const next = cycleLevel(cur);
      saved[qid] = next;
      saveSteps(saved);
      renderStep(stepBtn, next);
      updateProgress();
      return;
    }
    const openBtn = e.target.closest('[data-open]');
    if (openBtn) { const dlg = document.getElementById(openBtn.getAttribute('data-open')); if (dlg) dlg.showModal(); return; }
    const closeBtn = e.target.closest('[data-close]');
    if (closeBtn) {
    const dlg = closeBtn.closest('dialog');
    if (dlg) dlg.close(); return; } });
  document.querySelectorAll('dialog').forEach(d =>
    d.addEventListener('close', () => {
      const a = document.activeElement;
      if (a && a.blur) a.blur();
    })
  );
    function bindFontButtons(){
      const dec = document.getElementById('btn-font-dec');
      const std = document.getElementById('btn-font-std');
      const inc = document.getElementById('btn-font-inc');
      if (dec) {
        dec.addEventListener('click', () => {
          applyFont(getCurrentFont() - FONT_STEP, true);
        });
      }
      if (std) {
        std.addEventListener('click', () => {
          applyFont(FONT_DEFAULT, true);
        });
      }
      if (inc) {
        inc.addEventListener('click', () => {
          applyFont(getCurrentFont() + FONT_STEP, true);
        });
      }
    }
    migrateOldStepsIfNeeded();
    loadFont();
    bindFontButtons();
    ensureHeaderTools();
    ensureStepButtons();
    updateProgress();
