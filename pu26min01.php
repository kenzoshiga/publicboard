<?php require_once 'auth_check.php'; ?>
<!doctype html>
<html lang="ja">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>民法 Unit1</title>
  <link rel="stylesheet" href="css/style.css">
</head>
<body>
<script>(function(){try{var v=localStorage.getItem('tocHidden');if(v==='1'){document.body.classList.add('toc-hidden');}}catch(e){}})();</script>
<a id="top"></a>
<header>
  <div class="wrap hrow1">
    <h1>民法 Unit1</h1>
    <div class="hnav">
      <a href="pu_index.php">トップへ</a>
      <a href="pu_index.php">前へ</a>
      <a href="pu26min02.php">次へ</a>
      <a href="pu26min01q.php">肢別へ</a>
    </div>
  </div>
  <div class="wrap">
    <div class="toc-wrap">
      <div class="toc" id="toc">
        <div class="toc-title"><strong>目次</strong>　<a href="#content">本文へ↓</a></div>
        <ul>
<li><a href="#A00">序　論</a>
  <ul>

    <li><a href="#A00-00-00-0-01">１　民法とは</a></li>

    <li><a href="#A00-00-00-0-02">２　民法の性格</a></li>

    <li><a href="#A00-00-00-0-03">３　民法の指導原理</a></li>
  </ul>
</li>
<li><a href="#A01">第１編　総則</a>
  <ul>
    <li><a href="#A01-01">第１章　私権についての基本原理</a>
      <ul>

        <li><a href="#A01-01-00-0-01">１　公共の福祉（１条１項）</a></li>

        <li><a href="#A01-01-00-0-02">２　信義誠実の原則（信義則。１条２項）</a></li>

        <li><a href="#A01-01-00-0-03">３　権利濫用の禁止（１条３項）</a></li>
      </ul>
    </li>
    <li><a href="#A01-02">第２章　人</a>
      <ul>
        <li><a href="#A01-02-01">第１節　権利能力</a>
          <ul>
            <li><a href="#A01-02-01-0-01">１　意義</a></li>
            <li><a href="#A01-02-01-0-02">２　権利能力の始期</a></li>
            <li><a href="#A01-02-01-0-03">３　終期</a></li>
          </ul>
        </li>
        <li><a href="#A01-02-02">第２節　意思能力と行為能力</a>
          <ul>
            <li><a href="#A01-02-02-1">Ⅰ　意思能力</a>
              <ul>
            </ul>
          </li>
            <li><a href="#A01-02-02-2">Ⅱ　行為能力</a>
              <ul>
            <li><a href="#A01-02-02-2-01">１　総説</a></li>
            <li><a href="#A01-02-02-2-02">２　未成年者</a></li>
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
<section class="sec-title" id="A00">
  <h2>序　論</h2>
    <div class="blk outer">
      <div class="outer-title" id="A00-00-00-0-01">１　民法とは</div>
      <p>私人の日常生活（社会生活）を規律する最も基本的な法であり、主として私人の財産関係と家族関係を規律する。</p>
    </div>
    <div class="blk outer">
      <div class="outer-title" id="A00-00-00-0-02">２　民法の性格</div>
      <div class="blk inner">
        <div class="p-card">
          <p class="h6 ind0">1.　私法</p>
          <p class="p6 ind1">民法は、平等な私人間の関係を規律する法である。</p>
          <p class="p6 ind1">cf. 公法（国家統治権の発動に関する法　ex. 刑法）</p>
        </div>
        <div class="p-card">
          <p class="h6 ind0">2.　実体法</p>
          <p class="p6 ind1">民法は、裁判をする際の紛争解決の基準となる法である。</p>
          <p class="p6 ind1">cf. 手続法（裁判を進める方法や形式についての基準となる法　ex. 民事訴訟法）</p>
        </div>
        <div class="p-card">
          <p class="h6 ind0">3.　一般法</p>
          <p class="p6 ind1">民法は、私法の分野における一般法であるから、人・事物・行為あるいは地域を限定せず、広く一般に適用される。</p>
          <p class="p6 ind1">cf. 特別法（特定の人・事物・行為又は地域に限って適用される法）</p>
          <p class="p6 ind1">この、一般法と特別法の区別は相対的なものである。例えば、商法は、民法に対しては特別法であるが、金融商品取引法などに対しては一般法である。</p>
          <p class="p6 ind1">一般法・特別法の区別の実益は、法適用の順序に現れる。特別法は一般法に優先して適用される。</p>
        </div>
      </div>
    </div>
    <div class="blk outer">
      <div class="outer-title" id="A00-00-00-0-03">３　民法の指導原理</div>
      <div class="blk inner">
        <div class="p-card">
          <p class="h6 ind0">1.　権利能力平等の原則</p>
          <p class="p6 ind1">：すべての自然人が差別されることなく、権利義務の主体になる資格（権利能力）をもつという原則（３条１項参照）</p>
        </div>
        <div class="p-card">
          <p class="h6 ind0">2.　所有権絶対の原則</p>
          <p class="p6 ind1">：人は所有物に対しては完全な支配権を有し、しかも神聖不可侵であるという原則（憲法29条１項）</p>
        </div>
        <div class="p-card">
          <p class="h6 ind0">3.　私的自治の原則</p>
          <p class="p6 ind1">：市民社会において人が義務を負うのは、自らの意思でそれを望んだときだけであるという原則</p>
          <p class="p6 ind1">その内容として、契約自由の原則が挙げられる。</p>
        </div>
      </div>
    </div>
