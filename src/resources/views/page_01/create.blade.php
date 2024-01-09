<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ページ１</title>
</head>

<body>
    <form method="POST" action="{{ route('page_01.store', $user) }}">
        @csrf

        <div class="head">
            <label>＜この欄は手帳を受け取ったらすぐに自分で記入してください。＞</label>
        </div>

        <div class="container">
            <table border="1">
                <tr>
                    <th rowspan="6">
                        子<br>の<br>保<br>護<br>者
                    </th>
                    <th>続柄</th>
                    <th>氏名</th>
                    <th>生年月日（年齢）</th>
                    <th>職業</th>
                </tr>
                <tr>
                    <td>母（妊婦）</td>
                    <td>
                        ふりがな：<input type="text" name="mother_fullname_huri" {{ $disabled1 }}>
                        <br>
                        氏名　　：<input type="text" name="mother_fullname" {{ $disabled1 }}>
                    </td>
                    <td>
                        <input type="date" name="mother_birthday" {{ $disabled1 }}> 生
                    </td>
                    <td>
                        <input type="text" name="mother_work" {{ $disabled1 }}>
                    </td>
                </tr>
                <tr>
                    <td>父</td>
                    <td>
                        ふりがな：<input type="text" name="father_fullname_huri" {{ $disabled1 }}>
                        <br>
                        氏名　　：<input type="text" name="father_fullname" {{ $disabled1 }}>
                    </td>
                    <td>
                        <input type="date" name="father_birthday" {{ $disabled1 }}> 生
                    </td>
                    <td>
                        <input type="text" name="father_work" {{ $disabled1 }}>
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="text" name="another_relationship" {{ $disabled1 }}>
                    </td>
                    <td>
                        ふりがな：<input type="text" name="another_fullname_huri" {{ $disabled1 }}>
                        <br>
                        氏名　　：<input type="text" name="another_fullname" {{ $disabled1 }}>
                    </td>
                    <td>
                        <input type="date" name="another_birthday" {{ $disabled1 }}> 生
                    </td>
                    <td>
                        <input type="text" name="another_work" {{ $disabled1 }}>
                    </td>
                </tr>
                <tr>
                    <td rowspan="2">居住地</td>
                </tr>
                <tr>
                    <td colspan="4">
                        @for ($i = 1; $i <= 3; $i++)
                            住所：<input type="text" name="address{{ $i }}" {{ $disabled1 }}>
                            電話：<input type="text" name="tel{{ $i }}" {{ $disabled1 }}>
                            <br>
                        @endfor
                    </td>
                </tr>
                <tr>
                    <th colspan="6">出生届出済証明</th>
                </tr>
                <tr>
                    <td colspan="2">子の氏名</td>
                    <td colspan="5">
                        氏名：<input type="text" name="brc_child_fullname" {{ $disabled2 }}>
                        性別：
                        <input type="radio" name="brc_child_gender" value="1" {{ $disabled2 }}> 男
                        <input type="radio" name="brc_child_gender" value="2" {{ $disabled2 }}> 女
                    </td>
                </tr>
                <tr>
                    <td colspan="2">出生の場所</td>
                    <td colspan="5">
                        <input type="text" name="brc_child_birth_location" {{ $disabled2 }}>
                    </td>
                </tr>
                <tr>
                    <td colspan="2">出生の年月日</td>
                    <td colspan="5">
                        <input type="date" name="brc_child_birthday" {{ $disabled2 }}>
                    </td>
                </tr>
                <tr>
                    <th colspan="6">上記の者については出生の届出があったことを証明する。</th>
                </tr>
                <tr>
                    <td colspan="3">
                        <input type="date" name="brc_date" {{ $disabled2 }}>
                    </td>
                    <td colspan="3">
                        市区町村長：<input type="text" name="brc_mayor_fullname" {{ $disabled2 }}>　印
                    </td>
                </tr>
            </table>
        </div>

        <label>※赤ちゃんが生まれたら１４日以内に出生届をして、同時に上欄に出生届済の証明を受けてください。</label>

        {{-- ボタン --}}
        <div>
            <button type="submit" class="btn btn-primary">登録</button>
            <a href="{{ route('main.index', $user) }}">戻る</a>
        </div>

    </form>

</body>

</html>
