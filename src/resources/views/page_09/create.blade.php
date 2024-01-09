<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ページ９</title>
</head>

<body>
    <form method="POST" action="{{ route('page_09.store', $user) }}">
        @csrf

        <div class="title">
            <h1>妊娠中と産後の歯の状態</h1>
        </div>

        <div class="container">
            <table border="1">
                <tr>
                    <th>初回診査</th>
                    <td><input type="date" name="ei_first_examination_date"></td>
                </tr>
                <tr>
                    <th>妊娠週数</th>
                    <td>
                        <select name="ei_pregnancy_weeks">
                            <option value="" selected></option>
                            @for ($i = 1; $i <= 32; $i++)
                                <option value="{{ $i }}">{{ $i }}</option>
                            @endfor
                        </select>
                        週
                    </td>
                </tr>
                <tr>
                    <th>要治療の虫歯</th>
                    <td>
                        <input type="hidden" name="ei_tooth_decay_select" value="">
                        <input type="radio" name="ei_tooth_decay_select" value="1">なし
                        <br>
                        <input type="radio" name="ei_tooth_decay_select" value="2">あり
                        （
                        <select name="ei_tooth_decay_count">
                            <option value="" selected></option>
                            @for ($i = 1; $i <= 32; $i++)
                                <option value="{{ $i }}">{{ $i }}</option>
                            @endfor
                        </select>
                        本）
                    </td>
                </tr>
                <tr>
                    <th>歯石</th>
                    <td>
                        <input type="hidden" name="ei_tartar" value="">
                        <input type="radio" name="ei_tartar" value="1">なし
                        <input type="radio" name="ei_tartar" value="2">あり
                    </td>
                </tr>
                <tr>
                    <th>歯肉の炎症</th>
                    <td>
                        <input type="hidden" name="ei_gums_inflammation" value="">
                        <input type="radio" name="ei_gums_inflammation" value="1">なし
                        <br>
                        <input type="radio" name="ei_gums_inflammation" value="2">あり（要指導）
                        <br>
                        <input type="radio" name="ei_gums_inflammation" value="3">あり（要治療）
                    </td>
                </tr>
                <tr>
                    <th>特記事項</th>
                    <td><input type="text" name="ei_notices"></td>
                </tr>
                <tr>
                    <th>施設名<br>または<br>担当者名</th>
                    <td><input type="text" name="ei_factory_or_person"></td>
                </tr>

                <table border="1">
                    <tr>
                        {{-- 上顎右 --}}
                        @for ($i = 8; $i >= 1; $i--)
                            <td>
                                <select name="tc_upper_jaw_right{{ $i }}">
                                    <option value="" checked></option>
                                    <option value="1">／</option>
                                    <option value="2">Ｃ</option>
                                    <option value="3">◯</option>
                                    <option value="4">△</option>
                                </select>
                                <br>
                                {{ $i }}
                            </td>
                        @endfor
                        {{-- 上顎左 --}}
                        @for ($i = 1; $i <= 8; $i++)
                            <td>
                                <select name="tc_upper_jaw_left{{ $i }}">
                                    <option value="" checked></option>
                                    <option value="1">／</option>
                                    <option value="2">Ｃ</option>
                                    <option value="3">◯</option>
                                    <option value="4">△</option>
                                </select>
                                <br>
                                {{ $i }}
                            </td>
                        @endfor
                        <th>妊娠・産後</th>
                        <td>
                            <select name="tc_pregnancy_weeks">
                                <option value="" selected></option>
                                @for ($i = 1; $i <= 99; $i++)
                                    <option value="{{ $i }}">{{ $i }}</option>
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
                                    <option value="" checked></option>
                                    <option value="1">／</option>
                                    <option value="2">Ｃ</option>
                                    <option value="3">◯</option>
                                    <option value="4">△</option>
                                </select>
                            </td>
                        @endfor
                        {{-- 下顎左 --}}
                        @for ($i = 1; $i <= 8; $i++)
                            <td>
                                {{ $i }}
                                <br>
                                <select name="tc_lower_jaw_left{{ $i }}">
                                    <option value="" checked></option>
                                    <option value="1">／</option>
                                    <option value="2">Ｃ</option>
                                    <option value="3">◯</option>
                                    <option value="4">△</option>
                                </select>
                            </td>
                        @endfor
                        <th>歯石</th>
                        <td>
                            <input type="hidden" name="tc_tartar" value="">
                            <input type="radio" name="tc_tartar" value="1">なし
                            <input type="radio" name="tc_tartar" value="2">あり
                        </td>
                    </tr>
                    <tr>
                        <th colspan="2">特記事項</th>
                        <td colspan="14"><input type="text" name="tc_notices"></td>
                        <th>歯肉の炎症</th>
                        <td>
                            <input type="hidden" name="tc_gums_inflammation" value="">
                            <input type="radio" name="tc_gums_inflammation" value="1">なし
                            <br>
                            <input type="radio" name="tc_gums_inflammation" value="2">あり（要指導）
                            <br>
                            <input type="radio" name="tc_gums_inflammation" value="3">あり（要治療）
                        </td>
                    </tr>
                    <tr>
                        <td colspan="9"><input type="date" name="tc_first_examination_date"> 診査</td>
                        <th colspan="6">施設名又は担当者名</th>
                        <td colspan="3"><input type="text" name="tc_factory_or_person"></td>
                    </tr>
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
            <button type="submit" class="btn btn-primary">登録</button>
            <a href="{{ route('main.index', $user) }}">戻る</a>
        </div>

    </form>

</body>

</html>