<section class="sec-title" id="A01">
  <h2>第１編　総則</h2>
  <div class="p-card chap-card">
    <h2 id="A01-01">第１章　私権についての基本原理</h2>
    <div class="blk outer">
      <div class="outer-title" id="A01-01-00-0-01">１　公共の福祉（１条１項）</div>
      <p>私権の行使については、社会的共同生活の利益に反してはならない（憲法29条２項参照）。</p>
    </div>
    <div class="blk outer">
      <div class="outer-title" id="A01-01-00-0-02">２　信義誠実の原則（信義則。１条２項）</div>
      <div class="blk inner">
        <div class="p-card">
          <p class="h6 ind0">1.　意義</p>
          <p class="p6 ind1">：人は、具体的事情の下において相手方から一般に期待される信頼を裏切ることのないように、誠意をもって行動すべきであるとする原則</p>
          <p class="p6 ind1">はじめは債権法を支配する原理であったが、やがて、物権法の領域でも妥当するとされ、さらには社会的接触関係に立つ者同士（例えば、これから契約関係に入ろうとする者同士）の間でも適用されると考えられるようになった。</p>
        </div>
        <div class="p-card">
          <p class="h6 ind0">2.　機能</p>
        <div class="p-card">
          <p class="h6 ind3 nobold">① 法律解釈の基準となる（最判昭32.７.５）。</p>
          <p class="h6 ind3 nobold">② 社会的接触関係にある者同士の規範関係を具体化する。</p>
          <p class="h6 ind3 nobold">③ 制定法の規定の存しない部分を補充し、又は制定法の形式的適用による不都合を克服する。</p>
        </div>
        </div>
        <div class="p-card">
          <p class="h6 ind0">3.　派生原則（信義則の分身）</p>
        <div class="p-card">
          <p class="h6 ind1">(1) 禁反言の原則</p>
          <p class="p6 ind2">自己の行為に矛盾した態度をとることは許されない。</p>
        </div>
        <div class="p-card">
          <p class="h6 ind1">(2) クリーンハンズの原則</p>
          <p class="p6 ind2">自ら法を尊重する者だけが法の尊重を要求できる（708条参照）。</p>
        </div>
        <div class="p-card">
          <p class="h6 ind1">(3) 事情変更の原則</p>
          <p class="p6 ind2">契約締結当時の社会的事情や契約成立の基礎となった事情に、その後著しい変動を生じ、契約をそのまま強制することが信義公平に反するに至った場合には、不利益を受ける側は、その廃棄又は変更を請求することができる（契約の拘束力の例外）。</p>
        </div>
        </div>
      </div>
    </div>
    <div class="blk outer">
      <div class="outer-title" id="A01-01-00-0-03">３　権利濫用の禁止（１条３項）</div>
      <div class="blk inner">
        <div class="p-card">
          <p class="h6 ind0">1.　意義</p>
          <p class="p6 ind1">：形式的には正当な権利に基づく行使であっても、実質的に見れば権利の社会性に反する行為は認められないとする法理</p>
          <p class="p6 ind1">私権の行使に際して生じる他の法益との衝突を具体的公平の見地から調整するもの。</p>
        </div>
        <div class="p-card">
          <p class="h6 ind0">2.　要件</p>
          <p class="p6 ind1">権利行使によって生じる権利者個人の利益と、相手方又は社会全体に及ぼす害悪との客観的な比較衡量による（判例・通説）。</p>
        </div>
        <div class="p-card">
          <p class="h6 ind0">3.　効果</p>
          <p class="p6 ind1">権利に対する他人の侵害の排除を主張することが権利濫用となる場合には、排除の請求そのものが否定される。</p>
        </div>
      </div>
    </div>
  </div>
  <div class="p-card chap-card">
    <h2 id="A01-02">第２章　人</h2>
    <div class="p-card sec-card">
      <h3 id="A01-02-01">第１節　権利能力</h3>
    <div class="blk outer">
      <div class="outer-title" id="A01-02-01-0-01">１　意義</div>
      <p>：権利義務の主体となることのできる資格</p>
    </div>
    <div class="blk outer">
      <div class="outer-title" id="A01-02-01-0-02">２　権利能力の始期</div>
      <div class="blk inner">
        <div class="p-card">
          <p class="h6 ind0">1.　原則－出生（３条１項）</p>
          <p class="p6 ind1">出生時をいつとするかは、文言上明らかでないが、体が母体から全部露出した時点（全部露出説）とするのが通説である。</p>
          <p class="p6 ind1">cf. 刑法－一部露出説</p>
        </div>
        <div class="p-card">
          <p class="h6 ind0">2.　例外－胎児についての特則</p>
          <p class="p6 ind1">胎児は人ではないので、原則として権利能力は否定される。ただし、例外的に以下の場合には生まれたものとみなされる。</p>
        <div class="p-card">
          <p class="h6 ind3 nobold">① 損害賠償請求（721条）</p>
          <p class="h6 ind3 nobold">② 相続（886条）</p>
          <p class="h6 ind3 nobold">③ 遺贈（965条）</p>
          <p class="p6 ind4">　なお、胎児に対する認知も可能である（783条１項）。</p><br>
          <p class="p6 ind4">Ｑ　「既に生まれたものとみなす」（721条、886条、965条）の意義</p><br>
          <p class="p6 ind4">Ａ　停止条件説（大判昭７.10.６）</p>
          <p class="p6 ind4">　胎児でいる間は原則どおり権利能力はないが、胎児が生きて生まれた時に、問題の時点（不法行為や相続時など）に生まれていたものとみなし、さかのぼって権利能力を取得する。</p>
          <p class="p6 ind4">（理由）</p>
          <p class="p6 ind4">現行法上、胎児の財産を管理する法定代理制度が存在しない。</p>
          <p class="p6 ind4"><img class="embed-img" src="img/min01-01.png" alt="min01-01.png"></p>
          <p class="p6 ind4">Ｂ　解除条件説</p>
          <p class="p6 ind4">　胎児であっても生まれたものとみなされる範囲（損害賠償、相続など）では権利能力を有し、ただ、死産である場合には遡及的に権利能力が消滅する。</p>
          <p class="p6 ind4">（理由）</p>
          <p class="h6 ind3 nobold">① 胎児の母に法定代理人たる地位を認めることができ、胎児の権利が保護される。</p>
          <p class="h6 ind3 nobold">② 特に相続をめぐる法律関係を速やかに確定できる。</p>
          <p class="p6 ind4"><img class="embed-img" src="img/min01-02.png" alt="min01-02.png"></p>
          <p class="p6 ind4">胎児に対する代理の可否</p>
          <p class="p6 ind4"><img class="embed-img" src="img/min01-03.png" alt="min01-03.png"></p>
          <p class="p6 ind4">※　解除条件説は胎児の権利能力を肯定することができる点に特徴があるが、その場合でも、代理が認められるのは上記例外の３つの範囲に限られる点に注意する必要がある（母が胎児を代理して売買契約を結ぶことは認められない）。</p>
        </div>
        </div>
      </div>
    </div>
    <div class="blk outer">
      <div class="outer-title" id="A01-02-01-0-03">３　終期</div>
      <div class="blk inner">
        <div class="p-card">
          <p class="h6 ind0">1.　死亡（明文はないが、882条から推知される。）</p>
        </div>
        <div class="p-card">
          <p class="h6 ind0">2.　生死不明者と死体が発見されない場合の取扱い</p>
        <div class="p-card">
          <p class="h6 ind1">(1) 失踪宣告（30条～32条）</p>
          <p class="p6 ind2">：不在者の生死不明の状態が一定期間継続した場合に、一応その者の死亡を擬制して、従来の住所を中心とする法律関係を確定する制度</p>
          <p class="p6 ind2">認定死亡と異なり、後に生存が確認されても直ちには生存者としては扱われない。</p>
        </div>
        <div class="p-card">
          <p class="h6 ind1">(2) 認定死亡（戸籍法89条）</p>
          <p class="p6 ind2">：危難に遭遇して死亡したのは確実だが死体が発見されない場合に、その取調べをした官庁又は公署が死亡の認定を行う制度</p>
        </div>
        </div>
        <div class="p-card">
          <p class="h6 ind0">3.　同時死亡の推定（32条の２）</p>
        <div class="p-card">
          <p class="h6 ind1">(1) 意義</p>
          <p class="p6 ind2">：数人の者が死亡した場合において、その死亡の先後が明らかでないときに同時に死亡したものと推定する制度</p>
        </div>
        <div class="p-card">
          <p class="h6 ind1">(2) 趣旨</p>
          <p class="p6 ind2">数人が危難にあって死亡した場合、その先後によって相続関係は大きく異なる（相続分など）。そこで、死亡の先後が明らかでない場合の解決方法として同時に死亡したものとする推定規定を置いた。</p>
        </div>
        <div class="p-card">
          <p class="h6 ind1">(3) 要件－数人の者が死亡した場合において、その死亡時期の先後関係が不明であること。</p>
          <p class="p6 ind2">次のような場合に適用がある。</p>
        <div class="p-card">
          <p class="h6 ind3 nobold">① 共に同一の危難に遭遇し、死亡の先後関係が不明である場合。</p>
          <p class="h6 ind3 nobold">② 別々の危難に遭遇したが、いずれの死亡時期も不明である場合。</p>
          <p class="h6 ind3 nobold">③ 一方の死亡時期は明確であるが、他方の死亡時期が不明である場合。</p>
        </div>
        <div class="p-card">
          <p class="h6 ind1">(4) 効果</p>
        <div class="p-card">
          <p class="h6 ind3 nobold">① 同時死亡の推定が及ぶ者相互の間では相続が生じない。</p>
          <p class="h6 ind3 nobold">② 同時死亡の推定が及ぶ者相互の間では遺贈も効力を生じない（994条１項）。</p>
          <p class="h6 ind3 nobold">③ 代襲相続は生じる（887条２項）。</p>
        </div>
        </div>
        </div>
        </div>
      </div>
    </div>
    </div>
    <div class="p-card sec-card">
      <h3 id="A01-02-02">第２節　意思能力と行為能力</h3>
    <div class="p-card rank4-card">
      <p id="A01-02-02-1" class="h6 ind0">Ⅰ　意思能力</p>
    <div class="blk outer">
      <div class="outer-title">本文</div>
      <p>：自己の法律行為の結果を弁識するに足るだけの精神能力</p>
      <p>法律行為の当事者が意思表示をした時に意思能力を有しなかったときは、その法律行為は、無効とする(民法3条の2)。私的自治の原則により、私人の法律行為は自己の意思に基づいてのみ行われなければならないことから、当然の前提とされている。</p>
