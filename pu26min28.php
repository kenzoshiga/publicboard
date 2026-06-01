<?php require_once 'auth_check.php'; ?>
<!doctype html>
<html lang="ja">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>民法 Unit28</title>
  <link rel="stylesheet" href="css/style.css">
</head>
<body>
<script>(function(){try{var v=localStorage.getItem('tocHidden');if(v==='1'){document.body.classList.add('toc-hidden');}}catch(e){}})();</script>
<a id="top"></a>
<header>
  <div class="wrap hrow1">
    <h1>民法 Unit28</h1>
    <div class="hnav">
      <a href="pu_index.php">トップへ</a>
      <a href="pu26min27.php">前へ</a>
      <a href="pu26min29.php">次へ</a>
      <a href="pu26min28q.php">肢別へ</a>
    </div>
  </div>
  <div class="wrap">
    <div class="toc-wrap">
      <div class="toc" id="toc">
        <div class="toc-title"><strong>目次</strong>　<a href="#content">本文へ↓</a></div>
        <ul>
<li><a href="#A03">第３編　担保物権</a>
  <ul>
    <li><a href="#A03-03">第３章　質権</a>
      <ul>
        <li><a href="#A03-03-01">第１節　総説</a>
          <ul>
            <li><a href="#A03-03-01-0-01">１　意義</a></li>
            <li><a href="#A03-03-01-0-02">２　性質（通有性）</a></li>
            <li><a href="#A03-03-01-0-03">３　設定契約</a></li>
            <li><a href="#A03-03-01-0-04">４　目的物の「引渡し」－効力発生要件</a></li>
            <li><a href="#A03-03-01-0-05">５　効力</a></li>
          </ul>
        </li>
        <li><a href="#A03-03-02">第２節　動産質</a>
          <ul>
            <li><a href="#A03-03-02-0-01">１　意義</a></li>
            <li><a href="#A03-03-02-0-02">２　対抗要件としての「占有」（352条）</a></li>
            <li><a href="#A03-03-02-0-03">３　動産質権者の権利・義務</a></li>
            <li><a href="#A03-03-02-0-04">４　優先弁済的効力</a></li>
            <li><a href="#A03-03-02-0-05">５　動産質権の消滅</a></li>
          </ul>
        </li>
        <li><a href="#A03-03-03">第３節　不動産質</a>
          <ul>
            <li><a href="#A03-03-03-0-01">１　意義</a></li>
            <li><a href="#A03-03-03-0-02">２　設定</a></li>
            <li><a href="#A03-03-03-0-03">３　存続期間（360条）</a></li>
            <li><a href="#A03-03-03-0-04">４　効力</a></li>
            <li><a href="#A03-03-03-0-05">５　使用収益権能</a></li>
            <li><a href="#A03-03-03-0-06">６　不動産質権の消滅</a></li>
          </ul>
        </li>
        <li><a href="#A03-03-04">第４節　権利質</a>
          <ul>
            <li><a href="#A03-03-04-1">Ⅰ　意義</a>
              <ul>
            </ul>
          </li>
            <li><a href="#A03-03-04-2">Ⅱ　債権質</a>
              <ul>
            <li><a href="#A03-03-04-2-01">１　設定</a></li>
            <li><a href="#A03-03-04-2-02">２　効力</a></li>
            <li><a href="#A03-03-04-2-03">３　消滅</a></li>
            </ul>
          </li>
          </ul>
        </li>
        <li><a href="#A03-03-05">第５節　転質権</a>
          <ul>
            <li><a href="#A03-03-05-0-01">１　責任転質</a></li>
            <li><a href="#A03-03-05-0-02">２　承諾転質</a></li>
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
    <h2 id="A03-03">第３章　質権</h2>
    <div class="p-card sec-card">
      <h3 id="A03-03-01">第１節　総説</h3>
    <div class="blk outer">
      <div class="outer-title" id="A03-03-01-0-01">１　意義</div>
      <p>：債権者が債権の担保として債務者又は第三者（物上保証人）から受け取った物を占有し、債務の弁済を間接的に強制するとともに、弁済されない場合にはその物の売却価額から優先弁済を受けることのできる約定担保物権</p>
    </div>
    <div class="blk outer">
      <div class="outer-title" id="A03-03-01-0-02">２　性質（通有性）</div>
      <p>付従性・随伴性・不可分性（350条、296条）・物上代位性（350条、304条）を有する。</p>
    </div>
    <div class="blk outer">
      <div class="outer-title" id="A03-03-01-0-03">３　設定契約</div>
      <p>成立要件は、①質権設定の合意（設定契約）、②目的物の引渡しである。</p>
      <div class="blk inner">
        <div class="p-card">
          <p class="h6 ind0">1.　当事者</p>
          <p class="p6 ind1">質権は、質権者と質権設定者（債務者又は第三者）の質権設定契約（物権契約）により設定される。</p>
          <p class="p6 ind1">｢第三者｣とは、債務者のために自己の財産を質権の目的物として提供する｢物上保証人｣であり、債務は負わず責任のみを負担する。</p>
        </div>
        <div class="p-card">
          <p class="h6 ind0">2.　質権の目的物－譲渡可能な物であることを要する（343条）。</p>
        </div>
        <div class="p-card">
          <p class="h6 ind0">3.　被担保債権－制限がない。</p>
        </div>
