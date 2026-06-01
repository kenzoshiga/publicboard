<?php require_once 'auth_check.php'; ?>
<!doctype html>
<html lang="ja">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>民法 Unit23</title>
  <link rel="stylesheet" href="css/style.css">
</head>
<body>
<script>(function(){try{var v=localStorage.getItem('tocHidden');if(v==='1'){document.body.classList.add('toc-hidden');}}catch(e){}})();</script>
<a id="top"></a>
<header>
  <div class="wrap hrow1">
    <h1>民法 Unit23</h1>
    <div class="hnav">
      <a href="pu_index.php">トップへ</a>
      <a href="pu26min22.php">前へ</a>
      <a href="pu26min24.php">次へ</a>
      <a href="pu26min23q.php">肢別へ</a>
    </div>
  </div>
  <div class="wrap">
    <div class="toc-wrap">
      <div class="toc" id="toc">
        <div class="toc-title"><strong>目次</strong>　<a href="#content">本文へ↓</a></div>
        <ul>
<li><a href="#A03">第３編　担保物権</a>
  <ul>
    <li><a href="#A03-01">第１章　担保物権総論</a>
      <ul>

        <li><a href="#A03-01-00-0-01">１　意義</a></li>

        <li><a href="#A03-01-00-0-02">２　種類</a></li>

        <li><a href="#A03-01-00-0-03">３　性質－担保物権の一般的性質（通有性）</a></li>

        <li><a href="#A03-01-00-0-04">４　効力</a></li>

        <li><a href="#A03-01-00-0-05">５　消滅</a></li>
      </ul>
    </li>
    <li><a href="#A03-02">第２章　抵当権</a>
      <ul>
        <li><a href="#A03-02-01">第１節　意義</a>
          <ul>
            <li><a href="#A03-02-01-0-01">１　意義</a></li>
            <li><a href="#A03-02-01-0-02">２　法的性質（通有性）</a></li>
          </ul>
        </li>
        <li><a href="#A03-02-02">第２節　設定</a>
          <ul>
            <li><a href="#A03-02-02-0-01">１　方式</a></li>
            <li><a href="#A03-02-02-0-02">２　当事者</a></li>
            <li><a href="#A03-02-02-0-03">３　目的物</a></li>
            <li><a href="#A03-02-02-0-04">４　被担保債権</a></li>
            <li><a href="#A03-02-02-0-05">５　公示方法</a></li>
          </ul>
        </li>
        <li><a href="#A03-02-03">第３節　抵当権の効力</a>
          <ul>
            <li><a href="#A03-02-03-1">Ⅰ　効力が及ぶ範囲</a>
              <ul>
            <li><a href="#A03-02-03-1-01">１　優先弁済的効力</a></li>
            <li><a href="#A03-02-03-1-02">２　被担保債権の範囲</a></li>
            <li><a href="#A03-02-03-1-03">３　抵当権の効力が及ぶ目的物の範囲</a></li>
            </ul>
          </li>
          </ul>
        </li>
      </ul>
    </li>
  </ul>
</li>

        </ul>
      </div>
      <div class="ctrl-wrap">
        <button type="button" class="toc-toggle" id="tocToggle">目次を非表示</button>
        <button type="button" class="btn-ctrl" id="fsDown" title="文字を小さく">-</button>
        <button type="button" class="btn-ctrl" id="fsReset" title="標準に戻す">Aa</button>
        <button type="button" class="btn-ctrl" id="fsUp" title="文字を大きく">+</button>
      </div>
    </div>
  </div>
</header>
<!-- TOC Modal (mobile) -->
<div class="toc-modal" id="tocModal" aria-hidden="true">
  <div class="toc-modal__backdrop" id="tocModalBackdrop"></div>
  <div class="toc-modal__panel" role="dialog" aria-modal="true" aria-labelledby="tocModalTitle">
    <div class="toc-modal__head">
      <div class="toc-modal__title" id="tocModalTitle">目次</div>
      <button type="button" class="toc-modal__close" id="tocModalClose">閉じる</button>
    </div>
    <div class="toc-modal__body" id="tocModalBody">
      <!-- JSで #toc の中身を複製 -->
    </div>
  </div>
