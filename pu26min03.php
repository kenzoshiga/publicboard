<?php require_once 'auth_check.php'; ?>
<!doctype html>
<html lang="ja">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>民法 Unit3</title>
  <link rel="stylesheet" href="css/style.css">
</head>
<body>
<script>(function(){try{var v=localStorage.getItem('tocHidden');if(v==='1'){document.body.classList.add('toc-hidden');}}catch(e){}})();</script>
<a id="top"></a>
<header>
  <div class="wrap hrow1">
    <h1>民法 Unit3</h1>
    <div class="hnav">
      <a href="pu_index.php">トップへ</a>
      <a href="pu26min02.php">前へ</a>
      <a href="pu26min04.php">次へ</a>
      <a href="pu26min03q.php">肢別へ</a>
    </div>
  </div>
  <div class="wrap">
    <div class="toc-wrap">
      <div class="toc" id="toc">
        <div class="toc-title"><strong>目次</strong>　<a href="#content">本文へ↓</a></div>
        <ul>
<li><a href="#A01">第１編　総則</a>
  <ul>
    <li><a href="#A01-02">第２章　人</a>
      <ul>
        <li><a href="#A01-02-03">第３節　不在者の財産管理及び失踪宣告</a>
          <ul>
            <li><a href="#A01-02-03-1">Ⅰ　不在者の財産管理</a>
              <ul>
            <li><a href="#A01-02-03-1-01">１　意義</a></li>
            <li><a href="#A01-02-03-1-02">２　要件</a></li>
            <li><a href="#A01-02-03-1-03">３　効果</a></li>
            <li><a href="#A01-02-03-1-04">４　管理人の改任・命令の取消し等</a></li>
            </ul>
          </li>
            <li><a href="#A01-02-03-2">Ⅱ　失踪宣告</a>
              <ul>
            <li><a href="#A01-02-03-2-01">１　意義</a></li>
            <li><a href="#A01-02-03-2-02">２　要件</a></li>
            <li><a href="#A01-02-03-2-03">３　効果－死亡の擬制</a></li>
            <li><a href="#A01-02-03-2-04">４　宣告の取消し</a></li>
            </ul>
          </li>
          </ul>
        </li>
      </ul>
    </li>
    <li><a href="#A01-03">第３章　法人</a>
      <ul>
        <li><a href="#A01-03-01">第１節　法人の意義</a>
          <ul>
            <li><a href="#A01-03-01-0-01">１　意義</a></li>
            <li><a href="#A01-03-01-0-02">２　趣旨</a></li>
            <li><a href="#A01-03-01-0-03">３　効果</a></li>
          </ul>
        </li>
        <li><a href="#A01-03-02">第２節　権利能力なき社団</a>
          <ul>
            <li><a href="#A01-03-02-0-01">１　意義</a></li>
            <li><a href="#A01-03-02-0-02">２　要件</a></li>
            <li><a href="#A01-03-02-0-03">３　効果</a></li>
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
    <h2 id="A01-02">第２章　人</h2>
    <div class="p-card sec-card">
      <h3 id="A01-02-03">第３節　不在者の財産管理及び失踪宣告</h3>
    <div class="p-card rank4-card">
      <p id="A01-02-03-1" class="h6 ind0">Ⅰ　不在者の財産管理</p>
    <div class="blk outer">
      <div class="outer-title" id="A01-02-03-1-01">１　意義</div>
      <p>不在者：従来の住所又は居所を去って行方の明らかでない者</p>
    </div>
    <div class="blk outer">
      <div class="outer-title" id="A01-02-03-1-02">２　要件</div>
      <div class="blk inner">
        <div class="p-card">
          <p class="h6 ind0">1.　不在者本人が財産管理人を置かなかったとき（25条１項前段）</p>
          <p class="p6 ind1">不在者が財産管理人を置いたときはその委任契約に従って財産が管理され、また、法定代理人がある場合にも法律の規定に従って財産が管理されるから特別の措置は不要である。</p>
        </div>
        <div class="p-card">
          <p class="h6 ind0">2.　財産管理人の権限が消滅したとき（25条１項後段）</p>
        </div>
        <div class="p-card">
          <p class="h6 ind0">3.　家庭裁判所への請求（25条１項前段）</p>
          <p class="p6 ind1">1．又は2．に該当し、利害関係人又は検察官の請求があることが必要である（25条１項前段）。不在者制度の公益性ゆえ、失踪宣告と異なり、請求権者に検察官が含まれている。</p>
        </div>