<div class="kakomon"><a href="pu26min28q.php#q-h20-13-a" title="H20-13-ア">過去問</a></div>
      </div>
    </div>
    <div class="blk outer">
      <div class="outer-title" id="A03-03-01-0-04">４　目的物の「引渡し」－効力発生要件</div>
      <div class="blk inner">
        <div class="p-card">
          <p class="h6 ind0">1.　要物契約性（344条）</p>
          <p class="p6 ind1">質権設定契約は要物契約である。質権設定契約を要物契約としたのは、①質権の存在を公示するとともに、②質権設定者から目的物を奪うことによって間接的に債務の履行を強制するという留置的効力を発揮させるためである（通説）。</p>
          <p class="p6 ind1">「引渡し」には、現実の引渡し（182条１項）、簡易の引渡し（182条２項）、指図による占有移転（184条）は含まれる。</p>
        </div>
        <div class="p-card">
          <p class="h6 ind0">2.　占有改定の禁止（345条）</p>
          <p class="p6 ind1">占有改定（183条）は｢引渡し｣には含まれない。</p>
        </div>
<div class="kakomon"><a href="pu26min28q.php#q-h11-14-ah01-10-2" title="H11-14-ア">過去問</a></div>
      </div>
    </div>
    <div class="blk outer">
      <div class="outer-title" id="A03-03-01-0-05">５　効力</div>
      <div class="blk inner">
        <div class="p-card">
          <p class="h6 ind0">1.　被担保債権の範囲（346条）</p>
          <p class="p6 ind1">「元本、利息、違約金、質権の実行の費用、質物の保存の費用及び債務の不履行又は質物の隠れた瑕疵によって生じた損害の賠償」である。</p>
          <p class="p6 ind1">抵当権の被担保債権の範囲（375条）と比較すると著しく広い。なぜなら、抵当権と異なり、質権者が目的物を占有するため、後順位の質権者が登場することがほとんどなく、また、質物が第三者に譲渡されることも少ないため、担保価値の全部を質権者が把握していると考えられるからである。</p>
        </div>
        <div class="p-card">
          <p class="h6 ind0">2.　留置的効力（347条）</p>
          <p class="p6 ind1">質権者は、被担保債権の弁済を受けるまで、目的物を留置することができる（347条本文）。ただし、質権に優先権を有する債権者に対しては対抗できない（347条ただし書）。この点で留置権と異なる。</p>
          <p class="p6 ind1">留置的効力により質権者は債務者に間接的に債務の履行を強制することができる。</p>
          <p class="p6 ind1">なお、使用収益をしない旨の定めのある不動産質権は、競売において消滅するとされるので、この場合は最優先順位を有していても、留置的効力を主張することができない（347条ただし書）。</p>
        </div>
        <div class="p-card">
          <p class="h6 ind0">3.　優先弁済的効力</p>
          <p class="p6 ind1">優先弁済を受ける方法は目的物によって異なるため後述する。</p>
        </div>
        <div class="p-card">
          <p class="h6 ind0">4.　果実収取権</p>
          <p class="p6 ind1">質権者は、質物から生ずる果実を収取し、他の債権者に先立って、これを自己の債権の弁済に充当することができる（民法350条、297条）。</p>
        </div>
