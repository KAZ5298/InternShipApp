<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ページ１１</title>
</head>

<body>
    <form method="POST" action="{{ route('page_11.store', $user) }}">
        @csrf

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
                <tr>
                    <td>
                        <input type="date" name="record_date" required>
                    </td>
                    <td>
                        <input type="hidden" name="uterus_restoration" value="" checked>
                        <input type="radio" name="uterus_restoration" value="1">良
                        <input type="radio" name="uterus_restoration" value="2">否
                    </td>
                    <td>
                        <input type="hidden" name="lochia" value="" checked>
                        <input type="radio" name="lochia" value="1">正
                        <input type="radio" name="lochia" value="2">否
                    </td>
                    <td><input type="text" name="breast_condition"></td>
                    <td>
                        最高：
                        <input type="number" step="0.1" name="blood_pressure_max" max="999"> mmHg
                        <br>
                        最低：
                        <input type="number" step="0.1" name="blood_pressure_min" max="999"> mmHg
                    </td>
                    <td>
                        <input type="hidden" name="urine_protein" value="" checked>
                        <input type="radio" name="urine_protein" value="1">－
                        <input type="radio" name="urine_protein" value="2">＋
                        <input type="radio" name="urine_protein" value="3">＋＋
                    </td>
                    <td>
                        <input type="hidden" name="urine_sugar" value="" checked>
                        <input type="radio" name="urine_sugar" value="1">－
                        <input type="radio" name="urine_sugar" value="2">＋
                        <input type="radio" name="urine_sugar" value="3">＋＋
                    </td>
                    <td>
                        <input type="number" step="0.1" name="weight" max="999"> kg
                    </td>
                    <td><input type="text" name="epds_etc_implementation"></td>
                </tr>
                <tr>
                    <th colspan="9">母親自身の記録</th>
                </tr>
                <tr>
                    <th colspan="2">・気分が沈んだり涙もろくなったり、何もやる気になれないといったことがありますか。</th>
                    <td colspan="7">
                        <input type="hidden" name="mother_feeling" value="" checked>
                        <input type="radio" name="mother_feeling" value="1" {{ $disabled2 }}>いいえ
                        <input type="radio" name="mother_feeling" value="2" {{ $disabled2 }}>はい
                        <input type="radio" name="mother_feeling" value="3" {{ $disabled2 }}>何ともいえない
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
                    <td colspan="9"><input type="text" name="mother_freespace" {{ $disabled2 }}></td>
                </tr>
                <tr>
                    <th>入浴</th>
                    <td><input type="date" name="bathing_date" {{ $disabled2 }}></td>
                    <th>家事開始</th>
                    <td><input type="date" name="housework_date" {{ $disabled2 }}></td>
                </tr>
                <tr>
                    <th>家事以外の労働開始</th>
                    <td><input type="date" name="work_date" {{ $disabled2 }}></td>
                    <th>月経再開</th>
                    <td><input type="date" name="menstruation_start_date" {{ $disabled2 }}></td>
                </tr>
                <tr>
                    <th>家族計画指導</th>
                    <td>
                        <input type="hidden" name="family_plan_select" value="" checked>
                        <input type="radio" name="family_plan_select" value="1" {{ $disabled2 }}>なし
                        <br>
                        <input type="radio" name="family_plan_select" value="2" {{ $disabled2 }}>あり
                        （ <input type="hidden" name="family_plan_person" value="" checked>
                        <input type="radio" name="family_plan_person" value="1" {{ $disabled2 }}>医師
                        <input type="radio" name="family_plan_person" value="2" {{ $disabled2 }}>受胎調節実地指導員
                        <input type="radio" name="family_plan_person" value="3" {{ $disabled2 }}>助産師 ）
                        <br>
                        日付：<input type="date" name="family_plan_date" {{ $disabled2 }}>
                    </td>
                </tr>
            </table>
        </div>

        {{-- ボタン --}}
        <div>
            <button type="submit" class="btn btn-primary">登録</button>
            <a href="{{ route('main.index', $user) }}">戻る</a>
        </div>

    </form>

</body>

</html>
