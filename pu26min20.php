<?php require_once 'auth_check.php'; ?>
<!doctype html>
<html lang="ja">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>民法 Unit20</title>
  <link rel="stylesheet" href="css/style.css">
</head>
<body>
<script>(function(){try{var v=localStorage.getItem('tocHidden');if(v==='1'){document.body.classList.add('toc-hidden');}}catch(e){}})();</script>
<a id="top"></a>
<header>
  <div class="wrap hrow1">
    <h1>民法 Unit20</h1>
    <div class="hnav">
      <a href="pu_index.php">トップへ</a>
      <a href="pu26min19.php">前へ</a>
      <a href="pu26min21.php">次へ</a>
      <a href="pu26min20q.php">肢別へ</a>
    </div>
  </div>
  <div class="wrap">
    <div class="toc-wrap">
      <div class="toc" id="toc">
        <div class="toc-title"><strong>目次</strong>　<a href="#content">本文へ↓</a></div>
        <ul>
<li><a href="#A02">第２編　物権</a>
  <ul>
    <li><a href="#A02-03">第３章　所有権</a>
      <ul>
        <li><a href="#A02-03-04">第４節　共有</a>
          <ul>
            <li><a href="#A02-03-04-1">Ⅰ　共有物の法律関係</a>
              <ul>
            <li><a href="#A02-03-04-1-01">１　総説</a></li>
            <li><a href="#A02-03-04-1-02">２　共有の効果</a></li>
            <li><a href="#A02-03-04-1-03">３　共有物の管理者制度</a></li>
            </ul>
          </li>
            <li><a href="#A02-03-04-2">Ⅱ　共有関係の解消</a>
              <ul>
            <li><a href="#A02-03-04-2-01">１　共有物の分割</a></li>
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
<section class="sec-title" id="A02">
  <h2>第２編　物権</h2>
  <div class="p-card chap-card">
    <h2 id="A02-03">第３章　所有権</h2>
    <div class="p-card sec-card">
      <h3 id="A02-03-04">第４節　共有</h3>
    <div class="p-card rank4-card">
      <p id="A02-03-04-1" class="h6 ind0">Ⅰ　共有物の法律関係</p>
    <div class="blk outer">
      <div class="outer-title" id="A02-03-04-1-01">１　総説</div>
      <div class="blk inner">
        <div class="p-card">
          <p class="h6 ind0">1.　意義</p>
          <p class="p6 ind1">共有：１つの物を数人が共同で所有すること</p>
        </div>
        <div class="p-card">
          <p class="h6 ind0">2.　共有の成立</p>
          <p class="p6 ind1">一般には契約により生じるが、相続など法律の規定によっても生じる。</p>
        </div>
        <div class="p-card">
          <p class="h6 ind0">3.　共有の形態</p>
          <p class="p6 ind1"><img class="embed-img" src="img/min20-01.png" alt="min20-01.png"></p>
        </div>