<div class="kakomon"><a href="pu26min28q.php#q-r05-11-uh24-12-u" title="R5-11-ウ">過去問</a></div>
      </div>
    </div>
    </div>
    <div class="p-card sec-card">
      <h3 id="A03-03-02">第２節　動産質</h3>
    <div class="blk outer">
      <div class="outer-title" id="A03-03-02-0-01">１　意義</div>
      <p>動産質：動産を目的として設定される質権</p>
    </div>
    <div class="blk outer">
      <div class="outer-title" id="A03-03-02-0-02">２　対抗要件としての「占有」（352条）</div>
      <p>動産質権の対抗要件は質物の占有である（民法352条）。</p>
      <p>代理人による占有（間接占有）も含む。</p>
      <p>占有の継続は対抗要件にすぎず、占有を喪失しても質権が消滅するわけではない。</p>
      <p>質権を要物契約とし公示機能と留置的効力を実現しようとする趣旨を貫くため質権設定者による代理占有を禁止する（345条）。</p>
      <div class="blk inner">
        <div class="p-card">
          <p class="h6 ind0">1.　対抗することができない「第三者」</p>
          <p class="p6 ind1">対抗することができない「第三者」とは、質権設定者・債務者以外の者である。よって、質権者の占有を離れた目的物が設定者のもとにあるときは、質権に基づいて返還請求できる。</p>
        </div>
        <div class="p-card">
          <p class="h6 ind0">2.　占有を喪失した場合</p>
        <div class="p-card">
          <p class="h6 ind1">(1) 第三者に目的物を奪われた場合</p>
          <p class="p6 ind2">第三者に目的物を奪われた場合は、対抗力を失うから質権に基づく返還請求はできず、占有回収の訴え（200条）によるのみである（353条）。質権者が占有を失えば質権をもって第三者に対抗することはできない（352条）から、物権的請求権も否定される。</p>
          <p class="p6 ind2">質権設定者に対しては、詐取･遺失の場合でも質権に基づく返還請求ができる。質権設定者に対しては対抗力の問題は生じないからである。</p>
        </div>
        <div class="p-card">
          <p class="h6 ind1">(2) 質権設定後、目的物が任意に設定者に返還された場合の質権の効力</p>
          <p class="p6 ind2">対抗力喪失説（大判大５.12.25）</p>
          <p class="p6 ind2">質権そのものは消滅せず、単に対抗力を失うにすぎない。</p>
          <p class="p6 ind2">質権の本質は、優先弁済的効力であり、留置的効力を重視すべきではない。</p>
          <p class="p6 ind2">※なお、登記を対抗要件とする不動産質権にあっては、対抗力も失わない。</p>
        </div>
<div class="kakomon"><a href="pu26min28q.php#q-h21-12-i" title="H21-12-イ">過去問</a></div>
        </div>
      </div>
    </div>
    <div class="blk outer">
      <div class="outer-title" id="A03-03-02-0-03">３　動産質権者の権利・義務</div>
      <div class="blk inner">
        <div class="p-card">
          <p class="h6 ind0">1.　目的物の使用・収益の可否</p>
          <p class="p6 ind1">不動産質権と異なり、設定者の承諾がなければ認められない（350条、298条２項本文）。</p>
        </div>
        <div class="p-card">
          <p class="h6 ind0">2.　善管注意義務等</p>
          <p class="p6 ind1">298条が準用されることにより、動産質権者は善良な管理者の注意をもって質物を保管し、債務者の承諾がなければ質物の使用（保存に必要な使用を除く）、賃貸又は担保設定をすることができない。これに反する場合は、質権の消滅請求を受け得る（350条、298条）。</p>
        </div>
