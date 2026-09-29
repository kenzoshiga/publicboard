<?php
/** ひな形(タブ区切りテキスト)を申請例データに変換する関数。tools/import_hinagata.php とテストから使う。 */
declare(strict_types=1);

/** @return array{0: array, 1: string[]} */
function touki_import_hinagata(string $raw, string $idPrefix): array
{
    if (!mb_check_encoding($raw, 'UTF-8')) {
        $raw = mb_convert_encoding($raw, 'UTF-8', 'SJIS-win');
    }
    $raw = preg_replace('/^\xEF\xBB\xBF/', '', $raw);
    $lines = preg_split('/\r\n|\r|\n/', $raw);

    $blocks = [];
    foreach ($lines as $n => $line) {
        if (trim($line) === '') {
            continue;
        }
        $cols = explode("\t", $line, 2);
        $label = trim($cols[0], " \u{3000}");
        $value = $cols[1] ?? '';
        if (preg_match('/^申請例\s*(\d+)$/u', $label, $m)) {
            $blocks[] = ['no' => $m[1], 'title' => touki_clean($value), 'rows' => [], 'line' => $n + 1];
            continue;
        }
        if ($blocks) {
            $blocks[count($blocks) - 1]['rows'][] = ['label' => $label, 'value' => $value, 'line' => $n + 1];
        }
    }

    $cases = [];
    $warnings = [];
    foreach ($blocks as $b) {
        [$case, $w] = touki_build_case($b, $idPrefix);
        $cases[] = $case;
        array_push($warnings, ...$w);
    }
    return [$cases, $warnings];
}

function touki_clean(string $s): string
{
    return trim($s, " \t\u{3000}");
}

/** @return array{0: array, 1: string[]} */
function touki_build_case(array $b, string $idPrefix): array
{
    $warn = [];
    $name = "申請例{$b['no']}";
    // 項目名 → [フィールド, 内容の先頭に付ける語]
    $map = [
        '事例' => ['scene', ''],
        '登記の目的' => ['purpose', ''],
        '登記原因' => ['cause', ''],
        '申請人' => ['applicant', ''],
        '所有者' => ['applicant', ''],
        '相続人' => ['applicant', ''],
        '権利者' => ['applicant', '権利者　'],
        '義務者' => ['applicant', '義務者　'],
        '権利者兼義務者' => ['applicant', '権利者兼義務者　'],
        '添付情報' => ['attach', ''],
        '上記以外の申請事項等' => ['matters', ''],
        '更正後の事項' => ['matters', "更正後の事項\n"],
        '課税価格' => ['price', ''],
        '登録免許税' => ['tax', ''],
    ];
    $vals = [];
    $sourceLabels = [];
    $attachNotes = [];
    $field = 'scene'; // 表題の直後の、項目名のない行は事例として扱う
    foreach ($b['rows'] as $r) {
        $label = $r['label'];
        $value = $r['value'];
        if ($label === '') {
            $vals[$field][] = $field === 'attach' ? touki_clean($value) : rtrim($value, " \t\u{3000}");
            continue;
        }
        if (!isset($map[$label])) {
            if ($field === 'attach') {
                // 添付情報の続きの行で、1列目に書類名、2列目に補足が入っている
                $vals['attach'][] = $label;
                if (touki_clean($value) !== '') {
                    $attachNotes[$label] = touki_clean($value);
                    $warn[] = "$name(行{$r['line']}): 添付情報「{$label}」の補足「" . touki_clean($value) . "」は補足として保持";
                }
                continue;
            }
            $warn[] = "$name(行{$r['line']}): 項目名「{$label}」を読み取れないため無視";
            continue;
        }
        [$field, $prefix] = $map[$label];
        if ($field === 'applicant') {
            $sourceLabels[] = $label;
        }
        $vals[$field][] = $prefix . touki_clean($value);
    }

    $join = static fn(string $f): string => isset($vals[$f]) ? touki_clean(implode("\n", $vals[$f])) : '';
    $case = [
        'id' => sprintf('%s-%s', $idPrefix, $b['no']),
        'category' => '不動産',
        'title' => $b['title'],
        'scene' => str_replace("\n", '', $join('scene')),
        'fields' => [
            'purpose' => $join('purpose'),
            'cause' => $join('cause') ?: '(なし)',
            'matters' => $join('matters') ?: '(なし)',
            'applicant' => $join('applicant'),
            'price' => $join('price') ?: '(なし)',
        ],
        'attach' => array_values(array_filter($vals['attach'] ?? [], fn($a) => $a !== '')),
    ];
    if ($attachNotes) {
        $case['attachNotes'] = $attachNotes;
    }
    foreach (['purpose', 'applicant'] as $f) {
        if ($case['fields'][$f] === '') {
            $warn[] = "$name: {$f} が空";
        }
    }
    if (!$case['attach']) {
        $warn[] = "$name: 添付情報が空";
    }
    if ($sourceLabels) {
        $case['sourceApplicantLabel'] = implode('・', array_unique($sourceLabels));
    }
    [$case['tax'], $w] = touki_infer_tax($name, $case['scene'], $vals['price'] ?? [], $vals['tax'] ?? []);
    array_push($warn, ...$w);
    return [$case, $warn];
}

