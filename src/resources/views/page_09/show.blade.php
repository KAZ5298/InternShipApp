<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ページ９</title>
</head>

<body>
    <div class="title">
        <h1>妊娠中と産後の歯の状態</h1>
    </div>

    <div class="container">
        <table border="1">
            <tr>
                <th>初回診査</th>
                <td>
                    {{ $page_09_1->ei_first_examination_date }}
                </td>
            </tr>
            <tr>
                <th>妊娠週数</th>
                <td>
                    {{ $page_09_1->ei_pregnancy_weeks }} 週
                </td>
            </tr>
            <tr>
                <th>要治療の虫歯</th>
                <td>
                    @if ($page_09_1->ei_tooth_decay_select == '1')
                        なし
                    @elseif($page_09_1->ei_tooth_decay_select == '2')
                        あり（ {{ $page_09_1->ei_tooth_decay_count }} 本 ）
                    @endif
                </td>
            </tr>
            <tr>
                <th>歯石</th>
                <td>
                    @if ($page_09_1->ei_tartar == '1')
                        なし
                    @elseif($page_09_1->ei_tartar == '2')
                        あり
                    @endif
                </td>
            </tr>
            <tr>
                <th>歯肉の炎症</th>
                <td>
                    @if ($page_09_1->ei_gums_inflammation == '1')
                        なし
                    @elseif($page_09_1->ei_gums_inflammation == '2')
                        あり（要指導）
                    @elseif($page_09_1->ei_gums_inflammation == '3')
                        あり（要治療）
                    @endif
                </td>
            </tr>
            <tr>
                <th>特記事項</th>
                <td>{{ $page_09_1->ei_notices }}</td>
            </tr>
            <tr>
                <th>施設名<br>または<br>担当者名</th>
                <td>{{ $page_09_1->ei_factory_or_person }}</td>
            </tr>

            <table border="1">
                @foreach ($page_09_2s as $page_09_2)
                    <tr>
                        {{-- 上顎右 --}}
                        @for ($i = 8; $i >= 1; $i--)
                            <td>
                                {{ $page_09_2['tc_upper_jaw_right_icon' . $i] }}
                                <br>
                                {{ $i }}
                            </td>
                        @endfor
                        {{-- 上顎左 --}}
                        @for ($i = 1; $i <= 8; $i++)
                            <td>
                                {{ $page_09_2['tc_upper_jaw_left_icon' . $i] }}
                                <br>
                                {{ $i }}
                            </td>
                        @endfor
                        <th>妊娠・産後</th>
                        <td>{{ $page_09_2['tc_pregnancy_weeks'] }} 週</td>
                    </tr>
                    <tr>
                        {{-- 下顎右 --}}
                        @for ($i = 8; $i >= 1; $i--)
                            <td>
                                {{ $i }}
                                <br>
                                {{ $page_09_2['tc_lower_jaw_right_icon' . $i] }}
                            </td>
                        @endfor
                        {{-- 下顎左 --}}
                        @for ($i = 1; $i <= 8; $i++)
                            <td>
                                {{ $i }}
                                <br>
                                {{ $page_09_2['tc_lower_jaw_left_icon' . $i] }}
                            </td>
                        @endfor
                        <th>歯石</th>
                        <td>
                            @if ($page_09_2['tc_tartar'] == '1')
                                なし
                            @elseif($page_09_2['tc_tartar'] == '2')
                                あり
                            @endif
                        </td>
                    </tr>
                    <tr>
                        <th colspan="4">特記事項</th>
                        <td colspan="12">{{ $page_09_2['tc_notices'] }}</td>
                        <th>歯肉の炎症</th>
                        <td>
                            @if ($page_09_2['tc_gums_inflammation'] == '1')
                                なし
                            @elseif($page_09_2['tc_gums_inflammation'] == '2')
                                あり（要指導）
                            @elseif($page_09_2['tc_gums_inflammation'] == '3')
                                あり（要治療）
                            @endif
                        </td>
                    </tr>
                    <tr>
                        <td colspan="9">{{ $page_09_2['tc_first_examination_date'] }} 診査</td>
                        <th colspan="6">施設名又は担当者名</th>
                        <td colspan="3">{{ $page_09_2['tc_factory_or_person'] }}</td>
                    </tr>
                @endforeach
            </table>
        </table>
    </div>

    <label>※むし歯や歯周病などの病気は妊娠中に悪くなりやすいものです。</label>
    <br>
    <label>　歯周病は早産等の原因となることがあるので注意し、歯科医師に相談しましょう。</label>
    <br>
    <label>※歯科医師にかかるときは、妊娠中であることを話してください。</label>

    {{-- ボタン --}}
    <div>
        <a href="{{ route('main.index', $user) }}">戻る</a>
    </div>

</body>

</html>
