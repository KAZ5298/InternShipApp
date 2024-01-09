<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ページ７</title>
</head>

<body>
    <div class="title">
        <h1>父親や周囲の方の記録</h1>
    </div>

    <label>赤ちゃんを迎える気持ちなどを書き留めておきましょう。</label>

    <div class="container">
        {{ $page_07->father_or_other_person_record }}
    </div>

    {{-- ボタン --}}
    <div>
        <a href="{{ route('main.index', $user) }}">戻る</a>
    </div>
</body>

</html>
