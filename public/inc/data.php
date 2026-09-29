<?php
/**
 * 項目定義・候補プール・初期データ。
 * 画面・採点・弱点表はすべてここの定義から生成する(index.php が JSON にしてブラウザへ渡す)。
 */

const DAY_MS = 86400000;
const HOUR_MS = 3600000;

function touki_config(): array
{
    return [
        'fieldDefs' => [
            '不動産' => [
                ['key' => 'purpose', 'label' => '登記の目的', 'mode' => 'cloze'],
                ['key' => 'cause', 'label' => '登記原因', 'mode' => 'cloze'],
                ['key' => 'matters', 'label' => '上記以外の申請事項等', 'mode' => 'cloze'],
                ['key' => 'applicant', 'label' => '申請人', 'mode' => 'cloze'],
                ['key' => 'attach', 'label' => '添付情報', 'mode' => 'attach'],
                ['key' => 'price', 'label' => '課税価格', 'mode' => 'cloze'],
                ['key' => 'tax', 'label' => '登録免許税', 'mode' => 'tax'],
            ],
            '商業' => [
                ['key' => 'jiyu', 'label' => '登記の事由', 'mode' => 'cloze'],
                ['key' => 'jiko', 'label' => '登記すべき事項', 'mode' => 'cloze'],
                ['key' => 'tax', 'label' => '登録免許税(課税標準金額を含む)', 'mode' => 'tax'],
                ['key' => 'attach', 'label' => '添付書面', 'mode' => 'attach'],
            ],
        ],
        // 申請例ごとに項目名を差し替える規則。上から順に見て、when の条件のどれかに当てはまれば label を使う。
        // 条件は項目(field)の内容が equals と一致する、または suffix で終わる。
        'labelRules' => [
            [
                'category' => '不動産',
                'field' => 'applicant',
                // 所有権保存は登記原因を書かないため、登記の目的でも判定する
                'when' => [
                    ['field' => 'purpose', 'equals' => '所有権保存'],
                    ['field' => 'cause', 'equals' => '所有権保存'],
                ],
                'label' => '所有者',
            ],
            [
                'category' => '不動産',
                'field' => 'applicant',
                'when' => [['field' => 'cause', 'suffix' => '相続']],
                'label' => '相続人',
            ],
        ],
        // 以前の版で同梱していた見本。すでに使っている端末からも取り除く
        'retiredSeedIds' => ['re-baibai', 're-souzoku', 're-teitou', 're-netei', 're-massho', 're-kubun-baibai'],
        'attachHeading' => ['不動産' => '添付情報', '商業' => '添付書面'],
        'attachContext' => ['不動産' => ['purpose', 'cause'], '商業' => ['jiyu']],
        // level ごとの復習間隔(ms)。index = level。0=即時、1=1日、2=3日、3=7日、4=14日、5=30日
        'levelIntervals' => [0, 1 * DAY_MS, 3 * DAY_MS, 7 * DAY_MS, 14 * DAY_MS, 30 * DAY_MS],
        // △ のときの次回復習までの時間
        'vagueInterval' => 12 * HOUR_MS,
        'pools' => [
            'attach' => [
                '不動産' => [
                    '登記原因証明情報', '登記識別情報', '印鑑証明書', '住所証明情報',
                    '代理権限証明情報', '会社法人等番号', '承諾証明情報', '農地法所定の許可書',
                    '相続証明情報', '所有権確認証明情報', '所有権取得証明情報',
                ],
                '商業' => [
                    '株主総会議事録', '取締役会議事録', '株主リスト', '定款', '就任承諾書', '辞任届',
                    '本人確認証明書', '印鑑証明書', '募集株式の引受けの申込みを証する書面',
                    '払込みがあったことを証する書面', '資本金の額の計上に関する証明書', '委任状',
                ],
            ],
            'reTaxBase' => ['不動産の価額', '債権額', '極度額', '不動産の個数'],
            'reTaxRate' => [
                '1000分の20', '1000分の15', '1000分の4', '1000分の2', '不動産1個につき1,000円',
                // 建物と敷地権で税率が分かれる場合(区分建物)の選択肢
                '建物1000分の4・敷地権1000分の20', '建物1000分の20・敷地権1000分の4',
                '建物1000分の4・敷地権1000分の4', '建物1000分の20・敷地権1000分の20',
            ],
            'coTaxRate' => [
                '申請件数1件につき3万円',
                '申請件数1件につき3万円(資本金の額が1億円以下の会社は1万円)',
                '増加した資本金の額の1000分の7(3万円に満たないときは3万円)',
                '資本金の額の1000分の7(15万円に満たないときは15万円)',
                '申請件数1件につき6万円',
            ],
        ],
    ];
}

