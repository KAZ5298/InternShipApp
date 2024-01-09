<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>メイン</title>
    <style>
        tr>*:empty {
            background-image: linear-gradient(to right top, transparent calc(50% - 0.5px), black 50%, black calc(50% + 0.5px), transparent calc(50% + 1px)) !important;
        }
    </style>
</head>

<body>

    <div class="title">
        <h1>メインページ</h1>
    </div>

    <div class="container">
        <div class="user">
            ふりがな：{{ $loginUser->fullname_huri }}
            <br>
            氏名　　：{{ $loginUser->fullname }}
            <br>
            @if ($loginUser->role == '1')
                役割　　：保護者
            @elseif($loginUser->role == '2')
                役割　　：役所
            @elseif($loginUser->role == '3')
                役割　　：支援者
            @endif
        </div>

        <div class="logout">
            <a class="nav-link" href="{{ route('logout') }}"
                onclick="event.preventDefault(); document.getElementById('logout').submit();">ログアウト</a>
            <form id="logout" action="{{ route('logout') }}" method="POST">
                @csrf
            </form>
        </div>

        @isset($message)
            {{ $message }}
        @endisset

        <table border="1">
            <tr>
                <th rowspan="2">ページ№</th>
                <th rowspan="2">ページ名</th>
                <th colspan="3">操作</th>
            </tr>
            <tr>
                <th>作成</th>
                <th>表示</th>
                <th>編集</th>
            </tr>
            {{-- 表紙 --}}
            <tr>
                <td>0</td>
                <td>表紙</td>
                @if ($loginUser->role != '2')
                    <td></td>
                @else
                    <td><a href="{{ route('page_00.create', $user) }}">作成</a></td>
                @endif
                <td><a href="{{ route('page_00.show', $user) }}">表示</a></td>
                @if ($loginUser->role == '3')
                    <td></td>
                @else
                    <td><a href="{{ route('page_00.edit', $user) }}">編集</a></td>
                @endif
            </tr>
            {{-- ページ１（受取後記入） --}}
            <tr>
                <td>1</td>
                <td>受取後記入</td>
                @if ($loginUser->role != '1')
                    <td></td>
                @else
                    <td><a href="{{ route('page_01.create', $user) }}">作成</a></td>
                @endif
                <td><a href="{{ route('page_01.show', $user) }}">表示</a></td>
                @if ($loginUser->role == '3')
                    <td></td>
                @else
                    <td><a href="{{ route('page_01.edit', $user) }}">編集</a></td>
                @endif
            </tr>
            {{-- ページ２（妊婦の健康状態） --}}
            <tr>
                <td>2</td>
                <td>妊婦の健康状態</td>
                @if ($loginUser->role != '1')
                    <td></td>
                @else
                    <td><a href="{{ route('page_02.create', $user) }}">作成</a></td>
                @endif
                <td><a href="{{ route('page_02.show', $user) }}">表示</a></td>
                @if ($loginUser->role != '1')
                    <td></td>
                @else
                    <td><a href="{{ route('page_02.edit', $user) }}">編集</a></td>
                @endif
            </tr>
            {{-- ページ３（妊婦の職業と環境） --}}
            <tr>
                <td>3</td>
                <td>妊婦の職業と環境</td>
                @if ($loginUser->role != '1')
                    <td></td>
                @else
                    <td><a href="{{ route('page_03.create', $user) }}">作成</a></td>
                @endif
                <td><a href="{{ route('page_03.show', $user) }}">表示</a></td>
                @if ($loginUser->role != '1')
                    <td></td>
                @else
                    <td><a href="{{ route('page_03.edit', $user) }}">編集</a></td>
                @endif
            </tr>
            {{-- ページ４（妊娠中の記録） --}}
            <tr>
                <td>4</td>
                <td>妊娠中の記録</td>
                @if ($loginUser->role != '1')
                    <td></td>
                @else
                    <td><a href="{{ route('page_04.create', $user) }}">作成</a></td>
                @endif
                <td><a href="{{ route('page_04.show', $user) }}">表示</a></td>
                @if ($loginUser->role != '1')
                    <td></td>
                @else
                    <td><a href="{{ route('page_04.edit', $user) }}">編集</a></td>
                @endif
            </tr>
            {{-- ページ５（妊娠中の経過） --}}
            <tr>
                <td>5</td>
                <td>妊娠中の記録</td>
                @if ($loginUser->role != '3')
                    <td></td>
                @else
                    <td><a href="{{ route('page_05.create', $user) }}">作成</a></td>
                @endif
                <td><a href="{{ route('page_05.show', $user) }}">表示</a></td>
                @if ($loginUser->role != '3')
                    <td></td>
                @else
                    <td></td>
                @endif
            </tr>
            {{-- ページ６（検査の記録） --}}
            <tr>
                <td>6</td>
                <td>検査の記録</td>
                @if ($loginUser->role != '3')
                    <td></td>
                @else
                    <td><a href="{{ route('page_06.create', $user) }}">作成</a></td>
                @endif
                <td><a href="{{ route('page_06.show', $user) }}">表示</a></td>
                @if ($loginUser->role != '3')
                    <td></td>
                @else
                    <td></td>
                @endif
            </tr>
            {{-- ページ７（父親や周囲の方の記録） --}}
            <tr>
                <td>7</td>
                <td>父親や周囲の方の記録</td>
                @if ($loginUser->role != '1')
                    <td></td>
                @else
                    <td><a href="{{ route('page_07.create', $user) }}">作成</a></td>
                @endif
                <td><a href="{{ route('page_07.show', $user) }}">表示</a></td>
                @if ($loginUser->role != '1')
                    <td></td>
                @else
                    <td><a href="{{ route('page_07.edit', $user) }}">編集</a></td>
                @endif
            </tr>
            {{-- ページ８（両親学級などの受講記録） --}}
            <tr>
                <td>8</td>
                <td>両親学級などの受講記録</td>
                @if ($loginUser->role != '1')
                    <td></td>
                @else
                    <td><a href="{{ route('page_08.create', $user) }}">作成</a></td>
                @endif
                <td><a href="{{ route('page_08.show', $user) }}">表示</a></td>
                @if ($loginUser->role != '1')
                    <td></td>
                @else
                    <td></td>
                @endif
            </tr>
            {{-- ページ９（妊娠中と産後の歯の状態） --}}
            <tr>
                <td>9</td>
                <td>妊娠中と産後の歯の状態</td>
                @if ($loginUser->role != '3')
                    <td></td>
                @else
                    <td><a href="{{ route('page_09.create', $user) }}">作成</a></td>
                @endif
                <td><a href="{{ route('page_09.show', $user) }}">表示</a></td>
                @if ($loginUser->role != '3')
                    <td></td>
                @else
                    <td><a href="{{ route('page_09.edit1', $user) }}">編集</a></td>
                @endif
            </tr>
            {{-- ページ１０（出産の状態） --}}
            <tr>
                <td>10</td>
                <td>出産の状態</td>
                @if ($loginUser->role != '3')
                    <td></td>
                @else
                    <td><a href="{{ route('page_10.create', $user) }}">作成</a></td>
                @endif
                <td><a href="{{ route('page_10.show', $user) }}">表示</a></td>
                @if ($loginUser->role != '3')
                    <td></td>
                @else
                    <td><a href="{{ route('page_10.edit', $user) }}">編集</a></td>
                @endif
            </tr>
            {{-- ページ１１（出産後の母体の経過） --}}
            <tr>
                <td>11</td>
                <td>出産後の母体の経過</td>
                @if ($loginUser->role != '3')
                    <td></td>
                @else
                    <td><a href="{{ route('page_11.create', $user) }}">作成</a></td>
                @endif
                <td><a href="{{ route('page_11.show', $user) }}">表示</a></td>
                @if ($loginUser->role == '2')
                    <td></td>
                @else
                    <td><a href="{{ route('page_11.edit2', $user) }}">編集</a></td>
                @endif
            </tr>
            {{-- ページ１２（サービス利用記録） --}}
            <tr>
                <td>12</td>
                <td>サービス利用記録</td>
                @if ($loginUser->role != '3')
                    <td></td>
                @else
                    <td><a href="{{ route('page_12.create', $user) }}">作成</a></td>
                @endif
                <td><a href="{{ route('page_12.show', $user) }}">表示</a></td>
                @if ($loginUser->role != '3')
                    <td></td>
                @else
                    <td></td>
                @endif
            </tr>
            {{-- ページ１３（早期・後期新生児期の記録） --}}
            <tr>
                <td>13</td>
                <td>早期・後期新生児期の記録</td>
                @if ($loginUser->role != '3')
                    <td></td>
                @else
                    <td><a href="{{ route('page_13.create', $user) }}">作成</a></td>
                @endif
                <td><a href="{{ route('page_13.show', $user) }}">表示</a></td>
                @if ($loginUser->role != '3')
                    <td></td>
                @else
                    <td><a href="{{ route('page_13.edit', $user) }}">編集</a></td>
                @endif
            </tr>
            {{-- ページ１４（保護者の記録） --}}
            <tr>
                <td>14</td>
                <td>保護者の記録</td>
                @if ($loginUser->role != '1')
                    <td></td>
                @else
                    <td><a href="{{ route('page_14.create', $user) }}">作成</a></td>
                @endif
                <td><a href="{{ route('page_14.show', $user) }}">表示</a></td>
                @if ($loginUser->role != '1')
                    <td></td>
                @else
                    <td><a href="{{ route('page_14.edit', $user) }}">編集</a></td>
                @endif
            </tr>
            {{-- ページ１５（健康診査） --}}
            <tr>
                <td>15</td>
                <td>健康診査</td>
                @if ($loginUser->role != '1')
                    <td></td>
                @else
                    <td><a href="{{ route('page_15.create', $user) }}">作成</a></td>
                @endif
                <td><a href="{{ route('page_15.show', $user) }}">表示</a></td>
                @if ($loginUser->role != '1')
                    <td></td>
                @else
                    <td><a href="{{ route('page_15.edit', $user) }}">編集</a></td>
                @endif
            </tr>
        </table>

        @if ($loginUser->role != '1')
            <td><a href="{{ route('user.index') }}">戻る</a>
        @endif
    </div>

</body>

</html>