<div class="kakomon"><a href="pu26min28q.php#q-r05-14-e" title="R5-14-エ">過去問</a></div>
      </div>
    </div>
    <div class="blk outer">
      <div class="outer-title" id="A03-03-02-0-04">４　優先弁済的効力</div>
      <div class="blk inner">
        <div class="p-card">
          <p class="h6 ind0">1.　優先弁済を受ける方法</p>
        <div class="p-card">
          <p class="h6 ind1">(1) 競売（民執法190条、192条）</p>
        </div>
        <div class="p-card">
          <p class="h6 ind1">(2) 簡易な弁済充当</p>
          <p class="p6 ind2">動産質権者が債権の弁済を受けないときは、｢正当な理由｣がある場合に限り、鑑定人の評価に従い質物をもって直ちに弁済に充当することを裁判所に請求することができる。この場合、質権者はあらかじめその請求をする旨を債務者に通知しなければならない（354条）。</p>
          <p class="p6 ind2">質権実行の費用倒れを防止する趣旨である。</p>
        </div>
        </div>
        <div class="p-card">
          <p class="h6 ind0">2.　流質契約の禁止（349条）－優先弁済的効力の特則</p>
        <div class="p-card">
          <p class="h6 ind1">(1) 流質契約の意義</p>
          <p class="p6 ind2">：質権設定者が質権設定契約あるいは弁済期前の契約により、質権者に弁済として質物の所有権を取得させ、又は法律の定める方法によらないで、質物を処分することを約する契約</p>
          <p class="p6 ind2">債権者が債務者の窮迫に乗じて債務額に比べ不相当に高価な質物について流質契約を結ばせるおそれがあるとして、禁止されている。</p>
          <p class="p6 ind2">もっとも、弁済期後にこのような契約をすることは許される。</p>
          <p class="p6 ind2">なお、債務者が任意に質物をもって代物弁済することができるという契約は、債務者自身にその決定が委ねられているので、弁済期前に定めた場合も有効とされる（大判明37.４.５）。</p>
        </div>
        <div class="p-card">
          <p class="h6 ind1">(2) 強行法規性</p>
          <p class="p6 ind2">349条は強行規定であり、これに反する流質契約は無効となる。</p>
          <p class="p6 ind2">質権設定契約自体は原則として有効に成立し、流質契約のみが無効になる（通説）。</p>
        </div>
        <div class="p-card">
          <p class="h6 ind1">(3) 流質の認められる場合</p>
        <div class="p-card">
          <p class="h6 ind3 nobold">①被担保債権が商行為によって生じた場合（商法515条）</p>
          <p class="h6 ind3 nobold">②営業質屋の場合（質屋営業法19条）</p>
        </div>
<div class="kakomon"><a href="pu26min28q.php#q-h31-12-u" title="H31-12-ウ">過去問</a></div>
        </div>
        </div>
      </div>
    </div>
    <div class="blk outer">
      <div class="outer-title" id="A03-03-02-0-05">５　動産質権の消滅</div>
      <p>物権に共通の消滅原因、担保物権に共通の消滅原因によるほか、動産質権に特有の消滅原因として、承諾を得ない質物の使用・賃貸・担保設定（350条、298条３項）などがある。</p>
<div class="kakomon"><a href="pu26min28q.php#q-h21-12-a" title="H21-12-ア">過去問</a></div>
    </div>
    </div>
    <div class="p-card sec-card">
      <h3 id="A03-03-03">第３節　不動産質</h3>
    <div class="blk outer">
      <div class="outer-title" id="A03-03-03-0-01">１　意義</div>
      <p>不動産質：不動産を対象とした質権</p>
      <p>不動産質は、動産質とは異なり、｢使用及び収益｣（356条）を債権者に与えることを本体とした担保（用益質）であることにその本質がある。</p>
      <p>抵当権の規定の準用がある（361条）。</p>
    </div>
    <div class="blk outer">
      <div class="outer-title" id="A03-03-03-0-02">２　設定</div>
      <div class="blk inner">
        <div class="p-card">
          <p class="h6 ind0">1.　効力要件</p>
          <p class="p6 ind1">不動産質権も、効力が生じるためには設定契約と目的物の引渡しが必要である（344条）。</p>
        </div>
        <div class="p-card">
          <p class="h6 ind0">2.　対抗要件</p>
          <p class="p6 ind1">対抗要件は｢登記｣である（177条）。</p>
        </div>