<div class="kakomon"><a href="pu26min20q.php#q-h25-09-i" title="H25-9-イ">過去問</a></div>
      </div>
    </div>
    <div class="blk outer">
      <div class="outer-title" id="A02-03-04-1-02">２　共有の効果</div>
      <div class="blk inner">
        <div class="p-card" id="min20-q3">
          <p class="h6 ind0">1.　持分権</p>
        <div class="p-card">
          <p class="h6 ind1">(1) 持分権の意義</p>
          <p class="p6 ind2">：各共有者が共有物に対して有する権利</p>
        </div>
        <div class="p-card">
          <p class="h6 ind1">(2) 持分の割合</p>
          <p class="p6 ind2">持分に関する合意がない場合には、各共有者の持分は、相等しいものと推定する（250条）。</p>
          <p class="p6 ind2">相続による遺産共有の場合には、法定相続分又は指定相続分が各相続人の共有持分となる（898条２項）。</p>
        </div>
        <div class="p-card">
          <p class="h6 ind1">(3) 持分権の譲渡</p>
          <p class="p6 ind2">自由にできる。</p>
        </div>
        <div class="p-card">
          <p class="h6 ind1">(4) 持分権の主張</p>
        <div class="p-card">
          <p class="h6 ind2 nobold">(a) 持分権確認請求</p>
          <p class="p6 ind3">単独でできる（最判昭40.５.20）。</p>
        </div>
        <div class="p-card">
          <p class="h6 ind2 nobold">(b) 持分権に基づく妨害排除請求</p>
          <p class="p6 ind3">保存行為として単独でできる（最判昭31.５.10）。</p>
        </div>
        <div class="p-card">
          <p class="h6 ind2 nobold">(c) 持分権に基づく引渡請求</p>
          <p class="p6 ind3">判例には、不可分債権であることを根拠とするもの（大判大10.３.18）と、保存行為であることを根拠とするもの（大判大10.６.13）がある。</p>
        </div>
        <div class="p-card">
          <p class="h6 ind2 nobold">(d) 持分権に基づく登記請求</p>
          <p class="p6 ind3">共有名義変更請求（大判明37.４.29）、持分権移転登記請求（大判大11.７.10）。</p>
          <p class="p6 ind3">不動産の共有者の１人は、共有不動産について実体上の権利を有しないのに持分移転登記を経由している者に対し、単独でその持分移転登記の抹消登記を請求できる（最判平15.７.11）。</p>
        </div>
        <div class="p-card">
          <p class="h6 ind2 nobold">(e) 持分権に基づく時効の完成猶予のための措置</p>
          <p class="p6 ind3">各共有者は、持分権に基づき時効の完成猶予のための措置をとることができると解される。</p>
        </div>
        <div class="p-card">
          <p class="h6 ind2 nobold">(f) 持分権に基づく損害賠償請求</p>
          <p class="p6 ind3">共有物の侵害に対して、共有者は自己の持分についてのみ損害賠償請求をすることができる（最判昭41.３.３）。</p>
        </div>
<div class="kakomon"><a href="pu26min20q.php#q-h07-09-2h31-11-i" title="H7-9-2">過去問</a></div>
        </div>
        </div>
        <div class="p-card" id="min20-q8-1">
          <p class="h6 ind0">2.　共有物の使用</p>
        <div class="p-card">
          <p class="h6 ind1">(1) 使用</p>
          <p class="p6 ind2">各共有者は、共有物の全部について、その持分に応じた使用をすることができる（249条１項）。249条は「使用」と規定するが、処分については別に扱うことを示すにすぎず「収益」も含まれる。</p>
        <div class="p-card">
          <p class="h6 ind2 nobold">(a) 協議</p>
          <p class="p6 ind3">具体的な使用・収益の方法に関する協議は共有物の管理に属するから、持分の価格の過半数で決する。共有物を使用する共有者があるときも、同様とする(252条１項)。つまり、事実上共有物を使用する共有者がいたとしても、その共有者の同意なくして共有物の使用方法を定めることができる（252条１項後段）。</p>
        </div>
        <div class="p-card">
          <p class="h6 ind2 nobold">(b) 協議に基づく特定の共有者の使用の変更</p>
          <p class="p6 ind3">持分の価格の過半数の決定により、特定の共有者が共有物を使用している場合であっても、上記（a）の協議によって当該決定を変更することができる（252条１項後段）。</p>
          <p class="p6 ind3">もっとも、当該決定の変更が共有物を使用する共有者に特別の影響を及ぼすべきときは、その共有者の承諾を得なければならない（252条３項）。「特別の影響を及ぼす」かは具体的な事案によるが、共有物の使用者の変更などは特別の影響を及ぼすと考えられる。</p>
          <p class="p6 ind3">ｅｘ．甲建物を共有するＡ、Ｂ及びＣがおり（持分割合は平等とする）、全員の合意による決定に基づきＣが単独で甲建物を使用している場合、ＡとＢの合意で使用者を「Ａ」と定めることができるが、この場合にはＣの承諾が必要である。</p>
        </div>
