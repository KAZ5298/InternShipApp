<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ページ５</title>
</head>

<body>

    <div class="title">
        <h1>妊娠中の経過</h1>
    </div>

    <div class="container">

        @isset($message)
            {{ $message }}
        @endisset

        <table border="1">
            <tr>
                <th>診察月日</th>
                <th>
                    妊娠
                    <br>
                    週数-日
                </th>
                <th>子宮底長</th>
                <th>腹囲</th>
                <th>
                    体重
                    <br>
                    妊娠前の体重
                    <br>
                    （ {{ $weight_before_pregnancy }} kg ）
                </th>
                <th>血圧</th>
                <th>浮腫</th>
                <th>尿蛋白</th>
                <th>尿糖</th>
                <th>
                    その他の検査
                    <br>
                    （血液検査、血糖、超音波など）
                </th>
                <th>
                    特記事項
                    <br>
                    （安静・休業などの指示や切迫早産等の産科疾患や合併症など）
                </th>
                <th>施設名または担当者名</th>
                <th>操作</th>
            </tr>
            @foreach ($page_05s as $page_05)
                @isset($page_05->consultation_date)
                    <tr>
                        <td>
                            {{ $page_05->consultation_date }}
                        </td>
                        <td>
                            週数：{{ $page_05->pregnancy_week_count }} 週
                            <br>
                            日数：{{ $page_05->pregnancy_day_count }} 日
                        </td>
                        <td>
                            {{ $page_05->uterine_fundal_length }} cm
                        </td>
                        <td>
                            {{ $page_05->waist }} cm
                        </td>
                        <td>
                            {{ $page_05->weight_after_pregnancy }} kg
                        </td>
                        <td>
                            最高：{{ $page_05->blood_pressure_max }} mmHg
                            <br>
                            最低：{{ $page_05->blood_pressure_min }} mmHg
                        </td>
                        <td>
                            @if ($page_05->edema == '1')
                                －
                            @elseif($page_05->edema == '2')
                                ＋
                            @elseif($page_05->edema == '3')
                                ＋＋
                            @endif
                        </td>
                        <td>
                            @if ($page_05->urine_protein == '1')
                                －
                            @elseif($page_05->urine_protein == '2')
                                ＋
                            @elseif($page_05->urine_protein == '3')
                                ＋＋
                            @endif
                        </td>
                        <td>
                            @if ($page_05->urine_sugar == '1')
                                －
                            @elseif($page_05->urine_sugar == '2')
                                ＋
                            @elseif($page_05->urine_sugar == '3')
                                ＋＋
                            @endif
                        </td>
                        <td>
                            {{ $page_05->other_tests }}
                        </td>
                        <td>
                            {{ $page_05->notices }}
                        </td>
                        <td>
                            {{ $page_05->factory_or_person }}
                        </td>
                        <td>
                            @if ($loginUser->role == '3')
                                <a href="{{ route('page_05.edit', [$page_05, $user]) }}">編集</a>
                            @else
                                権限がありません
                            @endif
                        </td>
                    </tr>
                @endisset
            @endforeach
        </table>
    </div>

    <label>※妊婦健康診査を受けるときはもちろん、外出時はいつも持参しましょう。</label>

    {{-- ボタン --}}
    <div>
        <a href="{{ route('main.index', $user) }}">戻る</a>
    </div>

</body>

</html>