<div class="kakomon"><a href="pu26min28q.php#q-r02-12-ih08-12-a" title="R2-12-イ">過去問</a></div>
      </div>
    </div>
    <div class="blk outer">
      <div class="outer-title" id="A03-03-03-0-03">３　存続期間（360条）</div>
      <div class="blk inner">
        <div class="p-card">
          <p class="h6 ind0">1.　意義</p>
          <p class="p6 ind1">質権の存続期間は、10年を超えることができない。これより長い期間を定めたときでも、その期間は10年に短縮する（360条１項）。10年の存続期間を経過すると、質権そのものが消滅する。その結果、使用収益権を失うのみならず、競売権も失う。</p>
          <p class="p6 ind1">この期間は更新することができるが、更新時より10年を超えることはできない（360条２項）。</p>
          <p class="p6 ind1">本条は、永小作権の期間に関する278条や、買戻しの期間制限の580条と同趣旨の規定である。すなわち不動産を長期にわたって他人の手に委ねておくことは不動産を荒廃させるとの考慮に基づき、不動産質権の存続期間を定めるものである。他の質権にはない制限である。</p>
          <p class="p6 ind1">存続期間の定めがない場合でも、質権が不成立となるのではなく設定のときから10年間は存続する（大判大６.９.19）。</p>
        </div>
        <div class="p-card">
          <p class="h6 ind0">2.　被担保債権の弁済期が不動産質権の存続期間経過後に到来する場合</p>
          <p class="p6 ind1">債務者が期限の利益を喪失しない限り、質権者は優先弁済を受ける機会はない。</p>
        </div>
        <div class="p-card">
          <p class="h6 ind0">3.　弁済期が存続期間の満了より早く到来する場合</p>
          <p class="p6 ind1">弁済期後、存続期間の満了までに質権を実行すべきであり、これを怠れば無担保債権となる。</p>
        </div>
        <div class="p-card">
          <p class="h6 ind0">4.　弁済期と存続期間の満了が同時の場合</p>
          <p class="p6 ind1">期間満了により直ちに質権が消滅し、優先弁済権を失うというのは不合理である。そこで、弁済期到来＝期間満了の後、遅滞なく競売の申立てをすれば質権者は、優先弁済を受けることができると解される。</p>
        </div>
<div class="kakomon"><a href="pu26min28q.php#q-r04-11-u" title="R4-11-ウ">過去問</a></div>
      </div>
    </div>
    <div class="blk outer">
      <div class="outer-title" id="A03-03-03-0-04">４　効力</div>
      <div class="blk inner">
        <div class="p-card">
          <p class="h6 ind0">1.　効力の及ぶ範囲</p>
          <p class="p6 ind1">原則として、不動産質権は、目的地上に存する建物を除き、目的不動産に付加して一体となっている物（「付加一体物」）に及ぶ（361条、370条）。もっとも、不動産質権は使用収益権があるので、その効力は果実収取権にも及ぶ（356条）。</p>
        </div>
        <div class="p-card">
          <p class="h6 ind0">2.　物上代位（350条・304条）</p>
          <p class="p6 ind1">物上代位も認められるが、上記の通り、不動産質権には、果実収取権があるので、不動産質権者は目的不動産を賃貸して賃料を収取することができるので、あまり賃貸による物上代位を論ずる意味はない。</p>
        </div>
        <div class="p-card">
          <p class="h6 ind0">3.　優先弁済的効力</p>
          <p class="p6 ind1">不動産質権の実行方法は、抵当権規定が準用されることから（361条）、担保不動産競売に加えて担保不動産収益執行も可能である。</p>
          <p class="p6 ind1">簡易の弁済充当（354条）は許されない。</p>
        </div>
      </div>
    </div>
    <div class="blk outer">
      <div class="outer-title" id="A03-03-03-0-05">５　使用収益権能</div>
      <div class="blk inner">
        <div class="p-card">
          <p class="h6 ind0">1.　使用収益の態様</p>
        <div class="p-card">
          <p class="h6 ind1">(1) 不動産質権者による使用収益</p>
          <p class="p6 ind2">不動産質権者は、設定行為に別段の定めがない限り（359条）、目的物の用法に従い使用・収益できる（356条）。また、自ら使用収益することができるのみならず、第三者への賃貸・用益物権の設定もできる。</p>
        </div>
        <div class="p-card">
          <p class="h6 ind1">(2) 果実収取権</p>
          <p class="p6 ind2">不動産質権者は、不動産の用法に従って生じた天然果実･法定果実を収取することができる（民法350条、297条）。</p>
        </div>
        </div>
        <div class="p-card">
          <p class="h6 ind0">2.　質権者の負担</p>
        <div class="p-card">
          <p class="h6 ind1">(1) 質物（不動産）の管理費用その他の不動産上の負担（固定資産税等）を負う（357条）。</p>
          <p class="p6 ind2">質権者が用益権を有することから、その反面として必要な管理費用等の負担を負う。</p>
        </div>
        <div class="p-card">
          <p class="h6 ind1">(2) 利息の請求は不可（358条）</p>
          <p class="p6 ind2">目的不動産の収益による利益は、被担保債権の利息に相当するものとみられるため、不動産質権者は原則として被担保債権の利息を請求できないとした。</p>
          <p class="p6 ind2">上記(1)及び(2)は、別段の定めをすることもできる（359条）。</p>
        </div>