<div class="kakomon"><a href="pu26min20q.php#q-pu20-1" title="PU20-1">演習問題</a></div>
        </div>
        <div class="p-card" id="min20-q9">
          <p class="h6 ind1">(2) 使用対価の償還</p>
          <p class="p6 ind2">共有物を使用する共有者は、別段の合意がある場合を除き、他の共有者に対し、自己の持分を超える使用の対価を償還する義務を負う（249条２項）。</p>
        </div>
<div class="kakomon"><a href="pu26min20q.php#q-h17-10-u" title="H17-10-ウ">過去問</a></div>
        <div class="p-card">
          <p class="h6 ind1">(3) 善管注意義務</p>
          <p class="p6 ind2">共有者は、善良な管理者の注意をもって、共有物の使用をしなければならない（249条３項）。共有物を使用する共有者は、他の共有者との関係では、他人の物を管理しているのと同じなので、善良な管理者の注意をもって共有物を保存すべきだからである。</p>
        </div>
        </div>
        <div class="p-card">
          <p class="h6 ind0">3.　共有物に関する決定</p>
          <p class="p6 ind1"><img class="embed-img" src="img/min20-02.png" alt="min20-02.png"></p>
        <div class="p-card" id="min20-q10">
          <p class="h6 ind1">(1) 保存</p>
          <p class="p6 ind2">保存行為は、各共有者がすることができる（252条５項）。</p>
          <p class="p6 ind2">「保存行為」とは、共有物の修補、妨害排除等、共有物の現状を維持する行為をいう。</p>
          <p class="p6 ind2">共有地の不法占拠者に対する妨害排除・明渡請求は保存行為にあたる（大判大７.４.19）。</p>
        </div>
<div class="kakomon"><a href="pu26min20q.php#q-h30-10-o" title="H30-10-オ">過去問</a></div>
        <div class="p-card" id="min20-q13">
          <p class="h6 ind1">(2) 管理</p>
        <div class="p-card">
          <p class="h6 ind2 nobold">(a) 要件</p>
          <p class="p6 ind3">共有物の管理に関する事項は、各共有者の持分の価格の過半数で決する（252条１項前段）。共有物を使用する共有者があるときも、同様とする(252条１項後段)。</p>
          <p class="p6 ind3">当該決定が共有物を使用する共有者に特別の影響を及ぼすべきときは、その共有者の承諾を得なければならない（252条３項）。</p>
        </div>
        <div class="p-card">
          <p class="h6 ind2 nobold">(b) 「管理」に属する行為</p>
        <div class="p-card">
          <p class="h6 ind3 nobold">ⅰ　「管理」とは、共有物の変更を伴わない利用・改良行為をいう。共有物の賃貸借契約の解除や、土地の地目転換を伴わない共有地の整地などがこれに当たる。また、共有物の賃貸借契約の解除も、共有者の持分の価格の過半数で決するので、解除権の不可分性についての544条１項は適用されない（最判昭39.２.25）。</p>
        </div>
        <div class="p-card">
          <p class="h6 ind3 nobold">ⅱ　共有物に以下の期間を超えない賃借権その他の使用及び収益を目的とする権利（以下「賃借権等」という。※）を設定することができる（252条４項）。</p>
        </div>
        <div class="p-card">
          <p class="h6 ind3 nobold">①　樹木の栽植又は伐採を目的とする山林の賃借権等　１０年</p>
          <p class="h6 ind3 nobold">②　①以外の土地の賃借権等　５年</p>
          <p class="h6 ind3 nobold">③　建物の賃借権等　３年</p>
          <p class="h6 ind3 nobold">④　動産の賃借権等　６か月</p>
        </div>
