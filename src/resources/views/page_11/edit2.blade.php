<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ページ１１</title>
</head>

<body>
    <form method="POST" action="{{ route('page_11.update2', [$page_11_2, $user]) }}">
        @csrf
        @method('patch')

        <div class="head">
            <label>＜出産後・退院時の診察のときに記入してもらいましょう。＞</label>
        </div>

        <div class="title">
            <h1>出産後の母体の経過</h1>
        </div>

        <div class="container">

            @isset($message)
                {{ $message }}
            @endisset

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
                    <th>操作</th>
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
                        @if ($loginUser->role != '3')
                            <td>権限がありません</td>
                        @else
                            <td><a href="{{ route('page_11.edit1', $page_11_1) }}">編集</a></td>
                        @endif
                    </tr>
                @endforeach
                <tr>
                    <th colspan="10">母親自身の記録</th>
                </tr>
                <tr>
                    <th colspan="5">・気分が沈んだり涙もろくなったり、何もやる気になれないといったことがありますか。</th>
                    <td colspan="5">
                        <input type="hidden" name="mother_feeling" value=""
                            {{ $page_11_2->mother_feeling == '' ? 'checked' : '' }} {{ $disabled2 }}>
                        <input type="radio" name="mother_feeling" value="1"
                            {{ $page_11_2->mother_feeling == '1' ? 'checked' : '' }} {{ $disabled2 }}>いいえ
                        <input type="radio" name="mother_feeling" value="2"
                            {{ $page_11_2->mother_feeling == '2' ? 'checked' : '' }} {{ $disabled2 }}>はい
                        <input type="radio" name="mother_feeling" value="3"
                            {{ $page_11_2->mother_feeling == '3' ? 'checked' : '' }} {{ $disabled2 }}>何ともいえない
                    </td>
                </tr>
                <tr>
                    <td colspan="10">
                        ・産後、ご自身の気持ちやからだのことで、気がついたこと、変わったことがあれば、
                        <br>　医師、助産師、地域の子育てに関する相談機関（子育て世代包括支援センター等）に相談しましょう。
                    </td>
                </tr>
                <tr>
                    <th colspan="10">
                        ・産後のご自身の気持ちなど、自由に記入しましょう。
                    </th>
                </tr>
                <tr>
                    <td colspan="10">
                        <input type="text" name="mother_freespace" value="{{ $page_11_2->mother_freespace }}"
                            {{ $disabled2 }}>
                    </td>
                </tr>
                <tr>
                    <th>入浴</th>
                    <td><input type="date" name="bathing_date" value="{{ $page_11_2->bathing_date }}"
                            {{ $disabled2 }}></td>
                    <th>家事開始</th>
                    <td><input type="date" name="housework_date" value="{{ $page_11_2->housework_date }}"
                            {{ $disabled2 }}></td>
                    <th rowspan="2">家族計画指導</th>
                    <td rowspan="2" colspan="5">
                        <input type="hidden" name="family_plan_select" value=""
                            {{ $page_11_2->family_plan_select == '' ? 'checked' : '' }}>
                        <input type="radio" name="family_plan_select" value="1"
                            {{ $page_11_2->family_plan_select == '1' ? 'checked' : '' }} {{ $disabled2 }}>なし
                        <br>
                        <input type="radio" name="family_plan_select" value="2"
                            {{ $page_11_2->family_plan_select == '2' ? 'checked' : '' }} {{ $disabled2 }}>あり
                        （ <input type="hidden" name="family_plan_person" value=""
                            {{ $page_11_2->family_plan_person == '' ? 'checked' : '' }}>
                        <input type="radio" name="family_plan_person" value="1"
                            {{ $page_11_2->family_plan_person == '1' ? 'checked' : '' }} {{ $disabled2 }}>医師
                        <input type="radio" name="family_plan_person" value="2"
                            {{ $page_11_2->family_plan_person == '2' ? 'checked' : '' }} {{ $disabled2 }}>受胎調節実地指導員
                        <input type="radio" name="family_plan_person" value="3"
                            {{ $page_11_2->family_plan_person == '3' ? 'checked' : '' }} {{ $disabled2 }}>助産師 ）
                        <br>
                        日付：<input type="date" name="family_plan_date" value="{{ $page_11_2->family_plan_date }}"
                            {{ $disabled2 }}>
                    </td>
                </tr>
                <tr>
                    <th>家事以外の労働開始</th>
                    <td><input type="date" name="work_date" value="{{ $page_11_2->work_date }}"
                            {{ $disabled2 }}></td>
                    <th>月経再開</th>
                    <td>
                        <input type="date" name="menstruation_start_date"
                            value="{{ $page_11_2->menstruation_start_date }}" {{ $disabled2 }}>
                    </td>
                </tr>
            </table>
        </div>

        {{-- ボタン --}}
        <div>
            <button type="submit" class="btn btn-primary">修正</button>
            <a href="{{ route('main.index', $user) }}">戻る</a>
        </div>

    </form>

</body>

</html>