<div class="kakomon"><a href="pu26min28q.php#q-r02-12-ah03-10-3h02-08-1" title="R2-12-ア">過去問</a></div>
        </div>
      </div>
    </div>
    <div class="blk outer">
      <div class="outer-title" id="A03-03-03-0-06">６　不動産質権の消滅</div>
      <p>動産質権と同様の消滅原因のほか、10年の存続期間が満了する場合があり、また、代価弁済（361条、378条）、質権消滅請求（361条、379条）により消滅する場合がある。</p>
      <p>なお、存続期間の経過による不動産質権の消滅は、登記を抹消しなくても第三者に対抗できる（大判大６.11.３）。</p>
<div class="kakomon"><a href="pu26min28q.php#q-h08-12-e" title="H8-12-エ">過去問</a></div>
    </div>
    </div>
    <div class="p-card sec-card">
      <h3 id="A03-03-04">第４節　権利質</h3>
    <div class="p-card rank4-card">
      <p id="A03-03-04-1" class="h6 ind0">Ⅰ　意義</p>
    <div class="blk outer">
      <div class="outer-title">本文</div>
      <p>権利質：債権、株式、無体財産権などの財産権を目的とする質権</p>
      <p>権利質も他の質権と同様、価値把握権としての性質を有する。これらの財産権は抵当権では担保とすることができないので、質権が重要な役割を果たす。</p>
    </div>
    </div>
    <div class="p-card rank4-card">
      <p id="A03-03-04-2" class="h6 ind0">Ⅱ　債権質</p>
    <div class="blk outer">
      <div class="outer-title" id="A03-03-04-2-01">１　設定</div>
      <div class="blk inner">
        <div class="p-card">
          <p class="h6 ind0">1.　設定契約</p>
          <p class="p6 ind1">現に発生していない債権を目的とすることもできる（364条かっこ書参照）。</p>
          <p class="p6 ind1">債権質の設定は、下記(1)及び(2)以外の場合、設定契約により効力を生じ、債権証書が作成されていても、交付は効力要件ではない。</p>
        <div class="p-card">
          <p class="h6 ind1">(1) 指図証券の質入れは、その証券に譲渡の裏書をして質権者に交付しなければ、その効力を生じない（520条の７、520条の２）。</p>
        </div>
        <div class="p-card">
          <p class="h6 ind1">(2) 記名式所持人払証券の質入れは、その証券を質権者に交付しなければ、その効力を生じない（520条の17、520条の13）。</p>
        </div>
        </div>
        <div class="p-card">
          <p class="h6 ind0">2.　対抗要件（364条）</p>
          <p class="p6 ind1">第三債務者への通知、又は第三債務者の承諾（364条、467条）か債権譲渡登記ファイルによる（動産債権譲渡特例法14条１項、４条）。</p>
        </div>