/**
 * 同梱の初期データ。不動産は inc/seed/*.json(ひな形から tools/import_hinagata.php で変換)、
 * 商業は下の見本3件。
 */
function touki_seed_cases(): array
{
    $cases = [];
    foreach (glob(__DIR__ . '/seed/*.json') ?: [] as $file) {
        array_push($cases, ...json_decode((string)file_get_contents($file), true, 512, JSON_THROW_ON_ERROR));
    }
    return array_merge($cases, touki_commercial_seed_cases());
}

/** 商業登記の見本(学習用) */
function touki_commercial_seed_cases(): array
{
    return [
        [
            'id' => 'co-zoushi', 'category' => '商業', 'title' => '募集株式の発行',
            'scene' => '非公開会社の甲株式会社(資本金1,000万円、発行済株式1,000株)は、株主総会で募集事項を決定し、令和8年4月15日、1,000株を発行して払込みを受けた。資本金は1,000万円増加し2,000万円となった。',
            'fields' => [
                'jiyu' => '募集株式の発行',
                'jiko' => "令和8年4月15日次のとおり変更\n発行済株式の総数 2,000株\n資本金の額 金2,000万円",
            ],
            'attach' => [
                '株主総会議事録', '株主リスト', '募集株式の引受けの申込みを証する書面',
                '払込みがあったことを証する書面', '資本金の額の計上に関する証明書', '委任状',
            ],
            'tax' => [
                'rate' => '増加した資本金の額の1000分の7(3万円に満たないときは3万円)', 'base' => 10000000,
                'example' => '資本金 1,000万円 → 2,000万円(増加額 1,000万円)', 'answer' => 70000,
            ],
        ],
        [
            'id' => 'co-yakuin', 'category' => '商業', 'title' => '取締役の変更(辞任・就任)',
            'scene' => '取締役会設置会社である甲株式会社(資本金5,000万円)の取締役Aが令和8年6月28日に辞任し、同日の株主総会で後任としてBが選任され、Bは即日就任を承諾した。',
            'fields' => [
                'jiyu' => '取締役の変更',
                'jiko' => "令和8年6月28日取締役A辞任\n同日取締役B就任",
            ],
            'attach' => ['辞任届', '株主総会議事録', '株主リスト', '就任承諾書', '本人確認証明書', '委任状'],
            'tax' => [
                'rate' => '申請件数1件につき3万円(資本金の額が1億円以下の会社は1万円)', 'base' => null,
                'example' => '資本金の額 5,000万円', 'answer' => 10000, 'note' => '資本金の額が1億円を超える会社は3万円。',
            ],
        ],
        [
            'id' => 'co-shougou', 'category' => '商業', 'title' => '商号の変更',
            'scene' => '甲株式会社は、令和8年5月1日の株主総会で定款を変更し、商号を株式会社乙に変更した。',
            'fields' => [
                'jiyu' => '商号の変更',
                'jiko' => "令和8年5月1日次のとおり変更\n商号 株式会社乙",
            ],
            'attach' => ['株主総会議事録', '株主リスト', '委任状'],
            'tax' => ['rate' => '申請件数1件につき3万円', 'base' => null, 'example' => '資本金の額 1,000万円', 'answer' => 30000],
        ],
    ];
}

/** 候補プールに、初期データの正解(添付情報・税率)をひっかけの選択肢として足した設定 */
function touki_config_with_seed_pools(array $cases): array
{
    $config = touki_config();
    foreach ($cases as $c) {
        $pool = &$config['pools']['attach'][$c['category']];
        $pool = array_values(array_unique(array_merge($pool, $c['attach'])));
        unset($pool);
        if ($c['category'] === '不動産') {
            foreach (['reTaxBase' => 'base', 'reTaxRate' => 'rate'] as $poolKey => $k) {
                if (!in_array($c['tax'][$k], $config['pools'][$poolKey], true)) {
                    $config['pools'][$poolKey][] = $c['tax'][$k];
                }
            }
        } elseif (!in_array($c['tax']['rate'], $config['pools']['coTaxRate'], true)) {
            $config['pools']['coTaxRate'][] = $c['tax']['rate'];
        }
    }
    return $config;
}

/** ブラウザへ渡す JSON */
function touki_bootstrap_json(): string
{
    $cases = touki_seed_cases();
    return json_encode(
        ['config' => touki_config_with_seed_pools($cases), 'seedCases' => $cases],
        JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES | JSON_HEX_TAG | JSON_HEX_AMP | JSON_THROW_ON_ERROR
    );
}
