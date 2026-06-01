<?php require_once 'auth_check.php'; ?>
<!doctype html>
<html lang="ja">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>民法 Unit34</title>
  <link rel="stylesheet" href="css/style.css">
</head>
<body>
<script>(function(){try{var v=localStorage.getItem('tocHidden');if(v==='1'){document.body.classList.add('toc-hidden');}}catch(e){}})();</script>
<a id="top"></a>
<header>
  <div class="wrap hrow1">
    <h1>民法 Unit34</h1>
    <div class="hnav">
      <a href="pu_index.php">トップへ</a>
      <a href="pu26min33.php">前へ</a>
      <a href="pu26min35.php">次へ</a>
      <a href="pu26min34q.php">肢別へ</a>
    </div>
  </div>
  <div class="wrap">
    <div class="toc-wrap">
      <div class="toc" id="toc">
        <div class="toc-title"><strong>目次</strong>　<a href="#content">本文へ↓</a></div>
        <ul>
<li><a href="#A04">第４編　債権総論</a>
  <ul>
    <li><a href="#A04-02">第２章　責任財産の保全</a>
      <ul>
        <li><a href="#A04-02-02">第２節　詐害行為取消権（424条）</a>
          <ul>
            <li><a href="#A04-02-02-0-01">１　意義</a></li>
            <li><a href="#A04-02-02-0-02">２　要件</a></li>
            <li><a href="#A04-02-02-0-03">３　詐害行為取消権の対象となる権利</a></li>
            <li><a href="#A04-02-02-0-04">４　詐害行為取消権の行使方法等</a></li>
            <li><a href="#A04-02-02-0-05">５　詐害行為取消権の行使の効果</a></li>
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
<section class="sec-title" id="A04">
  <h2>第４編　債権総論</h2>
  <div class="p-card chap-card">
    <h2 id="A04-02">第２章　責任財産の保全</h2>
    <div class="p-card sec-card">
      <h3 id="A04-02-02">第２節　詐害行為取消権（424条）</h3>
    <div class="blk outer">
      <div class="outer-title" id="A04-02-02-0-01">１　意義</div>
      <p>債権者は、債務者が債権者を害することを知ってした行為の取消しを裁判所に請求することができる（424条１項本文）。</p>
      <p>ex．Ａにお金を借りているＢが、自分の唯一の財産である甲不動産をＣに贈与してしまった</p>
      <p><img class="embed-img" src="img/min34-01.png" alt="min34-01.png"></p>
    </div>
    <div class="blk outer">
      <div class="outer-title" id="A04-02-02-0-02">２　要件</div>
      <div class="blk inner">
        <div class="p-card">
          <p class="h6 ind0">1.　詐害行為取消請求権の一般的要件</p>
          <p class="p6 ind1">詐害行為取消請求権の要件は、受益者に対する詐害行為取消請求権と、転得者に対する詐害行為取消請求権とに区別して規律されている（424条の５）。</p>
          <p class="p6 ind1">受益者に対する詐害行為取消請求権の一般的要件は、以下のとおりである（424条）。</p>
        <div class="p-card">
          <p class="h6 ind3 nobold">①　被保全債権が存在していたこと</p>
          <p class="h6 ind3 nobold">②　被保全債権の発生原因が詐害行為前に生じたものであること</p>
          <p class="h6 ind3 nobold">③　債権者にとって自己の債権を保全する必要があること</p>
          <p class="h6 ind3 nobold">④　債務者が財産権を目的とする行為をしたこと</p>
          <p class="h6 ind3 nobold">⑤　その行為が債権者を害するものであること</p>
          <p class="h6 ind3 nobold">⑥　その行為が債権者を害するものであることを債務者が知っていたこと</p>
          <p class="h6 ind3 nobold">⑦　受益者が行為の時において債権者を害することを知っていたこと</p>
        </div>
        </div>
        <div class="p-card" id="min34-q1">
          <p class="h6 ind0">2.　債権者の有する権利（被保全債権）の要件（上記①及び②）</p>
        <div class="p-card">
          <p class="h6 ind1">(1) 被保全債権の発生原因</p>
          <p class="p6 ind2">被保全債権の発生原因が、詐害行為前に生じていることが必要である（424条３項）。</p>
        </div>
        <div class="p-card">
          <p class="h6 ind1">(2) 対象となり得ない権利</p>
        <div class="p-card">
          <p class="h6 ind2 nobold">(a) 強制執行によって実現することのできない債権（強制力を欠く債権）を被保全債権とする詐害行為取消請求権を行使することはできない（424条４項、最判平9.2.25）。</p>
        </div>
        <div class="p-card">
          <p class="h6 ind2 nobold">(b) 特定物債権であっても、その目的物を債務者が処分することにより無資力になったときには、特定物債権は損害賠償債権に転化するため、その処分行為を取り消すことができる（最大判昭36.7.19）。</p>
          <p class="p6 ind3">ex．不動産の二重譲渡で、売主が無資力となった場合、登記を備えられなかった買主の売主に対する引渡請求権は、もう一方の買主への移転登記により履行不能となり、売主に対する損害賠償請求権に転化するため、詐害行為取消権を行使することができる。</p>
          <p class="p6 ind3">※　取消権を行使した買主は、自己に登記を移転することを請求できない（最判昭53.10.5）。</p>
        </div>
