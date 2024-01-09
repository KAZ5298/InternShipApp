<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ページ１３</title>
</head>

<body>
    <div class="container">
        <table border="1">
            @foreach ($page_13s as $page_13)
                <tr>
                    <th colspan="6">早期新生児期【生後１週間以内】の経過</th>
                </tr>
                <tr>
                    <th>日齢<span>※</span></th>
                    <th>体重（g）</th>
                    <th>哺乳力</th>
                    <th>黄疸</th>
                    <th colspan="2">その他</th>
                </tr>
                @for ($i = 1; $i <= 2; $i++)
                    <tr>
                        <td>
                            {{ $page_13['enp_days' . $i] }}
                        </td>
                        <td>
                            {{ $page_13['enp_weight' . $i] }}
                        </td>
                        <td>
                            @if ($page_13['enp_sucking_power' . $i] == '1')
                                普通
                            @elseif($page_13['enp_sucking_power' . $i] == '2')
                                弱
                            @endif
                        </td>
                        <td>
                            @if ($page_13['enp_jaundice' . $i] == '1')
                                なし
                            @elseif($page_13['enp_jaundice' . $i] == '2')
                                普通
                            @elseif($page_13['enp_jaundice' . $i] == '3')
                                強
                            @endif
                        </td>
                        <td colspan="2">
                            {{ $page_13['enp_others' . $i] }}
                        </td>
                    </tr>
                @endfor
                <tr>
                    <th colspan="3">ビタミンＫ<span>2</span>シロップ投与</th>
                    <td colspan="3">実施日：{{ $page_13['vitamin_administration_date'] }}</td>
                </tr>
                <tr>
                    <th colspan="3">出生時またはその後の異常</th>
                    <td colspan="3">
                        @if ($page_13['enp_abnormality_select'] == '1')
                            なし
                        @elseif($page_13['enp_abnormality_select'] == '2')
                            あり（ {{ $page_13['enp_abnormality'] }}
                            その処置
                            {{ $page_13['enp_abnormality_treatment'] }} ）
                        @endif
                    </td>
                </tr>
                <tr>
                    <th colspan="6">退院時の記録（ {{ $page_13['lh_date'] }}　生後 {{ $page_13['lh_days'] }} 日）</th>
                </tr>
                <tr>
                    <td colspan="3">
                        体重：{{ $page_13['lh_weight'] }} g
                    </td>
                    <th>栄養法</th>
                    <td colspan="2">
                        @if ($page_13['lh_nutrition_method'] == '1')
                            母乳
                        @elseif($page_13['lh_nutrition_method'] == '2')
                            混合
                        @elseif($page_13['lh_nutrition_method'] == '3')
                            人工乳
                        @endif
                    </td>
                </tr>
                <tr>
                    <td colspan="6">
                        引き続き観察を要する事項：{{ $page_13['lh_observation_matter'] }}
                    </td>
                </tr>
                <tr>
                    <th colspan="2">施設名又は担当者名</th>
                    <td colspan="2">{{ $page_13['lh_factory_or_person'] }}</td>
                    <th>電話</th>
                    <td>{{ $page_13['lh_tel'] }}</td>
                </tr>
                <tr>
                    <th colspan="6">後期新生児期【生後１～４週】の経過</th>
                </tr>
                <tr>
                    <th>日齢<span>※</span></th>
                    <th>体重（g）</th>
                    <th>哺乳力</th>
                    <th>栄養法</th>
                    <th colspan="2">施設名又は担当者名</th>
                </tr>
                @for ($i = 1; $i <= 2; $i++)
                    <tr>
                        <td>
                            {{ $page_13['lnp_days' . $i] }}
                        </td>
                        <td>
                            {{ $page_13['lnp_weight' . $i] }}
                        </td>
                        <td>
                            @if ($page_13['lnp_sucking_power' . $i] == '1')
                                普通
                            @elseif($page_13['lnp_sucking_power' . $i] == '2')
                                弱
                            @endif
                        </td>
                        <td>
                            @if ($page_13['lnp_nutrition_method' . $i] == '1')
                                母乳
                            @elseif($page_13['lnp_nutrition_method' . $i] == '2')
                                混合
                            @elseif($page_13['lnp_nutrition_method' . $i] == '3')
                                人工乳
                            @endif
                        </td>
                        <td colspan="2">
                            {{ $page_13['lnp_factory_or_person' . $i] }}
                        </td>
                    </tr>
                @endfor
                <tr>
                    <th colspan="6">新生児訪問指導等の記録（ {{ $page_13['nvg_date'] }}　生後 {{ $page_13['nvg_days1'] }} 日）
                    </th>
                </tr>
                <tr>
                    <th>日齢<span>※</span></th>
                    <th>体重（g）</th>
                    <th>身長（cm）</th>
                    <th>胸囲（cm）</th>
                    <th>頭囲（cm）</th>
                    <th>栄養法</th>
                </tr>
                <tr>
                    <td>
                        {{ $page_13['nvg_days2'] }}
                    </td>
                    <td>
                        {{ $page_13['nvg_weight'] }}
                    </td>
                    <td>
                        {{ $page_13['nvg_height'] }}
                    </td>
                    <td>
                        {{ $page_13['nvg_chest_measurement'] }}
                    </td>
                    <td>
                        {{ $page_13['nvg_head_circumference'] }}
                    </td>
                    <td>
                        @if ($page_13['nvg_nutrition_method'] == '1')
                            母乳
                        @elseif($page_13['nvg_nutrition_method'] == '2')
                            混合
                        @elseif($page_13['nvg_nutrition_method'] == '3')
                            人工乳
                        @endif
                    </td>
                </tr>
                <tr>
                    <th colspan="2">施設名又は担当者名</th>
                    <td colspan="5">
                        {{ $page_13['nvg_factory_or_person'] }}
                    </td>
                </tr>
                <tr>
                    <th colspan="2">特記事項</th>
                    <td colspan="5">
                        {{ $page_13['notices'] }}
                    </td>
                </tr>
            @endforeach
        </table>
    </div>

    <label>※生まれた当日を０日として数えること。</label>

    {{-- ボタン --}}
    <div>
        <a href="{{ route('main.index', $user) }}">戻る</a>
    </div>

</body>

</html>
