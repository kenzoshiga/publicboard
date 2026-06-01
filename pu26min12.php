<?php require_once 'auth_check.php'; ?>
<!doctype html>
<html lang="ja">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>民法 Unit12</title>
  <link rel="stylesheet" href="css/style.css">
</head>
<body>
<script>(function(){try{var v=localStorage.getItem('tocHidden');if(v==='1'){document.body.classList.add('toc-hidden');}}catch(e){}})();</script>
<a id="top"></a>
<header>
  <div class="wrap hrow1">
    <h1>民法 Unit12</h1>
    <div class="hnav">
      <a href="pu_index.php">トップへ</a>
      <a href="pu26min11.php">前へ</a>
      <a href="pu26min13.php">次へ</a>
      <a href="pu26min12q.php">肢別へ</a>
    </div>
  </div>
  <div class="wrap">
    <div class="toc-wrap">
      <div class="toc" id="toc">
        <div class="toc-title"><strong>目次</strong>　<a href="#content">本文へ↓</a></div>
        <ul>
<li><a href="#A01">第１編　総則</a>
  <ul>
    <li><a href="#A01-11">第１１章　時効</a>
      <ul>
        <li><a href="#A01-11-02">第２節　取得時効</a>
          <ul>
            <li><a href="#A01-11-02-0-01">１　所有権の取得時効（162条）</a></li>
            <li><a href="#A01-11-02-0-02">２　所有権以外の財産権の取得時効（163条）</a></li>
          </ul>
        </li>
        <li><a href="#A01-11-03">第３節　消滅時効</a>
          <ul>
            <li><a href="#A01-11-03-0-01">１　総説</a></li>
            <li><a href="#A01-11-03-0-02">２　消滅時効の対象</a></li>
            <li><a href="#A01-11-03-0-03">３　消滅時効の起算点</a></li>
            <li><a href="#A01-11-03-0-04">４　時効期間の満了</a></li>
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
<section class="sec-title" id="A01">
  <h2>第１編　総則</h2>
  <div class="p-card chap-card">
    <h2 id="A01-11">第１１章　時効</h2>
    <div class="p-card sec-card">
      <h3 id="A01-11-02">第２節　取得時効</h3>
    <div class="blk outer">
      <div class="outer-title" id="A01-11-02-0-01">１　所有権の取得時効（162条）</div>
      <div class="blk inner">
        <div class="p-card">
          <p class="h6 ind0">1.　要件(1)――占有の継続</p>
        <div class="p-card">
          <p class="h6 ind1">(1) 占有の態様</p>
          <p class="p6 ind2">所有の意思をもって、平穏に、かつ、公然と他人の物を占有すること（162条）。</p>
        <div class="p-card">
          <p class="h6 ind2 nobold">(a) 所有の意思（自主占有）</p>
          <p class="p6 ind3">所有の意思の有無は占有を生じさせた原因たる事実の性質によって客観的に決まる。</p>
          <p class="p6 ind3">ex. 盗人・譲受人は自主占有者、賃借人・受寄者は他主占有者</p>
          <p class="p6 ind3">自主占有であることは推定される（186条１項）。</p>
        </div>
        <div class="p-card">
          <p class="h6 ind2 nobold">(b) 平穏、公然</p>
          <p class="p6 ind3">強暴や隠秘の占有でないことである。これは推定される（186条１項）。</p>
        </div>
        <div class="p-card">
          <p class="h6 ind2 nobold">(c) 「他人の物」</p><br>
          <p class="p6 ind3">Q1　自己物の時効取得</p>
          <p class="p6 ind3">取得時効の対象となる物は「他人の物」でなければならないか。</p>
          <p class="p6 ind3">162条は、取得時効の対象物を「他人の物」と規定しており、また一般的には、自己の物について取得時効を認めることは無意味である。しかし、例外的に、自己所有物の時効取得を認めることに実益がある場合が存する。そこで、自己の物についても時効取得を認めてもよいのではないかが問題となる。</p>
          <p class="p6 ind3">→　肯定（最判昭42.７.21）</p><br>
          <p class="p6 ind3">Q2　一筆の土地の一部の時効取得はできるか。</p>
          <p class="p6 ind3">→　できる。一筆の土地の一部も占有が可能であるため、時効取得の対象となる。</p>
        </div>
