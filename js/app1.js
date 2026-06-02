(function(){
  var btn = document.getElementById('tocToggle');
  if (!btn) return;
  // 既存(PC用)の「ヘッダ内目次」切替：従来どおりlocalStorageで保持
  var KEY_HIDE = 'tocHidden';
  // モーダル要素
  var modal = document.getElementById('tocModal');
  var modalBody = document.getElementById('tocModalBody');
  var closeBtn = document.getElementById('tocModalClose');
  var backdrop = document.getElementById('tocModalBackdrop');
  // 元の目次(ヘッダ内)をコピーしてモーダルに入れる（初回だけ）
  function ensureModalContent(){
    if (!modalBody || modalBody._filled) return;
    var toc = document.getElementById('toc');
    if (!toc) return;
    // tocの中身を複製（id衝突回避のため、モーダル内ではidを消す）
    var clone = toc.cloneNode(true);
    clone.removeAttribute('id');
    var idNodes = clone.querySelectorAll('[id]');
    for (var i=0;i<idNodes.length;i++) idNodes[i].removeAttribute('id');
    modalBody.appendChild(clone);
    modalBody._filled = true;
  }
  function isMobile(){
    return window.matchMedia && window.matchMedia('(max-width: 700px)').matches;
  }
  // ===== Modal open/close =====
  function openModal(){
    ensureModalContent();
    modal.classList.add('is-open');
    modal.setAttribute('aria-hidden','false');
    document.body.classList.add('modal-open');
    btn.textContent = '目次を閉じる';
    // フォーカス
    if (closeBtn) closeBtn.focus();
    // Escで閉じる
    document.addEventListener('keydown', onKeyDown);
  }
  function closeModal(){
    modal.classList.remove('is-open');
    modal.setAttribute('aria-hidden','true');
    document.body.classList.remove('modal-open');
    btn.textContent = '目次を表示';
    document.removeEventListener('keydown', onKeyDown);
    btn.focus();
  }
  function onKeyDown(e){
    if (e.key === 'Escape') closeModal();
  }
  function modalOpenNow(){
    return modal && modal.classList.contains('is-open');
  }
  // モーダル内のリンクを押したら「閉じて本文へ」
  function setupModalLinkClose(){
    if (!modalBody) return;
    modalBody.addEventListener('click', function(e){
      var a = e.target.closest && e.target.closest('a');
      if (!a) return;
      // ページ内アンカー(#...)のみ対象
      var href = a.getAttribute('href') || '';
      if (href.charAt(0) === '#'){
        closeModal();
        // クリック後のジャンプはブラウザに任せる（閉じてから実行される）
      }
    });
  }
  // ===== TOC link auto-hide =====
  function hideTOC_PC(){
    // PC用：ヘッダ内TOCを非表示へ戻す
    document.body.classList.add('toc-hidden');
    try{ localStorage.setItem(KEY_HIDE, '1'); }catch(e){}
    syncPC();
  }

  function closeTOC_AfterJump(){
    // スマホ：モーダルなら閉じる
    if (isMobile()){
      if (modalOpenNow()) closeModal();
      return;
    }
    // PC：非表示へ
    hideTOC_PC();
  }

  // PCヘッダ内TOCのリンクをクリックしたら自動で閉じる（ページ内アンカーのみ）
  var tocRoot = document.getElementById('toc');
  if (tocRoot){
    tocRoot.addEventListener('click', function(e){
      var a = e.target.closest && e.target.closest('a');
      if (!a) return;
      var href = a.getAttribute('href') || '';
      if (href.charAt(0) === '#'){
        // ジャンプ自体はブラウザに任せる（閉じてから飛ばす）
        closeTOC_AfterJump();
      }
    });
  }

  // モーダル内（スマホ）のリンク押下でも「確実に」閉じる（既存処理の保険）
  if (modalBody){
    modalBody.addEventListener('click', function(e){
      var a = e.target.closest && e.target.closest('a');
      if (!a) return;
      var href = a.getAttribute('href') || '';
      if (href.charAt(0) === '#'){
        // 既存の closeModal() があっても二重で問題なし
        closeTOC_AfterJump();
      }
    });
  }
  setupModalLinkClose();
  // 背景クリックでも閉じる
  if (backdrop) backdrop.addEventListener('click', closeModal);
  if (closeBtn) closeBtn.addEventListener('click', closeModal);
  // ===== Button behavior =====
  function syncPC(){
    var hidden = document.body.classList.contains('toc-hidden');
    btn.textContent = hidden ? '目次を表示' : '目次を非表示';
  }
  btn.addEventListener('click', function(){
    if (isMobile()){
      // スマホ：モーダルの開閉
      if (modalOpenNow()) closeModal();
      else openModal();
      return;
    }
    // PC：従来どおりヘッダ内目次の表示/非表示
    var h = document.body.classList.toggle('toc-hidden');
    try{ localStorage.setItem(KEY_HIDE, h ? '1':'0'); }catch(e){}
    syncPC();
  });
  // 初期表示
  if (!isMobile()) syncPC();
  else btn.textContent = '目次を表示';
  // 画面幅が変わった時に整合
  window.addEventListener('resize', function(){
    if (isMobile()){
      // スマホに入ったらPCの文言を「表示」に寄せる
      if (!modalOpenNow()) btn.textContent = '目次を表示';
    }else{
      // PCに戻ったらモーダルは閉じる
      if (modalOpenNow()) closeModal();
      syncPC();
    }
  });
})();