<div class="kakomon"><a href="pu26min01q.php#q-pu1-1" title="PU1-1">演習問題</a></div>
    </div>
    </div>
    <div class="p-card rank4-card">
      <p id="A01-02-02-2" class="h6 ind0">Ⅱ　行為能力</p>
    <div class="blk outer">
      <div class="outer-title" id="A01-02-02-2-01">１　総説</div>
      <div class="blk inner">
        <div class="p-card">
          <p class="h6 ind0">1.　行為能力の意義</p>
          <p class="p6 ind1">行為能力：自ら単独で法律行為をすることができる能力</p>
        </div>
        <div class="p-card">
          <p class="h6 ind0">2.　制限行為能力者制度の趣旨</p>
          <p class="p6 ind1">民法は、未成年者・成年被後見人・被保佐人及び被補助人を制限行為能力者と定め、これらの者は単独で有効に法律行為を行い得ないものとした。</p>
          <p class="p6 ind1">意思能力（自己の行為の結果を弁識する精神能力）のない者の行為は本来無効となる。しかし、意思能力の存否の証明は容易でないことから、意思能力のない者・不十分な者を保護しつつ、取引の安全を図るべく、一定の者を画一的に制限行為能力者としたものである。</p>
        </div>
        <div class="p-card">
          <p class="h6 ind0">3.　意思能力と行為能力との関係</p>
          <p class="p6 ind1">Ｑ　制限行為能力者が同時に意思能力を欠いていた場合の行為の効力は認められるか。</p><br>
          <p class="p6 ind1">Ａ　二重効肯定説（判例・通説）</p>
          <p class="p6 ind1">　取り消すことができると同時に無効主張もできる。</p>
          <p class="p6 ind1">（理由）</p>
          <p class="p6 ind1">制限行為能力者制度は、意思無能力者に与えられたプラスアルファの保護であり、本来の保護である意思能力を欠くことを理由とする無効主張は当然に可能である。</p><br>
          <p class="p6 ind1">Ｂ　二重効否定説</p>
          <p class="p6 ind1">　取消しのみ可能とする。</p>
          <p class="p6 ind1">（理由）</p>
          <p class="p6 ind1">意思能力の制度は行為能力の制度に客観的画一的に転化してしまっている。</p>
        </div>
        <div class="p-card" id="min01-q2">
          <p class="h6 ind0">4.　制限行為能力者の行為が取り消された場合の効果</p>
        <div class="p-card">
          <p class="h6 ind1">(1) 行為の効力</p>
          <p class="p6 ind2">取消しがなされると、当該行為は初めから無効であったことになる（121条）。制限行為能力者の保護を優先するため、善意無過失の第三者の保護規定（96条３項参照）はない。よって、すべての第三者に取消しの効果を主張することができる。</p>
          <p class="p6 ind2">192条の即時取得の適用も否定される。これを認めてしまうと、制限行為能力者を取引から保護しようとした趣旨が没却されるからである。</p>
          <p class="p6 ind2">なお、取引の相手方の保護の制度（20条、21条）や、取消権の行使期間の制限（126条）の規定の適用はある。また、動産の場合は192条、不動産の場合は94条２項の類推適用によって転得者は保護され得る（通説）。</p>
        </div>