<div class="kakomon"><a href="pu26min34q.php#q-h30-16-a" title="H30-16-ア">過去問</a></div>
        </div>
        </div>
        <div class="p-card" id="min34-q6">
          <p class="h6 ind0">3.　債務者等の悪意（上記（1）⑥及び⑦）</p>
        <div class="p-card">
          <p class="h6 ind1">(1) 債務者等の悪意</p>
          <p class="p6 ind2">債務者及び受益者が、当該行為が行為の時に債権者を害することを知っていたこと（悪意）が必要である（424条1項）。</p>
        </div>
        <div class="p-card">
          <p class="h6 ind1">(2) 転得者に対する詐害行為取消請求</p>
          <p class="p6 ind2">転得者に対する詐害行為取消請求権は、次の各号に掲げる区分に応じ、それぞれ当該各号に定める場合に限り、その転得者に対しても、詐害行為取消請求をすることができる（424条の5）。</p>
<div class="jobun">
① その転得者が受益者から転得した者である場合　その転得者が、転得の当時、債務者がした行為が債権者を害することを知っていたとき（同条１号）。
② その転得者が他の転得者から転得した者である場合　その転得者及びその前に転得した全ての転得者が、それぞれの転得の当時、債務者がした行為が債権者を害することを知っていたとき（同条２号）。
</div>
        </div>
<div class="kakomon"><a href="pu26min34q.php#q-h20-18-e" title="H20-18-エ">過去問</a></div>
        </div>
      </div>
    </div>
    <div class="blk outer">
      <div class="outer-title" id="A04-02-02-0-03">３　詐害行為取消権の対象となる権利</div>
      <div class="blk inner">
        <div class="p-card">
          <p class="h6 ind0">1.　総説</p>
          <p class="p6 ind1">424条で詐害行為該当性の判断にかかる一般的基準を規定し、424条の２以下で、債権者間の平等や、債務者にとっての行為の有用性を考慮すべき行為類型について424条の一般的基準を修正する特則規定を設けている。</p>
        </div>
        <div class="p-card">
          <p class="h6 ind0">2.　一般的基準</p>
        <div class="p-card">
          <p class="h6 ind3 nobold">①債務者が無資力であること、②財産権を目的とする行為であることが必要である。</p>
        </div>
        <div class="p-card">
          <p class="h6 ind1">(1) 債務者が無資力であること</p>
          <p class="p6 ind2">詐害行為時・取消権行使時の双方の時点で必要である。よって、取消権行使時に債務者の資力が回復していれば取消権行使はできない。</p>
        </div>
        <div class="p-card">
          <p class="h6 ind1">(2) 財産権を目的とする行為であること（424条２項）</p>
          <p class="p6 ind2">単独行為（ex．債務免除）や合同行為（ex.会社設立）でもよい。身分行為は取消の対象とならないのが原則である。</p>
          <p class="p6 ind2"><img class="embed-img" src="img/min34-03.png" alt="min34-03.png"></p>
        </div>
<div class="kakomon"><a href="pu26min34q.php#q-r06-16-i" title="R6-16-イ">過去問</a></div>
        </div>
        <div class="p-card">
          <p class="h6 ind0">3.　特則</p>
        <div class="p-card" id="min34-q16">
          <p class="h6 ind1">(1) 相当の対価を得てした財産の処分行為の特則（424条の２）</p>
        <div class="p-card">
          <p class="h6 ind2 nobold">(a) 意義</p>
          <p class="p6 ind3">相当の対価を得てした財産の処分行為は、原則として詐害行為取消請求の対象とならず、例外的な場合に限り、詐害行為取消請求の対象となる。</p>
          <p class="p6 ind3">相当の対価を得てした財産の処分を原則として詐害行為取消請求の対象とすると、取引の相手方を萎縮させ、経済的危機にある債務者から再建の機会を奪うおそれがあることなどが理由に挙げられる。</p>
        </div>
        <div class="p-card">
          <p class="h6 ind2 nobold">(b) 要件</p>
          <p class="p6 ind3">相当対価処分は、次に掲げる要件のいずれにも該当する場合に限り、詐害行為取消請求の対象となる（424条の２）。</p>
