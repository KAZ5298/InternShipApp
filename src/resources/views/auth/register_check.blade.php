<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ユーザー登録情報確認</title>
</head>

<body>
    <form method="POST" action="{{ route('register') }}">
        @csrf

        {{-- ユーザー名 --}}
        <div class="name">
            <label for="name">ユーザー名</label>
            <label>{{ $user->name }}</label>
            <input id="name" type="hidden" name="name" value="{{ $user->name }}">
        </div>

        {{-- メールアドレス --}}
        <div class="email">
            <label for="email">メールアドレス</label>
            <label>{{ $user->email }}</label>
            <input id="email" type="hidden" name="email" value="{{ $user->email }}">
        </div>

        {{-- 氏名 --}}
        <div class="fullname">
            <label for="fullname">氏名</label>
            <label>{{ $user->fullname }}</label>
            <input id="fullname" type="hidden" name="fullname" value="{{ $user->fullname }}">
        </div>

        {{-- 氏名（ふりがな） --}}
        <div class="fullname_huri">
            <label for="fullname_huri">氏名（ふりがな）</label>
            <label>{{ $user->fullname_huri }}</label>
            <input id="fullname_huri" type="hidden" name="fullname_huri" value="{{ $user->fullname_huri }}">
        </div>

        {{-- 役割 --}}
        <div class="roll">
            <label for="roll">役割</label>
            @if ($user->roll == '1')
                <label>保護者</label>
            @elseif($user->roll == '2')
                <label>役所</label>
            @else
                <label>支援者</label>
            @endif
            <input id="roll" type="hidden" name="roll" value="{{ $user->roll }}">
        </div>

        {{-- パスワード --}}
        <div class="password">
            {{-- <label for="password">パスワード</label> --}}
            <input id="password" type="hidden" name="password">
        </div>

        <div class="password_confirmation">
            {{-- <label for="password_confirmation">パスワード（再確認）</label> --}}
            <input id="password_confirmation" type="hidden" name="password_confirmation">
        </div>

        {{-- ボタン --}}
        <div class="button">
            <button type="submit" class="btn btn-primary">
                <p class="icon-name">登録</p>
            </button>
        </div>
    </form>
</body>

</html>
