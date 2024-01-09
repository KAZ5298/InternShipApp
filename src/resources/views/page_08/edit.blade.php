<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ページ８</title>
</head>

<body>
    <form method="POST" action="{{ route('page_08.update', [$page_08, $user]) }}">
        @csrf
        @method('patch')

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
                </tr>
                <tr>
                    <td>
                        <input type="date" name="attendance_date" required value="{{ $page_08->attendance_date }}">
                    </td>
                    <td><input type="text" name="subject" value="{{ $page_08->subject }}"></td>
                    <td><input type="text" name="remarks" value="{{ $page_08->remarks }}"></td>
                    <td><input type="text" name="spare" value="{{ $page_08->spare }}"></td>
                </tr>
            </table>
        </div>

        {{-- ボタン --}}
        <div>
            <button type="submit" class="btn btn-primary">修正</button>
            <a href="{{ route('page_08.show', $user) }}">戻る</a>
        </div>

    </form>

</body>

</html>