<div class="kakomon"><a href="pu26min20q.php#q-h30-10-a" title="H30-10-ア">過去問</a></div>
        </div>
        </div>
        <div class="p-card" id="min20-q16">
          <p class="h6 ind1">(3) 変更</p>
        <div class="p-card">
          <p class="h6 ind2 nobold">(a) 原則</p>
          <p class="p6 ind3">各共有者は、他の共有者の同意を得なければ、共有物に変更を加えることができない（251条１項）。</p>
          <p class="p6 ind3">「変更」とは、山林の伐採のような物理的変更の他、売却や地上権・抵当権の設定等の法律的処分も含むと解されている。</p>
        </div>
        <div class="p-card">
          <p class="h6 ind2 nobold">(b) 軽微変更の場合</p>
          <p class="p6 ind3">その形状又は効用の著しい変更を伴わないもの（軽微変更）は、各共有者の持分の価格の過半数で決することができる（251条１項かっこ書、252条１項）。</p>
        </div>
<div class="kakomon"><a href="pu26min20q.php#q-h27-10-ah17-10-eh19-10-ah15-11-e" title="H27-10-ア">過去問</a></div>
        </div>
        </div>
        <div class="p-card" id="min20-q18">
          <p class="h6 ind0">4.　共有物の変更・管理に関する非訟手続の規定</p>
        <div class="p-card">
          <p class="h6 ind1">(1) 意義</p>
        <div class="p-card">
          <p class="h6 ind2 nobold">(a) 変更に関する裁判</p>
          <p class="p6 ind3">共有者が他の共有者を知ることができず、又はその所在を知ることができないときは、裁判所は、共有者の請求により、当該他の共有者以外の他の共有者の同意を得て共有物に変更を加えることができる旨の裁判をすることができる（251条２項）。</p>
        </div>
<div class="kakomon"><a href="pu26min20q.php#q-r05-10-u" title="R5-10-ウ">過去問</a></div>
        <div class="p-card">
          <p class="h6 ind2 nobold">(b) 管理に関する裁判</p>
          <p class="p6 ind3">裁判所は、次の①又は②に掲げるときは、当該各号に規定する他の共有者以外の共有者の請求により、当該他の共有者以外の共有者の持分の価格に従い、その過半数で共有物の管理に関する事項を決することができる旨の裁判をすることができる（252条２項各号）。</p>
        <div class="p-card">
          <p class="h6 ind3 nobold">①　共有者が他の共有者を知ることができず、又はその所在を知ることができないとき</p>
          <p class="h6 ind3 nobold">②　共有者が他の共有者に対し相当の期間を定めて共有物の管理に関する事項を決することについて賛否を明らかにすべき旨を催告した場合において、当該他の共有者がその期間内に賛否を明らかにしないとき</p>
          <p class="p6 ind4">なお、当該管理に関する決定が、共有者間の決定に基づいて共有物を使用する共有者に特別の影響を及ぼすべきときは、その承諾を得なければならない（252条３項）。</p>
        </div>
        </div>
        </div>
        <div class="p-card">
          <p class="h6 ind1">(2) 趣旨</p>
          <p class="p6 ind2">所在不明の共有者や共有物の管理に関心のない共有者がいる場合に、共有物の利用等を円滑に行うため、創設された。</p>
        </div>
        <div class="p-card">
          <p class="h6 ind1">(3) 手続の流れ</p>
          <p class="p6 ind2">（必要な調査（※）・252条２項２号の催告）</p>
          <p class="p6 ind2">　　　↓</p>
          <p class="h6 ind3 nobold">①共有者による申立て</p>
          <p class="p6 ind4">　　　↓</p>
          <p class="h6 ind3 nobold">②裁判所による公告（非訟法85条２項）、裁判所による通知（非訟法85条３項）</p>
          <p class="p6 ind4">　　　↓</p>
          <p class="h6 ind3 nobold">③（異議がない場合）裁判所による共有物変更許可決定等（非訟法85条２項３号、同条３項３号、同条４項）</p>
        </div>
        </div>
        <div class="p-card" id="min20-q19">
          <p class="h6 ind0">5.　費用負担等</p>
        <div class="p-card">
          <p class="h6 ind1">(1) 各共有者は、その持分に応じ、管理費用その他共有物に関する負担を分担する（253条１項）。当該費用を負担しない共有者が１年以内に支払をしなければ、他の共有者は相当の償金を支払ってその者の持分を取得できる（253条２項）。</p>
        </div>
        <div class="p-card">
          <p class="h6 ind1">(2) 共有者が共有物について他の共有者に債権を有する場合、その特定承継人に対しても行使ができる（254条）。</p>
        </div>
        <div class="p-card">
          <p class="h6 ind1">(3) 共有者の１人がその持分を放棄したとき又は死亡して相続人がないときは、その持分は、他の共有者に帰属する（255条）。</p>
        </div>