<div class="kakomon"><a href="pu26min12q.php#q-h27-06-i" title="H27-6-イ">過去問</a></div>
        </div>
        <div class="p-card" id="min12-q7">
          <p class="h6 ind1">(2) 占有継続</p>
        <div class="p-card">
          <p class="h6 ind2 nobold">(a) 推定規定（186条２項）</p>
          <p class="p6 ind3">前後両時点において占有した証拠があればその間占有は継続したものと推定される。</p>
        </div>
        <div class="p-card">
          <p class="h6 ind2 nobold">(b) 自然中断（164条）</p>
          <p class="p6 ind3">占有者が任意に占有を中止し、又は他人によって占有を奪われたときは、すべての人に対して中断の効力をもつ（自然中断、164条）。</p>
          <p class="p6 ind3">占有の喪失が侵奪行為による場合、占有回収の訴え（200条）により占有を回復すれば、占有は継続したものとみなされる（203条ただし書）。</p>
        </div>
        <div class="p-card">
          <p class="h6 ind2 nobold">(c) 占有の承継（187条）</p>
          <p class="p6 ind3">他人から占有を承継した者は、自己の占有のみを主張する他、前主の占有を合算して主張することができる（187条１項）。</p>
          <p class="p6 ind3">前主の占有を併せて主張するときは、その瑕疵も承継する（187条２項）。</p>
          <p class="p6 ind3">ex. 前主が悪意で５年占有した不動産を譲り受けた後主が、善意で10年占有した場合、前主の占有も併せて主張すると悪意占有が15年となり時効取得できない（162条１項）。一方、自己のみの占有を主張すれば、善意占有が10年となり、時効取得できる（162条２項）。</p>
        </div>
<div class="kakomon"><a href="pu26min12q.php#q-h21-07-a" title="H21-7-ア">過去問</a></div>
        </div>
        </div>
        <div class="p-card" id="min12-q12">
          <p class="h6 ind0">2.　要件(2)――時効期間の満了</p>
          <p class="p6 ind1"><img class="embed-img" src="img/min12-01.png" alt="min12-01.png"></p>
        <div class="p-card">
          <p class="h6 ind1">(1) 「善意」</p>
          <p class="p6 ind2">自分に所有権があると信じることである。善意は、推定される（186条１項）。</p>
        </div>
        <div class="p-card">
          <p class="h6 ind1">(2) 「無過失」：善意についての無過失</p>
          <p class="p6 ind2">無過失は、推定されない（占有者が立証する）。</p>
        </div>
        <div class="p-card">
          <p class="h6 ind1">(3) 「占有の開始」</p>
        <div class="p-card">
          <p class="h6 ind2 nobold">(a) 占有開始後に悪意となった場合</p>
          <p class="p6 ind3">Ｑ　占有開始時に善意・無過失であれば、後に悪意に転じた場合でも10年で時効取得できるか。</p>
          <p class="p6 ind3">→　できる（大判明44.４.７・通説）</p>
        </div>
        <div class="p-card">
          <p class="h6 ind2 nobold">(b) 占有主体が変更した場合</p>
          <p class="p6 ind3">Ｑ　占有主体に変更があり、承継された２個以上の占有が併せて主張される場合（187条１項）、「占有の開始」の善意・無過失は誰を基準とするか。</p>
          <p class="p6 ind3">→　最初の占有者について判断すべきである（最判昭53.３.６・通説）。</p>
        </div>
        </div>
        </div>
        <div class="p-card">
          <p class="h6 ind0">3.　効果</p>
          <p class="p6 ind1">占有者は所有権（又は他の財産権）を原始取得する。遡及効あり（144条）。</p>
          <p class="p6 ind1">本来の権利者は、権利を喪失する。</p>
        </div>