</div>
<script src="js/app1.js?v=20260518-01"></script>
<main id="content">
<section class="sec-title" id="A03">
  <h2>第３編　担保物権</h2>
  <div class="p-card chap-card">
    <h2 id="A03-01">第１章　担保物権総論</h2>
    <div class="blk outer">
      <div class="outer-title" id="A03-01-00-0-01">１　意義</div>
      <p>担保物権：目的物を債権の担保に供することを目的とする物権</p>
      <p>担保制度には、物的担保と人的担保の２種がある。</p>
      <p>人的担保：債権を人によって担保するもので、債務者以外の第三者に債務を負わせ、その第三者からも弁済を受けられるようにする方法</p>
      <p>　ex. 保証債務、連帯債務</p>
      <p>物的担保：債権を物・権利により担保する方法で、債務者又は第三者の財産の上に物権を成立させ、債務の弁済がないときは、その財産から優先的に弁済を得るようにしておく制度</p>
      <p>　ex. 抵当権、質権</p>
      <p>一般に、人的担保は、変動しやすい人的信用に依存するものであるので、弁済が確実とは限らないのに対し、物的担保は確実性に富む物的信用によるものであり、担保としての確実性が高いといわれる。</p>
    </div>
    <div class="blk outer">
      <div class="outer-title" id="A03-01-00-0-02">２　種類</div>
      <div class="blk inner">
        <div class="p-card">
          <p class="h6 ind0">1.　担保物権の種類</p>
        <div class="p-card">
          <p class="h6 ind1">(1) 民法の定める担保物権</p>
        <div class="p-card">
          <p class="h6 ind2 nobold">(a) 留置権</p>
          <p class="p6 ind3">：他人の物の占有者が、その物に関して生じた債権を有するときに、その債権の弁済を受けるまで、その物を留置できる権利（295条）</p>
        </div>
        <div class="p-card">
          <p class="h6 ind2 nobold">(b) 先取特権</p>
          <p class="p6 ind3">：法律の定める一定の債権を有する者が、債務者の一般又は特定の財産について、他の債権者に先立って自己の債権の弁済を受ける権利（303条）</p>
        </div>
        <div class="p-card">
          <p class="h6 ind2 nobold">(c) 質権</p>
          <p class="p6 ind3">：債権の担保として、債務者又は第三者から受け取った物を占有し、かつ、その物について他の債権者に先立って自己の債権の弁済を受ける権利（342条）</p>
        </div>
        <div class="p-card">
          <p class="h6 ind2 nobold">(d) 抵当権</p>
          <p class="p6 ind3">：債務者又は第三者が占有を移さないで、債権の担保に供した不動産（地上権、永小作権を含む）について、他の債権者に先立って自己の債権の弁済を受ける権利（369条）</p>
        </div>
        </div>
        <div class="p-card">
          <p class="h6 ind1">(2) 特別法上の担保物権</p>
        <div class="p-card">
          <p class="h6 ind2 nobold">(a) 仮登記担保</p>
          <p class="p6 ind3">金銭債権を担保するため、債務者に債務の不履行があるときは、債権者に、債務者又は第三者に属する所有権その他の権利の移転等をすることを目的としてされた代物弁済の予約、停止条件付代物弁済契約その他の契約で、その契約による権利について、仮登記又は仮登録のできるものをいう（仮登記担保法１条）。</p>
        </div>
        <div class="p-card">
          <p class="h6 ind2 nobold">(b) 商事留置権（商法31条、同法521条、同法557条）</p>
        </div>
        <div class="p-card">
          <p class="h6 ind2 nobold">(c) 特別法の認める抵当権（工場抵当法）等</p>
        </div>
        </div>
        <div class="p-card">
          <p class="h6 ind1">(3) 非典型担保</p>
        <div class="p-card">
          <p class="h6 ind2 nobold">(a) 譲渡担保</p>
          <p class="p6 ind3">融資時に、担保に供する権利（特に所有権）を、債務者が債権者に移転し、債務弁済後に、その権利が債務者に返還されるという形式をとる担保方法である。</p>
        </div>
        <div class="p-card">
          <p class="h6 ind2 nobold">(b) 所有権留保</p>
          <p class="p6 ind3">商品の売買代金完済前に、目的物の占有を売主より買主に移転する売買（主に割賦販売）において、代金債権担保のために、目的物の所有権を売主が留保するという担保方法である。</p>
        </div>
        <div class="p-card">
          <p class="h6 ind2 nobold">(c) 買戻し（579条）</p>
          <p class="p6 ind3">買戻しとは、売買契約と同時に将来目的物を買い戻す権利を留保する場合をいう。目的物の代金相当額の融資を受けるものであり、経済的には不動産の担保として機能する。</p>
        </div>
        <div class="p-card">
          <p class="h6 ind2 nobold">(d) 再売買の予約</p>
          <p class="p6 ind3">売買契約にあたって、売主が予約完結権をもつ再売買の一方の予約をいう。これも担保として機能する。</p>
        </div>
        </div>
        </div>
        <div class="p-card">
          <p class="h6 ind0">2.　担保物権の分類―法定担保物権と約定担保物権</p>
        <div class="p-card">
          <p class="h6 ind1">(1) 法定担保物権－留置権、先取特権</p>
          <p class="p6 ind2">特殊の原因から生じた債権について、法律上当然に認められる担保物権をいう。</p>
        </div>
        <div class="p-card">
          <p class="h6 ind1">(2) 約定担保物権－質権、抵当権</p>
          <p class="p6 ind2">当事者間の契約によって成立する担保物権をいう。</p>
        </div>
        </div>
      </div>
    </div>
    <div class="blk outer">
      <div class="outer-title" id="A03-01-00-0-03">３　性質－担保物権の一般的性質（通有性）</div>
      <div class="blk inner">
        <div class="p-card" id="min23-q1">
          <p class="h6 ind0">1.　付従性</p>
          <p class="p6 ind1">：担保物権が被担保債権に付従して存在する態様</p>
          <p class="p6 ind1">債権のないところに担保物権は成立しない。</p>
          <p class="p6 ind1">もっとも、元本確定前の根抵当権の場合には、付従性はない（398条の２第１項）。</p>
        </div>
        <div class="p-card">
          <p class="h6 ind0">2.　随伴性</p>
          <p class="p6 ind1">被担保債権が譲渡・質入されたときには、担保物権も、これに伴い移転し、又は質権に服する。</p>
          <p class="p6 ind1">もっとも、元本確定前の根抵当権の場合には、随伴性はない（398条の２第１項）。</p>
        </div>
        <div class="p-card">
          <p class="h6 ind0">3.　不可分性</p>
          <p class="p6 ind1">被担保債権の全部の弁済があるまで、目的物の全部の上にその効力が及ぶ。</p>
          <p class="p6 ind1">従って、担保権者は、債権の一部につき弁済を受けても、全部の弁済を受けるまでは目的物の全部を留置したり、全部を差し押さえて競売したりすることができる（296条、305条、350条、372条）。</p>
        </div>
        <div class="p-card">
          <p class="h6 ind0">4.　物上代位性</p>
          <p class="p6 ind1">先取特権、質権、抵当権は（非典型担保も同様）、目的物が滅失・損傷して保険金、損害賠償請求権などに変じ、収用されて補償金に変じ、売却されて代金に変じ、賃貸されて賃料などに変じたときは、これらの保険金、損害賠償請求権、補償金、売買代金、賃借料などの上に効力が及ぶ（304条、350条、372条）。</p>
        </div>