<div class="jobun">
① その行為が、不動産の金銭への換価その他の当該処分による財産の種類の変更により、債務者において隠匿、無償の供与その他の債権者を害することとなる処分（以下この条において「隠匿等の処分」という。）をするおそれを現に生じさせるものであること（同条１号）。
② 債務者が、その行為の当時、対価として取得した金銭その他の財産について、隠匿等の処分をする意思を有していたこと（同条２号）。
③ 受益者が、その行為の当時、債務者が隠匿等の処分をする意思を有していたことを知っていたこと（同条３号）。
</div>
        </div>
<div class="kakomon"><a href="pu26min34q.php#q-r06-16-a" title="R6-16-ア">過去問</a></div>
        </div>
        <div class="p-card">
          <p class="h6 ind1">(2) 特定の債権者に対する担保の供与等の特則（424条の３）</p>
        <div class="p-card">
          <p class="h6 ind2 nobold">(a) 意義</p>
          <p class="p6 ind3">弁済その他の債務消滅行為は、原則として詐害行為取消請求の対象とはならず、例外的な場合に限り、詐害行為取消請求の対象となる。これは、責任財産を減少させる行為（責任財産減少行為）のみならず、特定の債権者を利する行為（偏頗行為）についても詐害行為取消請求の対象となりうることを認め、偏頗行為の観点から特則を定めるものである。</p>
        </div>
        <div class="p-card">
          <p class="h6 ind2 nobold">(b) 要件</p>
          <p class="p6 ind3">債権者に対する本旨弁済その他の債務消滅行為は、次に掲げる要件のいずれにも該当する場合に限り、詐害行為取消請求の対象となる（424条の３第１項）。なお、本項の対象になるのは、同条２項の反対解釈から、義務的な行為に限られる。</p>
<div class="jobun">
① その行為が、債務者が支払不能（債務者が、支払能力を欠くために、その債務のうち弁済期にあるものにつき、一般的かつ継続的に弁済することができない状態をいう。次項第１号において同じ。）の時に行われたものであること（同項１号）。
② その行為が、債務者と受益者とが通謀して他の債権者を害する意図をもって行われたものであること（同項２号）。
</div>
          <p class="p6 ind3">また、債権者に対する非義務的な行為（代物弁済のように債務者の債務消滅行為が債務者の義務に属さない場合や、期限前弁済のようにその行為をした時点では債務者の義務に属さない場合）は、次に掲げる要件のいずれにも該当する場合に限り、詐害行為取消請求の対象となる（424条の３第２項）。</p>
<div class="jobun">
① その行為が、債務者が支払不能になる前30日以内に行われたものであること（同項１号）。
② その行為が、債務者と受益者とが通謀して他の債権者を害する意図をもって行われたものであること（同項２号）。
</div>
        </div>
        </div>
        <div class="p-card" id="min34-q17">
          <p class="h6 ind1">(3) 過大な代物弁済等の特則（424条の４）</p>
        <div class="p-card">
          <p class="h6 ind2 nobold">(a) 意義</p>
          <p class="p6 ind3">債務者の債務消滅行為が過大な場合において、424条の要件に該当するときには、424条の３の規定にかかわらず、債務消滅行為の過大な部分について詐害行為取消請求をすることができるとした。</p>
          <p class="p6 ind3">その趣旨は、代物弁済は、それが過大な場合に詐害行為としての側面を持つとともに、偏頗行為としての側面を持つことから、過大な部分については、詐害行為としての側面から詐害行為取消請求を認める点にある。</p>
          <p class="p6 ind3">なお、代物弁済等が424条の３第２項の要件に該当する場合には、代物弁済等が過大であるかにかかわらず、全体として詐害行為取消請求の対象となる。</p>
        </div>
        <div class="p-card">
          <p class="h6 ind2 nobold">(b) 要件</p>
          <p class="p6 ind3">要件は、424条の要件を充足することに加えて、代物弁済等の債務消滅行為が「受益者の受けた給付の価額がその行為によって消滅した債務の額より過大である」ことである。</p>
          <p class="p6 ind3">効果は、「その消滅した債務の額に相当する部分以外の部分」につき、詐害行為取消請求をすることができるということである。</p>
        </div>
