<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ページ２</title>
</head>

<body>
    <form method="POST" action="{{ route('page_02.store', $user) }}">
        @csrf

        <div class="head">
            <label>＜このページは妊婦自身で入力してください。＞</label>
        </div>

        <div class="title">
            <h1>妊婦の健康状態等</h1>
        </div>

        <div class="container">
            <table border="1">
                <tr>
                    <td>
                        身長：<input type="number" step="0.1" name="height" max="999"> cm
                    </td>
                    <td>
                        ふだんの体重：<input type="number" step="0.1" name="weight" max="999"> kg
                    </td>
                </tr>
                <tr>
                    <th colspan="2">・次の病気にかかったことがありますか。（あるものにチェック）</th>
                    <td colspan="2">
                        <input type="hidden" name="mh_high_blood_pressure" value="0">
                        <input type="checkbox" name="mh_high_blood_pressure" value="1">高血圧
                        <input type="hidden" name="mh_kidney_disease" value="0">
                        <input type="checkbox" name="mh_kidney_disease" value="1">腎臓病
                        <input type="hidden" name="mh_diabetes" value="0">
                        <input type="checkbox" name="mh_diabetes" value="1">糖尿病
                        <input type="hidden" name="mh_hepatitis" value="0">
                        <input type="checkbox" name="mh_hepatitis" value="1">肝炎
                        <input type="hidden" name="mh_heart_disease" value="0">
                        <input type="checkbox" name="mh_heart_disease" value="1">心臓病
                        <input type="hidden" name="mh_thyroid_disease" value="0">
                        <input type="checkbox" name="mh_thyroid_disease" value="1">甲状腺の病気
                        <input type="hidden" name="mh_mental_illness" value="0">
                        <input type="checkbox" name="mh_mental_illness" value="1">精神疾患（心の病気）
                        <input type="hidden" name="mh_other_diseases" value="0">
                        <input type="checkbox" name="mh_other_diseases" value="1">その他病気（病名：<input
                            name="mh_other_diseases_name">）
                    </td>
                </tr>
                <tr>
                    <th rowspan="2" colspan="2">・次の感染症にかかったことがありますか。</th>
                </tr>
                <tr>
                    <td colspan="2">
                        風しん（三日はしか）：
                        <input type="hidden" name="rubella" value="" checked>
                        <input type="radio" name="rubella" value="1">いいえ
                        <input type="radio" name="rubella" value="2">はい
                        <input type="radio" name="rubella" value="3">予防接種を受けた
                        <br>
                        麻しん（はしか）　　：
                        <input type="hidden" name="measles" value="" checked>
                        <input type="radio" name="measles" value="1">いいえ
                        <input type="radio" name="measles" value="2">はい
                        <input type="radio" name="measles" value="3">予防接種を受けた
                        <br>
                        水痘（水ぼうそう）　：
                        <input type="hidden" name="chickenpox" value="" checked>
                        <input type="radio" name="chickenpox" value="1">いいえ
                        <input type="radio" name="chickenpox" value="2">はい
                        <input type="radio" name="chickenpox" value="3">予防接種を受けた
                    </td>
                </tr>
                <tr>
                    <th colspan="2">・今までに手術を受けたことがありますか。</th>
                    <td colspan="2">
                        <input type="hidden" name="surgery_history_select" value="" checked>
                        <input type="radio" name="surgery_history_select" value="1">なし
                        <br>
                        <input type="radio" name="surgery_history_select" value="2">あり（病名：<input
                            name="surgery_history_disease">）
                    </td>
                </tr>
                <tr>
                    <th colspan="2">・服用中の薬（常用薬）</th>
                    <td colspan="2">（<input name="medicine">）</td>
                </tr>
                <tr>
                    <th colspan="2">・薬剤や食品などのアレルギー</th>
                    <td colspan="2">（<input name="allergy">）</td>
                </tr>
                <tr>
                    <th colspan="2">・家庭や仕事など日常生活で強いストレスを感じていますか。</th>
                    <td colspan="2">
                        <input type="hidden" name="stress" value="" checked>
                        <input type="radio" name="stress" value="1">いいえ
                        <input type="radio" name="stress" value="2">はい
                    </td>
                </tr>
                <tr>
                    <th colspan="2">・今回の妊娠に際し、心配なことはありますか。</th>
                    <td colspan="2">
                        <input type="hidden" name="pregnant_anxiety" value="" checked>
                        <input type="radio" name="pregnant_anxiety" value="1">いいえ
                        <input type="radio" name="pregnant_anxiety" value="2">はい
                    </td>
                </tr>
                <tr>
                    <th colspan="2">・その他心配なこと</th>
                    <td colspan="2">（<input name="other_anxiety">）
                    </td>
                </tr>
                <tr>
                    <th colspan="2">・たばこを吸いますか。</th>
                    <td colspan="2">
                        <input type="hidden" name="tabacco_select" value="" checked>
                        <input type="radio" name="tabacco_select" value="1">いいえ（以前は吸っていた（１日：<input
                            type="number" name="tabacco_no_count">本）
                        <br>
                        <input type="radio" name="tabacco_select" value="2">はい（１日：<input type="number"
                            name="tabacco_yes_count">本）
                    </td>
                </tr>
                <tr>
                    <th colspan="2">・同居者は同室でたばこを吸いますか。</th>
                    <td colspan="2">
                        <input type="hidden" name="cohabitant_tabacco_select" value="" checked>
                        <input type="radio" name="cohabitant_tabacco_select" value="1">いいえ
                        <br>
                        <input type="radio" name="cohabitant_tabacco_select" value="2">はい（１日：<input
                            type="number" name="cohabitant_tabacco_count">本）
                    </td>
                </tr>
                <tr>
                    <th colspan="2">・酒類を飲んでいますか。</th>
                    <td colspan="2">
                        <input type="hidden" name="alcohol_select" value="" checked>
                        <input type="radio" name="alcohol_select" value="1">いいえ（以前は飲んでいた（１日：<input
                            type="number" name="alcohol_no_count" max="9999">ml程度）
                        <br>
                        <input type="radio" name="alcohol_select" value="2">はい（１日：<input type="number"
                            name="alcohol_yes_count" max="9999">ml程度）
                    </td>
                </tr>
                <tr>
                    <td colspan="4">※喫煙と飲酒は、赤ちゃんの成長に大きな影響を及ぼしますので、やめましょう。</td>
                </tr>
                <tr>
                    <th colspan="2">夫・パートナーの健康状態</th>
                    <td colspan="2">
                        <input type="hidden" name="partner_condition_select" value="" checked>
                        <input type="radio" name="partner_condition_select" value="1">健康
                        <br>
                        <input type="radio" name="partner_condition_select" value="2">よくない（病名：<input
                            name="partner_condition_disease">）
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
                    <tr>
                        <td>
                            <input type="date" name="pch_child_birthday{{ $i }}">
                        </td>
                        <td>
                            妊娠
                            <select name="pch_pregnancy_period{{ $i }}">
                                <option value="" selected></option>
                                @for ($j = 1; $j <= 99; $j++)
                                    <option value="{{ $j }}">{{ $j }}</option>
                                @endfor
                            </select>
                            週　<input type="text" name="pch_birth_method{{ $i }}">
                        </td>
                        <td>
                            <input type="number" step="0.1" name="pch_child_weight{{ $i }}"
                                max="9999"> g
                            <select name="pch_child_gender{{ $i }}">
                                <option value="" selected></option>
                                <option value="1">男</option>
                                <option value="2">女</option>
                            </select>
                        </td>
                        <td>
                            <input type="text" name="pch_child_condition{{ $i }}">
                        </td>
                    </tr>
                @endfor
            </table>
        </div>

        <label>※妊娠についての悩みや、出産・育児の不安がある方は、</label>
        <br>
        <label>　市町村（子育て世代包括支援センター）、医療機関等に気軽に相談しましょう。</label>

        {{-- ボタン --}}
        <div>
            <button type="submit" class="btn btn-primary">登録</button>
            <a href="{{ route('main.index', $user) }}">戻る</a>
        </div>

    </form>

</body>

</html>