<div class="kakomon"><a href="pu26min23q.php#q-h06-11-u" title="H6-11-ウ">過去問</a></div>
      </div>
    </div>
    <div class="blk outer">
      <div class="outer-title" id="A03-01-00-0-04">４　効力</div>
      <div class="blk inner">
        <div class="p-card">
          <p class="h6 ind0">1.　優先弁済的効力</p>
          <p class="p6 ind1">：目的物を換価し、他の債権者に先立って、自己の債権の弁済を受ける権利</p>
          <p class="p6 ind1">先取特権（303条）、質権（342条）、抵当権（369条１項）には認められるが、留置権においては認められない。</p>
          <p class="p6 ind1">※　競売権</p>
          <p class="p6 ind1">先取特権、質権、抵当権、留置権について明文で認められている（民執法180条、190条、195条）。</p>
          <p class="p6 ind1">仮登記担保、譲渡担保には競売権がないが、処分型のものにおいては目的物の処分権がある。</p>
        </div>
        <div class="p-card">
          <p class="h6 ind0">2.　留置的効力</p>
          <p class="p6 ind1">：目的物を手許に留め置き、債権の弁済があるまで、その引渡しを拒むことができる効力</p>
          <p class="p6 ind1">債務者にとって価値のある物を取り上げ、心理的圧力を加えて、それにより事実上弁済を促すものである。留置権（295条）、質権（347条）に認められる。</p>
          <p class="p6 ind1"><img class="embed-img" src="img/min23-01.png" alt="min23-01.png"></p>
          <p class="p6 ind1">※1　特別先取特権○、一般先取特権×</p>
          <p class="p6 ind1">※2　事実上の優先弁済は受ける</p>
        </div>
