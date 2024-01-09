<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ページ１２</title>
</head>

<body>
    <form method="POST" action="{{ route('page_12_1.store', $user) }}">
        @csrf

        <div class="head pc">
            <label>＜産後ケアを利用した時に記入してもらいましょう。＞<br>産後ケアの記録</label>
        </div>

        <div class="container pc">
            <table border="1">
                <tr>
                    <th>年月日</th>
                    <th>方法</th>
                    <th>場所</th>
                    <th>備考</th>
                </tr>
                <tr>
                    <td>
                        <input type="date" name="pc_use_date" required>
                    </td>
                    <td>
                        <input type="radio" name="pc_use_method" value="1">宿泊
                        <input type="radio" name="pc_use_method" value="2">デイサービス
                        <input type="radio" name="pc_use_method" value="3">訪問
                    </td>
                    <td>
                        <input type="text" name="pc_use_location">
                    </td>
                    <td>
                        <input type="text" name="pc_use_remarks">
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

    <form method="POST" action="{{ route('page_12_2.store', $user) }}">
        @csrf

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
                        <input type="date" name="co_use_date" required>
                    </td>
                    <td>
                        <input type="text" name="co_use_summary">
                    </td>
                    <td>
                        <input type="text" name="co_use_location">
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
