<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ページ８</title>
</head>

<body>
    <div class="head">
        <label>＜このページは妊婦自身で入力してください。＞</label>
    </div>

    <div class="title">
        <h1>両親学級などの受講記録</h1>
    </div>

    <div class="container">
        <table border="1">
            <tr>
                <th>受講年月日</th>
                <th>課目</th>
                <th>備考</th>
                <th>予備欄</th>
                <th>操作</th>
            </tr>
            @foreach ($page_08s as $page_08)
                @isset($page_08->attendance_date)
                    <tr>
                        <td>{{ $page_08->attendance_date }}</td>
                        <td>{{ $page_08->subject }}</td>
                        <td>{{ $page_08->remarks }}</td>
                        <td>{{ $page_08->spare }}</td>
                        <td>
                            <a href="{{ route('page_08.edit', [$page_08, $user]) }}">編集</a>
                        </td>
                    </tr>
                @endisset
            @endforeach
        </table>
    </div>

    {{-- ボタン --}}
    <div>
        <a href="{{ route('main.index', $user) }}">戻る</a>
    </div>

</body>

</html>