<div class="kakomon"><a href="pu26min03q.php#q-h28-04-2" title="H28-4-2他">過去問</a></div>
      </div>
    </div>
    <div class="blk outer">
      <div class="outer-title" id="A01-02-03-1-03">３　効果</div>
      <div class="blk inner">
        <div class="p-card">
          <p class="h6 ind0">1.　不在者財産管理人の選任（25条１項）</p>
          <p class="p6 ind1">家庭裁判所は、不在者の財産の管理について必要な処分を命じることができる（財産管理人の選任（25条１項）など）。</p>
        </div>
        <div class="p-card">
          <p class="h6 ind0">2.　管理人の権限</p>
          <p class="p6 ind1">家庭裁判所が選任した管理人の権限は、保存行為（103条１号）及び物や権利の性質を変えない範囲での利用･改良行為（103条２号）である。これらの範囲を超える行為を必要とするときは、家庭裁判所の許可を必要とする（28条）。</p>
        </div>
        <div class="p-card">
          <p class="h6 ind0">3.　管理人の報酬</p>
          <p class="p6 ind1">家庭裁判所は、管理人と不在者との関係その他の事情により、不在者の財産の中から、相当な報酬を管理人に与えることができる（29条2項）。必ず報酬を与えなければならないわけではなく、報酬を与えないこともできる。</p>
        </div>
<div class="kakomon"><a href="pu26min03q.php#q-r02-04-e" title="R2-4-エ他">過去問</a></div>
      </div>
    </div>
    <div class="blk outer">
      <div class="outer-title" id="A01-02-03-1-04">４　管理人の改任・命令の取消し等</div>
      <div class="blk inner">
        <div class="p-card">
          <p class="h6 ind0">1.　管理人の改任（26条、家事事件手続法146条１項）</p>
        <div class="p-card">
          <p class="h6 ind1">(1) 家庭裁判所で選任した管理人</p>
          <p class="p6 ind2">家庭裁判所は、いつでも不在者財産管理人を改任することができる（家事事件手続法146条１項）。</p>
        </div>
        <div class="p-card">
          <p class="h6 ind1">(2) 不在者が置いた管理人</p>
          <p class="p6 ind2">不在者が管理人を置いた場合でも、その不在者の生死が不明のときは、家庭裁判所は、利害関係人又は検察官の請求により、管理人を改任できる（26条）。また、家庭裁判所は、いつでも26条の規定により改任した管理人を改任することができる（家事事件手続法146条１項）。</p>
        </div>
<div class="kakomon"><a href="pu26min03q.php#q-h28-04-1" title="H28-4-1他">過去問</a></div>
        </div>
        <div class="p-card" id="min03-q9">
          <p class="h6 ind0">2.　財産管理の終了</p>
        <div class="p-card">
          <p class="h6 ind1">(1) 命令の取消し</p>
          <p class="p6 ind2">25条1項の規定による命令後、本人が管理人を置いたときは、家庭裁判所は、その管理人、利害関係人又は検察官の請求により、その命令を取り消さなければならない（25条2項）。</p>
          <p class="p6 ind2">家庭裁判所は、以下の場合には、不在者、管理人若しくは利害関係人の申立てにより又は職権で、管理人の選任その他の不在者の財産の管理に関する処分の取消しの審判をしなければならない（家事事件手続法147条）。</p>
          <p class="p6 ind2"><img class="embed-img" src="img/min03-01.png" alt="min03-01.png"></p>
        </div>