<div class="kakomon"><a href="pu26min12q.php#q-h27-06-u" title="H27-6-ウ">過去問</a></div>
      </div>
    </div>
    <div class="blk outer">
      <div class="outer-title" id="A01-11-02-0-02">２　所有権以外の財産権の取得時効（163条）</div>
      <p>ex. 用益物権、質権など</p>
      <div class="blk inner">
        <div class="p-card">
          <p class="h6 ind0">1.　財産権の中でも取得時効の認められないもの</p>
        <div class="p-card">
          <p class="h6 ind3 nobold">① 直接法律の規定に基づいて成立する権利（留置権・先取特権）</p>
          <p class="h6 ind3 nobold">② 占有を要素としない権利（抵当権）</p>
          <p class="h6 ind3 nobold">③ １回の行使で消滅する権利（形成権）</p>
          <p class="h6 ind3 nobold">④ 継続的に行使されない、又は、外形上認識することができない地役権（283条参照）</p>
        </div>
        </div>
        <div class="p-card">
          <p class="h6 ind0">2.　不動産賃借権について時効取得が認められるか。</p>
          <p class="p6 ind1">Ｑ　債権は通常１回の履行で消滅するため、永続した事実状態というものはあり得ないが、不動産賃借権ではこれを観念することができる。そこで、不動産賃借権の時効取得の可否が問題となる。</p>
          <p class="p6 ind1">→　肯定説（最判昭43.10.８等・通説）</p>
        <div class="p-card">
          <p class="h6 ind3 nobold">① 土地の継続的な用益という外形的事実の存在</p>
          <p class="h6 ind3 nobold">② それが賃借の意思に基づくことが客観的に表現されていること（ex. 賃借権行使の外形・賃料の支払又は供託）があれば、時効取得を認めることができる。</p>
        </div>
<div class="kakomon"><a href="pu26min12q.php#q-h25-10-o" title="H25-10-オ">過去問</a></div>
        </div>
      </div>
    </div>
    </div>
    <div class="p-card sec-card">
      <h3 id="A01-11-03">第３節　消滅時効</h3>
    <div class="blk outer">
      <div class="outer-title" id="A01-11-03-0-01">１　総説</div>
      <p>消滅時効とは、権利不行使の事実状態を根拠として、権利の消滅を認めるものである。すべての権利が消滅時効にかかるわけではなく、また、時効期間も権利の種類によって異なる点に注意を要する。</p>
    </div>
    <div class="blk outer">
      <div class="outer-title" id="A01-11-03-0-02">２　消滅時効の対象</div>
      <div class="blk inner">
        <div class="p-card">
          <p class="h6 ind0">1.　消滅時効にかかる権利</p>
        <div class="p-card">
          <p class="h6 ind1">(1) 債権（166条１項）</p>
        </div>
        <div class="p-card">
          <p class="h6 ind1">(2) 債権又は所有権以外の財産権（166条２項）</p>
          <p class="p6 ind2">ex. 地上権、地役権、永小作権</p>
        </div>
        <div class="p-card">
          <p class="h6 ind1">(3) 法定解除権</p>
          <p class="p6 ind2">法定解除権も債権に準じて５年又は10年の時効に服する（大判大６.11.14）。</p>
        </div>
        </div>
        <div class="p-card">
          <p class="h6 ind0">2.　消滅時効にかからない権利</p>
        <div class="p-card">
          <p class="h6 ind1">(1) 所有権</p>
          <p class="p6 ind2">所有権に基づく物権的請求権、登記請求権も消滅時効にかからない。</p>
        </div>
        <div class="p-card">
          <p class="h6 ind1">(2) 占有権</p>
          <p class="p6 ind2">事実状態に随伴する権利だからである。</p>
        </div>
        <div class="p-card">
          <p class="h6 ind1">(3) 抗弁権</p>
          <p class="p6 ind2">抗弁権、ないし抗弁的に主張される権利は時効にかからない、という考え方もある。</p>
        </div>
