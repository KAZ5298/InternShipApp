<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>表紙_編集</title>
</head>

<body>
    <form method="POST" action="{{ route('page_00.update', [$page_00, $user]) }}">
        @csrf
        @method('patch')

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
            <table>
                <tr>
                    <th>
                        <input type="date" name="issue_date" value="{{ $page_00->issue_date }}" {{ $disabled2 }}>
                        交付
                    </th>
                </tr>
                <tr>
                    <th>保護者の氏名１</th>
                    <td>
                        ふりがな：<input type="text" name="parent_fullname_huri1" required
                            value="{{ $page_00->parent_fullname_huri1 }}" {{ $disabled1 }}>
                        <br>
                        氏名　　：<input type="text" name="parent_fullname1" required
                            value="{{ $page_00->parent_fullname1 }}" {{ $disabled1 }}>
                    </td>
                </tr>
                <tr>
                    <th>保護者の氏名２</th>
                    <td>
                        ふりがな：<input type="text" name="parent_fullname_huri2"
                            value="{{ $page_00->parent_fullname_huri2 }}" {{ $disabled1 }}>
                        <br>
                        氏名　　：<input type="text" name="parent_fullname2" value="{{ $page_00->parent_fullname2 }}"
                            {{ $disabled1 }}>
                    </td>
                </tr>
                <tr>
                    <th>子の氏名</th>
                    <td>
                        ふりがな：<input type="text" name="child_fullname_huri" required
                            value="{{ $page_00->child_fullname_huri }}" {{ $disabled1 }}>
                        <br>
                        氏名　　：<input type="text" name="child_fullname" required
                            value="{{ $page_00->child_fullname }}" {{ $disabled1 }}>
                    </td>
                    <td>
                        （第 <select name="child_count" {{ $disabled1 }} required>
                            <option value="" {{ $page_00->child_count == '' ? 'selected' : '' }}></option>
                            @for ($j = 1; $j <= 99; $j++)
                                <option value="{{ $j }}"
                                    {{ $page_00->child_count == $j ? 'selected' : '' }}>{{ $j }}
                                </option>
                            @endfor
                        </select> 子）
                    </td>
                </tr>
                <tr>
                    <th>生年月日：</th>
                    <td>
                        <input type="date" name="child_birthday" required value="{{ $page_00->child_birthday }}"
                            {{ $disabled1 }}>
                    </td>
                    <th>性別：</th>
                    <td>
                        <select name="child_gender"{{ $disabled1 }} required>
                            <option value="" {{ $page_00->child_gender == '' ? 'selected' : '' }}></option>
                            <option value="1" {{ $page_00->child_gender == '1' ? 'selected' : '' }}> 男
                            </option>
                            <option value="2" {{ $page_00->child_gender == '2' ? 'selected' : '' }}> 女
                            </option>
                        </select>
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
