<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>表紙</title>
</head>

<body>
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
                    {{ $page_00->issue_date }} 交付
                </th>
                <th colspan="3">№：{{ $page_00->id }}</th>
            </tr>
            <tr>
                <th>保護者の氏名１</th>
                <td colspan="3">
                    ふりがな：{{ $page_00->parent_fullname_huri1 }}
                    <br>
                    氏名　　：{{ $page_00->parent_fullname1 }}
                </td>
            </tr>
            <tr>
                <th>保護者の氏名２</th>
                <td colspan="3">
                    ふりがな：{{ $page_00->parent_fullname_huri2 }}
                    <br>
                    氏名　　：{{ $page_00->parent_fullname2 }}
                </td>
            </tr>
            <tr>
                <th>子の氏名</th>
                <td>
                    ふりがな：{{ $page_00->child_fullname_huri }}
                    <br>
                    氏名　　：{{ $page_00->child_fullname }}
                </td>
                <td colspan="2">
                    （第 {{ $page_00->child_count }} 子）
                </td>
            </tr>
            <tr>
                <th>生年月日：</th>
                <td>
                    {{ $page_00->child_birthday }}
                </td>
                <th>性別：</th>
                <td>
                    @if ($page_00->child_gender == '1')
                        男
                    @elseif ($page_00->child_gender == '2')
                        女
                    @endif
                </td>
            </tr>
        </table>
    </div>

    {{-- ボタン --}}
    <a href="{{ route('main.index', $user) }}">戻る</a>

</body>

</html>
