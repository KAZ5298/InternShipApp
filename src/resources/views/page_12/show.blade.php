<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ページ１２</title>
</head>

<body>

    @isset($message)
        {{ $message }}
    @endisset

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
                <th>操作</th>
            </tr>
            @foreach ($page_12_1s as $page_12_1)
                <tr>
                    <td>
                        {{ $page_12_1->pc_use_date }}
                    </td>
                    <td>
                        @if ($page_12_1->pc_use_method == '1')
                            宿泊
                        @elseif($page_12_1->pc_use_method == '2')
                            デイサービス
                        @elseif($page_12_1->pc_use_method == '3')
                            訪問
                        @endif
                    </td>
                    <td>
                        {{ $page_12_1->pc_use_location }}
                    </td>
                    <td>
                        {{ $page_12_1->pc_use_remarks }}
                    </td>
                    @if ($loginUser->role != '3')
                        <td>権限がありません</td>
                    @else
                        <td><a href="{{ route('page_12.edit1', [$page_12_1, $user]) }}">編集</a></td>
                    @endif
                </tr>
            @endforeach
        </table>
    </div>
    <br>
    <div class="head co">
        <label>＜地域の子育てに関する相談機関（子育て世代包括支援センター等）を利用した時に記入してもらいましょう。＞<br>利用記録</label>
    </div>

    <div class="container co">
        <table border="1">
            <tr>
                <th>年月日</th>
                <th>概要など</th>
                <th>場所</th>
                <th>操作</th>
            </tr>
            @foreach ($page_12_2s as $page_12_2)
                <tr>
                    <td>
                        {{ $page_12_2->co_use_date }}
                    </td>
                    <td>
                        {{ $page_12_2->co_use_summary }}
                    </td>
                    <td>
                        {{ $page_12_2->co_use_location }}
                    </td>
                    @if ($loginUser->role != '3')
                        <td>権限がありません</td>
                    @else
                        <td><a href="{{ route('page_12.edit2', [$page_12_2, $user]) }}">編集</a></td>
                    @endif
                </tr>
            @endforeach
        </table>
    </div>

    {{-- ボタン --}}
    <div>
        <a href="{{ route('main.index', $user) }}">戻る</a>
    </div>

</body>

</html>
