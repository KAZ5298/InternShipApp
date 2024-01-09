<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ページ６</title>
</head>

<body>
    <form method="POST" action="{{ route('page_06.store', $user) }}">
        @csrf

        <div class="title">
            <h1>検査の記録</h1>
        </div>

        <label>感染症検査や子宮頸がん検診の結果に関して、<br>気になる点や追加検査・治療が必要かについて、医師に相談しましょう。</label>

        <div class="container">
            <table border="1">
                <tr>
                    <th>検査項目</th>
                    <th>検査年月日</th>
                    <th>備考</th>
                </tr>
                <tr>
                    <td>
                        <select id="inspection_item_name" name="inspection_item_name" onchange="myfunc()">
                            <option value="" selected></option>
                            <option value="1">血液型</option>
                            <option value="2">新生児聴覚検査（自動ＡＢＲ・ＯＡＥ）</option>
                            <option value="3">リファー（要再検査）の場合</option>
                            <option value="4">不規則抗体</option>
                            <option value="5">子宮頸がん検診</option>
                            <option value="6">梅毒血清反応</option>
                            <option value="7">ＨＢｓ抗原</option>
                            <option value="8">ＨＣＶ抗体</option>
                            <option value="9">ＨＩＶ抗体</option>
                            <option value="0">風しんウイルス抗体</option>
                            <option value="A">ＨＴＬＶ－１抗体</option>
                            <option value="B">クラミジア抗原</option>
                            <option value="C">Ｂ群溶血性連鎖球菌</option>
                            <option value="D">先天性代謝異常検査</option>
                            <option value="E">その他入力</option>
                        </select>
                        <div id="other_item_name">
                            その他入力：<input type="text" name="inspection_item_name_other">
                        </div>
                    </td>
                    <td>
                        <input type="date" name="inspection_item_date">
                    </td>
                    <td>
                        <div id="remarks1">
                            ＡＢＯ
                            <select name="blood_type">
                                <option value="" selected></option>
                                <option value="1">Ａ</option>
                                <option value="2">Ｂ</option>
                                <option value="3">Ｏ</option>
                                <option value="4">ＡＢ</option>
                            </select>型
                            Ｒｈ
                            <select name="blood_type_rh">
                                <option value="" selected></option>
                                <option value="1">－</option>
                                <option value="2">＋</option>
                            </select>
                        </div>
                        <div id="remarks2">
                            右（
                            <input type="hidden" name="hearing_inspection_right" value="" checked>
                            <input type="radio" name="hearing_inspection_right" value="1">パス
                            <input type="radio" name="hearing_inspection_right" value="2">リファー
                            ）
                            <br>
                            左（
                            <input type="hidden" name="hearing_inspection_left" value="" checked>
                            <input type="radio" name="hearing_inspection_left" value="1">パス
                            <input type="radio" name="hearing_inspection_left" value="2">リファー
                            ）
                        </div>
                        <div id="remarks3">
                            <input type="text" name="other_inspection_item_remarks">
                        </div>
                    </td>
                </tr>
                <tr>
                    <th colspan="3">予備欄</th>
                </tr>
                <tr>
                    <td colspan="3"><input type="text" name="spare"></td>
                </tr>
            </table>
        </div>

        <label>※検査結果を記録する場合は、妊婦に説明し同意を得ること。</label>

        {{-- ボタン --}}
        <div>
            <button type="submit" class="btn btn-primary">登録</button>
            <a href="{{ route('main.index', $user) }}">戻る</a>
        </div>

    </form>

    <script src="https://code.jquery.com/jquery-3.7.1.min.js"
        integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script>
        document.getElementById("other_item_name").style.display = "none";
        document.getElementById("remarks1").style.display = "none";
        document.getElementById("remarks2").style.display = "none";
        document.getElementById("remarks3").style.display = "none";

        function myfunc() {
            var select_val = document.getElementById("inspection_item_name").value;
            var other_item_name = document.getElementById("other_item_name")
            var remarks1 = document.getElementById("remarks1");
            var remarks2 = document.getElementById("remarks2");
            var remarks3 = document.getElementById("remarks3");
            if (select_val == '1') {
                other_item_name.style.display = "none";
                remarks1.style.display = "block";
                remarks2.style.display = "none";
                remarks3.style.display = "none";
            } else if (select_val == '2' || select_val == '3') {
                other_item_name.style.display = "none";
                remarks1.style.display = "none";
                remarks2.style.display = "block";
                remarks3.style.display = "none";
            } else if (select_val == 'E') {
                other_item_name.style.display = "block";
                remarks1.style.display = "none";
                remarks2.style.display = "none";
                remarks3.style.display = "block";
            } else {
                other_item_name.style.display = "none";
                remarks1.style.display = "none";
                remarks2.style.display = "none";
                remarks3.style.display = "block";
            }
        }
    </script>

</body>

</html>