<div class="kakomon"><a href="pu26min28q.php#q-r04-14-or07-13-o" title="R4-14-オ">過去問</a></div>
      </div>
    </div>
    <div class="blk outer">
      <div class="outer-title" id="A03-03-04-2-02">２　効力</div>
      <div class="blk inner">
        <div class="p-card">
          <p class="h6 ind0">1.　効力の及ぶ範囲</p>
        <div class="p-card">
          <p class="h6 ind1">(1) 利息債権</p>
          <p class="p6 ind2">質入債権が利息付である場合、その利息は「果実」（350条、297条）に当たるので、質権者はこの利息を直接取り立てて優先弁済に充てることができる（366条、350条、297条）。</p>
        </div>
        <div class="p-card">
          <p class="h6 ind1">(2) 不可分性</p>
          <p class="p6 ind2">被担保債権の全部の弁済を受けるまで質入債権の全部に及ぶ（350条、296条）。</p>
        </div>
        <div class="p-card">
          <p class="h6 ind1">(3) 物上代位（350条、304条）</p>
        </div>
        <div class="p-card">
          <p class="h6 ind1">(4) 担保権を随伴する場合</p>
          <p class="p6 ind2">質入債権についての保証債務や担保物権も、債権質の効力が及ぶ（随伴性）。</p>
          <p class="p6 ind2">ただ、質権・抵当権等の上に債権質の効力が及ぶ場合は、質権においては目的物の引渡しが効力発生要件となり、抵当権においては登記が対抗要件となると解される。</p>
        </div>
        </div>
        <div class="p-card">
          <p class="h6 ind0">2.　優先弁済的効力</p>
        <div class="p-card">
          <p class="h6 ind1">(1) 債権の直接取立て</p>
          <p class="p6 ind2">質権者は質権の目的である債権を自己の名において直接に取り立てることができる（366条１項）。</p>
          <p class="p6 ind2">債権の目的物が金銭である場合に、取り立てることができる範囲は、質権者が有する債権額に相当する部分に限られる（366条２項）。</p>
        <div class="p-card">
          <p class="h6 ind2 nobold">(a) 設定者による取立て等の制限</p>
          <p class="p6 ind3">債権質が設定された場合において、設定者は、質権者に対し、当該債権の担保価値を維持すべき義務を負い、債権の放棄、免除、相殺、更改等当該債権を消滅、変更させる一切の行為その他当該債権の担保価値を害するような行為を行うことは許されない（最判平18.12.21）。</p>
        </div>
        <div class="p-card">
          <p class="h6 ind2 nobold">(b) 弁済期到来前の供託</p>
          <p class="p6 ind3">債権の目的物が金銭であるときの債権の弁済期が質権者の債権の弁済期前に到来したときは、質権者は、第三債務者にその弁済すべき金額を供託させることができる（366条３項前段）。</p>
        </div>
        <div class="p-card">
          <p class="h6 ind2 nobold">(c) 債権の目的物が金銭でないとき</p>
          <p class="p6 ind3">債権の目的物が金銭でないときは、質権者は、弁済として受けた物について質権を有する（366条４項）。例えば、物の給付を目的とする債権の質権者は、その物の上に質権を有するのみであり、その物の引渡しを受けて、自己の所有とすることにより、被担保債権の弁済に充てることはできない。</p>
        </div>
        </div>
        <div class="p-card">
          <p class="h6 ind1">(2) 民事執行法による執行</p>
          <p class="p6 ind2">債権その他の財産権についての担保権実行は、民事執行法193条により行われるが、その手続は債権等に対する強制執行手続による（民執法193条２項）。</p>
        </div>
