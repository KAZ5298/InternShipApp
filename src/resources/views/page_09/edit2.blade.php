<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ページ９</title>
</head>

<body>
    <form method="POST" action="{{ route('page_09.update2', [$page_09_2, $user]) }}">
        @csrf
        @method('patch')

        <div class="title">
            <h1>妊娠中と産後の歯の状態</h1>
        </div>

        <table border="1">
            <tr>
                {{-- 上顎右 --}}
                @for ($i = 8; $i >= 1; $i--)
                    <td>
                        <select name="tc_upper_jaw_right{{ $i }}">
                            <option value="" {{ $page_09_2['tc_upper_jaw_right' . $i] == '' ? 'selected' : '' }}>
                            </option>
                            <option value="1" {{ $page_09_2['tc_upper_jaw_right' . $i] == '1' ? 'selected' : '' }}>
                                ／
                            </option>
                            <option value="2" {{ $page_09_2['tc_upper_jaw_right' . $i] == '2' ? 'selected' : '' }}>
                                Ｃ
                            </option>
                            <option value="3" {{ $page_09_2['tc_upper_jaw_right' . $i] == '3' ? 'selected' : '' }}>
                                ◯
                            </option>
                            <option value="4" {{ $page_09_2['tc_upper_jaw_right' . $i] == '4' ? 'selected' : '' }}>
                                △
                            </option>
                        </select>
                        <br>
                        {{ $i }}
                    </td>
                @endfor
                {{-- 上顎左 --}}
                @for ($i = 1; $i <= 8; $i++)
                    <td>
                        <select name="tc_upper_jaw_left{{ $i }}">
                            <option value="" {{ $page_09_2['tc_upper_jaw_left' . $i] == '' ? 'selected' : '' }}>
                            </option>
                            <option value="1" {{ $page_09_2['tc_upper_jaw_left' . $i] == '1' ? 'selected' : '' }}>
                                ／
                            </option>
                            <option value="2" {{ $page_09_2['tc_upper_jaw_left' . $i] == '2' ? 'selected' : '' }}>
                                Ｃ
                            </option>
                            <option value="3" {{ $page_09_2['tc_upper_jaw_left' . $i] == '3' ? 'selected' : '' }}>
                                ◯
                            </option>
                            <option value="4" {{ $page_09_2['tc_upper_jaw_left' . $i] == '4' ? 'selected' : '' }}>
                                △
                            </option>
                        </select>
                        <br>
                        {{ $i }}
                    </td>
                @endfor
                <th>妊娠・産後</th>
                <td>
                    <select name="tc_pregnancy_weeks">
                        <option value="" {{ $page_09_2['tc_pregnancy_weeks'] == '' ? 'selected' : '' }}></option>
                        @for ($i = 1; $i <= 99; $i++)
                            <option value="{{ $i }}"
                                {{ $page_09_2['tc_pregnancy_weeks'] == $i ? 'selected' : '' }}>
                                {{ $i }}</option>
                        @endfor
                    </select> 週
                </td>
            </tr>
            <tr>
                {{-- 下顎右 --}}
                @for ($i = 8; $i >= 1; $i--)
                    <td>
                        {{ $i }}
                        <br>
                        <select name="tc_lower_jaw_right{{ $i }}">
                            <option value="" {{ $page_09_2['tc_lower_jaw_right' . $i] == '' ? 'selected' : '' }}>
                            </option>
                            <option value="1"
                                {{ $page_09_2['tc_lower_jaw_right' . $i] == '1' ? 'selected' : '' }}>／
                            </option>
                            <option value="2"
                                {{ $page_09_2['tc_lower_jaw_right' . $i] == '2' ? 'selected' : '' }}>Ｃ
                            </option>
                            <option value="3"
                                {{ $page_09_2['tc_lower_jaw_right' . $i] == '3' ? 'selected' : '' }}>◯
                            </option>
                            <option value="4"
                                {{ $page_09_2['tc_lower_jaw_right' . $i] == '4' ? 'selected' : '' }}>△
                            </option>
                        </select>
                    </td>
                @endfor
                {{-- 下顎左 --}}
                @for ($i = 1; $i <= 8; $i++)
                    <td>
                        {{ $i }}
                        <br>
                        <select name="tc_lower_jaw_left{{ $i }}">
                            <option value="" {{ $page_09_2['tc_lower_jaw_right' . $i] == '' ? 'selected' : '' }}>
                            </option>
                            <option value="1"
                                {{ $page_09_2['tc_lower_jaw_right' . $i] == '1' ? 'selected' : '' }}>／
                            </option>
                            <option value="2"
                                {{ $page_09_2['tc_lower_jaw_right' . $i] == '2' ? 'selected' : '' }}>Ｃ
                            </option>
                            <option value="3"
                                {{ $page_09_2['tc_lower_jaw_right' . $i] == '3' ? 'selected' : '' }}>◯
                            </option>
                            <option value="4"
                                {{ $page_09_2['tc_lower_jaw_right' . $i] == '4' ? 'selected' : '' }}>△
                            </option>
                        </select>
                    </td>
                @endfor
                <th>歯石</th>
                <td>
                    <input type="hidden" name="tc_tartar" value=""
                        {{ $page_09_2['tc_tartar'] == '' ? 'checked' : '' }}>
                    <input type="radio" name="tc_tartar" value="1"
                        {{ $page_09_2['tc_tartar'] == '1' ? 'checked' : '' }}>なし
                    <input type="radio" name="tc_tartar" value="2"
                        {{ $page_09_2['tc_tartar'] == '2' ? 'checked' : '' }}>あり
                </td>
            </tr>
            <tr>
                <th colspan="2">特記事項</th>
                <td colspan="14"><input type="text" name="tc_notices" value="{{ $page_09_2['tc_notices'] }}">
                </td>
                <th>歯肉の炎症</th>
                <td>
                    <input type="hidden" name="tc_gums_inflammation" value=""
                        {{ $page_09_2['tc_gums_inflammation'] == '' ? 'checked' : '' }}>
                    <input type="radio" name="tc_gums_inflammation" value="1"
                        {{ $page_09_2['tc_gums_inflammation'] == '1' ? 'checked' : '' }}>なし
                    <br>
                    <input type="radio" name="tc_gums_inflammation" value="2"
                        {{ $page_09_2['tc_gums_inflammation'] == '2' ? 'checked' : '' }}>あり（要指導）
                    <br>
                    <input type="radio" name="tc_gums_inflammation" value="3"
                        {{ $page_09_2['tc_gums_inflammation'] == '3' ? 'checked' : '' }}>あり（要治療）
                </td>
            </tr>
            <tr>
                <td colspan="9">
                    <input type="date" name="tc_first_examination_date"
                        value="{{ $page_09_2['tc_first_examination_date'] }}"> 診査
                </td>
                <th colspan="6">施設名又は担当者名</th>
                <td colspan="3">
                    <input type="text" name="tc_factory_or_person" value="{{ $page_09_2['tc_factory_or_person'] }}">
                </td>
            </tr>
        </table>

        <label>※むし歯や歯周病などの病気は妊娠中に悪くなりやすいものです。</label>
        <br>
        <label>　歯周病は早産等の原因となることがあるので注意し、歯科医師に相談しましょう。</label>
        <br>
        <label>※歯科医師にかかるときは、妊娠中であることを話してください。</label>

        {{-- ボタン --}}
        <div>
            <button type="submit" class="btn btn-primary">修正</button>
            <a href="{{ route('page_09.edit1', $user) }}">戻る</a>
        </div>

    </form>

</body>

</html>