<div class="kakomon"><a href="pu26min01q.php#q-r02-07-i" title="R7-2-イ他">過去問</a></div>
        <div class="p-card" id="min01-q6">
          <p class="h6 ind1">(2) 制限行為能力者の返還義務</p>
          <p class="p6 ind2">行為の時に制限行為能力者であった者は、当該行為を取り消した場合、現存利益の範囲でのみ返還義務を負う（121条の２第３項）。無効な行為又は取り消された行為に基づく履行が既になされている場合には、当事者は原状回復義務を負うのが原則であるが（121条の２第１項）、制限行為能力者等一定の場合には当該義務が軽減されている。取消権の行使を容易にする趣旨である。</p>
        </div>
<div class="kakomon"><a href="pu26min01q.php#q-h19-06-a" title="H19-06-ア他">過去問</a></div>
        </div>
      </div>
    </div>
    <div class="blk outer">
      <div class="outer-title" id="A01-02-02-2-02">２　未成年者</div>
      <div class="blk inner">
        <div class="p-card">
          <p class="h6 ind0">1.　意義</p>
          <p class="p6 ind1">：18歳未満の者（４条）</p>
          <p class="p6 ind1">本条の例外：特定の営業に関しての成年擬制（６条）</p>
        </div>
        <div class="p-card">
          <p class="h6 ind0">2.　趣旨</p>
          <p class="p6 ind1">未成年者は、幼児のように意思能力がない場合もあり、また意思能力があってもまだ取引に十分な判断能力がないので、この者を保護するとともに、取引の相手方を不測の損害から保護することをその趣旨とする。</p>
        </div>
        <div class="p-card" id="min01-q9">
          <p class="h6 ind0">3.　未成年者の行為能力</p>
        <div class="p-card">
          <p class="h6 ind1">(1) 原則</p>
          <p class="p6 ind2">未成年者が法律行為をするには、原則として法定代理人の「同意」を得なければならず、その同意を得ないでした法律行為は「取り消す」ことができる（５条１項本文、２項）。</p>
        </div>
        <div class="p-card">
          <p class="h6 ind1">(2) 例外</p>
          <p class="p6 ind2">例外的に未成年者が単独でできる行為が法定されている。</p>
        <div class="p-card">
          <p class="h6 ind2 nobold">(a) 「単に権利を得、又は義務を免れる法律行為」（５条１項ただし書）</p>
          <p class="p6 ind3">ex. 負担付きでない贈与を受ける。債務の免除を受ける。</p>
        </div>
        <div class="p-card">
          <p class="h6 ind2 nobold">(b) 法定代理人が処分を許した財産の処分（５条３項）</p>
          <p class="p6 ind3">本条項の財産については法定代理人の包括的同意があると解されるため、５条１項本文の同意を不要とした。</p>
        <div class="p-card">
          <p class="h6 ind3 nobold">① 「目的を定めて処分を許した財産」（学費、下宿代等）は、その目的の範囲内でのみ処分できる。</p>
          <p class="h6 ind3 nobold">② 「目的を定めないで処分を許した財産」（小遣い等）は、任意に処分できる。</p>
        </div>
        </div>
        <div class="p-card">
          <p class="h6 ind2 nobold">(c) 許可された営業に関する行為（６条１項）</p>
          <p class="p6 ind3">営業の許可がある以上これに関する行為ができなければ営業できないから、許可された営業の範囲内で未成年者の行為能力に加えられた制限を解放するものである。</p>
        <div class="p-card">
          <p class="h6 ind3 nobold">① 「営業」：営利を目的にして同種の行為を反復継続して行うこと</p>
          <p class="p6 ind4">自ら主体となって営業をすることが必要であり、他人に従属してこれに労務を提供して賃金を得る場合（未成年者が他人に雇われて働く場合）は含まない。</p>
        </div>
        <div class="p-card">
          <p class="h6 ind3 nobold">② 「一種又は数種の営業」：取引社会において１単位と認められるものの１個又は数個</p>
          <p class="p6 ind4">一種の営業の一部に限定しての許可は、相手方に不測の損害を与えるから許されない。また、営業の許可をするには、営業の種類を特定しなければならない。</p>
        </div>
        <div class="p-card">
          <p class="h6 ind3 nobold">③ 許可の取消し（６条２項）</p>
          <p class="p6 ind4">法定代理人は、「その営業に堪えることができない事由があるとき」は許可を取り消し、又は制限できるが、遡及効が無い（厳密には撤回というべき）。</p>
          <p class="p6 ind4">「取り消し」は善意の第三者にも対抗することができる。ただし、営業が商業である場合には登記による公示が必要である（商法５、９、10条）。</p>
        </div>