<div class="kakomon"><a href="pu26min34q.php#q-r06-16-u" title="R6-16-ウ">過去問</a></div>
        </div>
        </div>
      </div>
    </div>
    <div class="blk outer">
      <div class="outer-title" id="A04-02-02-0-04">４　詐害行為取消権の行使方法等</div>
      <div class="blk inner">
        <div class="p-card">
          <p class="h6 ind0">1.　行使方法</p>
          <p class="p6 ind1">詐害行為取消権は、裁判上で行使することを要する。</p>
        </div>
        <div class="p-card">
          <p class="h6 ind0">2.　被告及び訴訟告知（424条の７）</p>
        <div class="p-card">
          <p class="h6 ind1">(1) 被告（424条の７第１項）</p><br>
          <p class="p6 ind2">　受益者に対する訴え：受益者</p>
          <p class="p6 ind2">　転得者に対する訴え：転得者</p><br>
          <p class="p6 ind2">債務者を被告とする必要はない。これは、詐害行為取消請求訴訟の実体は、債務者の責任財産に関する争いであり、債務者に実質的な利害関係がないことが多く、債務者を被告とすることを強制する必要性が低く、訴訟告知を義務付けることで債務者の手続保障を確保することが可能であることを理由とするものである。</p>
        </div>
        <div class="p-card">
          <p class="h6 ind1">(2) 訴訟告知（424条の７第２項）</p>
          <p class="p6 ind2">債権者は、詐害行為取消請求に係る訴えを提起したときは、遅滞なく、債務者に対し、訴訟告知をしなければならない（424条の７第２項）。</p>
          <p class="p6 ind2">これは、債務者にも詐害行為取消請求を認容する確定判決の効力が及ぶ（425条）ことから、債務者に対する手続保障を確保する必要があることを理由とするものである。</p>
        </div>
        </div>
        <div class="p-card">
          <p class="h6 ind0">3.　請求内容（424条の６）</p>
        <div class="p-card">
          <p class="h6 ind1">(1) 債務者がした行為の取消し</p>
        </div>
        <div class="p-card">
          <p class="h6 ind1">(2) 財産の返還</p>
          <p class="p6 ind2">債権者は、債務者がした行為の取消しとともに、その行為によって受益者又は転得者に移転した財産の返還を請求することができる（424条の６第１項前段、同条第２項前段）。</p>
        </div>
        <div class="p-card">
          <p class="h6 ind1">(3) 価格の償還</p>
          <p class="p6 ind2">受益者又は転得者がその財産の返還をすることが困難であるときは、債権者は、その価額の償還を請求することができる（424条の６第１項後段、同条第２項後段）。</p>
        </div>
        </div>
        <div class="p-card" id="min34-q19">
          <p class="h6 ind0">4.　債権者への支払い又は引渡し等</p>
        <div class="p-card">
          <p class="h6 ind1">(1) 債権者への支払又は引渡し（424条の９）</p>
          <p class="p6 ind2">債権者が、上記3.（2）又は（3）の請求によって金銭の支払い又は動産の引渡しを求めるときは、直接自己への支払い又は引渡しを求めることができる（424条の９第１項、同条第２項）</p>
          <p class="p6 ind2">これによって、受益者又は転得者は、債務者に対して金銭支払又は動産引渡しをする必要がなくなる。これらの規定は、判例法理（大判大10.6.18等）を明文化するものである。</p>
          <p class="p6 ind2">登記移転請求の場合は債務者の受領は不要なので、債務者名義にするよう請求できるにとどまる（最判昭53.10.５）。</p>
        </div>
        <div class="p-card">
          <p class="h6 ind1">(2) 事実上の優先権</p>
          <p class="p6 ind2">取消債権者が債権の目的物と同一又は同種の物（特に金銭）を自己に直接引き渡させた場合、①詐害行為の相手方である受益者は、自己の債権に基づいて按分額の分配を要求する権利を有さず、また②取消債権者は他の債権者に分配する義務を有さない（最判昭37.10.９）。従って、自己の債権と債務者への引渡義務とを相殺することにより事実上優先弁済を受ける結果となる。</p>
          <p class="p6 ind2">※　取消債権者に事実上の優先弁済権を認めると、債権回収に努力した受益者である債権者との公平を害するとの批判がある。</p>
        </div>