<div class="kakomon"><a href="pu26min20q.php#q-h05-10-i" title="H5-10-イ">過去問</a></div>
        </div>
      </div>
    </div>
    <div class="blk outer">
      <div class="outer-title" id="A02-03-04-1-03">３　共有物の管理者制度</div>
      <div class="blk inner">
        <div class="p-card">
          <p class="h6 ind0">1.　共有物の管理者の選任</p>
          <p class="p6 ind1">共有物の管理者の選任及び解任は、共有物の管理行為にあたるため、各共有者の持分の価格の過半数で決する（252条１項かっこ書）。</p>
          <p class="p6 ind1">共有物に関して事あるごとに共有者間で意思決定を行うよりも、特定の管理者を選任し、管理を委ねた方が共有物の円滑な管理ができると考えられ、共有物の管理者についての規定が創設された。</p>
        </div>
<div class="kakomon"><a href="pu26min20q.php#q-pu20-3" title="PU20-3">演習問題</a></div>
        <div class="p-card">
          <p class="h6 ind0">2.　共有物の管理者の権限</p>
        <div class="p-card">
          <p class="h6 ind1">(1) 共有物の管理に関する行為</p>
          <p class="p6 ind2">共有物の管理者は、共有物の管理に関する行為をすることができる（252条の２第１項本文）。ただし、共有物に変更（※）を加えるには、共有者の全員の同意が必要である（252条の２第１項ただし書）。</p>
        </div>
        <div class="p-card">
          <p class="h6 ind1">(2) 変更に関する裁判の請求</p>
          <p class="p6 ind2">共有物の管理者が共有者を知ることができず、又はその所在を知ることができないときは、裁判所は、共有物の管理者の請求により、当該共有者以外の共有者の同意を得て共有物に変更を加えることができる旨の裁判をすることができる（252条の２第２項）。</p>
        </div>
        </div>
        <div class="p-card">
          <p class="h6 ind0">3.　共有物の管理者の職務</p>
          <p class="p6 ind1">共有物の管理者は、共有者が共有物の管理に関する事項を決した場合には、これに従ってその職務を行わなければならない（252条の２第３項）。</p>
          <p class="p6 ind1">管理に関する決定に違反してした共有物の管理者の行為は、共有者に対してその効力を生じない。ただし、共有者は、これをもって善意の第三者に対抗することができない（252条の２第４項）。</p>
        </div>
      </div>
    </div>
    </div>
    <div class="p-card rank4-card">
      <p id="A02-03-04-2" class="h6 ind0">Ⅱ　共有関係の解消</p>
    <div class="blk outer">
      <div class="outer-title" id="A02-03-04-2-01">１　共有物の分割</div>
      <div class="blk inner">
        <div class="p-card">
          <p class="h6 ind0">1.　分割請求（256条）</p>
          <p class="p6 ind1">いつでも請求することができるが（256条１項本文）、５年を超えない期間内の分割禁止特約をすることもできる（256条１項ただし書）。</p>
          <p class="p6 ind1">この禁止特約は更新できるが、その期間は更新の時から５年を超えることができない（256条２項）。</p>
          <p class="p6 ind1">なお、共有物につき権利を有する者（地上権者・賃借権者・質権者等）及び各共有者の債権者は、自己の費用で分割に参加することができる（260条１項）。そして、参加の請求があったにもかかわらず、請求者を参加させないで分割したときは、その分割は請求者に対抗することができない（260条２項）。</p>
        </div>
