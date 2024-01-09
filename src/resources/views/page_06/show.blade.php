<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ページ６</title>
</head>

<body>

    <div class="title">
        <h1>検査の記録</h1>
    </div>

    <label>感染症検査や子宮頸がん検診の結果に関して、<br>気になる点や追加検査・治療が必要かについて、医師に相談しましょう。</label>

    <div class="container">

        @isset($message)
            {{ $message }}
        @endisset

        <table border="1">
            <tr>
                <th>検査項目</th>
                <th>検査年月日</th>
                <th>備考</th>
                <th>予備欄</th>
                <th>操作</th>
            </tr>
            @foreach ($page_06s as $page_06)
                <tr>
                    <td>
                        @switch($page_06->inspection_item_name)
                            @case('1')
                                血液型
                            @break

                            @case('2')
                                新生児聴覚検査（自動ＡＢＲ・ＯＡＥ）
                            @break

                            @case('3')
                                リファー（要再検査）の場合
                            @break

                            @case('4')
                                不規則抗体
                            @break

                            @case('5')
                                子宮頸がん検診
                            @break

                            @case('6')
                                梅毒血清反応
                            @break

                            @case('7')
                                ＨＢｓ抗原
                            @break

                            @case('8')
                                ＨＣＶ抗体
                            @break

                            @case('9')
                                ＨＩＶ抗体
                            @break

                            @case('0')
                                風しんウイルス抗体
                            @break

                            @case('A')
                                ＨＴＬＶ－１抗体
                            @break

                            @case('B')
                                クラミジア抗原
                            @break

                            @case('C')
                                Ｂ群溶血性連鎖球菌
                            @break

                            @case('D')
                                先天性代謝異常検査
                            @break

                            @case('E')
                                {{ $page_06->inspection_item_name_other }}
                            @break

                            @default
                        @endswitch
                    </td>
                    <td>
                        {{ $page_06->inspection_item_date }}
                    </td>
                    <td>
                        @switch($page_06->inspection_item_name)
                            @case('1')
                                {{ 'ＡＢＯ ' . $page_06->blood_type_name . ' 型 Ｒｈ ' . $page_06->blood_type_rh_name }}
                            @break

                            @case('2')
                                {{ '右（ ' . $page_06->hearing_inspection_right_name . ' ）' }}
                                <br>
                                {{ '左（ ' . $page_06->hearing_inspection_left_name . ' ）' }}
                            @break

                            @case('3')
                                {{ '右（ ' . $page_06->hearing_inspection_right_name . ' ）' }}
                                <br>
                                {{ '左（ ' . $page_06->hearing_inspection_left_name . ' ）' }}
                            @break

                            @default
                                {{ $page_06->inspection_item_remarks }}
                            @break
                        @endswitch
                    </td>
                    <td>
                        {{ $page_06->spare }}
                    </td>
                    <td>
                        @if ($loginUser->role == '3')
                            <a href="{{ route('page_06.edit', [$page_06, $user]) }}">編集</a>
                        @else
                            権限がありません
                        @endif
                    </td>
                </tr>
            @endforeach
        </table>
    </div>

    <label>※検査結果を記録する場合は、妊婦に説明し同意を得ること。</label>

    {{-- ボタン --}}
    <div>
        <a href="{{ route('main.index', $user) }}">戻る</a>
    </div>

</body>

</html>
