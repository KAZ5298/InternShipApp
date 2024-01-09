<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('/css/bootstrap.min.css') }}">
    <title>ページ４</title>
</head>

<body>
    <form method="POST" action="{{ route('page_04.store', $user) }}">
        @csrf

        <nav>
            <div class="nav nav-tabs" id="nav-tab" role="tablist">
                <button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home"
                    type="button" role="tab" aria-controls="nav-home" aria-selected="true">妊娠中の記録（１）</button>
                <button class="nav-link" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile"
                    type="button" role="tab" aria-controls="nav-profile" aria-selected="false">妊娠中の記録（２）</button>
                <button class="nav-link" id="nav-contact-tab" data-bs-toggle="tab" data-bs-target="#nav-contact"
                    type="button" role="tab" aria-controls="nav-contact" aria-selected="false">妊娠中の記録（３）</button>
                <button class="nav-link" id="nav-disabled-tab" data-bs-toggle="tab" data-bs-target="#nav-disabled"
                    type="button" role="tab" aria-controls="nav-disabled" aria-selected="false">妊娠中の記録（４）</button>
            </div>
        </nav>

        <div class="tab-content" id="nav-tabContent">
            <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab"
                tabindex="0">
                <div class="title">
                    <h1>妊娠中の記録（１）</h1>
                </div>

                <div class="head">
                    <label>ご自身の体調や妊婦健康診査の際に尋ねたいこと、赤ちゃんを迎える気持ちなどを書き留めておきましょう。</label>
                </div>

                <div class="container">
                    <table border="1">
                        <tr>
                            <th colspan="2">
                                ＜妊娠３か月＞　妊娠８週　～　妊娠１１週（
                                <input type="date" name="month3_start">　～
                                <input type="date" name="month3_end">）
                            </th>
                        </tr>
                        <tr>
                            <td colspan="2">
                                <input type="text" name="month3_record">
                                <br>
                                ※妊娠・出産について気軽に相談できる人を見つけておくと安心です。
                            </td>
                        </tr>
                        <tr>
                            <th colspan="2">
                                ＜妊娠４か月＞　妊娠１２週　～　妊娠１５週（
                                <input type="date" name="month4_start">　～
                                <input type="date" name="month4_end">）
                            </th>
                        </tr>
                        <tr>
                            <td colspan="2">
                                <input type="text" name="month4_record">
                                <br>
                                ※妊娠初期の血液検査結果を確認しましょう。（以降も各種検査結果について確認しましょう）
                                <br>
                                ※里帰り出産を予定している場合は、医師や助産師、家族と話し合い、準備しましょう。
                            </td>
                        </tr>
                        <tr>
                            <th>最終月経開始日</th>
                            <td><input type="date" name="last_menstrual_date"></td>
                        </tr>
                        <tr>
                            <th>この妊娠の初診日</th>
                            <td><input type="date" name="first_consultation_date"></td>
                        </tr>
                        <tr>
                            <th>胎動を感じた日</th>
                            <td><input type="date" name="quickening_date"></td>
                        </tr>
                        <tr>
                            <th>分娩予定日</th>
                            <td><input type="date" name="parturition_date"></td>
                        </tr>
                    </table>
                </div>
                <label>※働く女性は、妊婦健康診査で医師等から指導（予防的措置も含みます。）があった際は、</label>
                <br>
                <label>　「母性健康管理指導事項連絡カード」を活用しましょう。</label>
            </div>

            <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab"
                tabindex="0">
                <div class="title">
                    <h1>妊娠中の記録（２）</h1>
                </div>

                <div class="head">
                    <label>ご自身の体調や妊婦健康診査の際に尋ねたいこと、赤ちゃんを迎える気持ちなどを書き留めておきましょう。</label>
                </div>

                <div class="container">
                    <table border="1">
                        <tr>
                            <th colspan="2">
                                ＜妊娠５か月＞　妊娠１６週　～　妊娠１９週（
                                <input type="date" name="month5_start">　～
                                <input type="date" name="month5_end">）
                            </th>
                        </tr>
                        <tr>
                            <td colspan="2">
                                <input type="text" name="month5_record">
                                <br>
                                ※働く女性・男性のための出産、育児に関する制度を確認しましょう。
                            </td>
                        </tr>
                        <tr>
                            <th colspan="2">
                                ＜妊娠６か月＞　妊娠２０週　～　妊娠２３週（
                                <input type="date" name="month6_start">　～
                                <input type="date" name="month6_end">）
                            </th>
                        </tr>
                        <tr>
                            <td colspan="2">
                                <input type="text" name="month6_record">
                            </td>
                        </tr>
                    </table>
                </div>
                <label>※妊婦健康診査は必ず受けましょう。</label>
                <br>
                <label>　妊娠中は、気がかりなことがなくても、身体にはいろいろな変化が起こっています。</label>
                <br>
                <label>　きちんと妊婦健康診査を受けましょう。</label>
                <br>
                <br>
                <label>※妊娠中注意したい症状</label>
                <br>
                <label>　次のような症状は、治療などの対応が必要な場合もありますので、医師などに相談しましょう。</label>
                <br>
                <label>　きちんと妊婦健康診査を受けましょう。</label>
                <br>
                <label>　むくみ・性器出血・おなかの張り・腹痛・発熱・下痢・がんこな便秘</label>
                <br>
                <label>　ふだんと違ったおりもの・強い頭痛・めまい・はきけ・嘔吐</label>
                <br>
                <br>
                <label>　また、つわりで衰弱がひどいとき、イライラや動悸がはげしく、</label>
                <br>
                <label>　不安感が強いとき、今まであった胎動を感じなくなったときは、すぐに医師などに相談しましょう。</label>
            </div>

            <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab"
                tabindex="0">
                <div class="title">
                    <h1>妊娠中の記録（３）</h1>
                </div>

                <div class="head">
                    <label>ご自身の体調や妊婦健康診査の際に尋ねたいこと、赤ちゃんを迎える気持ちなどを書き留めておきましょう。</label>
                </div>

                <div class="container">
                    <table border="1">
                        <tr>
                            <th colspan="2">
                                ＜妊娠７か月＞　妊娠２４週　～　妊娠２７週（
                                <input type="date" name="month7_start">　～
                                <input type="date" name="month7_end">）
                            </th>
                        </tr>
                        <tr>
                            <td colspan="2">
                                <input type="text" name="month7_record">
                            </td>
                        </tr>
                        <tr>
                            <th colspan="2">
                                ＜妊娠８か月＞　妊娠２８週　～　妊娠３１週（
                                <input type="date" name="month8_start">　～
                                <input type="date" name="month8_end">）
                            </th>
                        </tr>
                        <tr>
                            <td colspan="2">
                                <input type="text" name="month8_record">
                            </td>
                        </tr>
                        <tr>
                            <th>出産前後の居住地</th>
                            <td>
                                住所：<input type="text" name="childbirth_address">
                                <br>
                                電話：<input type="text" name="childbirth_tel">
                            </td>
                        </tr>
                        <tr>
                            <th>妊娠・分娩に係る緊急連絡先（知らせて欲しい人）</th>
                            <td>
                                ふりがな１：<input type="text" name="emergency_contact_fullname_huri1">
                                <br>
                                氏名１：<input type="text" name="emergency_contact_fullname1">
                                <br>
                                電話１：<input type="text" name="emergency_contact_tel1">
                                <br>
                                ふりがな２：<input type="text" name="emergency_contact_fullname_huri2">
                                <br>
                                氏名２：<input type="text" name="emergency_contact_fullname2">
                                <br>
                                電話２：<input type="text" name="emergency_contact_tel2">
                            </td>
                        </tr>
                        <tr>
                            <th>分娩施設へのアクセス方法</th>
                            <td>
                                <input type="hidden" name="am_private_car" value="0">
                                <input type="checkbox" name="am_private_car" value="1">自家用車
                                <input type="hidden" name="am_taxi" value="0">
                                <input type="checkbox" name="am_taxi" value="1">タクシー
                                <input type="hidden" name="am_walking" value="0">
                                <input type="checkbox" name="am_walking" value="1">徒歩
                                <input type="hidden" name="am_other" value="0">
                                <input type="checkbox" name="am_other" value="1">その他（
                                <input type="text" name="am_other_name">）
                                <br>
                                所要時間（
                                <select name="am_time_hours">
                                    <option value="" checked></option>
                                    @for ($i = 0; $i <= 23; $i++)
                                        <option value="{{ $i }}">{{ $i }}</option>
                                    @endfor
                                </select>
                                時間
                                <select name="am_time_minutes">
                                    <option value="" checked></option>
                                    @for ($i = 0; $i <= 59; $i++)
                                        <option value="{{ $i }}">{{ $i }}</option>
                                    @endfor
                                </select>
                                分）
                            </td>
                        </tr>
                        <tr>
                            <th>出産前後、家事や育児を手伝ってくれる人</th>
                            <td><input type="text" name="helper"></td>
                        </tr>
                    </table>
                </div>
                <label>※出血や破水、おなかの強い張りや痛み、胎動の減少を感じたら、すぐに医療機関を受診しましょう。</label>
            </div>

            <div class="tab-pane fade" id="nav-disabled" role="tabpanel" aria-labelledby="nav-disabled-tab"
                tabindex="0">
                <div class="title">
                    <h1>妊娠中の記録（４）</h1>
                </div>

                <div class="head">
                    <label>ご自身の体調や妊婦健康診査の際に尋ねたいこと、赤ちゃんを迎える気持ちなどを書き留めておきましょう。</label>
                </div>

                <div class="container">
                    <table border="1">
                        <tr>
                            <th colspan="2">
                                ＜妊娠９か月＞　妊娠３２週　～　妊娠３５週（
                                <input type="date" name="month9_start">　～
                                <input type="date" name="month9_end">）
                            </th>
                        </tr>
                        <tr>
                            <td colspan="2">
                                <input type="text" name="month9_record">
                                <br>
                                ※出産に備えて連絡先や分娩施設に持参するものを確認しておきましょう。
                                <br>
                                ※出産や産後の生活について、不安な点や不明な点はかかりつけの医師や助産師、市町村の保健師などに相談しましょう。
                            </td>
                        </tr>
                        <tr>
                            <th colspan="2">
                                ＜妊娠１０か月＞　妊娠３６週　～　妊娠３９週（
                                <input type="date" name="month10_start">　～
                                <input type="date" name="month10_end">）
                            </th>
                        </tr>
                        <tr>
                            <td colspan="2">
                                <input type="text" name="month10_record">
                            </td>
                        </tr>
                        <tr>
                            <th>妊娠４０週 ～</th>
                            <td>（<input type="date" name="week40">～）</td>
                        </tr>
                        <tr>
                            <th>出産日</th>
                            <td>
                                出産日：<input type="date" name="birthday">
                                <br>
                                <input type="text" name="welcoming_feeling">
                                <br>
                                ※赤ちゃん誕生を迎えた気持ちを記入しておきましょう。
                            </td>
                        </tr>
                    </table>
                </div>
                <label>※出血や破水、おなかの強い張りや痛み、胎動の減少を感じたら、すぐに医療機関を受診しましょう。</label>
            </div>
        </div>

        {{-- ボタン --}}
        <div>
            <button type="submit" class="btn btn-primary">登録</button>
            <a href="{{ route('main.index', $user) }}">戻る</a>
        </div>

    </form>

    <script src="{{ asset('/js/bootstrap.bundle.min.js') }}"></script>

</body>

</html>