<div class="kakomon"><a href="pu26min20q.php#q-r06-09-a" title="R6-9-ア">過去問</a></div>
        <div class="p-card">
          <p class="h6 ind0">2.　分割の方法（258条）</p>
        <div class="p-card">
          <p class="h6 ind1">(1) 原則－協議分割</p>
          <p class="p6 ind2">協議は共有者全員でしなければならない（大判大13.11.20）。</p>
          <p class="p6 ind2"><img class="embed-img" src="img/min20-03.png" alt="min20-03.png"></p>
        </div>
        <div class="p-card" id="min20-q29">
          <p class="h6 ind1">(2) 例外－裁判所による分割</p>
        <div class="p-card">
          <p class="h6 ind2 nobold">(a) 裁判所による分割の要件</p>
          <p class="p6 ind3">共有者間の協議が調わないとき又は協議をすることができないときは、裁判所に分割を請求できる（258条１項）。</p>
          <p class="p6 ind3">「協議をすることができないとき」とは、共有者の一部に協議に応じる意思がなく、全員で協議ができない場合などが当たる。</p>
        </div>
        <div class="p-card">
          <p class="h6 ind2 nobold">(b) 分割の方法</p>
          <p class="p6 ind3">裁判所は、次に掲げる方法により、共有物の分割を命ずることができる（258条２項各号）。</p>
        <div class="p-card">
          <p class="h6 ind3 nobold">①　共有物の現物を分割する方法（現物分割）</p>
          <p class="h6 ind3 nobold">②　共有者に債務を負担させて、他の共有者の持分の全部又は一部を取得させる方法（全面的価格賠償）</p>
          <p class="p6 ind4">ｅｘ．一部の者に金銭を支払い、他の者の共有としておくことができる（最判平８.10.31）</p>
          <p class="p6 ind4">　上記①及び②の方法により共有物を分割することができないとき、又は分割によってその価格を著しく減少させるおそれがあるときは、裁判所は、その競売を命ずることができる（258条３項）。</p>
          <p class="p6 ind4">裁判所は、共有物の分割の裁判において、当事者に対して、金銭の支払、物の引渡し、登記義務の履行その他の給付を命ずることができる（258条４項）。</p>
        </div>
        </div>
        <div class="p-card">
          <p class="h6 ind2 nobold">(c) 持分譲渡があった場合</p>
          <p class="p6 ind3">判例は、共有物分割の訴えは、共有者間の権利関係をその全員について画一的に創設する訴えであるから、持分譲渡があっても、これをもって他の共有者に対抗できないときには、共有者全員に対する関係において、右持分がなお譲渡人に帰属するものとして共有物分割をなすべきであるとしている（最判昭46.6.18）。</p>
        </div>
