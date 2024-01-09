<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ページ１０</title>
</head>

<body>
    <div class="title">
        <h1>出産の状態</h1>
    </div>

    <div class="container">
        <table border="1">
            @foreach ($page_10s as $page_10)
                <tr>
                    <th>妊娠期間</th>
                    <td colspan="3">
                        妊娠 {{ $page_10['pregnancy_weeks'] }} 週 {{ $page_10['pregnancy_days'] }} 日
                    </td>
                </tr>
                <tr>
                    <th>分娩日時</th>
                    <td colspan="3">
                        日付：{{ $page_10['parturition_date'] }}
                        <br>
                        時間：{{ $page_10['parturition_time'] }}
                    </td>
                </tr>
                <tr>
                    <th>分娩経過</th>
                    <td colspan="3">
                        @if ($page_10['parturition_progress_select'] == '1')
                            頭囲
                        @elseif($page_10['parturition_progress_select'] == '2')
                            骨盤位
                        @elseif($page_10['parturition_progress_select'] == '3')
                            その他（ {{ $page_10['parturition_progress_other'] }} ）
                        @endif
                        <br>
                        特記事項：{{ $page_10['parturition_progress_remarks'] }}
                    </td>
                </tr>
                <tr>
                    <th>分娩方法</th>
                    <td colspan="3">
                        {{ $page_10['parturition_method'] }}
                    </td>
                </tr>
                <tr>
                    <th>分娩所要時間</th>
                    <td>
                        @if ($page_10['parturition_required_hours'] > 0)
                            {{ $page_10['parturition_required_hours'] }} 時間
                        @endif
                        @if ($page_10['parturition_required_minutes'] > 0)
                            {{ $page_10['parturition_required_minutes'] }} 分
                        @endif
                    </td>
                    <th>出血量</th>
                    <td>
                        @if ($page_10['bleeding_amount_select'] == '1')
                            少量（ {{ $page_10['bleeding_amount_ml'] }} ml ）
                        @elseif($page_10['bleeding_amount_select'] == '2')
                            中量（ {{ $page_10['bleeding_amount_ml'] }} ml ）
                        @elseif($page_10['bleeding_amount_select'] == '3')
                            多量（ {{ $page_10['bleeding_amount_ml'] }} ml ）
                        @endif
                    </td>
                </tr>
                <tr>
                    <th colspan="2">輸血（血液製剤含む）の有無</th>
                    <td colspan="2">
                        @if ($page_10['transfusion_select'] == '1')
                            無
                        @elseif($page_10['transfusion_select'] == '2')
                            有（ {{ $page_10['transfusion_record'] }} ）
                        @endif
                    </td>
                </tr>
                <tr>
                    <th rowspan="4">出産時の児の状態</th>
                    <th>性別・数</th>
                    <td>
                        @if ($page_10['child_gender'] == '1')
                            男
                        @elseif($page_10['child_gender'] == '2')
                            女
                        @elseif($page_10['child_gender'] == '3')
                            不明
                        @endif
                    </td>
                    <td>
                        @if ($page_10['single_or_multiple_select'] == '1')
                            単
                        @elseif($page_10['single_or_multiple_select'] == '2')
                            多（ {{ $page_10['single_or_multiple_count'] }} 胎 ）
                        @endif
                    </td>
                </tr>
                <tr>
                    <th rowspan="2">計測値</th>
                    <td>体重：{{ $page_10['weight'] }} g</td>
                    <td>身長：{{ $page_10['height'] }} cm</td>
                </tr>
                <tr>
                    <td>頭囲：{{ $page_10['head_circumference'] }} cm</td>
                    <td>胸囲：{{ $page_10['chest_measurement'] }} cm</td>
                </tr>
                <tr>
                    <th>特別な所見・処置</th>
                    <td colspan="2">
                        @if ($page_10['special_findings_treatment'] == '1')
                            新生児仮死 → 死亡
                        @elseif($page_10['special_findings_treatment'] == '2')
                            新生児仮死 → 蘇生
                        @elseif($page_10['special_findings_treatment'] == '3')
                            死産
                        @endif
                    </td>
                </tr>
                <tr>
                    <th>証明</th>
                    <td colspan="3">
                        @if ($page_10['proof'] == '1')
                            出生証明書
                        @elseif($page_10['proof'] == '2')
                            死産証書（死胎検案書）
                        @elseif($page_10['proof'] == '3')
                            出生証明書及び死亡診断書
                        @endif
                    </td>
                </tr>
                <tr>
                    <th>出生の場所<br>名称</th>
                    <td colspan="3">{{ $page_10['child_birth_location'] }}</td>
                </tr>
                <tr>
                    <th>分娩取扱者<br>氏名</th>
                    <td colspan="3">
                        医師　：{{ $page_10['parturition_handler_name_docter'] }}
                        <br>
                        助産師：{{ $page_10['parturition_handler_name_midwife'] }}
                        <br>
                        その他：{{ $page_10['parturition_handler_name_other'] }}
                    </td>
                </tr>
            @endforeach
        </table>
    </div>

    {{-- ボタン --}}
    <div>
        <a href="{{ route('main.index', $user) }}">戻る</a>
    </div>

</body>

</html>
