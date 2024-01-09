<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ページ１２</title>
</head>

<body>
    <form method="POST" action="{{ route('page_12.update1', [$page_12_1, $user]) }}">
        @csrf
        @method('patch')

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
                        <input type="date" name="pc_use_date" required value="{{ $page_12_1->pc_use_date }}">
                    </td>
                    <td>
                        <input type="radio" name="pc_use_method" value="1"
                            {{ $page_12_1->pc_use_method == '1' ? 'checked' : '' }}>宿泊
                        <input type="radio" name="pc_use_method" value="2"
                            {{ $page_12_1->pc_use_method == '2' ? 'checked' : '' }}>デイサービス
                        <input type="radio" name="pc_use_method" value="3"
                            {{ $page_12_1->pc_use_method == '3' ? 'checked' : '' }}>訪問
                    </td>
                    <td>
                        <input type="text" name="pc_use_location" value="{{ $page_12_1->pc_use_location }}">
                    </td>
                    <td>
                        <input type="text" name="pc_use_remarks" value="{{ $page_12_1->pc_use_remarks }}">
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