<div class="kakomon"><a href="pu26min03q.php#q-h28-04-3" title="H28-4-3">過去問</a></div>
        <div class="p-card">
          <p class="h6 ind1">(2) 管理人の供託</p>
          <p class="p6 ind2">家庭裁判所が選任した管理人は、不在者の財産の管理、処分その他の事由により金銭が生じたときは、不在者のために、当該金銭を不在者の財産の管理に関する処分を命じた裁判所の所在地を管轄する家庭裁判所の管轄区域内の供託所に供託することができる（家事事件手続法146条の２第１項 ）。</p>
          <p class="p6 ind2">管理財産として現預金のみが残っているような場合にも、管理人の供託によって選任処分を取り消すことができるようにするための規定である。</p>
          <p class="p6 ind2">家庭裁判所が選任した管理人は、供託をしたときは、法務省令で定めるところにより、その旨その他法務省令で定める事項を公告しなければならない（家事事件手続法146条の２第２項）。</p>
        </div>
        </div>
      </div>
    </div>
    </div>
    <div class="p-card rank4-card">
      <p id="A01-02-03-2" class="h6 ind0">Ⅱ　失踪宣告</p>
    <div class="blk outer">
      <div class="outer-title" id="A01-02-03-2-01">１　意義</div>
      <p>：不在者の生死不明の状態が一定期間継続した場合に、一応その者の死亡を擬制して、従来の住所を中心とする法律関係を確定する制度</p>
      <p>認定死亡（戸籍法上の制度）と異なり、民法上の制度である。普通失踪と特別失踪とがある。</p>
    </div>
    <div class="blk outer">
      <div class="outer-title" id="A01-02-03-2-02">２　要件</div>
      <div class="blk inner">
        <div class="p-card">
          <p class="h6 ind0">1.　不在者の生死が明らかでないこと</p>
        </div>
        <div class="p-card">
          <p class="h6 ind0">2.　生死不明の状態が一定期間継続すること</p>
        <div class="p-card">
          <p class="h6 ind1">(1) 普通失踪</p>
          <p class="p6 ind2">不在者の生存が確かめられる最後の時（最後の音信があった時）から数えて７年間生死不明である場合（30条１項）。</p>
        </div>
        <div class="p-card">
          <p class="h6 ind1">(2) 特別失踪</p>
          <p class="p6 ind2">戦争、船舶の沈没その他生命の危難を伴う危難が去った後、１年間生死不明である場合（30条２項）。</p>
        </div>
        </div>
        <div class="p-card">
          <p class="h6 ind0">3.　利害関係人の請求</p>
          <p class="p6 ind1">失踪宣告の請求をするにつき法律上の利害関係を有する者の請求が必要である（事実上の利害関係を有するだけでは足りない）。なお、失踪宣告の請求権者には、検察官は含まれない。（cf. 不在者の財産管理人の請求等）</p>
        </div>
        <div class="p-card">
          <p class="h6 ind0">4.　公示催告（家事事件手続法148条3項）</p>
        </div>
<div class="kakomon"><a href="pu26min03q.php#q-h07-02-e" title="H07-2-エ他">過去問</a></div>
      </div>
    </div>
    <div class="blk outer">
      <div class="outer-title" id="A01-02-03-2-03">３　効果－死亡の擬制</div>
      <p>普通失踪ならば失踪期間満了時、特別失踪ならば危難が去った時に死亡したものとみなされ（31条）、もとの住所を中心とする私法上の法律関係は死亡したのと同じ扱いがなされる（具体的には、相続が開始し（882条）、婚姻は解消し、配偶者は再婚することができる）。</p>
      <p>あくまで、「もとの住所を中心とする」であって、現実にその人が死亡したとは限らないから、どこかで生きている本人が、宣告と同時に権利能力を剥奪されるわけではない。</p>
<div class="kakomon"><a href="pu26min03q.php#q-r02-04-i" title="R2-4-イ他">過去問</a></div>
    </div>
    <div class="blk outer">
      <div class="outer-title" id="A01-02-03-2-04">４　宣告の取消し</div>
      <div class="blk inner">
        <div class="p-card">
          <p class="h6 ind0">1.　意義</p>
          <p class="p6 ind1">失踪宣告は、死亡の擬制であって推定ではないから、本人が生きて帰ってきたからといって宣告は当然には効力を失わない。本人又は利害関係人（検察官を含まない）が、家庭裁判所に失踪宣告の取消しを求めることによってのみ、その効力を失わせることができる（32条１項本文）。</p>
        </div>
        <div class="p-card">
          <p class="h6 ind0">2.　要件</p>
        <div class="p-card">
          <p class="h6 ind3 nobold">① 死亡擬制が事実と反することの証明</p>
          <p class="h6 ind3 nobold">　ⅰ　失踪者が生存すること、又は、ⅱ　宣告によって死亡とみなされた時と異なる時に死亡したことの証明がなされること、が必要である。</p>
          <p class="h6 ind3 nobold">② 本人又は利害関係人による失踪宣告取消しの請求</p>
        </div>
<div class="kakomon"><a href="pu26min03q.php#q-h14-01-3" title="H14-1-3他">過去問</a></div>
        </div>
        <div class="p-card">
          <p class="h6 ind0">3.　効果</p>
        <div class="p-card">
          <p class="h6 ind1">(1) 原則</p>
          <p class="p6 ind2">取消しによって失踪宣告がなかったものと同じに扱われる。</p>
        </div>
