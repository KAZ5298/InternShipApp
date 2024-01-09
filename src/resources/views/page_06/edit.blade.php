<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ページ６</title>
</head>

<body>
    <form method="POST" action="{{ route('page_06.update', [$page_06, $user]) }}">
        @csrf
        @method('patch')

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
                            <option value="" {{ $page_06->inspection_item_name == '' ? 'selected' : '' }}>
                            </option>
                            <option value="1" {{ $page_06->inspection_item_name == '1' ? 'selected' : '' }}>血液型
                            </option>
                            <option value="2" {{ $page_06->inspection_item_name == '2' ? 'selected' : '' }}>
                                新生児聴覚検査（自動ＡＢＲ・ＯＡＥ）</option>
                            <option value="3" {{ $page_06->inspection_item_name == '3' ? 'selected' : '' }}>
                                リファー（要再検査）の場合</option>
                            <option value="4" {{ $page_06->inspection_item_name == '4' ? 'selected' : '' }}>不規則抗体
                            </option>
                            <option value="5" {{ $page_06->inspection_item_name == '5' ? 'selected' : '' }}>子宮頸がん検診
                            </option>
                            <option value="6" {{ $page_06->inspection_item_name == '6' ? 'selected' : '' }}>梅毒血清反応
                            </option>
                            <option value="7" {{ $page_06->inspection_item_name == '7' ? 'selected' : '' }}>ＨＢｓ抗原
                            </option>
                            <option value="8" {{ $page_06->inspection_item_name == '8' ? 'selected' : '' }}>ＨＣＶ抗体
                            </option>
                            <option value="9" {{ $page_06->inspection_item_name == '9' ? 'selected' : '' }}>ＨＩＶ抗体
                            </option>
                            <option value="0" {{ $page_06->inspection_item_name == '0' ? 'selected' : '' }}>
                                風しんウイルス抗体</option>
                            <option value="A" {{ $page_06->inspection_item_name == 'A' ? 'selected' : '' }}>
                                ＨＴＬＶ－１抗体</option>
                            <option value="B" {{ $page_06->inspection_item_name == 'B' ? 'selected' : '' }}>
                                クラミジア抗原</option>
                            <option value="C" {{ $page_06->inspection_item_name == 'C' ? 'selected' : '' }}>
                                Ｂ群溶血性連鎖球菌</option>
                            <option value="D" {{ $page_06->inspection_item_name == 'D' ? 'selected' : '' }}>
                                先天性代謝異常検査</option>
                            <option value="E" {{ $page_06->inspection_item_name == 'E' ? 'selected' : '' }}>その他入力
                            </option>
                        </select>
                        <div id="other_item_name">
                            その他入力：<input type="text" name="inspection_item_name_other"
                                value="{{ $page_06->inspection_item_name_other }}">
                        </div>
                    </td>
                    <td>
                        <input type="date" name="inspection_item_date" value="{{ $page_06->inspection_item_date }}">
                    </td>
                    <td>
                        <div id="remarks1">
                            ＡＢＯ
                            <select name="blood_type">
                                <option value="" {{ $page_06->blood_type == '' ? 'selected' : '' }}></option>
                                <option value="1" {{ $page_06->blood_type == '1' ? 'selected' : '' }}>Ａ</option>
                                <option value="2" {{ $page_06->blood_type == '2' ? 'selected' : '' }}>Ｂ</option>
                                <option value="3" {{ $page_06->blood_type == '3' ? 'selected' : '' }}>Ｏ</option>
                                <option value="4" {{ $page_06->blood_type == '4' ? 'selected' : '' }}>ＡＢ</option>
                            </select>型
                            Ｒｈ
                            <select name="blood_type_rh">
                                <option value="" {{ $page_06->blood_type_rh == '' ? 'selected' : '' }}></option>
                                <option value="1" {{ $page_06->blood_type_rh == '1' ? 'selected' : '' }}>－
                                </option>
                                <option value="2" {{ $page_06->blood_type_rh == '2' ? 'selected' : '' }}>＋
                                </option>
                            </select>
                        </div>
                        <div id="remarks2">
                            右（
                            <input type="hidden" name="hearing_inspection_right" value=""
                                {{ $page_06->hearing_inspection_right == '' ? 'checked' : '' }}>
                            <input type="radio" name="hearing_inspection_right" value="1"
                                {{ $page_06->hearing_inspection_right == '1' ? 'checked' : '' }}>パス
                            <input type="radio" name="hearing_inspection_right" value="2"
                                {{ $page_06->hearing_inspection_right == '2' ? 'checked' : '' }}>リファー
                            ）
                            <br>
                            左（
                            <input type="hidden" name="hearing_inspection_left" value=""
                                {{ $page_06->hearing_inspection_left == '' ? 'checked' : '' }}>
                            <input type="radio" name="hearing_inspection_left" value="1"
                                {{ $page_06->hearing_inspection_left == '1' ? 'checked' : '' }}>パス
                            <input type="radio" name="hearing_inspection_left" value="2"
                                {{ $page_06->hearing_inspection_left == '2' ? 'checked' : '' }}>リファー
                            ）
                        </div>
                        <div id="remarks3">
                            <input type="text" name="other_inspection_item_remarks"
                                value="{{ $page_06->inspection_item_remarks }}">
                        </div>
                    </td>
                </tr>
                <tr>
                    <th colspan="3">予備欄</th>
                </tr>
                <tr>
                    <td colspan="3"><input type="text" name="spare" value="{{ $page_06->spare }}"></td>
                </tr>
            </table>
        </div>

        <label>※検査結果を記録する場合は、妊婦に説明し同意を得ること。</label>

        {{-- ボタン --}}
        <div>
            <button type="submit" class="btn btn-primary">修正</button>
            <a href="{{ route('page_06.show', $user) }}">戻る</a>
        </div>

    </form>

    <script src="https://code.jquery.com/jquery-3.7.1.min.js"
        integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script>
        var select_val = document.getElementById("inspection_item_name").value;
        var other_item_name = document.getElementById("other_item_name")
        var remarks1 = document.getElementById("remarks1");
        var remarks2 = document.getElementById("remarks2");
        var remarks3 = document.getElementById("remarks3");

        if (select_val == '1') {
            document.getElementById("other_item_name").style.display = "none";
            document.getElementById("remarks1").style.display = "block";
            document.getElementById("remarks2").style.display = "none";
            document.getElementById("remarks3").style.display = "none";
        } else if (select_val == '2' || select_val == '3') {
            document.getElementById("other_item_name").style.display = "none";
            document.getElementById("remarks1").style.display = "none";
            document.getElementById("remarks2").style.display = "block";
            document.getElementById("remarks3").style.display = "none";
        } else if (select_val == 'E') {
            document.getElementById("other_item_name").style.display = "block";
            document.getElementById("remarks1").style.display = "none";
            document.getElementById("remarks2").style.display = "none";
            document.getElementById("remarks3").style.display = "block";
        } else {
            document.getElementById("other_item_name").style.display = "none";
            document.getElementById("remarks1").style.display = "none";
            document.getElementById("remarks2").style.display = "none";
            document.getElementById("remarks3").style.display = "block";
        }

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