<div class="kakomon"><a href="pu26min20q.php#q-r06-09-i" title="R6-9-イ">過去問</a></div>
        </div>
        </div>
        <div class="p-card" id="min20-q36">
          <p class="h6 ind0">3.　遺産分割と共有物分割</p>
        <div class="p-card">
          <p class="h6 ind1">(1) 原則</p>
          <p class="p6 ind2">共有物の全部又はその持分が相続財産に属する場合において、共同相続人間で当該共有物の全部又はその持分について遺産の分割をすべきときは、当該共有物又はその持分について共有物分割訴訟による分割をすることができない（258条の２第１項）。</p>
          <p class="p6 ind2">従来の判例理論を明文化したものである。遺産共有の財産の分割に関しては、以下のような判例がある。いずれも、共同相続人の有する遺産分割上の権利（具体的相続分による分割をする権利等）を害してはならないという考え方を基礎としている。</p>
        <div class="p-card">
          <p class="h6 ind2 nobold">(a) 遺産共有の財産の分割</p>
          <p class="p6 ind3">遺産共有の財産を分割するには、遺産分割をするべきであって、共有物分割の訴えを提起することはできない（最判昭62.９.４）。</p>
        </div>
        <div class="p-card">
          <p class="h6 ind2 nobold">(b) 遺産共有の状態にある共有持分と他の共有持分とが併存する場合</p>
          <p class="p6 ind3">共有物について、遺産分割前の遺産共有の状態にある共有持分と他の共有持分とが併存する場合、遺産共有持分と他の共有持分との共有関係の解消は共有物分割の手続によるべきであり、遺産共有関係の解消は遺産分割手続によるべきである（最判平25.11.29）。</p>
        </div>
<div class="kakomon"><a href="pu26min20q.php#q-r06-09-e" title="R6-9-エ">過去問</a></div>
        </div>
        <div class="p-card">
          <p class="h6 ind1">(2) 例外－相続開始から１０年経過した場合</p>
          <p class="p6 ind2">共有物の持分が相続財産に属する場合において、相続開始の時から10年を経過したときは、258条の２第１項の規定にかかわらず、相続財産に属する共有物の持分について共有物分割訴訟による分割をすることができる（258条の２第２項本文）。</p>
          <p class="p6 ind2">上記（1）（b）の場合であっても、相続開始の時から10年経過すると、具体的相続分の主張ができなくなり（904条の３本文）、遺産分割上の権利に配慮する必要がなくなるため、共有物分割の手続の中で遺産共有状態を解消することを認めたものである。</p>
        </div>
        <div class="p-card">
          <p class="h6 ind1">(3) 相続人による異議の申出</p>
          <p class="p6 ind2">共有物の持分が相続財産に属し、当該共有物の持分について遺産の分割の請求があった場合において、相続人が当該共有物の持分について共有物分割訴訟による分割をすることに異議の申出をしたときは、（2）の規定による共有物分割はできない（258条の２第２項ただし書）。</p>
          <p class="p6 ind2">この申出は、当該相続人が258条１項の規定による分割請求を受けた裁判所から当該請求があった旨の通知を受けた日から２か月以内に当該裁判所にしなければならない（258条の２第３項）。</p>
        </div>
        </div>
        <div class="p-card" id="min20-q38">
          <p class="h6 ind0">4.　分割の効果</p>
        <div class="p-card">
          <p class="h6 ind1">(1) 共有関係の解消</p>
        </div>
        <div class="p-card">
          <p class="h6 ind1">(2) 担保責任の発生（261条）</p>
          <p class="p6 ind2">各共有者は、他の共有者が分割によって取得した物について、売主と同じく、その持分に応じて担保の責任を負う（261条）。</p>
        </div>
        <div class="p-card">
          <p class="h6 ind1">(3) 証書の保存（262条）</p>
          <p class="p6 ind2">分割が完了したときは、各分割者は、その取得した物に関する証書を保存しなければならない（262条１項）。</p>
          <p class="p6 ind2">証書は、その物の最大の部分を取得した者が保存しなければならないが（262条２項）、最大の部分を取得した者がないときは、分割者間の協議で証書の保存者を定める（262条３項前段）。協議が調わないときは、裁判所が指定する（262条３項後段）。</p>
          <p class="p6 ind2">証書の保存者は、他の分割者の請求に応じて、その証書を使用させなければならない（262条４項）。</p>
          <div class="sp"></div>
        </div>
<div class="kakomon"><a href="pu26min20q.php#q-h22-09-oh07-09-1h04-03-3" title="H22-9-オ">過去問</a></div>
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