<div class="kakomon"><a href="pu26min03q.php#q-h14-01-5" title="H14-1-5">過去問</a></div>
        <div class="p-card">
          <p class="h6 ind1">(2) 例外</p>
        <div class="p-card" id="min03-q21">
          <p class="h6 ind2 nobold">(a) 直接取得者の「現存利益」返還義務（32条２項）</p>
          <p class="p6 ind3">失踪宣告によって「財産を得た者」は、宣告の取消しがあった場合でも「現に利益を受けている限度においてのみ」（現存利益）返還義務を負う。</p><br>
          <p class="p6 ind3">Ｑ　32条２項の「財産を得た者」は、善意悪意を問わないのか。</p>
          <p class="p6 ind3">　悪意であっても現存利益の返還で足りるのか、１項後段と異なり善意悪意を区別しておらず問題となる。</p>
          <p class="p6 ind3">　→　善意者のみ適用する。</p>
          <p class="p6 ind3">　悪意者は704条に基づき、受けた利益すべてに利息を付して返還することを要する。</p>
          <p class="p6 ind3">（理由）</p>
          <p class="p6 ind3">　財産を得た者の返還義務の法的性質は不当利得返還義務であるところ、悪意者については一般の不当利得と区別する合理的理由がない。</p>
        </div>
<div class="kakomon"><a href="pu26min03q.php#q-h18-05-a" title="H18-5-ア他">過去問</a></div>
        <div class="p-card" id="min03-q24">
          <p class="h6 ind2 nobold">(b) 「善意」でした行為は影響を受けない（32条１項後段）</p>
          <p class="p6 ind3">失踪宣告後その取消し前に「善意でした行為」はその効力に影響がない。</p><br>
          <p class="p6 ind3">Q1　「善意」は一方の善意で足りるか、双方の善意を要求するのか。</p>
          <p class="p6 ind3">　→　双方善意必要説（大判昭13.２.７）</p>
          <p class="p6 ind3">　失踪宣告後相続人となった者が相続財産を処分した場合、その契約が宣告取消しにかかわらず効力を有するには、契約当事者双方が善意であったことを要する。</p>
          <p class="p6 ind3">　（理由）</p>
          <p class="h6 ind3 nobold">　① 「善意でした行為」という文言に素直な解釈である。</p>
          <p class="h6 ind3 nobold">　② 失踪宣告の取消しは失踪者の静的安全保護のための制度であるから、例外は限定すべきである。</p><br>
<div class="kakomon"><a href="pu26min03q.php#q-r02-04-u" title="R2-4-ウ他">過去問</a></div>
          <p class="p6 ind4">Q2　善意の権利取得者からの悪意の転得者も有効に権利を取得できるのか。</p><br>
          <p class="p6 ind4">Ａ　絶対的構成（通説）</p>
          <p class="p6 ind4">　転得者は前主の地位の承継を主張でき、「善意」者からの転得者は悪意でも保護される。</p>
          <p class="p6 ind4">　（理由）</p>
          <p class="h6 ind3 nobold">　① 法律関係の早期安定を図る。</p>
          <p class="h6 ind3 nobold">　② 相対的構成では、中間の善意者が追奪担保責任（561条）を負う結果、善意者保護の実質が失われる。</p><br>
          <p class="p6 ind4">Ｂ　相対的構成（少数説）</p>
          <p class="p6 ind4">　処分行為の効力は当事者ごとに相対的に決すべきであり、悪意の転得者は、「善意」者から取得しても保護されない。</p>
          <p class="p6 ind4">　（理由）</p>
          <p class="p6 ind4">　善意者が介在すれば悪意でも保護されるというのでは具体的正義に反する。</p><br>
