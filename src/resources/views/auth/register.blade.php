<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ユーザー登録</title>
</head>

<body>
    <form method="POST" action="{{ route('register') }}">
        @csrf

        {{-- ユーザー名 --}}
        <div class="name">
            <label for="name">ユーザー名</label>
            <input id="name" type="text" name="name">
        </div>

        {{-- メールアドレス --}}
        <div class="email">
            <label for="email">メールアドレス</label>
            <input id="email" type="text" name="email">
        </div>

        {{-- 氏名 --}}
        <div class="fullname">
            <label for="fullname">氏名</label>
            <input id="fullname" type="text" name="fullname">
        </div>

        {{-- 氏名（ふりがな） --}}
        <div class="fullname_huri">
            <label for="fullname_huri">氏名（ふりがな）</label>
            <input id="fullname_huri" type="text" name="fullname_huri">
        </div>

        {{-- 役割 --}}
        <div class="role">
            <label for="role">役割</label>
            <input id="role" type="radio" name="role" value="1">保護者
            <input id="role" type="radio" name="role" value="2">役所
            <input id="role" type="radio" name="role" value="3">支援者
        </div>

        {{-- パスワード --}}
        <div class="password">
            <label for="password">パスワード</label>
            <input id="password" type="password" name="password">
        </div>

        <div class="password_confirmation">
            <label for="password_confirmation">パスワード（再確認）</label>
            <input id="password_confirmation" type="password" name="password_confirmation">
        </div>

        {{-- ボタン --}}
        <div>
            <button type="submit" class="btn btn-primary">登録</button>
        </div>

    </form>

</body>

</html>