<div class="kakomon"><a href="pu26min01q.php#q-r06-04-u" title="R6-04-ウ他">過去問</a></div>
        </div>
        <div class="p-card" id="min01-q14">
          <p class="h6 ind2 nobold">(d) 法定代理人の同意を得ないでした行為の取消し（５条２項、120条１項）</p>
          <p class="p6 ind3">取り消すことによって元の状態に戻るだけであり、未成年者に不利益はない。また、取消しにも同意がいるとすると、同意のない取消しを取り消せることになって面倒だからである。</p>
        </div>
<div class="kakomon"><a href="pu26min01q.php#q-r04-04-u" title="R4-04-ウ他">過去問</a></div>
        <div class="p-card">
          <p class="h6 ind2 nobold">(e) 身分行為</p>
          <p class="p6 ind3">ex. 認知（780条）、遺言（961条。ただし、15歳に達した者のみがすることができる。）</p>
        </div>
        </div>
        </div>
        <div class="p-card">
          <p class="h6 ind0">4.　保護者－法定代理人</p>
        <div class="p-card">
          <p class="h6 ind1">(1) 法定代理人の意義</p>
          <p class="p6 ind2">未成年者の法定代理人は、未成年者が法律行為をする場合にその「同意」を与え（５条１項本文）、また、未成年者に代わってその法律行為を行う（824条、859条）。</p>
        </div>
        <div class="p-card" id="min01-q17">
          <p class="h6 ind1">(2) 法定代理人となる者</p>
          <p class="p6 ind2">第１次的に親権者（818条）、第２次的に未成年後見人（838条１号）である。</p>
          <p class="p6 ind2">親権者は、実親であることが多いが、養子縁組をしている場合には次の者が親権者となる（民法818条３項）。</p>
        <div class="p-card">
          <p class="h6 ind3 nobold">① 養親（当該子を養子とする縁組が2以上あるときは、直近の縁組により養親となった者に限る。）</p>
          <p class="h6 ind3 nobold">② 子の父母であって、①に掲げる養親の配偶者であるもの</p>
        </div>