<div class="kakomon"><a href="pu26min23q.php#q-r05-12-e" title="R5-12-エ">過去問</a></div>
      </div>
    </div>
    <div class="blk outer">
      <div class="outer-title" id="A03-01-00-0-05">５　消滅</div>
      <p>被担保債権の消滅により消滅するほか（付従性）、物権一般の消滅原因（目的物の消滅等）により消滅する。</p>
    </div>
  </div>
  <div class="p-card chap-card">
    <h2 id="A03-02">第２章　抵当権</h2>
    <div class="p-card sec-card">
      <h3 id="A03-02-01">第１節　意義</h3>
    <div class="blk outer">
      <div class="outer-title" id="A03-02-01-0-01">１　意義</div>
      <p>：債務者又は物上保証人が債務の担保に供した物を、占有を移転せずに設定者の使用収益に委ねておき、債務が弁済されない場合にその物の交換価値から優先弁済を受ける約定担保物権</p>
    </div>
    <div class="blk outer">
      <div class="outer-title" id="A03-02-01-0-02">２　法的性質（通有性）</div>
      <div class="blk inner">
        <div class="p-card">
          <p class="h6 ind0">1.　付従性</p>
        <div class="p-card">
          <p class="h6 ind3 nobold">①債権が存在しなければ抵当権は成立せず（成立についての付従性）、②債権が消滅すると抵当権も消滅する（消滅についての付従性）。</p>
        </div>
        </div>
        <div class="p-card">
          <p class="h6 ind0">2.　随伴性</p>
          <p class="p6 ind1">被担保債権が譲渡されると抵当権も当然に譲渡される。</p>
        </div>
        <div class="p-card">
          <p class="h6 ind0">3.　不可分性</p>
          <p class="p6 ind1">被担保債権の全部の弁済を受けるまでは抵当権の効力は目的物の全部に及ぶ（372条、296条）。</p>
        </div>
        <div class="p-card">
          <p class="h6 ind0">4.　物上代位性</p>
          <p class="p6 ind1">抵当権は、抵当目的物の売却・賃貸・滅失・損傷によって債務者が受けるべき金銭その他の物（代償物・代位物）に対してもその効力を及ぼすことができる（372条、304条）。</p>
        </div>
      </div>
    </div>
    </div>
    <div class="p-card sec-card">
      <h3 id="A03-02-02">第２節　設定</h3>
    <div class="blk outer">
      <div class="outer-title" id="A03-02-02-0-01">１　方式</div>
      <p>抵当権設定契約により設定される（諾成契約）。</p>
    </div>
    <div class="blk outer">
      <div class="outer-title" id="A03-02-02-0-02">２　当事者</div>
      <div class="blk inner">
        <div class="p-card">
          <p class="h6 ind0">1.　抵当権者</p>
          <p class="p6 ind1">被担保債権の債権者に限られる。</p>
        </div>
        <div class="p-card">
          <p class="h6 ind0">2.　抵当権設定者</p>
          <p class="p6 ind1">債務者に限らず第三者でもよい（369条１項）。この第三者を物上保証人という。</p>
        </div>
      </div>
    </div>
    <div class="blk outer">
      <div class="outer-title" id="A03-02-02-0-03">３　目的物</div>
      <div class="blk inner">
        <div class="p-card" id="min23-q10">
          <p class="h6 ind0">1.　抵当権の目的となり得る物</p>
        <div class="p-card">
          <p class="h6 ind1">(1) 民法上認められる物</p>
          <p class="p6 ind2">不動産（369条１項）、地上権、永小作権（369条２項）</p>
        </div>
        <div class="p-card">
          <p class="h6 ind1">(2) 特別法上認められる物</p>
          <p class="p6 ind2">自動車・航空機・立木・農業用動産等</p>
        </div>
        </div>
        <div class="p-card">
          <p class="h6 ind0">2.　特定性・独立性との関係</p>
        <div class="p-card">
          <p class="h6 ind1">(1) 一筆の土地の一部</p>
          <p class="p6 ind2">独立して物権の客体となり得る。ただし、登記をするには分筆が必要である。</p>
        </div>
        <div class="p-card">
          <p class="h6 ind1">(2) 共有不動産の持分</p>
          <p class="p6 ind2">共有不動産の持分上に抵当権を設定することはできるが、持分の割合的な一部分に設定することは、目的物の特定が不可能なことから、登記実務上は否定されている。</p>
        </div>
        <div class="p-card">
          <p class="h6 ind1">(3) 未完成の建物</p>
          <p class="p6 ind2">未完成建物に抵当権を設定しても債権的効果を生じさせるにすぎず、建物となった後に改めて設定契約をしなければ物権的効果を生じさせることはできない（実務）。</p>
        </div>
