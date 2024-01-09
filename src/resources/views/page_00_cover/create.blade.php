<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>表紙</title>
</head>

<body>
    <form method="POST" action="{{ route('page_00.store', $user) }}">
        @csrf

        <div class="style">
            <label>様式第三号（第七条関係）</label>
        </div>

        <div class="cityName">
            <label>市町村（特別区）名</label>
        </div>

        <div class="title">
            <label>母子健康手帳</label>
        </div>

        <div class="container">
            <table border="1">
                <tr>
                    <th>
                        <input type="date" name="issue_date" {{ $disabled2 }}> 交付
                    </th>
                </tr>
                <tr>
                    <th>保護者の氏名１</th>
                    <td>
                        ふりがな：<input type="text" name="parent_fullname_huri1" {{ $disabled1 }}>
                        <br>
                        氏名　　：<input type="text" name="parent_fullname1" {{ $disabled1 }}>
                    </td>
                </tr>
                <tr>
                    <th>保護者の氏名２</th>
                    <td>
                        ふりがな：<input type="text" name="parent_fullname_huri2" {{ $disabled1 }}>
                        <br>
                        氏名　　：<input type="text" name="parent_fullname2" {{ $disabled1 }}>
                    </td>
                </tr>
                <tr>
                    <th>子の氏名</th>
                    <td>
                        ふりがな：<input type="text" name="child_fullname_huri" {{ $disabled1 }}>
                        <br>
                        氏名　　：<input type="text" name="child_fullname" {{ $disabled1 }}>
                    </td>
                    <td>
                        （第 <select name="child_count" {{ $disabled1 }}>
                            <option value="" selected></option>
                            @for ($j = 1; $j <= 99; $j++)
                                <option value="{{ $j }}">{{ $j }}</option>
                            @endfor
                        </select> 子）
                    </td>
                </tr>
                <tr>
                    <th>生年月日：</th>
                    <td>
                        <input type="date" name="child_birthday" {{ $disabled1 }}>
                    </td>
                    <th>性別：</th>
                    <td>
                        <select name="child_gender" {{ $disabled1 }}>
                            <option value="" selected></option>
                            <option value="1">男</option>
                            <option value="2">女</option>
                        </select>
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
