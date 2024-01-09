<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ページ１</title>
</head>

<body>

    <div class="head">
        <label>＜この欄は手帳を受け取ったらすぐに自分で記入してください。＞</label>
    </div>

    <div class="container">
        <table border="1">
            @foreach ($page_01s as $page_01)
                <tr>
                    <th rowspan="6">
                        子<br>の<br>保<br>護<br>者
                    </th>
                    <th>続柄</th>
                    <th>氏名</th>
                    <th>生年月日（年齢）</th>
                    <th>職業</th>
                </tr>
                <tr>
                    <td>母（妊婦）</td>
                    <td>
                        ふりがな：{{ $page_01['mother_fullname_huri'] }}
                        <br>
                        氏名　　：{{ $page_01['mother_fullname'] }}
                    </td>
                    <td>{{ $page_01['mother_birthday'] }} 生（ {{ $page_01['mother_age'] }} 歳）</td>
                    <td>{{ $page_01['mother_work'] }}</td>
                </tr>
                <tr>
                    <td>父</td>
                    <td>
                        ふりがな：{{ $page_01['father_fullname_huri'] }}
                        <br>
                        氏名　　：{{ $page_01['father_fullname'] }}
                    </td>
                    <td>{{ $page_01['father_birthday'] }} 生（ {{ $page_01['father_age'] }} 歳）</td>
                    <td>{{ $page_01['father_work'] }}</td>
                </tr>
                @isset($page_01['another_relationship'])
                    <tr>
                        <td>{{ $page_01['another_relationship'] }}</td>
                        <td>
                            ふりがな：{{ $page_01['another_fullname_huri'] }}
                            <br>
                            氏名　　：{{ $page_01['another_fullname'] }}
                        </td>
                        <td>{{ $page_01['another_birthday'] }} 生（ {{ $page_01['another_age'] }} 歳）</td>
                        <td>{{ $page_01['another_work'] }}</td>
                    </tr>
                @endisset
                <tr>
                    <td rowspan="2">居住地</td>
                </tr>
                <tr>
                    <td colspan="4">
                        @for ($i = 1; $i <= 3; $i++)
                            @if (isset($page_01['address' . $i]) && isset($page_01['tel' . $i]))
                                住所：{{ $page_01['address' . $i] }}
                                電話：{{ $page_01['tel' . $i] }}
                                <br>
                            @endif
                        @endfor
                    </td>
                </tr>
                <tr>
                    <th colspan="6">出生届出済証明</th>
                </tr>
                <tr>
                    <td colspan="2">子の氏名</td>
                    <td colspan="5">
                        氏名：{{ $page_01['brc_child_fullname'] }}
                        性別：
                        @if ($page_01['brc_child_gender'] == '1')
                            男
                        @elseif ($page_01['brc_child_gender'] == '2')
                            女
                        @endif
                    </td>
                </tr>
                <tr>
                    <td colspan="2">出生の場所</td>
                    <td colspan="5">{{ $page_01['brc_child_birth_location'] }}</td>
                </tr>
                <tr>
                    <td colspan="2">出生の年月日</td>
                    <td colspan="5">{{ $page_01['brc_child_birthday'] }}</td>
                </tr>
                <tr>
                    <th colspan="6">上記の者については出生の届出があったことを証明する。</th>
                </tr>
                <tr>
                    <td colspan="3">{{ $page_01['brc_date'] }}</td>
                    <td colspan="3">市区町村長：{{ $page_01['brc_mayor_fullname'] }}　印</td>
                </tr>
            @endforeach
        </table>
    </div>

    <label>※赤ちゃんが生まれたら１４日以内に出生届をして、同時に上欄に出生届済の証明を受けてください。</label>

    {{-- ボタン --}}
    <div>
        <a href="{{ route('main.index', $user) }}">戻る</a>
    </div>

</body>

</html>