<div class="kakomon"><a href="pu26min23q.php#q-r04-10-e" title="R4-10-エ">過去問</a></div>
        </div>
      </div>
    </div>
    <div class="blk outer">
      <div class="outer-title" id="A03-02-02-0-04">４　被担保債権</div>
      <div class="blk inner">
        <div class="p-card">
          <p class="h6 ind0">1.　被担保債権の種類</p>
          <p class="p6 ind1">被担保債権は金銭債権に限らない。なぜなら、金銭債権以外の債権であっても、債務不履行の場合には金銭債権である損害賠償請求権となるからである。</p>
        </div>
        <div class="p-card">
          <p class="h6 ind0">2.　付従性との関係</p>
          <p class="p6 ind1">期限付債権・条件付債権のような、将来発生する債権のために抵当権を設定することが認められていること、及び転抵当が認められていることから、抵当権の成立・存続においては付従性が緩和されている。</p>
        <div class="p-card">
          <p class="h6 ind1">(1) 成立に関する付従性</p>
        <div class="p-card">
          <p class="h6 ind2 nobold">(a) 債権が無効な場合</p>
          <p class="p6 ind3">被担保債権が無効な場合、設定された抵当権も無効となる（公序良俗違反につき大判昭８.３.29、利息制限法上の制限利息超過部分につき最判昭30.７.15）。</p>
        </div>
        <div class="p-card">
          <p class="h6 ind2 nobold">(b) 将来発生する債権</p>
          <p class="p6 ind3">将来発生する債権を被担保債権とする抵当権の設定は、「付従性」に反することから認められないとも思える。しかし、判例・通説は付従性を緩和するという方向で、将来発生する債権のために現在において抵当権を設定することができるとしている（大判昭７.６.１）。</p>
        </div>
        </div>
        <div class="p-card">
          <p class="h6 ind1">(2) 消滅に関する付従性</p>
          <p class="p6 ind2">被担保債権が消滅すると抵当権も消滅するということである。</p>
          <p class="p6 ind2">被担保債権の一部が消滅した場合は、抵当権の担保の範囲もその限度で当然に縮減する。これは、抵当権の債権額の変更登記をしなくても、当該抵当権付き債権の譲受人に対抗することができる（大判大９.１.29）。</p>
        </div>