<div class="kakomon"><a href="pu26min12q.php#q-h26-07-oh01-05-1" title="H26-7-オ">過去問</a></div>
        </div>
      </div>
    </div>
    <div class="blk outer">
      <div class="outer-title" id="A01-11-03-0-03">３　消滅時効の起算点</div>
      <div class="blk inner">
        <div class="p-card">
          <p class="h6 ind0">1.　総説</p>
          <p class="p6 ind1">消滅時効の起算点には、主観的起算点と客観的起算点がある。</p>
          <p class="p6 ind1">主観的起算点は「債権者が権利を行使することができることを知った時」（166条１項１号）であり、客観的起算点は「権利を行使することができる時」（166条１項２号）である。</p>
          <p class="p6 ind1">消滅時効の期間は、これらの各起算点から進行する。そして、166条１項１号又は166条１項２号のいずれかの期間が到来することにより、時効が完成する。</p>
        <div class="p-card">
          <p class="h6 ind1">(1) 主観的起算点からの時効完成</p>
          <p class="p6 ind2">債権は、債権者が権利を行使することができることを知った時から５年間行使しないときは、時効によって消滅する（166条１項１号）。</p>
          <p class="p6 ind2">「債権者が権利を行使することができることを知った時（主観的起算点、166条１項１号）」とは具体的には、権利の発生原因等を認識し、かつ、債務者が誰であるかまで認識した時をいうと解される。</p>
        </div>
        <div class="p-card">
          <p class="h6 ind1">(2) 客観的起算点からの時効完成</p>
          <p class="p6 ind2">債権は、権利を行使することができる時から10年間行使しないときは、時効によって消滅する（166条１項２号）。</p>
          <p class="p6 ind2">「権利を行使することができる時（客観的起算点、166条１項２号）」とは具体的には、権利行使につき法律上の障害（※）がなくなった時をいうと解される。</p>
          <p class="p6 ind2">※　法律上の障害とは、例えば、条件・期限が付されていることである。</p>
          <p class="p6 ind2">本条の趣旨は、法律上権利行使できるのにその行使を怠っている者は、権利の上に眠る者として保護しないという点にある。従って、事実上の障害（権利者の病気・不在・不知、制限行為能力者の法定代理人の不存在など）や債権者の意思によって除くことができる法律上の障害（同時履行の抗弁権、533条）は含まない。</p>
        </div>
<div class="kakomon"><a href="pu26min12q.php#q-r03-06-i" title="R3-6-イ">過去問</a></div>
        </div>
        <div class="p-card" id="min12-q24">
          <p class="h6 ind0">2.　各種債権の消滅時効の客観的起算点</p>
        <div class="p-card">
          <p class="h6 ind1">(1) 債務不履行に基づく損害賠償請求権－本来の債務の履行を請求できる時（大判昭18.６.15）</p>
          <p class="p6 ind2">なぜなら、債務不履行に基づく損害賠償請求権は、本来の債務の内容が変更されただけで同一性は失われていないからである。</p>
          <p class="p6 ind2">なお、契約の解除による原状回復請求権は、解除により発生する債権だから、その消滅時効は、解除の時から進行する（最判昭35.11.1）。</p>
        </div>
        <div class="p-card">
          <p class="h6 ind1">(2) 不当利得返還請求権－請求権発生時</p>
        </div>
        <div class="p-card">
          <p class="h6 ind1">(3) 停止条件付債権－条件成就時</p>
        </div>
        <div class="p-card">
          <p class="h6 ind1">(4) 不作為債権－違反行為がなされた時</p>
        </div>
        <div class="p-card">
          <p class="h6 ind1">(5) 割賦払債務に期限の利益喪失約款のある場合の時効期間の起算点</p>
          <p class="p6 ind2">１回の弁済の不履行と同時に当然に期限の利益を失い、債権者の請求がなくても全額につき弁済期が到来するという趣旨である場合、支払遅滞時から全額について時効が進行することについて争いはない。</p><br>
          <p class="p6 ind2">Ｑ　では、債権者の請求によって期限の利益を失わせ、全額の支払を請求することができるという趣旨のものの場合、時効期間の起算点をいかに解するか。</p><br>
          <p class="p6 ind2">Ａ　債権者意思説（請求時説。大連判昭15.３.13）</p>
          <p class="p6 ind2">　債権者の請求があって初めて全額についての時効が進行する。</p><br>
          <p class="p6 ind2">Ｂ　即時進行説</p>
          <p class="p6 ind2">　支払遅滞の時点から全額について時効が進行する。</p>
        </div>