<div class="kakomon"><a href="pu26min03q.php#q-h18-05-o" title="H18-5-オ">過去問</a></div>
          <p class="p6 ind4">Q3　婚姻についても32条１項後段の適用があるか。</p>
          <p class="p6 ind4">　「行為」に婚姻が含まれるか、身分行為は当事者の意思を尊重すべきであり問題となる。</p>
          <p class="p6 ind4">　→　含まれる。</p>
          <p class="p6 ind4">　（理由）</p>
          <p class="p6 ind4">　単に「行為」との文言からは、身分行為も含まれるとするのが素直である。</p>
          <p class="p6 ind4">※結局、双方善意であれば後婚のみ残る。そうでない場合には重婚状態が生じ、失踪宣告の取消しは、前婚の離婚原因（770条１項５号）、後婚の取消し原因（744条、732条）となる。</p>
        </div>
        </div>
        </div>
      </div>
    </div>
    </div>
    </div>
  </div>
  <div class="p-card chap-card">
    <h2 id="A01-03">第３章　法人</h2>
    <div class="p-card sec-card">
      <h3 id="A01-03-01">第１節　法人の意義</h3>
    <div class="blk outer">
      <div class="outer-title" id="A01-03-01-0-01">１　意義</div>
      <p>：自然人以外のもので、法律上、独立して権利・義務の主体となることができるもの</p>
    </div>
    <div class="blk outer">
      <div class="outer-title" id="A01-03-01-0-02">２　趣旨</div>
      <p>社団や財団が取引社会において現実に有する役割･地位にかんがみ、権利義務の帰属主体に昇格させる。</p>
    </div>
    <div class="blk outer">
      <div class="outer-title" id="A01-03-01-0-03">３　効果</div>
      <div class="blk inner">
        <div class="p-card">
          <p class="h6 ind0">1.　法人格を得た場合の効果</p>
          <p class="p6 ind1">ある団体が法人格者である、ということの意味は次の点にある。</p>
        <div class="p-card">
          <p class="h6 ind3 nobold">① 法人の名において権利を取得し、義務を負担する。</p>
          <p class="p6 ind4">権利は、代表者や構成員に帰属するのでなく、端的に団体に帰属する。団体の義務は団体のみに帰属する。明文はないが、団体債務について、構成員は有限責任を負うにすぎないのが、原則である。</p>
        </div>
        <div class="p-card">
          <p class="h6 ind3 nobold">② 所有不動産について団体名で登記することができる。</p>
        </div>
        <div class="p-card">
          <p class="h6 ind3 nobold">③ 取引及び訴訟において、自己の名で登場する。</p>
        </div>
        </div>
        <div class="p-card">
          <p class="h6 ind0">2.　権利能力の制限</p>
          <p class="p6 ind1">身分上の権利義務、肉体の存在を前提とする権利義務は法人には帰属し得ない。また、精神的苦痛による損害賠償請求権（慰謝料請求権）も享有できない。</p>
          <p class="p6 ind1">ただし、人格権（名称権、名誉権など）は認められる（最判昭39.１.28）。</p>
        </div>
      </div>
    </div>
    </div>
    <div class="p-card sec-card">
      <h3 id="A01-03-02">第２節　権利能力なき社団</h3>
    <div class="blk outer">
      <div class="outer-title" id="A01-03-02-0-01">１　意義</div>
      <p>：社団としての実体を有しながら、法律上権利義務の帰属主体たり得ない団体（ex. 校友会、町内会自治会）</p>
      <p>以下のようなものがこれに該当する。</p>
      <div class="blk inner">
        <div class="p-card">
          <p class="h6 ind3 nobold">① 法人となる意思のない社団</p>
        </div>
        <div class="p-card">
          <p class="h6 ind3 nobold">② 法人となる途中の（設立中の）社団</p>
          <p class="p6 ind4">このような団体は、「法人格」を取得していないものの、実質的には法人と同様の組織を有し、構成員から独立して行動している。そこで、このような団体　については、できる限り、一般社団法人と同様の扱いをすべきである。</p>
        </div>
      </div>
    </div>
    <div class="blk outer">
      <div class="outer-title" id="A01-03-02-0-02">２　要件</div>
      <p>できる限り法人と同様の扱いをされるべき「権利能力なき社団」といい得るためには、以下のような要件を具備していることが必要とされる（最判昭39.10.15）。</p>
      <div class="blk inner">
        <div class="p-card">
          <p class="h6 ind3 nobold">① 団体としての組織を備えていること</p>
          <p class="h6 ind3 nobold">② 多数決の原則が行われていること</p>
          <p class="h6 ind3 nobold">③ 構成員の変更にもかかわらず団体そのものが存続すること</p>
          <p class="h6 ind3 nobold">④ 代表の方法、総会の運営、財産の管理その他団体としての主要な点が確定していること</p>
        </div>
      </div>