<div class="kakomon"><a href="pu26min23q.php#q-r05-11-o" title="R5-11-オ">過去問</a></div>
        </div>
      </div>
    </div>
    <div class="blk outer">
      <div class="outer-title" id="A03-02-02-0-05">５　公示方法</div>
      <p>抵当権は登記を対抗要件とする（177条、不登法３条７号）。</p>
    </div>
    </div>
    <div class="p-card sec-card">
      <h3 id="A03-02-03">第３節　抵当権の効力</h3>
    <div class="p-card rank4-card">
      <p id="A03-02-03-1" class="h6 ind0">Ⅰ　効力が及ぶ範囲</p>
    <div class="blk outer">
      <div class="outer-title" id="A03-02-03-1-01">１　優先弁済的効力</div>
      <p>抵当権は優先弁済的効力を有する。</p>
      <p>なお、留置的効力・収益的効力は認められない。</p>
    </div>
    <div class="blk outer">
      <div class="outer-title" id="A03-02-03-1-02">２　被担保債権の範囲</div>
      <div class="blk inner">
        <div class="p-card">
          <p class="h6 ind0">1.　意義</p>
          <p class="p6 ind1">担保されるのは、①元本、②利息、③定期金、④遅延損害金、⑤違約金、⑥抵当権実行の費用である。</p>
          <p class="p6 ind1">抵当権者は、利息その他の定期金を請求する権利を有するときは、その満期となった最後の2年分についてのみ、その抵当権を行使することができる（375条１項本文）。</p>
        </div>
        <div class="p-card">
          <p class="h6 ind0">2.　趣旨</p>
          <p class="p6 ind1">抵当権は質権と異なり目的物を設定者が占有するため、抵当権設定後も後順位抵当権が設定されたり一般債権者が目的物を差し押さえるなど、第三者が利害関係をもつ可能性が高い。そこで、これらの利害関係人を保護するため、第三者との関係において抵当権の被担保債権の範囲を制限しているものである。</p>
        </div>
        <div class="p-card">
          <p class="h6 ind0">3.　「満期となった最後の2年分」（375条1項）の範囲</p>
          <p class="p6 ind1">弁済期にかかわりなく、配当の時から算出して既に経過した過去２年分と解する（名古屋高判昭33.４.15・通説）。</p>
        </div>
        <div class="p-card">
          <p class="h6 ind0">4.　375条の適用範囲</p>
          <p class="p6 ind1">本条は、後順位抵当権者・一般債権者の利益を考慮したものであるから、物上保証人、債務者などの抵当権設定者及び目的物の第三取得者との関係については適用がなく、被担保債権の範囲は制限されない（大判昭９.10.10）。</p>
        </div>
<div class="kakomon"><a href="pu26min23q.php#q-h29-11-o" title="H29-11-オ">過去問</a></div>
      </div>
    </div>
    <div class="blk outer">
      <div class="outer-title" id="A03-02-03-1-03">３　抵当権の効力が及ぶ目的物の範囲</div>
      <div class="blk inner">
        <div class="p-card">
          <p class="h6 ind0">1.　意義</p>
          <p class="p6 ind1">抵当権は、抵当地の上に存する建物を除き、その目的である不動産（抵当不動産）に付加して一体となっている物に及ぶ（370条本文）。</p>
          <p class="p6 ind1">370条は、抵当権の目的不動産の付加一体物について抵当権の効力が及ぶ旨を定めている。</p>
          <p class="p6 ind1">ただし、 以下の場合には、付加一体物であっても抵当権の効力は及ばないとされる。</p>
        <div class="p-card">
          <p class="h6 ind3 nobold">①　「権原」（242条ただし書）により他人が附属させた物</p>
          <p class="h6 ind3 nobold">②　設定行為における当事者の契約で効力が及ばないとした物（370条ただし書）</p>
          <p class="h6 ind3 nobold">③　付加行為が詐害行為（424条）となる場合（370条ただし書）</p>
        </div>
