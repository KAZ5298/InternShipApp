<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ページ１２</title>
</head>

<body>
    <form method="POST" action="{{ route('page_12.update2', [$page_12_2, $user]) }}">
        @csrf
        @method('patch')

        <div class="head co">
            <label>＜地域の子育てに関する相談機関（子育て世代包括支援センター等）を利用した時に記入してもらいましょう。＞<br>利用記録</label>
        </div>

        <div class="container co">
            <table border="1">
                <tr>
                    <th>年月日</th>
                    <th>概要など</th>
                    <th>場所</th>
                </tr>
                <tr>
                    <td>
                        <input type="date" name="co_use_date" required value="{{ $page_12_2->co_use_date }}">
                    </td>
                    <td>
                        <input type="text" name="co_use_summary" value="{{ $page_12_2->co_use_summary }}">
                    </td>
                    <td>
                        <input type="text" name="co_use_location" value="{{ $page_12_2->co_use_location }}">
                    </td>
                </tr>
            </table>
        </div>

        {{-- ボタン --}}
        <div>
            <button type="submit" class="btn btn-primary">修正</button>
            <a href="{{ route('page_12.show', $user) }}">戻る</a>
        </div>

    </form>

</body>

</html>
