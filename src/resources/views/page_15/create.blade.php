<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('/css/bootstrap.min.css') }}">
    <title>ページ１５</title>
</head>

<body>
    <form method="POST" action="{{ route('page_15.store', $user) }}">
        @csrf

        <nav>
            <div class="nav nav-tabs" id="nav-tab" role="tablist">
                <button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home"
                    type="button" role="tab" aria-controls="nav-home" aria-selected="true">１か月児健康診査</button>
                <button class="nav-link" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile"
                    type="button" role="tab" aria-controls="nav-profile" aria-selected="false">２か月児健康診査</button>
                <button class="nav-link" id="nav-contact-tab" data-bs-toggle="tab" data-bs-target="#nav-contact"
                    type="button" role="tab" aria-controls="nav-contact" aria-selected="false">３～４か月児健康診査</button>
            </div>
        </nav>

        <div class="tab-content" id="nav-tabContent">
            <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab"
                tabindex="0">
                <div class="title">
                    <h1>１か月児健康診査</h1>
                </div>

                <div class="container">
                    <table border="1">
                        <tr>
                            <td colspan="6">
                                （ <input type="date" name="month1_date"> 実施）
                            </td>
                        </tr>
                        <tr>
                            <th colspan="2">体重</th>
                            <td>
                                <input type="number" step="0.1" name="month1_weight"> g
                            </td>
                            <th colspan="2">身長</th>
                            <td>
                                <input type="number" step="0.1" name="month1_height"> cm
                            </td>
                        </tr>
                        <tr>
                            <th colspan="2">頭囲</th>
                            <td>
                                <input type="number" step="0.1" name="month1_head_circumference"> cm
                            </td>
                        </tr>
                        <tr>
                            <th>栄養状態：</th>
                            <td colspan="2">
                                <input type="radio" name="month1_nutritional_status" value="" checked>
                                <input type="radio" name="month1_nutritional_status" value="1"> 良
                                <input type="radio" name="month1_nutritional_status" value="2"> 要指導
                            </td>
                            <th>栄養法：</th>
                            <td colspan="2">
                                <input type="radio" name="month1_nutritional_method" value="" checked>
                                <input type="radio" name="month1_nutritional_method" value="1"> 母乳
                                <input type="radio" name="month1_nutritional_method" value="2"> 混合
                                <input type="radio" name="month1_nutritional_method" value="3"> 人工乳
                            </td>
                        </tr>
                        <tr>
                            <th>健康・要観察</th>
                            <td colspan="5">
                                <input type="text" name="month1_health_observation">
                            </td>
                        </tr>
                        <tr>
                            <th>特記事項</th>
                            <td colspan="5">
                                <input type="text" name="month1_notices">
                            </td>
                        </tr>
                        <tr>
                            <th>施設名又は担当者名</th>
                            <td colspan="5">
                                <input type="text" name="month1_factory_or_person">
                            </td>
                        </tr>
                        <tr>
                            <th colspan="6">
                                次の健康診査までの記録
                                <br>
                                （自宅などで測定した身長・体重も記入しましょう。）
                            </th>
                        </tr>
                        <tr>
                            <th>年月日</th>
                            <th>月齢</th>
                            <th>体重</th>
                            <th>身長</th>
                            <th>特記事項</th>
                            <th>施設名又は担当者名</th>
                        </tr>
                        <tr>
                            <td>
                                <input type="date" name="month1_date_next">
                            </td>
                            <td>
                                <input type="number" step="0.1" name="month1_moon_phase_next">
                            </td>
                            <td>
                                <input type="number" step="0.1" name="month1_weight_next"> g
                            </td>
                            <td>
                                <input type="number" step="0.1" name="month1_height_next"> cm
                            </td>
                            <td>
                                <input type="text" name="month1_notices_next">
                            </td>
                            <td>
                                <input type="text" name="month1_factory_or_person_next">
                            </td>
                        </tr>
                    </table>
                </div>

            </div>

            <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab"
                tabindex="0">
                <div class="title">
                    <h1>２か月児健康診査</h1>
                </div>

                <div class="container">
                    <table border="1">
                        <tr>
                            <td colspan="6">
                                （ <input type="date" name="month2_date"> 実施）
                            </td>
                        </tr>
                        <tr>
                            <th colspan="2">体重</th>
                            <td>
                                <input type="number" step="0.1" name="month2_weight"> g
                            </td>
                            <th colspan="2">身長</th>
                            <td>
                                <input type="number" step="0.1" name="month2_height"> cm
                            </td>
                        </tr>
                        <tr>
                            <th colspan="2">頭囲</th>
                            <td>
                                <input type="number" step="0.1" name="month2_head_circumference"> cm
                            </td>
                        </tr>
                        <tr>
                            <th>栄養状態：</th>
                            <td colspan="2">
                                <input type="radio" name="month2_nutritional_status" value="" checked>
                                <input type="radio" name="month2_nutritional_status" value="1"> 良
                                <input type="radio" name="month2_nutritional_status" value="2"> 要指導
                            </td>
                            <th>栄養法：</th>
                            <td colspan="2">
                                <input type="radio" name="month2_nutritional_method" value="" checked>
                                <input type="radio" name="month2_nutritional_method" value="1"> 母乳
                                <input type="radio" name="month2_nutritional_method" value="2"> 混合
                                <input type="radio" name="month2_nutritional_method" value="3"> 人工乳
                            </td>
                        </tr>
                        <tr>
                            <th>健康・要観察</th>
                            <td colspan="5">
                                <input type="text" name="month2_health_observation">
                            </td>
                        </tr>
                        <tr>
                            <th>特記事項</th>
                            <td colspan="5">
                                <input type="text" name="month2_notices">
                            </td>
                        </tr>
                        <tr>
                            <th>施設名又は担当者名</th>
                            <td colspan="5">
                                <input type="text" name="month2_factory_or_person">
                            </td>
                        </tr>
                        <tr>
                            <th colspan="6">
                                次の健康診査までの記録
                                <br>
                                （自宅などで測定した身長・体重も記入しましょう。）
                            </th>
                        </tr>
                        <tr>
                            <th>年月日</th>
                            <th>月齢</th>
                            <th>体重</th>
                            <th>身長</th>
                            <th>特記事項</th>
                            <th>施設名又は担当者名</th>
                        </tr>
                        <tr>
                            <td>
                                <input type="date" name="month2_date_next">
                            </td>
                            <td>
                                <input type="number" step="0.1" name="month2_moon_phase_next">
                            </td>
                            <td>
                                <input type="number" step="0.1" name="month2_weight_next"> g
                            </td>
                            <td>
                                <input type="number" step="0.1" name="month2_height_next"> cm
                            </td>
                            <td>
                                <input type="text" name="month2_notices_next">
                            </td>
                            <td>
                                <input type="text" name="month2_factory_or_person_next">
                            </td>
                        </tr>
                    </table>
                </div>
            </div>

            <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab"
                tabindex="0">
                <div class="title">
                    <h1>３～４か月児健康診査</h1>
                </div>

                <div class="container">
                    <table border="1">
                        <tr>
                            <td colspan="6">
                                （ <input type="date" name="month3_4_date"> 実施）
                            </td>
                        </tr>
                        <tr>
                            <th colspan="2">体重</th>
                            <td>
                                <input type="number" step="0.1" name="month3_4_weight"> g
                            </td>
                            <th colspan="2">身長</th>
                            <td>
                                <input type="number" step="0.1" name="month3_4_height"> cm
                            </td>
                        </tr>
                        <tr>
                            <th colspan="2">頭囲</th>
                            <td>
                                <input type="number" step="0.1" name="month3_4_head_circumference"> cm
                            </td>
                        </tr>
                        <tr>
                            <th>栄養状態：</th>
                            <td colspan="2">
                                <input type="radio" name="month3_4_nutritional_status" value="" checked>
                                <input type="radio" name="month3_4_nutritional_status" value="1"> 良
                                <input type="radio" name="month3_4_nutritional_status" value="2"> 要指導
                            </td>
                            <th>栄養法：</th>
                            <td colspan="2">
                                <input type="radio" name="month3_4_nutritional_method" value="" checked>
                                <input type="radio" name="month3_4_nutritional_method" value="1"> 母乳
                                <input type="radio" name="month3_4_nutritional_method" value="2"> 混合
                                <input type="radio" name="month3_4_nutritional_method" value="3"> 人工乳
                            </td>
                        </tr>
                        <tr>
                            <th>股関節開排制限</th>
                            <td colspan="5">
                                <input type="hidden" name="month3_4_hip_opening_restriction" value="" checked>
                                <input type="radio" name="month3_4_hip_opening_restriction" value="1">
                                なし
                                <input type="radio" name="month3_4_hip_opening_restriction" value="2"> あり
                            </td>
                        </tr>
                        <tr>
                            <th>健康・要観察</th>
                            <td colspan="5">
                                <input type="text" name="month3_4_health_observation">
                            </td>
                        </tr>
                        <tr>
                            <th>特記事項</th>
                            <td colspan="5">
                                <input type="text" name="month3_4_notices">
                            </td>
                        </tr>
                        <tr>
                            <th>要精査</th>
                            <td colspan="5">
                                （精密検査実施日：
                                <input type="date" name="month3_4_detailed_exam_date">
                                ）
                            </td>
                        </tr>
                        <tr>
                            <th>施設名又は担当者名</th>
                            <td colspan="5">
                                <input type="text" name="month3_4_factory_or_person">
                            </td>
                        </tr>
                        <tr>
                            <th colspan="6">
                                次の健康診査までの記録
                                <br>
                                （自宅などで測定した身長・体重も記入しましょう。）
                            </th>
                        </tr>
                        <tr>
                            <th>年月日</th>
                            <th>月齢</th>
                            <th>体重</th>
                            <th>身長</th>
                            <th>特記事項</th>
                            <th>施設名又は担当者名</th>
                        </tr>
                        <tr>
                            <td>
                                <input type="date" name="month3_4_date_next">
                            </td>
                            <td>
                                <input type="number" step="0.1" name="month3_4_moon_phase_next">
                            </td>
                            <td>
                                <input type="number" step="0.1" name="month3_4_weight_next"> g
                            </td>
                            <td>
                                <input type="number" step="0.1" name="month3_4_height_next"> cm
                            </td>
                            <td>
                                <input type="text" name="month3_4_notices_next">
                            </td>
                            <td>
                                <input type="text" name="month3_4_factory_or_person_next">
                            </td>
                        </tr>
                    </table>
                </div>
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