/** 「金1億2000万円」「金20万円」「金1000円」などを円に。見つからなければ null */
function touki_yen(string $s): ?int
{
    if (!preg_match('/金\s*((?:[0-9０-９,，]+\s*[億万]?\s*)+)円?/u', $s, $m)) {
        return null;
    }
    $t = mb_convert_kana($m[1], 'n');
    $t = str_replace([',', '，', ' '], '', $t);
    $total = 0;
    preg_match_all('/(\d+)(億|万)?/u', $t, $parts, PREG_SET_ORDER);
    foreach ($parts as $p) {
        $n = (int)$p[1];
        $total += $n * (($p[2] ?? '') === '億' ? 100000000 : (($p[2] ?? '') === '万' ? 10000 : 1));
    }
    return $total;
}

/** 行頭の「建物」「敷地権」「合計」などの見出し */
function touki_line_head(string $s): string
{
    $s = touki_clean($s);
    return preg_match('/^([^\s\x{3000}金]+)[\s\x{3000}]+.*金/u', $s, $m) ? $m[1] : '';
}

/** @return array{0: array, 1: string[]} */
function touki_infer_tax(string $name, string $scene, array $priceLines, array $taxLines): array
{
    $warn = [];
    $taxLines = array_values(array_filter(array_map('touki_clean', $taxLines), fn($l) => $l !== ''));
    $priceLines = array_values(array_filter(array_map('touki_clean', $priceLines), fn($l) => $l !== ''));
    $answerText = implode("\n", $taxLines);
    $items = array_values(array_filter($taxLines, fn($l) => touki_line_head($l) !== '合計'));
    $totalLine = array_values(array_filter($taxLines, fn($l) => touki_line_head($l) === '合計'))[0] ?? null;
    $answer = $totalLine !== null ? touki_yen($totalLine) : array_sum(array_map(fn($l) => (int)touki_yen($l), $items));

    // 事例のうち課税標準の額を述べた文を、出題の条件として使う
    preg_match_all('/[^。]*課税標準[^。]*。/u', $scene, $m);
    $example = implode("\n", array_map(fn($s) => rtrim($s, '。'), $m[0]));

    $tax = ['base' => '', 'rate' => '', 'example' => $example, 'answer' => (int)$answer, 'answerText' => $answerText];
    if (!$priceLines) {
        // 課税価格がない → 不動産の個数による定額
        $count = intdiv((int)$answer, 1000);
        $tax['base'] = '不動産の個数';
        $tax['rate'] = '不動産1個につき1,000円';
        $tax['example'] = $example !== '' ? $example : "不動産の個数 {$count}個";
        $tax['formula'] = "不動産{$count}個 × 1,000円 = {$answerText}";
        if ($answer % 1000 !== 0) {
            $warn[] = "$name: 定額課税として税額が1,000円単位でない";
        }
        return [$tax, $warn];
    }
    if (count($priceLines) !== count($items)) {
        $warn[] = "$name: 課税価格と登録免許税の行数が合わないため税率を判定できない";
        return [$tax + ['base' => '不動産の価額'], $warn];
    }
    $rates = [];
    $formula = [];
    foreach ($priceLines as $i => $pl) {
        $price = touki_yen($pl);
        $amount = touki_yen($items[$i]);
        if (!$price || $amount === null) {
            $warn[] = "$name: 金額を読み取れない行「{$pl}」「{$items[$i]}」";
            continue;
        }
        $per1000 = $amount * 1000 / $price;
        $rate = abs($per1000 - round($per1000)) < 1e-9 ? '1000分の' . (int)round($per1000) : null;
        if ($rate === null) {
            $warn[] = "$name: 税率を判定できない({$pl} → {$items[$i]})";
            continue;
        }
        $head = touki_line_head($pl);
        $rates[] = ($head !== '' && count($priceLines) > 1 ? $head : '') . $rate;
        $formula[] = preg_replace('/[\s\x{3000}]+/u', ' ', $pl) . " × {$rate} = " . preg_replace('/^.*?(金)/u', '$1', $items[$i]);
    }
    $uniqueRates = array_unique(array_map(fn($r) => preg_replace('/^.*?(1000分の)/u', '$1', $r), $rates));
    $tax['base'] = '不動産の価額';
    $tax['rate'] = count($uniqueRates) === 1 ? reset($uniqueRates) : implode('・', $rates);
    if ($totalLine !== null) {
        $formula[] = preg_replace('/[\s\x{3000}]+/u', ' ', $totalLine);
    }
    $tax['formula'] = implode("\n", $formula);
    return [$tax, $warn];
}
