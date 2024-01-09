<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ページ２</title>
</head>

<body>
    <div class="head">
        <label>＜このページは妊婦自身で入力してください。＞</label>
    </div>

    <div class="title">
        <h1>妊婦の健康状態等</h1>
    </div>

    <div class="container">
        <table border="1">
            @foreach ($page_02s as $page_02)
                <tr>
                    <td>
                        身長：{{ $page_02['height'] }} cm
                    </td>
                    <td>
                        ふだんの体重：{{ $page_02['weight'] }} kg
                    </td>
                    <td colspan="2">ＢＭＩ：{{ $page_02['bmi'] }}
                    </td>
                </tr>
                <tr>
                    <td colspan="4">ＢＭＩ(体格指数) ＝ 体重(kg) ÷ 身長(m) ÷ 身長(m)</td>
                </tr>
                <tr>
                    <th colspan="2">・次の病気にかかったことがありますか。（あるものにチェック）</th>
                    <td colspan="2">
                        {{ $page_02['diseases_history'] }}
                    </td>
                </tr>
                <tr>
                    <th rowspan="2" colspan="2">・次の感染症にかかったことがありますか。</th>
                </tr>
                <tr>
                    <td colspan="2">
                        風しん（三日はしか）：
                        @if ($page_02['rubella'] == '1')
                            いいえ
                        @elseif($page_02['rubella'] == '2')
                            はい
                        @else
                            予防接種を受けた
                        @endif
                        <br>
                        麻しん（はしか）　　：
                        @if ($page_02['measles'] == '1')
                            いいえ
                        @elseif($page_02['measles'] == '2')
                            はい
                        @else
                            予防接種を受けた
                        @endif
                        <br>
                        水痘（水ぼうそう）　：
                        @if ($page_02['chickenpox'] == '1')
                            いいえ
                        @elseif($page_02['chickenpox'] == '2')
                            はい
                        @else
                            予防接種を受けた
                        @endif
                    </td>
                </tr>
                <tr>
                    <th colspan="2">・今までに手術を受けたことがありますか。</th>
                    <td colspan="2">
                        @if ($page_02['surgery_history_select'] == '1')
                            なし
                        @elseif($page_02['surgery_history_select'] == '2')
                            あり（病名：{{ $page_02['surgery_history_disease'] }}）
                        @endif
                    </td>
                </tr>
                <tr>
                    <th colspan="2">・服用中の薬（常用薬）</th>
                    <td colspan="2">{{ $page_02['medicine'] }}</td>
                </tr>
                <tr>
                    <th colspan="2">・薬剤や食品などのアレルギー</th>
                    <td colspan="2">{{ $page_02['allergy'] }}</td>
                </tr>
                <tr>
                    <th colspan="2">・家庭や仕事など日常生活で強いストレスを感じていますか。</th>
                    <td colspan="2">
                        @if ($page_02['stress'] == '1')
                            いいえ
                        @elseif($page_02['stress'] == '2')
                            はい
                        @endif
                    </td>
                </tr>
                <tr>
                    <th colspan="2">・今回の妊娠に際し、心配なことはありますか。</th>
                    <td colspan="2">
                        @if ($page_02['pregnant_anxiety'] == '1')
                            いいえ
                        @elseif($page_02['pregnant_anxiety'] == '2')
                            はい
                        @endif
                    </td>
                </tr>
                <tr>
                    <th colspan="2">・その他心配なこと</th>
                    <td colspan="2">{{ $page_02['other_anxiety'] }}
                    </td>
                </tr>
                <tr>
                    <th colspan="2">・たばこを吸いますか。</th>
                    <td colspan="2">
                        @if ($page_02['tabacco_select'] == '1')
                            いいえ
                            @isset($page_02['tabacco_no_count'])
                                （以前は吸っていた（１日：{{ $page_02['tabacco_no_count'] }} 本）
                            @endisset
                        @elseif($page_02['tabacco_select'] == '2')
                            はい（１日：{{ $page_02['tabacco_yes_count'] }} 本）
                        @endif
                    </td>
                </tr>
                <tr>
                    <th colspan="2">・同居者は同室でたばこを吸いますか。</th>
                    <td colspan="2">
                        @if ($page_02['cohabitant_tabacco_select'] == '1')
                            いいえ
                        @elseif($page_02['cohabitant_tabacco_select'] == '2')
                            はい（１日：{{ $page_02['cohabitant_tabacco_count'] }} 本）
                        @endif
                    </td>
                </tr>
                <tr>
                    <th colspan="2">・酒類を飲んでいますか。</th>
                    <td colspan="2">
                        @if ($page_02['alcohol_select'] == '1')
                            いいえ
                            @isset($page_02['alcohol_no_count'])
                                以前は飲んでいた（１日：{{ $page_02['alcohol_no_count'] }} ml程度）
                            @endisset
                        @elseif($page_02['alcohol_select'] == '2')
                            はい（１日：{{ $page_02['alcohol_yes_count'] }} ml程度）
                        @endif
                    </td>
                </tr>
                <tr>
                    <td colspan="4">※喫煙と飲酒は、赤ちゃんの成長に大きな影響を及ぼしますので、やめましょう。</td>
                </tr>
                <tr>
                    <th colspan="2">夫・パートナーの健康状態</th>
                    <td colspan="2">
                        @if ($page_02['partner_condition_select'] == '1')
                            健康
                        @elseif($page_02['partner_condition_select'] == '2')
                            よくない（病名：{{ $page_02['partner_condition_disease'] }}）
                        @endif
                    </td>
                </tr>
                <tr>
                    <th colspan="4">いままでの妊娠・出産</th>
                </tr>
                <tr>
                    <th>出産年月</th>
                    <th>妊娠期間・出産方法</th>
                    <th>出生児の体重・性別</th>
                    <th>現在の子の状態</th>
                </tr>
                @for ($i = 1; $i <= 3; $i++)
                    @isset($page_02['pch_child_birthday' . $i])
                        <tr>
                            <td>
                                {{ $page_02['pch_child_birthday' . $i] }}
                            </td>
                            <td>
                                妊娠 {{ $page_02['pch_pregnancy_period' . $i] }} 週・{{ $page_02['pch_birth_method' . $i] }}
                            </td>
                            <td>
                                {{ $page_02['pch_child_weight' . $i] }} g・
                                @if ($page_02['pch_child_gender' . $i] == '1')
                                    男
                                @elseif ($page_02['pch_child_gender' . $i] == '2')
                                    女
                                @endif
                            </td>
                            <td>
                                {{ $page_02['pch_child_condition' . $i] }}
                            </td>
                        </tr>
                    @endisset
                @endfor
            @endforeach
        </table>
    </div>

    <label>※妊娠についての悩みや、出産・育児の不安がある方は、</label>
    <br>
    <label>　市町村（子育て世代包括支援センター）、医療機関等に気軽に相談しましょう。</label>

    {{-- ボタン --}}
    <div>
        <a href="{{ route('main.index', $user) }}">戻る</a>
    </div>

</body>

</html>
