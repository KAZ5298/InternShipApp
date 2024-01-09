<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('/css/bootstrap.min.css') }}">
    <title>ページ１４</title>
</head>

<body>
    <nav>
        <div class="nav nav-tabs" id="nav-tab" role="tablist">
            <button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home"
                type="button" role="tab" aria-controls="nav-home" aria-selected="true">保護者の記録【２週間頃】</button>
            <button class="nav-link" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile"
                type="button" role="tab" aria-controls="nav-profile" aria-selected="false">保護者の記録【１か月頃】</button>
            <button class="nav-link" id="nav-contact-tab" data-bs-toggle="tab" data-bs-target="#nav-contact"
                type="button" role="tab" aria-controls="nav-contact" aria-selected="false">保護者の記録【２か月頃】</button>
            <button class="nav-link" id="nav-disabled-tab" data-bs-toggle="tab" data-bs-target="#nav-disabled"
                type="button" role="tab" aria-controls="nav-disabled" aria-selected="false">保護者の記録【３～４か月頃】</button>
        </div>
    </nav>

    <div class="tab-content" id="nav-tabContent">
        <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab"
            tabindex="0">
            <div class="title">
                <h1>保護者の記録【２週間頃】</h1>
            </div>

            <div class="container">
                <table border="1">
                    <tr>
                        <th colspan="2">保護者の記録【２週間頃】（ {{ $page_14->week2_record_date }} 記録）</th>
                    </tr>
                    <tr>
                        <th>泣き声やお乳を飲む力が弱いと思いますか。</th>
                        <td>
                            @if ($page_14->week2_question1 == '1')
                                はい
                            @elseif($page_14->week2_question1 == '2')
                                いいえ
                            @endif
                        </td>
                    </tr>
                    <tr>
                        <th>寝かせるときは、あお向けに寝かせていますか。</th>
                        <td>
                            @if ($page_14->week2_question2 == '1')
                                はい
                            @elseif($page_14->week2_question2 == '2')
                                いいえ
                            @endif
                        </td>
                    </tr>
                    <tr>
                        <th>自動車に乗るとき、チャイルドシートを使用していますか。</th>
                        <td>
                            @if ($page_14->week2_question3 == '1')
                                はい
                            @elseif($page_14->week2_question3 == '2')
                                いいえ
                            @endif
                        </td>
                    </tr>
                    <tr>
                        <th>保護者ご自身の睡眠で困っていることはありますか。</th>
                        <td>
                            @if ($page_14->week2_question4 == '1')
                                はい
                            @elseif($page_14->week2_question4 == '2')
                                いいえ
                            @endif
                        </td>
                    </tr>
                    <tr>
                        <th>子育てについて気軽に相談できる人はいますか。</th>
                        <td>
                            @if ($page_14->week2_question5 == '1')
                                はい
                            @elseif($page_14->week2_question5 == '2')
                                いいえ
                            @endif
                        </td>
                    </tr>
                    <tr>
                        <th>子育てについて不安や困難を感じることはありますか。</th>
                        <td>
                            @if ($page_14->week2_question6 == '1')
                                はい
                            @elseif($page_14->week2_question6 == '2')
                                いいえ
                            @elseif($page_14->week2_question6 == '3')
                                何ともいえない
                            @endif
                        </td>
                    </tr>
                    <tr>
                        <th>成長の様子、育児の心配、かかった病気、感想などを自由に記入しましょう｡</th>
                        <td>
                            {{ $page_14->week2_freespace }}
                        </td>
                    </tr>
                </table>
            </div>
            <label>※このページは医療機関、子育て世代包括支援センター等で参考にするので、</label>
            <br>
            <label>　丁寧に記入しましょう。気になることがあれば、医師や保健師、助産師などに相談しましょう。</label>

        </div>

        <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab" tabindex="0">
            <div class="title">
                <h1>保護者の記録【１か月頃】</h1>
            </div>

            <div class="container">
                <table border="1">
                    <tr>
                        <th colspan="2">保護者の記録【１か月頃】（ {{ $page_14->month1_record_date }} 記録）</th>
                    </tr>
                    <tr>
                        <td colspan="2">
                            {{ $became1Month }} で１か月になりました。
                        </td>
                    </tr>
                    <tr>
                        <th>裸にすると手足をよく動かしますか｡</th>
                        <td>
                            @if ($page_14->month1_question1 == '1')
                                はい
                            @elseif($page_14->month1_question1 == '2')
                                いいえ
                            @endif
                        </td>
                    </tr>
                    <tr>
                        <th>お乳をよく飲みますか｡ </th>
                        <td>
                            @if ($page_14->month1_question2 == '1')
                                はい
                            @elseif($page_14->month1_question2 == '2')
                                いいえ
                            @endif
                        </td>
                    </tr>
                    <tr>
                        <th>大きな音にビクッと手足を伸ばしたり､泣き出すことがありますか｡ </th>
                        <td>
                            @if ($page_14->month1_question3 == '1')
                                はい
                            @elseif($page_14->month1_question3 == '2')
                                いいえ
                            @endif
                        </td>
                    </tr>
                    <tr>
                        <th>おへそはかわいていますか｡</th>
                        <td>
                            @if ($page_14->month1_question4 == '1')
                                はい
                            @elseif($page_14->month1_question4 == '2')
                                いいえ
                            @endif
                        </td>
                    </tr>
                    <tr>
                        <th>寝かせるときは、あお向けに寝かせていますか。</th>
                        <td>
                            @if ($page_14->month1_question5 == '1')
                                はい
                            @elseif($page_14->month1_question5 == '2')
                                いいえ
                            @endif
                        </td>
                    </tr>
                    <tr>
                        <th>自動車に乗るとき、チャイルドシートを使用していますか。</th>
                        <td>
                            @if ($page_14->month1_question6 == '1')
                                はい
                            @elseif($page_14->month1_question6 == '2')
                                いいえ
                            @endif
                        </td>
                    </tr>
                    <tr>
                        <th>保護者ご自身の睡眠で困っていることはありますか。</th>
                        <td>
                            @if ($page_14->month1_question7 == '1')
                                はい
                            @elseif($page_14->month1_question7 == '2')
                                いいえ
                            @endif
                        </td>
                    </tr>
                    <tr>
                        <th>子育てについて気軽に相談できる人はいますか。</th>
                        <td>
                            @if ($page_14->month1_question8 == '1')
                                はい
                            @elseif($page_14->month1_question8 == '2')
                                いいえ
                            @endif
                        </td>
                    </tr>
                    <tr>
                        <th>子育てについて不安や困難を感じることはありますか。</th>
                        <td>
                            @if ($page_14->month1_question9 == '1')
                                はい
                            @elseif($page_14->month1_question9 == '2')
                                いいえ
                            @elseif($page_14->month1_question9 == '3')
                                何ともいえない
                            @endif
                        </td>
                    </tr>
                    <tr>
                        <th>成長の様子、育児の心配、かかった病気、感想などを自由に記入しましょう｡</th>
                        <td>
                            {{ $page_14->month1_freespace }}
                        </td>
                    </tr>
                </table>
            </div>
            <label>※このページは医療機関、子育て世代包括支援センター等で参考にするので、</label>
            <br>
            <label>　丁寧に記入しましょう。気になることがあれば、医師や保健師、助産師などに相談しましょう。</label>
            <br>
            <label>※これからの予防接種のスケジュールを確認しましょう。</label>
        </div>

        <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab" tabindex="0">
            <div class="title">
                <h1>保護者の記録【２か月頃】</h1>
            </div>

            <div class="container">
                <table border="1">
                    <tr>
                        <th colspan="2">保護者の記録【２か月頃】（ {{ $page_14->month2_record_date }} 記録）</th>
                    </tr>
                    <tr>
                        <th>お乳をよく飲みますか｡ </th>
                        <td>
                            @if ($page_14->month2_question1 == '1')
                                はい
                            @elseif($page_14->month2_question1 == '2')
                                いいえ
                            @endif
                        </td>
                    </tr>
                    <tr>
                        <th>目を動かして物を追って見ますか。</th>
                        <td>
                            @if ($page_14->month2_question2 == '1')
                                はい
                            @elseif($page_14->month2_question2 == '2')
                                いいえ
                            @endif
                        </td>
                    </tr>
                    <tr>
                        <th>寝かせるときは、あお向けに寝かせていますか。</th>
                        <td>
                            @if ($page_14->month2_question3 == '1')
                                はい
                            @elseif($page_14->month2_question3 == '2')
                                いいえ
                            @endif
                        </td>
                    </tr>
                    <tr>
                        <th>自動車に乗るとき、チャイルドシートを使用していますか。</th>
                        <td>
                            @if ($page_14->month2_question4 == '1')
                                はい
                            @elseif($page_14->month2_question4 == '2')
                                いいえ
                            @endif
                        </td>
                    </tr>
                    <tr>
                        <th>保護者ご自身の睡眠で困っていることはありますか。</th>
                        <td>
                            @if ($page_14->month2_question5 == '1')
                                はい
                            @elseif($page_14->month2_question5 == '2')
                                いいえ
                            @endif
                        </td>
                    </tr>
                    <tr>
                        <th>子育てについて気軽に相談できる人はいますか。</th>
                        <td>
                            @if ($page_14->month2_question6 == '1')
                                はい
                            @elseif($page_14->month2_question6 == '2')
                                いいえ
                            @endif
                        </td>
                    </tr>
                    <tr>
                        <th>子育てについて不安や困難を感じることはありますか。</th>
                        <td>
                            @if ($page_14->month2_question7 == '1')
                                はい
                            @elseif($page_14->month2_question7 == '2')
                                いいえ
                            @elseif($page_14->month2_question7 == '3')
                                何ともいえない
                            @endif
                        </td>
                    </tr>
                    <tr>
                        <th>成長の様子、育児の心配、かかった病気、感想などを自由に記入しましょう｡</th>
                        <td>
                            {{ $page_14->month2_freespace }}
                        </td>
                    </tr>
                </table>
            </div>
            <label>※このページは医療機関、子育て世代包括支援センター等で参考にするので、</label>
            <br>
            <label>　丁寧に記入しましょう。気になることがあれば、医師や保健師、助産師などに相談しましょう。</label>
        </div>

        <div class="tab-pane fade" id="nav-disabled" role="tabpanel" aria-labelledby="nav-disabled-tab" tabindex="0">
            <div class="title">
                <h1>保護者の記録【３～４か月頃】</h1>
            </div>

            <div class="container">
                <table border="1">
                    <tr>
                        <th colspan="2">保護者の記録【３～４か月頃】（ {{ $page_14->month3_4_record_date }} 記録）
                        </th>
                    </tr>
                    <tr>
                        <th>
                            首がすわったのはいつですか。
                            <br>
                            （「首がすわる」とは、支えなしで首がぐらつかない状態をいいます。）
                        </th>
                        <td>
                            {{ $page_14->month3_4_question1 }} 頃
                        </td>
                    </tr>
                    <tr>
                        <th>あやすとよく笑いますか。 </th>
                        <td>
                            @if ($page_14->month3_4_question2 == '1')
                                はい
                            @elseif($page_14->month3_4_question2 == '2')
                                いいえ
                            @endif
                        </td>
                    </tr>
                    <tr>
                        <th>目つきや目の動きがおかしいのではないかと気になりますか。 </th>
                        <td>
                            @if ($page_14->month3_4_question3 == '1')
                                はい
                            @elseif($page_14->month3_4_question3 == '2')
                                いいえ
                            @endif
                        </td>
                    </tr>
                    <tr>
                        <th>見えない方向から声をかけてみると、そちらの方を見ようとしますか。</th>
                        <td>
                            @if ($page_14->month3_4_question4 == '1')
                                はい
                            @elseif($page_14->month3_4_question4 == '2')
                                いいえ
                            @endif
                        </td>
                    </tr>
                    <tr>
                        <th>
                            外気浴をしていますか。
                            <br>
                            （天気のよい日に散歩するなどしてあげましょう。）
                        </th>
                        <td>
                            @if ($page_14->month3_4_question5 == '1')
                                はい
                            @elseif($page_14->month3_4_question5 == '2')
                                いいえ
                            @endif
                        </td>
                    </tr>
                    <tr>
                        <th>自動車に乗るとき、チャイルドシートを使用していますか。</th>
                        <td>
                            @if ($page_14->month3_4_question6 == '1')
                                はい
                            @elseif($page_14->month3_4_question6 == '2')
                                いいえ
                            @endif
                        </td>
                    </tr>
                    <tr>
                        <th>お子さんの睡眠で困っていることはありますか。</th>
                        <td>
                            @if ($page_14->month3_4_question7 == '1')
                                はい
                            @elseif($page_14->month3_4_question7 == '2')
                                いいえ
                            @endif
                        </td>
                    </tr>
                    <tr>
                        <th>保護者ご自身の睡眠で困っていることはありますか。</th>
                        <td>
                            @if ($page_14->month3_4_question8 == '1')
                                はい
                            @elseif($page_14->month3_4_question8 == '2')
                                いいえ
                            @endif
                        </td>
                    </tr>
                    <tr>
                        <th>子育てについて気軽に相談できる人はいますか。</th>
                        <td>
                            @if ($page_14->month3_4_question9 == '1')
                                はい
                            @elseif($page_14->month3_4_question9 == '2')
                                いいえ
                            @endif
                        </td>
                    </tr>
                    <tr>
                        <th>子育てについて不安や困難を感じることはありますか。</th>
                        <td>
                            @if ($page_14->month3_4_question10 == '1')
                                はい
                            @elseif($page_14->month3_4_question10 == '2')
                                いいえ
                            @elseif($page_14->month3_4_question10 == '3')
                                何ともいえない
                            @endif
                        </td>
                    </tr>
                    <tr>
                        <th>成長の様子、育児の心配、かかった病気、感想などを自由に記入しましょう｡</th>
                        <td>
                            {{ $page_14->month3_4_freespace }}
                        </td>
                    </tr>
                </table>
            </div>
            <label>※このページは医療機関、子育て世代包括支援センター等で参考にするので、</label>
            <br>
            <label>　丁寧に記入しましょう。気になることがあれば、医師や保健師、助産師などに相談しましょう。</label>
        </div>
    </div>

    {{-- ボタン --}}
    <div>
        <a href="{{ route('main.index', $user) }}">戻る</a>
    </div>

    <script src="{{ asset('/js/bootstrap.bundle.min.js') }}"></script>

</body>

</html>