<div class="kakomon"><a href="pu26min01q.php#q-h27-04-i" title="H27-04-イ">過去問</a></div>
        </div>
        <div class="p-card">
          <p class="h6 ind1">(3) 権限</p>
        <div class="p-card">
          <p class="h6 ind2 nobold">(a) 同意権（５条１項本文）</p>
        </div>
        <div class="p-card">
          <p class="h6 ind2 nobold">(b) 財産管理権（824条本文前段、859条１項前段）</p>
        </div>
        <div class="p-card">
          <p class="h6 ind2 nobold">(c) 代理権（824条本文後段、859条１項後段）</p>
          <p class="p6 ind3">労働契約に関しては、親が子を食い物にするおそれが生じるため、代理権は認められない（労働基準法58条１項）。従って、子自身が雇主と労働契約の締結をすることになり、子が労働契約を締結する場合には、親の同意が必要である（５条１項本文）。</p>
        </div>
        <div class="p-card">
          <p class="h6 ind2 nobold">(d) 取消権（120条１項）</p>
          <p class="p6 ind3">法定代理人の取消権が時効で消滅した場合（126条）、未成年者の取消権も消滅する（固有の取消権を行使できない）。</p>
        </div>
        <div class="p-card">
          <p class="h6 ind2 nobold">(e) 追認権（122条）</p>
          <div class="sp"></div>
        </div>
        </div>
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