<div class="kakomon"><a href="pu26min12q.php#q-h16-07-i" title="H16-7-イ">過去問</a></div>
        </div>
        <div class="p-card">
          <p class="h6 ind0">3.　時効の客観的起算点と履行遅滞（412条）</p>
          <p class="p6 ind1">時効の客観的起算点と履行遅滞（412条）の発生時とは無関係である。</p>
          <p class="p6 ind1"><img class="embed-img" src="img/min12-02.png" alt="min12-02.png"></p>
        </div>
      </div>
    </div>
    <div class="blk outer">
      <div class="outer-title" id="A01-11-03-0-04">４　時効期間の満了</div>
      <div class="blk inner">
        <div class="p-card">
          <p class="h6 ind0">1.　各権利の時効期間</p>
        <div class="p-card">
          <p class="h6 ind1">(1) 債権</p>
        <div class="p-card">
          <p class="h6 ind2 nobold">(a) 一般債権－5年（166条１項１号）又は10年（166条１項２号）</p>
          <p class="p6 ind3">なお、不法行為に基づく損害賠償請求権及び生命・身体の侵害による損害賠償請求権については特則があるため、後述する（724条、167条、724条の２）。</p>
        </div>
        <div class="p-card">
          <p class="h6 ind2 nobold">(b) 定期金債権（168条）</p>
          <p class="p6 ind3">：金銭その他の代替物を定期給付する債権</p>
          <p class="p6 ind3">本体たる債権を「基本債権」といい、それから派生する定期的な債権を「支分権」という。</p>
          <p class="p6 ind3">定期金債権の時効期間は、各支分権を行使することができることを知った時から10年（主観的起算点、168条１項１号）、各支分権を行使することができる時から20年（客観的起算点、168条１項２号）である。</p>
        </div>
        </div>
        <div class="p-card">
          <p class="h6 ind1">(2) 債権・所有権以外の財産権－20年（166条２項）</p>
        </div>
        <div class="p-card">
          <p class="h6 ind1">(3) 不法行為に基づく損害賠償請求権－①被害者又はその法定代理人が損害及び加害者を知った時から3年又は②不法行為の時から20年のいずれか（724条）</p>
          <p class="p6 ind2">被害者の保護を図るための規定である。</p>
          <p class="p6 ind2">なお、生命・身体の侵害の場合については後述する（（4）を参照）。</p>
        </div>
        <div class="p-card">
          <p class="h6 ind1">(4) 人の生命又は身体の侵害による損害賠償請求権（167条、724条の２）</p>
          <p class="p6 ind2">生命・身体の侵害による損害賠償請求権は、通常の債権よりも権利行使の機会を十分に確保しなければならない権利であることから、客観的起算点からの時効期間を10年から20年に長期化している（167条）。</p>
          <p class="p6 ind2">また、不法行為に基づく人の生命又は身体の侵害による損害賠償請求権についても、主観的起算点からの時効期間を３年から５年に長期化している（724条の２）。</p>
          <p class="p6 ind2">これらの特則により、生命・身体の侵害の相手方の権利行使の機会を確保している。</p>
        <div class="p-card">
          <p class="h6 ind2 nobold">(a) 債務不履行に基づく生命・身体の侵害による損害賠償請求権（167条）</p>
          <p class="p6 ind3">主観的起算点からの時効期間は通常の債権と同様、債権者が権利を行使することができることを知った時から５年である（166条１項１号）。</p>
          <p class="p6 ind3">客観的起算点からの時効期間は、権利行使できる時から20年となる（167条、166条１項２号）。</p>
        </div>
        <div class="p-card">
          <p class="h6 ind2 nobold">(b) 不法行為に基づく生命・身体の侵害による損害賠償請求権（724条の２）</p>
          <p class="p6 ind3">主観的起算点からの時効期間は、被害者又はその法定代理人が損害及び加害者を知った時から５年となる（724条の２、724条１号）。</p>
          <p class="p6 ind3">客観的起算点からの時効期間は、通常の不法行為に基づく損害賠償請求権と同様、不法行為の時から20年である（724条２号）。</p><br>
          <p class="p6 ind3">【まとめ】</p>
          <p class="p6 ind3"><img class="embed-img" src="img/min12-03.png" alt="min12-03.png"></p>
        </div>
        </div>
        <div class="p-card">
          <p class="h6 ind1">(5) 公に確定した権利（169条１項）</p>
          <p class="p6 ind2">確定判決又は確定判決と同一の効力を有するものによって確定された権利は、短期消滅時効期間の定めのあるものについても、時効期間は一様に10年とされる（169条１項）。ただし、確定の当時に弁済期の到来していない債権については同条項の適用はない（同条２項）。</p>
        </div>
        </div>
        <div class="p-card">
          <p class="h6 ind0">2.　時効期間の満了の効果</p>
          <p class="p6 ind1">権利が遡及的に消滅する。</p>
          <div class="sp"></div>
        </div>
<div class="kakomon"><a href="pu26min12q.php#q-r03-06-a" title="R3-6-ア">過去問</a></div>
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
