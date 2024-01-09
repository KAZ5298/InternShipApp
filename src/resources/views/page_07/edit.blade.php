<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ページ７</title>
</head>

<body>
    <form method="POST" action="{{ route('page_07.update', [$page_07, $user]) }}">
        @csrf
        @method('patch')

        <div class="title">
            <h1>父親や周囲の方の記録</h1>
        </div>

        <label>赤ちゃんを迎える気持ちなどを書き留めておきましょう。</label>

        <div class="container">
            <input type="text" name="father_or_other_person_record"
                value="{{ $page_07->father_or_other_person_record }}">
        </div>

        {{-- ボタン --}}
        <div>
            <button type="submit" class="btn btn-primary">修正</button>
            <a href="{{ route('main.index', $user) }}">戻る</a>
        </div>

    </form>

</body>

</html>