<div class="kakomon"><a href="pu26min23q.php#q-h31-13-a" title="H31-13-ア">過去問</a></div>
        </div>
        <div class="p-card" id="min23-q20-1">
          <p class="h6 ind0">2.　「付加して一体となっている物」</p>
        <div class="p-card">
          <p class="h6 ind1">(1) 付合物（242条本文）</p>
          <p class="p6 ind2">抵当不動産に付合した物（242条本文）は不動産の構成部分となって独立性を失っているから、付合時期が抵当権設定前であるか後であるかに関わらず付加一体物（370条）に当然に含まれ、抵当権の効力が及ぶ。</p>
          <p class="p6 ind2">ex.雨戸、石垣、敷石、エレベーター、取り外しできない庭石</p>
          <p class="p6 ind2">土地と建物は別個の不動産であることから、土地に抵当権を設定してもその効力は建物には及ばない。</p>
        </div>
        <div class="p-card">
          <p class="h6 ind1">(2) 従物</p>
        <div class="p-card">
          <p class="h6 ind2 nobold">(a) 従物は、付加一体物に当たるか。</p><br>
          <p class="p6 ind3">Ａ　肯定説（経済的一体性説）</p>
          <p class="p6 ind3">抵当権は目的不動産の交換価値を把握するものであるから、付加一体物（370条）とは目的不動産と経済的に一体である物をいい、従物は主物と経済 的に一体である。</p><br>
          <p class="p6 ind3">Ｂ　否定説（構成部分説）</p>
          <p class="p6 ind3">付加一体物とは、付合物のみを指し、物として独立性を有する「従物」はこれに含まれない。</p>
          <p class="p6 ind3">※　Ｂ説によっても抵当権設定時の従物については、87条２項により抵当権の効力が及ぶとされる（大連判大８.３.15）。</p>
        </div>
        <div class="p-card">
          <p class="h6 ind2 nobold">(b) 抵当権設定後の従物に抵当権の効力が及ぶか。</p><br>
          <p class="p6 ind3">Ａ　経済的一体性説</p>
          <p class="p6 ind3">抵当権設定後の従物も目的物と経済的に一体であることに変わりがなく、370条により抵当権の効力が及ぶ。</p><br>
          <p class="p6 ind3">Ｂ　構成部分説</p>
          <p class="p6 ind3">「処分」の捉え方と関連して問題となる。</p><br>
          <p class="p6 ind3">B1　肯定説（客観的・経済的結合説）</p>
          <p class="p6 ind3">　87条２項の「処分」は、抵当権設定行為のみならず、その後の抵当権実行までの一体としての態様を意味する。</p>
          <p class="p6 ind3">　87条２項は主物と従物が経済的・客観的に一体であることから「従物は、主物の処分に従う」ことを規定したものである。</p><br>
          <p class="p6 ind3">B2　否定説（意思解釈説）</p>
          <p class="p6 ind3">　87条２項の「処分」は、抵当権設定行為のみをいう。</p>
          <p class="p6 ind3">　87条２項は、処分の際の当事者の意思解釈に基づく規定である。従って、抵当権設定当時の従物には当事者の意思解釈として抵当権の効力が及ぶが、抵当権設定後の従物には及ばない。</p>
        </div>
        </div>
        <div class="p-card">
          <p class="h6 ind1">(3) 従たる権利</p>
          <p class="p6 ind2">従物に準じて抵当権の効力が及ぶ。</p>
          <p class="p6 ind2">借地上の建物に抵当権を設定した場合には、建物が存在する前提となっている地上権・土地賃借権などの敷地利用権にも抵当権の効力が及ぶ（最判昭40.５.４）。</p>
          <p class="p6 ind2">賃貸借が合意解約されてもこれをもって買受人に対抗できない（大判大11.11.24）。</p>
          <p class="p6 ind2">ただし、競落人が敷地利用権を土地賃貸人に対抗するためには、賃貸人の承諾（612条）又はこれに代わる裁判所の許可が必要である（借地借家法20条）。</p>
        </div>
        <div class="p-card">
          <p class="h6 ind1">(4) 分離物</p>
          <p class="p6 ind2">抵当不動産上の付加一体物を分離・搬出した場合、分離物に抵当権の効力が及ぶか。</p>
        <div class="p-card">
          <p class="h6 ind2 nobold">(a) 抵当権の競売開始決定前</p>
          <p class="p6 ind3">抵当権は設定者から用益権を奪わないことに特性がある。そこで、通常の使用収益の範囲内での分離・搬出物には抵当権の効力は及ばない。問題は、通常の使用収益の範囲を超える場合である。</p>
        <div class="p-card">
          <p class="h6 ind3 nobold">ⅰ　分離物が抵当不動産上にある場合</p><br>
          <p class="p6 ind4">Ａ　肯定説（大判昭７.４.20）</p>
          <p class="p6 ind4">（理由）</p>
          <p class="p6 ind4">抵当権は付加物を含めた抵当不動産全体の価値を把握する物権である。</p><br>
          <p class="p6 ind4">Ｂ　否定説</p>
          <p class="p6 ind4">（理由）</p>
          <p class="p6 ind4">分離されることで不動産の性格を失い、動産となり、独立の所有権の対象となる。</p>
        </div>
        <div class="p-card">
          <p class="h6 ind3 nobold">ⅱ　分離物が抵当不動産上から搬出された場合</p><br>
          <p class="p6 ind4">Ｑ　抵当不動産上の分離物に抵当権の効力が及ぶとしても、分離物が抵当不動産から搬出されても抵当権の効力は及ぶか。</p><br>
          <p class="p6 ind4">Ａ　対抗力喪失説</p>
          <p class="p6 ind4">抵当権は、付加物を含めて目的物全部を支配する物権であるので分離物にも支配力が及ぶ。そこで、搬出後であっても債務者・設定者が所有している場合には抵当権の効力が及ぶ。しかし、登記を対抗要件とする権利であることから、分離物が抵当不動産上に存在し、登記による公示の衣裳に包まれている限りにおいて第三者対抗力を有するにとどまる。そこで、搬出されれば、第三者には対抗できなくなる。</p><br>
          <p class="p6 ind4">Ｂ　即時取得基準説</p>
          <p class="p6 ind4">搬出後であっても、第三者が即時取得（192条）しない限り抵当権の効力は及ぶ。</p>
          <p class="p6 ind4">なぜなら、悪意の第三者は排除した上で、抵当権の効力を可能な限り認めるべきであるからである。</p>
        </div>
        </div>
        <div class="p-card">
          <p class="h6 ind2 nobold">(b) 抵当権の競売開始決定後</p>
          <p class="p6 ind3">競売手続の開始によって差押えの効力が生じるので、競売開始決定後に分離・搬出した付加物には抵当権の効力が及ぶ（大判大５.５.31）。</p>
        </div>
        <div class="p-card">
          <p class="h6 ind2 nobold">(c) 建物が崩壊して木材となった場合</p>
          <p class="p6 ind3">この場合、木材は不動産としての性質を失い、動産となったのだから抵当権は消滅するのが原則である（大判大５.６.28）。</p>
          <p class="p6 ind3">もっとも、判例は抵当権の実行に着手した後の崩壊木材には抵当権の効力が及ぶとする（大判大６.１.22）。</p>
        </div>
