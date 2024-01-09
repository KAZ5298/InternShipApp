<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>メイン</title>
</head>

<body>

    <div class="title">
        <h1>保護者ユーザー一覧</h1>
    </div>

    <div class="container">
        <div class="logout">
            <a class="nav-link" href="{{ route('logout') }}"
                onclick="event.preventDefault(); document.getElementById('logout').submit();">ログアウト</a>
            <form id="logout" action="{{ route('logout') }}" method="POST">
                @csrf
            </form>
        </div>

        <table border="1">
            <tr>
                <th>ふりがな</th>
                <th>氏名</th>
                <th>母子健康手帳</th>
            </tr>
            @foreach ($users as $user)
                <tr>
                    <td>{{ $user->fullname_huri }}</td>
                    <td>{{ $user->fullname }}</td>
                    <td><a href="{{ route('main.index', $user) }}">メインページ</a></td>
                </tr>
            @endforeach
        </table>
    </div>

</body>

</html>
