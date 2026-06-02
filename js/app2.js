(function(){
  var links = document.querySelectorAll('a.toplink');
  for (var i=0;i<links.length;i++){
    links[i].addEventListener('click', function(e){
      e.preventDefault();
      window.scrollTo({ top: 0, left: 0, behavior: 'auto' });
      location.hash = '#top';
    }, {passive:false});
  }
})();
(function(){
  var KEY = 'baseFontPx';
  var MIN = 12, MAX = 24, STEP = 1;
  var root = document.documentElement;
  var btnDown = document.getElementById('fsDown');
  var btnUp = document.getElementById('fsUp');
  var btnReset = document.getElementById('fsReset');
  var range = document.getElementById('fsRange');
  var label = document.getElementById('fsLabel');
  function clamp(n){ return Math.max(MIN, Math.min(MAX, n)); }
  function getCurrent(){
    var v = getComputedStyle(root).getPropertyValue('--base-font').trim();
    var n = parseInt(v, 10);
    return Number.isFinite(n) ? n : 16;
  }
  function apply(px, save){
    px = clamp(px);
    root.style.setProperty('--base-font', px + 'px');
    if (range) range.value = String(px);
    if (label) label.textContent = px + 'px';
    if (save) {
      try { localStorage.setItem(KEY, String(px)); } catch(e){}
    }
  }
  (function init(){
    var saved = null;
    try { saved = localStorage.getItem(KEY); } catch(e){}
    var px = saved ? parseInt(saved, 10) : getCurrent();
    if (!Number.isFinite(px)) px = 16;
    apply(px, false);
  })();
  if (btnDown) btnDown.addEventListener('click', function(){ apply(getCurrent() - STEP, true); });
  if (btnUp) btnUp.addEventListener('click', function(){ apply(getCurrent() + STEP, true); });
  if (btnReset) btnReset.addEventListener('click', function(){ apply(16, true); });
  if (range) {
    range.min = String(MIN);
    range.max = String(MAX);
    range.step = String(STEP);
    range.addEventListener('input', function(){
      apply(parseInt(range.value, 10), true);
    });
  }
})();
(function(){
  var dialog = document.getElementById('linkDialog');
  var list = document.getElementById('linkDialogList');
  var closeBtn = document.getElementById('linkDialogClose');
  var backdrop = document.getElementById('linkDialogBackdrop');
  function openDialog(links){
    list.innerHTML = '';
    links.forEach(function(item){
      var li = document.createElement('li');
      if(item.url && item.url.trim() !== ''){
        // ===== 通常リンク =====
        var a = document.createElement('a');
        a.href = item.url;
        a.textContent = item.text;
        a.addEventListener('click', function(){
          closeDialog();   // クリックで自動閉鎖
        });
        li.appendChild(a);
      } else {
        // ===== リンクなし（テキストのみ）=====
        var span = document.createElement('span');
        span.textContent = item.text;
        span.className = 'dialog-text-only';
        li.appendChild(span);
      }
      list.appendChild(li);
    });
    dialog.classList.add('is-open');
  }
  function closeDialog(){
    dialog.classList.remove('is-open');
  }
  document.addEventListener('click', function(e){
    var btn = e.target.closest('.popup-btn');
    if(btn){
      try{
        var links = JSON.parse(btn.getAttribute('data-links'));
        openDialog(links);
      }catch(err){}
    }
  });
  if(closeBtn) closeBtn.addEventListener('click', closeDialog);
  if(backdrop) backdrop.addEventListener('click', closeDialog);
})();
