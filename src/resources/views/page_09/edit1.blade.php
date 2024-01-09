<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ページ９</title>
</head>

<body>
    <form method="POST" action="{{ route('page_09.update1', [$page_09_1, $user]) }}">
        @csrf
        @method('patch')

        <div class="title">
            <h1>妊娠中と産後の歯の状態</h1>
        </div>

        <div class="container">

            @isset($message)
                {{ $message }}
            @endisset

            <table border="1">
                <tr>
                    <th>初回診査</th>
                    <td>
                        <input type="date" name="ei_first_examination_date"
                            value="{{ $page_09_1->ei_first_examination_date }}">
                    </td>
                </tr>
                <tr>
                    <th>妊娠週数</th>
                    <td>
                        <select name="ei_pregnancy_weeks">
                            <option value="" {{ $page_09_1->ei_pregnancy_weeks == '' ? 'selected' : '' }}>
                            </option>
                            @for ($i = 1; $i <= 32; $i++)
                                <option value="{{ $i }}"
                                    {{ $page_09_1->ei_pregnancy_weeks == $i ? 'selected' : '' }}>{{ $i }}
                                </option>
                            @endfor
                        </select>
                        週
                    </td>
                </tr>
                <tr>
                    <th>要治療の虫歯</th>
                    <td>
                        <input type="hidden" name="ei_tooth_decay_select" value=""
                            {{ $page_09_1->ei_tooth_decay_select == '' ? 'checked' : '' }}>
                        <input type="radio" name="ei_tooth_decay_select" value="1"
                            {{ $page_09_1->ei_tooth_decay_select == '1' ? 'checked' : '' }}>なし
                        <br>
                        <input type="radio" name="ei_tooth_decay_select" value="2"
                            {{ $page_09_1->ei_tooth_decay_select == '2' ? 'checked' : '' }}>あり
                        （
                        <select name="ei_tooth_decay_count">
                            <option value="" {{ $page_09_1->ei_tooth_decay_count == '' ? 'selected' : '' }}>
                            </option>
                            @for ($i = 1; $i <= 32; $i++)
                                <option value="{{ $i }}"
                                    {{ $page_09_1->ei_tooth_decay_count == $i ? 'selected' : '' }}>{{ $i }}
                                </option>
                            @endfor
                        </select>
                        本）
                    </td>
                </tr>
                <tr>
                    <th>歯石</th>
                    <td>
                        <input type="hidden" name="ei_tartar" value=""
                            {{ $page_09_1->ei_tartar == '' ? 'checked' : '' }}>
                        <input type="radio" name="ei_tartar" value="1"
                            {{ $page_09_1->ei_tartar == '1' ? 'checked' : '' }}>なし
                        <input type="radio" name="ei_tartar" value="2"
                            {{ $page_09_1->ei_tartar == '2' ? 'checked' : '' }}>あり
                    </td>
                </tr>
                <tr>
                    <th>歯肉の炎症</th>
                    <td>
                        <input type="hidden" name="ei_gums_inflammation" value=""
                            {{ $page_09_1->ei_gums_inflammation == '' ? 'checked' : '' }}>
                        <input type="radio" name="ei_gums_inflammation" value="1"
                            {{ $page_09_1->ei_gums_inflammation == '1' ? 'checked' : '' }}>なし
                        <br>
                        <input type="radio" name="ei_gums_inflammation" value="2"
                            {{ $page_09_1->ei_gums_inflammation == '2' ? 'checked' : '' }}>あり（要指導）
                        <br>
                        <input type="radio" name="ei_gums_inflammation" value="3"
                            {{ $page_09_1->ei_gums_inflammation == '3' ? 'checked' : '' }}>あり（要治療）
                    </td>
                </tr>
                <tr>
                    <th>特記事項</th>
                    <td><input type="text" name="ei_notices" value="{{ $page_09_1->ei_notices }}"></td>
                </tr>
                <tr>
                    <th>施設名<br>または<br>担当者名</th>
                    <td>
                        <input type="text" name="ei_factory_or_person"
                            value="{{ $page_09_1->ei_factory_or_person }}">
                    </td>
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
                            <td rowspan="4">
                                <a href="{{ route('page_09.edit2', [$page_09_2['id'], $user]) }}">編集</a>
                            </td>
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
            <button type="submit" class="btn btn-primary">修正</button>
            <a href="{{ route('main.index', $user) }}">戻る</a>
        </div>

    </form>

</body>

</html>