<div class="kakomon"><a href="pu26min03q.php#q-h03-04-a" title="H3-4-ア">過去問</a></div>
    </div>
    <div class="blk outer">
      <div class="outer-title" id="A01-03-02-0-03">３　効果</div>
      <div class="blk inner">
        <div class="p-card">
          <p class="h6 ind0">1.　対内関係</p>
          <p class="p6 ind1">権利能力なき社団の対内関係については、その実体が社団であることから社団法人の規定を類推適用すべきである（通説）。</p>
          <p class="p6 ind1">代表者は、社団の名において、社団の代表者として法律行為をすることができる（最判昭39.10.15）。</p>
        </div>
        <div class="p-card">
          <p class="h6 ind0">2.　対外関係</p>
        <div class="p-card" id="min03-q29">
          <p class="h6 ind1">(1) 財産の帰属</p>
        <div class="p-card">
          <p class="h6 ind3 nobold">ⅰ　財産帰属形態の一般的法律関係</p><br>
          <p class="p6 ind4">Ａ　総有説（最判昭48.10.９・通説）</p>
          <p class="p6 ind4">　権利能力なき社団の財産は、社団を構成する総構成員に総有的に帰属する。</p>
          <p class="p6 ind4">　従って、別段の合意がない限り、構成員の持分権や脱退に際しての財産分割請求権はない。</p>
          <p class="p6 ind4">（理由）</p>
          <p class="p6 ind4">　法人格の不存在を反映しつつ、法人格が存在する場合と同じような結論を導き得る構成によるべきである。</p><br>
          <p class="p6 ind4">Ｂ　合有説</p>
          <p class="p6 ind4">　財産や債務は構成員に「合有」（：「共有」と「総有」の中間にあり、構成員は潜在的な持分は有するものの、持分処分の自由や目的物の分割請求をすることができないとする共同所有形態）的に帰属する。</p>
          <p class="p6 ind4"><img class="embed-img" src="img/min03-02.png" alt="min03-02.png"></p>
        </div>
        <div class="p-card">
          <p class="h6 ind3 nobold">ⅱ　登記</p><br>
          <p class="p6 ind4">Ｑ　権利能力なき社団の資産たる不動産について、いかなる公示方法が採られるべきか問題となる。</p><br>
          <p class="p6 ind4">→　代表者個人名義説（最判昭47.６.２・登記実務）</p>
          <p class="p6 ind4">権利能力なき社団の不動産については、代表者の個人名義で登記するか、あるいは社団構成員全員の共有名義で登記すべきである。</p>
          <p class="p6 ind4">社団の名称に代表者名を付記することも認めない。</p>
          <p class="p6 ind4">（理由）</p>
          <p class="h6 ind3 nobold">① 法人が申請する場合には登記事項証明書又は主務官庁の証明書で代表者の代表権限の有無を認定でき、それによって法人の存在を公証することができるが、権利能力なき社団にはこのような方法がない。</p>
          <p class="h6 ind3 nobold">② 不当な財産隠しや執行逃れを防ぐことができる。</p>
        </div>
<div class="kakomon"><a href="pu26min03q.php#q-h16-04-i" title="H16-4-イ他">過去問</a></div>
        </div>
        <div class="p-card" id="min03-q31">
          <p class="h6 ind1">(2) 債務の帰属</p><br>
          <p class="p6 ind2">Ｑ　権利能力なき社団の債務につき、構成員が個人的に責任を負うことになるかが問題となる。</p><br>
          <p class="p6 ind2">→　否定説（最判昭48.10.９）</p>
          <p class="p6 ind2">権利能力なき社団の代表者が社団名義でした取引上の債務は、その社団構成員全員に総有的に帰属し、社団の総有財産だけがその責任財産となり、代表者や構成員各自は、直接には個人的債務ないし責任を負わない。</p>
          <p class="p6 ind2">（理由）</p>
          <p class="h6 ind3 nobold">① 法人の代表者・構成員は法人・団体の債務について個人責任を負わない。代理人も本人の債務について個人責任を負わない。にもかかわらず、権利能力なき社団の代表者や構成員にのみ個人責任を負わせるのはバランスを欠く。</p>
          <p class="h6 ind3 nobold">② 代表者や構成員を保証人とすることで、危険は回避できる。</p>
          <div class="sp"></div>
<div class="kakomon"><a href="pu26min03q.php#q-h16-04-ah03-04-u" title="H16-4-ア他">過去問</a></div>
        </div>
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
