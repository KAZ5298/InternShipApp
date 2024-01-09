<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ページ１１</title>
</head>

<body>
    <div class="head">
        <label>＜出産後・退院時の診察のときに記入してもらいましょう。＞</label>
    </div>

    <div class="title">
        <h1>出産後の母体の経過</h1>
    </div>

    <div class="container">
        <table border="1">
            <tr>
                <th>産後日月数</th>
                <th>子宮復古</th>
                <th>悪露</th>
                <th>乳房の状態</th>
                <th>血圧</th>
                <th>尿蛋白</th>
                <th>尿糖</th>
                <th>体重</th>
                <th>ＥＰＤＳ等の実施など</th>
            </tr>
            @foreach ($page_11_1s as $page_11_1)
                <tr>
                    <td>
                        日数：{{ $page_11_1->postpartum_days }}
                        <br>
                        月数：{{ $page_11_1->postpartum_months }}
                    </td>
                    <td>
                        @if ($page_11_1->uterus_restoration == '1')
                            良
                        @elseif($page_11_1->uterus_restoration == '2')
                            否
                        @endif
                    </td>
                    <td>
                        @if ($page_11_1->lochia == '1')
                            正
                        @elseif($page_11_1->lochia == '2')
                            否
                        @endif
                    </td>
                    <td>{{ $page_11_1->breast_condition }}</td>
                    <td>
                        最高：{{ $page_11_1->blood_pressure_max }} mmHg
                        <br>
                        最低：{{ $page_11_1->blood_pressure_min }} mmHg
                    </td>
                    <td>
                        @if ($page_11_1->urine_protein == '1')
                            －
                        @elseif($page_11_1->urine_protein == '2')
                            ＋
                        @elseif($page_11_1->urine_protein == '3')
                            ＋＋
                        @endif
                    </td>
                    <td>
                        @if ($page_11_1->urine_sugar == '1')
                            －
                        @elseif($page_11_1->urine_sugar == '2')
                            ＋
                        @elseif($page_11_1->urine_sugar == '3')
                            ＋＋
                        @endif
                    </td>
                    <td>
                        {{ $page_11_1->weight }} kg
                    </td>
                    <td>{{ $page_11_1->epds_etc_implementation }}</td>
                </tr>
            @endforeach
            <tr>
                <th colspan="9">母親自身の記録</th>
            </tr>
            @foreach ($page_11_2s as $page_11_2)
                <tr>
                    <th colspan="2">・気分が沈んだり涙もろくなったり、何もやる気になれないといったことがありますか。</th>
                    <td colspan="7">
                        @if ($page_11_2['mother_feeling'] == '1')
                            いいえ
                        @elseif($page_11_2['mother_feeling'] == '2')
                            はい
                        @elseif($page_11_2['mother_feeling'] == '3')
                            何ともいえない
                        @endif
                    </td>
                </tr>
                <tr>
                    <td colspan="9">
                        ・産後、ご自身の気持ちやからだのことで、気がついたこと、変わったことがあれば、
                        <br>　医師、助産師、地域の子育てに関する相談機関（子育て世代包括支援センター等）に相談しましょう。
                    </td>
                </tr>
                <tr>
                    <th colspan="9">
                        ・産後のご自身の気持ちなど、自由に記入しましょう。
                    </th>
                </tr>
                <tr>
                    <td colspan="9">{{ $page_11_2['mother_freespace'] }}</td>
                </tr>
                <tr>
                    <th>入浴</th>
                    <td>産後 {{ $page_11_2['bathing_dob'] }} 日（ {{ $page_11_2['bathing_date'] }} ）</td>
                    <th>家事開始</th>
                    <td>産後 {{ $page_11_2['housework_dob'] }} 日（ {{ $page_11_2['housework_date'] }} ）</td>
                    <th rowspan="2">家族計画指導</th>
                    <td rowspan="2" colspan="4">
                        @if ($page_11_2['family_plan_select'] == '1')
                            なし
                        @elseif($page_11_2['family_plan_select'] == '2')
                            あり
                            @if ($page_11_2['family_plan_person'] == '1')
                                （ 医師 ）
                            @elseif($page_11_2['family_plan_person'] == '2')
                                （ 受胎調節実地指導員 ）
                            @elseif($page_11_2['family_plan_person'] == '3')
                                （ 助産師 ）
                            @endif
                        @endif
                        <br>
                        日付：{{ $page_11_2['family_plan_date'] }}
                    </td>
                </tr>
                <tr>
                    <th>家事以外の労働開始</th>
                    <td>産後 {{ $page_11_2['work_dob'] }} 日（ {{ $page_11_2['work_date'] }} ）</td>
                    <th>月経再開</th>
                    <td>{{ $page_11_2['menstruation_start_date'] }}</td>
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