<div class="kakomon"><a href="pu26min23q.php#q-h30-14-i" title="H30-14-イ">過去問</a></div>
        </div>
        </div>
        <div class="p-card" id="min23-q25">
          <p class="h6 ind0">3.　「果実」（371条）</p>
          <p class="p6 ind1">抵当権は、その被担保債権に不履行があった後に生じた「果実」にその効力が及ぶ（371条）。</p>
          <p class="p6 ind1">また、抵当権者の申立てにより裁判所が選任する管理人が、賃料取立て・契約解除・果実収取などをするという、担保不動産収益執行の制度が導入されている。</p>
          <p class="p6 ind1">これにより、抵当不動産から得られる「果実」に対する抵当権者の権利行使が可能となっている。</p>
          <p class="p6 ind1">さらに、法定果実については、従来より交換価値のなし崩しとして、物上代位（372条、304条）をすることができるとされている（通説・最判平元.10.27）。</p>
          <div class="sp"></div>
        </div>
<div class="kakomon"><a href="pu26min23q.php#q-r03-13-u" title="R3-13-ウ">過去問</a></div>
      </div>
    </div>
    </div>
    </div>
  </div>
</section>

</main>
<div class="link-dialog" id="linkDialog">
  <div class="link-dialog__backdrop" id="linkDialogBackdrop"></div>
  <div class="link-dialog__panel">
    <ul id="linkDialogList"></ul>
    <div class="link-dialog__close">
      <button type="button" id="linkDialogClose">閉じる</button>
    </div>
  </div>
</div>
<script src="js/app2.js?v=20260518-01"></script>
</body>
</html>