<div class="kakomon"><a href="pu26min28q.php#q-h27-13-u" title="H27-13-ウ">過去問</a></div>
        </div>
      </div>
    </div>
    <div class="blk outer">
      <div class="outer-title" id="A03-03-04-2-03">３　消滅</div>
      <p>債権質は被担保債権の消滅によって消滅する。</p>
    </div>
    </div>
    </div>
    <div class="p-card sec-card">
      <h3 id="A03-03-05">第５節　転質権</h3>
    <div class="blk outer">
      <div class="outer-title">本文</div>
      <p>転質：質権者が質物として受け取った物を更に自己の債務を担保するため質入すること</p>
    </div>
    <div class="blk outer">
      <div class="outer-title" id="A03-03-05-0-01">１　責任転質</div>
      <div class="blk inner">
        <div class="p-card">
          <p class="h6 ind0">1.　意義</p>
          <p class="p6 ind1">責任転質：質物を受け取った債権者が原質権設定者の承諾なく、自己の責任で転質をすること（348条）</p>
        </div>
        <div class="p-card">
          <p class="h6 ind0">2.　性質</p><br>
          <p class="p6 ind1">Ａ　共同質入説</p>
          <p class="p6 ind1">転質は、原質権者が被担保債権をその質権とともに質入することと解する。</p>
          <p class="p6 ind1">（理由）</p>
          <p class="p6 ind1">質権の付従性から、質権は被担保債権と離れて独立に処分することはできない。</p><br>
          <p class="p6 ind1">Ｂ　単独質入説</p>
          <p class="p6 ind1">被担保債権と分離して質権だけを独立に処分できる。</p><br>
          <p class="p6 ind1">B1　（解除条件付）質権譲渡説</p>
          <p class="p6 ind1">転質は、転質権の被担保債権の消滅を解除条件として質権を譲渡するものと構成する。</p><br>
          <p class="p6 ind1">B2　質権質入説</p>
          <p class="p6 ind1">転質は、質権の上に質権を設定するものであって、一種の権利質の設定と構成する。</p><br>
          <p class="p6 ind1">B3　質物再度質入説（大連決大14.７.14、最判昭45.３.27・多数説）</p>
          <p class="p6 ind1">転質は、質物上に新たに質権を設定するものであると構成する。</p>
          <p class="p6 ind1">（理由）</p>
          <p class="p6 ind1">348条の文理解釈から。</p><br>
          <p class="p6 ind1">【転質権の性質と具体的差異】</p>
          <p class="p6 ind1"><img class="embed-img" src="img/min28-01.png" alt="min28-01.png"></p>
          <p class="p6 ind1">※1 ただし、原質権の範囲内で転質が成立すると解すれば厳密な意味での有効要件ではない。</p>
          <p class="p6 ind1">※2 ただし、不可分性により不可とする考えもある。</p>
        </div>
        <div class="p-card">
          <p class="h6 ind0">3.　要件</p>
        <div class="p-card">
          <p class="h6 ind1">(1) 有効要件</p>
        <div class="p-card">
          <p class="h6 ind2 nobold">(a) 転質権の存続期間は原質権の存続期間内であること</p>
          <p class="p6 ind3">転質は、原質権者のもつ質物に関する担保価値の再利用であるから、この制限は当然である。</p>
        </div>
        <div class="p-card">
          <p class="h6 ind2 nobold">(b) 転質権の被担保債権額は原質権の被担保債権額を超過しないこと</p>
          <p class="p6 ind3">※　いずれの要件を超過した場合でも、超過しない範囲内で転質が成立するものと解されている。</p>
        </div>
        </div>
        <div class="p-card">
          <p class="h6 ind1">(2) 対抗要件</p>
          <p class="p6 ind2">転質権の設定を原債務者に対抗するためには、原質権者から債務者に転質権設定の通知をするか債務者がこれを承諾することを要する（364条又は377条準用）。</p>
          <p class="p6 ind2">※　｢準用｣とするのは、単独質入説の立場である。</p>
        </div>
        </div>
        <div class="p-card">
          <p class="h6 ind0">4.　効果</p>
        <div class="p-card">
          <p class="h6 ind1">(1) 転質をした者の責任－加重責任</p>
          <p class="p6 ind2">転質権設定者は、転質をしなかったら生じなかったであろう不可抗力による損害についても賠償の責任を負う（348条後段）。</p>
        </div>
        <div class="p-card">
          <p class="h6 ind1">(2) 転質権の実行</p>
          <p class="p6 ind2">転質権の実行は、その被担保債権の弁済期のみならず、原質権の被担保債権の弁済期も到来していることを要する。</p>
        </div>
        <div class="p-card">
          <p class="h6 ind1">(3) 原質に対する拘束</p>
          <p class="p6 ind2">原質権者＝転質権設定者は、その被担保債権について取立て・弁済の受領・免除など転質権を害する処分をすることはできず、これらの処分をしても転質権者に対抗できない。</p>
        </div>
        </div>
        <div class="p-card">
          <p class="h6 ind0">5.　消滅</p>
        <div class="p-card">
          <p class="h6 ind3 nobold">①転質の被担保債権の消滅により消滅するほか、②原質権の消滅によっても消滅する。</p>
        </div>
<div class="kakomon"><a href="pu26min28q.php#q-r05-14-u" title="R5-14-ウ">過去問</a></div>
        </div>
      </div>
    </div>
    <div class="blk outer">
      <div class="outer-title" id="A03-03-05-0-02">２　承諾転質</div>
      <div class="blk inner">
        <div class="p-card">
          <p class="h6 ind0">1.　意義</p>
          <p class="p6 ind1">：質権設定者の承諾を得てなされる転質</p>
        </div>
        <div class="p-card">
          <p class="h6 ind0">2.　有効要件－責任転質のような制約はなく、承諾の内容によって決まる。</p>
        </div>
        <div class="p-card">
          <p class="h6 ind0">3.　効果－承諾の内容によって決まる。</p>
        <div class="p-card">
          <p class="h6 ind1">(1) 原質権者と原質権設定者との関係</p>
          <p class="p6 ind2">転質によって影響されない。原質権者はその被担保債権の弁済を受けることは可能であり、原質権は消滅する。しかし、これを転質権者に対抗できない。すなわち、転質権は消滅しない。</p>
        </div>
        <div class="p-card">
          <p class="h6 ind1">(2) 動産転質権者の責任</p>
          <p class="p6 ind2">動産質権者が承諾転質をした場合、過失責任しか負わないので、不可抗力により質物が消滅したときは、損害賠償責任を負わない。</p>
          <div class="sp"></div>
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