<div class="kakomon"><a href="pu26min34q.php#q-h20-18-i" title="H20-18-イ">過去問</a></div>
        </div>
        <div class="p-card">
          <p class="h6 ind0">5.　取消しの範囲</p>
          <p class="p6 ind1">債権者は、詐害行為取消請求をする場合において、債務者がした行為の目的が可分であるときは、自己の債権の額の限度においてのみ、その行為の取消しを請求することができる（424条の８第１項）。</p>
        </div>
        <div class="p-card" id="min34-q21">
          <p class="h6 ind0">6.　詐害行為取消請求権の行使制限（426条）</p>
          <p class="p6 ind1">以下の①又は②の期間を経過したときは、詐害行為取消請求に係る訴えを提起することができない（426条）。「提起することができない。」とあるため、出訴期間である。</p>
        <div class="p-card">
          <p class="h6 ind3 nobold">①　債務者が債権者を害することを知って行為をしたことを債権者が知った時から２年を経過したとき</p>
          <p class="h6 ind3 nobold">②　行為の時から10年を経過したとき</p>
        </div>
<div class="kakomon"><a href="pu26min34q.php#q-h11-07-o" title="H11-7-オ">過去問</a></div>
        </div>
      </div>
    </div>
    <div class="blk outer">
      <div class="outer-title" id="A04-02-02-0-05">５　詐害行為取消権の行使の効果</div>
      <div class="blk inner">
        <div class="p-card">
          <p class="h6 ind0">1.　認容判決の効力が及ぶ者の範囲（425条）</p>
          <p class="p6 ind1">詐害行為取消請求を認容する確定判決の効力は、債務者及びそのすべての債権者に対しても効力を生じる（425条）。これは、被告でない債務者に対しても確定判決の効力が及ぶとしたものである。</p>
        </div>
        <div class="p-card">
          <p class="h6 ind0">2.　受益者に対する詐害行為取消請求の効果</p>
        <div class="p-card">
          <p class="h6 ind1">(1) 債務者の受けた反対給付に関する受益者の権利（425条の２）</p>
          <p class="p6 ind2">債務者の財産処分行為が取り消された場合、受益者は、債務者に対して以下のいずれかを請求できる。</p>
        <div class="p-card">
          <p class="h6 ind3 nobold">①　反対給付の返還（現物返還）</p>
          <p class="h6 ind3 nobold">②　①が困難であるときは、価額による返還</p>
        </div>
        </div>
        <div class="p-card">
          <p class="h6 ind1">(2) 受益者の債権の回復（425条の３）</p>
          <p class="p6 ind2">債務者がした債務の消滅行為が取り消され（424条の４の規定により取り消された場合を除く。）、受益者が債務者から受けた給付の返還又はその価額を償還したときは、受益者の債務者に対する債権が復活する（425条の３）。</p>
        </div>
        </div>
        <div class="p-card">
          <p class="h6 ind0">3.　転得者に対する詐害行為取消請求の効果</p>
          <p class="p6 ind1">転得者に対する債務者の行為が取り消されたときは、転得者は以下の権利行使ができる（425条の４）。</p>
        <div class="p-card">
          <p class="h6 ind3 nobold">①　425条の２に規定する行為が取り消された場合</p>
          <p class="p6 ind4">　受益者の債務者に対する反対給付の返還請求権又は価額の償還請求権</p>
          <p class="h6 ind3 nobold">②　債務者がした債務の消滅行為が取り消された場合</p>
          <p class="p6 ind4">　425条の３の規定により回復すべき受益者の債務者に対する債権</p>
        </div>
        </div>
        <div class="p-card">
          <p class="h6 ind0">4.　被保全債権の時効更新の有無</p>
          <p class="p6 ind1">取消債権者が受益者を相手として詐害行為取消しの訴えを提起しても、その被保全債権の消滅時効の更新・完成猶予の効力は生じない（最判昭37.10.12）。</p><br>
          <p class="p6 ind1">【債権者代位権と詐害行為取消権の比較】</p>
          <p class="p6 ind1"><img class="embed-img" src="img/min34-07.png" alt="min34-07.png"></p>
          <div class="sp"></div>
        </div>
<div class="kakomon"><a href="pu26min34q.php#q-h30-16-e" title="H30-16-エ">過去問</a></div>
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
