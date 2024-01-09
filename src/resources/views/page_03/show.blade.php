<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ページ３</title>
</head>

<body>
    <div class="head">
        <label>＜このページは妊婦自身で入力してください。＞</label>
    </div>

    <div class="title">
        <h1>妊婦の職業と環境</h1>
    </div>

    <div class="container">
        <table border="1">
            @foreach ($page_03s as $page_03)
                <tr>
                    <th rowspan="7">
                        妊<br>娠<br>に<br>気<br>づ<br>い<br>た<br>と<br>き<br>の<br>状<br>況
                    </th>
                </tr>
                <tr>
                    <th>職業</th>
                    <td colspan="3">
                        {{ $page_03['rp_work'] }}
                    </td>
                </tr>
                <tr>
                    <th>仕事の内容と職場環境<span>※</span></th>
                    <td colspan="3">
                        {{ $page_03['rp_work_content_environment'] }}
                    </td>
                </tr>
                <tr>
                    <th rowspan="2">仕事をする時間</th>
                    <td colspan="3">
                        １日約（ {{ $page_03['work_time_hours'] }} 時間 ）・
                        {{ $page_03['rp_work_start_time'] }} ～ {{ $page_03['rp_work_end_time'] }}
                    </td>
                </tr>
                <tr>
                    <td colspan="3">
                        交代制など変則的な勤務：
                        @if ($page_03['rp_shift_system'] == '1')
                            あり
                        @else
                            なし
                        @endif
                    </td>
                </tr>
                <tr>
                    <th>通勤や仕事に利用する乗り物</th>
                    <td colspan="3">
                        {{ $page_03['rp_vehicle'] }}
                    </td>
                </tr>
                <tr>
                    <th>通勤の時間</th>
                    <td>片道（{{ $page_03['rp_commuting_time'] }}）分</td>
                    <th>混雑の程度</th>
                    <td>
                        @if ($page_03['rp_congestion'] == '1')
                            ひどい
                        @else
                            普通
                        @endif
                    </td>
                </tr>
                <tr>
                    <th colspan="2" rowspan="2">妊娠してからの変更点</th>
                </tr>
                <tr>
                    <td colspan="3">
                        仕事を休んだ　（妊娠 {{ $page_03['cap_work_rest_pregnancy_weeks'] }} 週
                        （第 {{ $page_03['cap_work_rest_pregnancy_months'] }} 月）のとき）
                        <br>
                        仕事を変えた　（妊娠 {{ $page_03['cap_work_change_pregnancy_weeks'] }} 週
                        （第 {{ $page_03['cap_work_change_pregnancy_months'] }} 月）のとき）
                        <br>
                        仕事をやめた　（妊娠 {{ $page_03['cap_work_end_pregnancy_weeks'] }} 週
                        （第 {{ $page_03['cap_work_end_pregnancy_months'] }} 月）のとき）
                        <br>
                        その他（ {{ $page_03['cap_other'] }} ）
                    </td>
                </tr>
                <tr>
                    <th colspan="2">産前休業</th>
                    <td colspan="3">
                        {{ $page_03['prenatal_leave_start'] }} から
                        {{ $page_03['prenatal_leave_end'] }} まで
                    </td>
                </tr>
                <tr>
                    <th colspan="2">産後休業</th>
                    <td colspan="3">
                        {{ $page_03['postpartum_leave_start'] }} から
                        {{ $page_03['postpartum_leave_end'] }} まで
                    </td>
                </tr>
                <tr>
                    <th rowspan="2">育児休業</th>
                    <th>母親</th>
                    <td colspan="3">
                        @for ($i = 1; $i <= 2; $i++)
                            @if (isset($page_03['cl_mother_start' . $i]) && isset($page_03['cl_mother_end' . $i]))
                                {{ $page_03['cl_mother_start' . $i] }} から
                                {{ $page_03['cl_mother_end' . $i] }} まで
                                <br>
                            @endif
                        @endfor
                    </td>
                </tr>
                <tr>
                    <th>父親</th>
                    <td colspan="3">
                        @for ($i = 1; $i <= 3; $i++)
                            @if (isset($page_03['cl_father_start' . $i]) && isset($page_03['cl_father_end' . $i]))
                                {{ $page_03['cl_father_start' . $i] }} から
                                {{ $page_03['cl_father_end' . $i] }} まで
                                <br>
                            @endif
                        @endfor
                    </td>
                </tr>
                <tr>
                    <th colspan="2">住居の種類</th>
                    <td colspan="3">
                        @if ($page_03['tor_select'] == '1')
                            一戸建て（ {{ $page_03['tor_detached_house'] }} 階建）
                            <br>
                        @elseif($page_03['tor_select'] == '2')
                            集合住宅（ {{ $page_03['tor_housing_complex'] }} 階建 {{ $page_03['tor_housing_complex_count'] }}
                            階・
                            エレベーター：
                            @if ($page_03['tor_elevator'] == '1')
                                有
                            @else
                                無
                            @endif
                            ）
                            <br>
                        @elseif($page_03['tor_select'] == '3')
                            その他（ {{ $page_03['tor_other'] }} ）
                        @endif
                    </td>
                </tr>
                <tr>
                    <th colspan="2">騒音</th>
                    <td>
                        @if ($page_03['tor_noise'] == '1')
                            静
                        @elseif($page_03['tor_noise'] == '2')
                            普通
                        @else
                            騒
                        @endif
                    </td>
                    <th>日当たり</th>
                    <td>
                        @if ($page_03['tor_sunshine'] == '1')
                            良
                        @elseif($page_03['tor_sunshine'] == '2')
                            普通
                        @else
                            悪
                        @endif
                    </td>
                </tr>
                <tr>
                    <th colspan="2">同居</th>
                    <td colspan="3">
                        {{ $page_03['housemate'] }}
                    </td>
                </tr>
            @endforeach
        </table>
    </div>

    <label>※立ち作業など負担の大きい作業が多い、温湿度が厳しい、たばこの煙がひどい、</label>
    <br>
    <label>　振動が多い、ストレスが多い、休憩がとりにくい、時間外労働が多いなどの特記事項も記入しましょう。</label>

    {{-- ボタン --}}
    <div>
        <a href="{{ route('main.index', $user) }}">戻る</a>
    </div>

</body>

</html>
