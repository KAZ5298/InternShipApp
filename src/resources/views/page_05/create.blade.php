<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ページ５</title>
</head>

<body>
    <form method="POST" action="{{ route('page_05.store', $user) }}">
        @csrf

        <div class="title">
            <h1>妊娠中の経過</h1>
        </div>

        <div class="container">
            <table border="1">
                <tr>
                    <th>診察月日</th>
                    <th>
                        妊娠
                        <br>
                        週数-日
                    </th>
                    <th>子宮底長</th>
                    <th>腹囲</th>
                    <th>
                        体重
                        <br>
                        妊娠前の体重
                        <br>
                        （<input type="number" step="0.1" name="weight_before_pregnancy" max="999"> kg）
                    </th>
                    <th>血圧</th>
                    <th>浮腫</th>
                    <th>尿蛋白</th>
                    <th>尿糖</th>
                    <th>
                        その他の検査
                        <br>
                        （血液検査、血糖、超音波など）
                    </th>
                    <th>
                        特記事項
                        <br>
                        （安静・休業などの指示や切迫早産等の産科疾患や合併症など）
                    </th>
                    <th>施設名または担当者名</th>
                </tr>
                <tr>
                    <td>
                        <input type="date" name="consultation_date" required>
                    </td>
                    <td>
                        週数：
                        <select name="pregnancy_week_count">
                            <option value="" checked></option>
                            @for ($j = 1; $j <= 99; $j++)
                                <option value="{{ $j }}">{{ $j }}</option>
                            @endfor
                        </select>
                        <br>
                        日数：
                        <select name="pregnancy_day_count">
                            <option value="" checked></option>
                            @for ($j = 1; $j <= 999; $j++)
                                <option value="{{ $j }}">{{ $j }}</option>
                            @endfor
                        </select>
                    </td>
                    <td>
                        <input type="number" step="0.1" name="uterine_fundal_length" max="999"> cm
                    </td>
                    <td>
                        <input type="number" step="0.1" name="waist" max="999"> cm
                    </td>
                    <td>
                        <input type="number" step="0.1" name="weight_after_pregnancy" max="999"> kg
                    </td>
                    <td>
                        最高：
                        <input type="number" step="0.1" name="blood_pressure_max" max="999"> mmHg
                        <br>
                        最低：
                        <input type="number" step="0.1" name="blood_pressure_min" max="999"> mmHg
                    </td>
                    <td>
                        <input type="hidden" name="edema" value="" checked>
                        <input type="radio" name="edema" value="1">－
                        <input type="radio" name="edema" value="2">＋
                        <input type="radio" name="edema" value="3">＋＋
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
                        <input type="text" name="other_tests">
                    </td>
                    <td>
                        <input type="text" name="notices">
                    </td>
                    <td>
                        <input type="text" name="factory_or_person">
                    </td>
                </tr>
            </table>
        </div>

        <label>※妊婦健康診査を受けるときはもちろん、外出時はいつも持参しましょう。</label>

        {{-- ボタン --}}
        <div>
            <button type="submit" class="btn btn-primary">登録</button>
            <a href="{{ route('main.index', $user) }}">戻る</a>
        </div>

    </form>

</body>

</html>
