<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ページ１３</title>
</head>

<body>
    <form method="POST" action="{{ route('page_13.store', $user) }}">
        @csrf

        <div class="container">
            <table border="1">
                <tr>
                    <th colspan="6">早期新生児期【生後１週間以内】の経過</th>
                </tr>
                <tr>
                    <th>日齢<span>※</span></th>
                    <th>体重（g）</th>
                    <th>哺乳力</th>
                    <th>黄疸</th>
                    <th colspan="2">その他</th>
                </tr>
                @for ($i = 1; $i <= 2; $i++)
                    <tr>
                        <td>
                            <input type="date" name="enp_age_in_days{{ $i }}">
                        </td>
                        <td>
                            <input type="number" step="0.1" name="enp_weight{{ $i }}" max="9999">
                        </td>
                        <td>
                            <input type="hidden" name="enp_sucking_power{{ $i }}" value="" checked>
                            <input type="radio" name="enp_sucking_power{{ $i }}" value="1">普通
                            <input type="radio" name="enp_sucking_power{{ $i }}" value="2">弱
                        </td>
                        <td>
                            <input type="hidden" name="enp_jaundice{{ $i }}" value="" checked>
                            <input type="radio" name="enp_jaundice{{ $i }}" value="1">なし
                            <input type="radio" name="enp_jaundice{{ $i }}" value="2">普通
                            <input type="radio" name="enp_jaundice{{ $i }}" value="3">強
                        </td>
                        <td colspan="2">
                            <input type="text" name="enp_others{{ $i }}">
                        </td>
                    </tr>
                @endfor
                <tr>
                    <th colspan="3">ビタミンＫ<span>2</span>シロップ投与</th>
                    <td colspan="3">実施日：<input type="date" name="itamin_administration_date"></td>
                </tr>
                <tr>
                    <th colspan="3">出生時またはその後の異常</th>
                    <td colspan="3">
                        <input type="hidden" name="enp_abnormality_select" value="" checked>
                        <input type="radio" name="enp_abnormality_select" value="1">なし
                        <br>
                        <input type="radio" name="enp_abnormality_select" value="2">あり
                        （
                        <input type="text" name="enp_abnormality">
                        その処置
                        <input type="text" name="enp_abnormality_treatment">
                        ）
                    </td>
                </tr>
                <tr>
                    <th colspan="6">退院時の記録（ <input type="date" name="lh_date"> ）</th>
                </tr>
                <tr>
                    <td colspan="2">
                        体重：<input type="number" step="0.1" name="lh_weight" max="9999"> g
                    </td>
                    <th>栄養法</th>
                    <td colspan="3">
                        <input type="hidden" name="lh_nutrition_method" value="" checked>
                        <input type="radio" name="lh_nutrition_method" value="1">母乳
                        <input type="radio" name="lh_nutrition_method" value="2">混合
                        <input type="radio" name="lh_nutrition_method" value="3">人工乳
                    </td>
                </tr>
                <tr>
                    <td colspan="6">
                        引き続き観察を要する事項：<input type="text" name="lh_observation_matter">
                    </td>
                </tr>
                <tr>
                    <th colspan="2">施設名又は担当者名</th>
                    <td colspan="2"><input type="text" name="lh_factory_or_person"></td>
                    <th>電話</th>
                    <td><input type="text" name="lh_tel"></td>
                </tr>
                <tr>
                    <th colspan="6">後期新生児期【生後１～４週】の経過</th>
                </tr>
                <tr>
                    <th>日齢<span>※</span></th>
                    <th>体重（g）</th>
                    <th>哺乳力</th>
                    <th>栄養法</th>
                    <th colspan="2">施設名又は担当者名</th>
                </tr>
                @for ($i = 1; $i <= 2; $i++)
                    <tr>
                        <td>
                            <input type="date" name="lnp_age_in_days{{ $i }}">
                        </td>
                        <td>
                            <input type="number" step="0.1" name="lnp_weight{{ $i }}" max="9999">
                        </td>
                        <td>
                            <input type="hidden" name="lnp_sucking_power{{ $i }}" value="" checked>
                            <input type="radio" name="lnp_sucking_power{{ $i }}" value="1">普通
                            <input type="radio" name="lnp_sucking_power{{ $i }}" value="2">弱
                        </td>
                        <td>
                            <input type="hidden" name="lnp_nutrition_method{{ $i }}" value=""
                                checked>
                            <input type="radio" name="lnp_nutrition_method{{ $i }}" value="1">母乳
                            <input type="radio" name="lnp_nutrition_method{{ $i }}" value="2">混合
                            <input type="radio" name="lnp_nutrition_method{{ $i }}" value="3">人工乳
                        </td>
                        <td colspan="2">
                            <input type="text" name="lnp_factory_or_person{{ $i }}">
                        </td>
                    </tr>
                @endfor
                <tr>
                    <th colspan="6">新生児訪問指導等の記録（ <input type="date" name="nvg_date"> ）</th>
                </tr>
                <tr>
                    <th>日齢<span>※</span></th>
                    <th>体重（g）</th>
                    <th>身長（cm）</th>
                    <th>胸囲（cm）</th>
                    <th>頭囲（cm）</th>
                    <th>栄養法</th>
                </tr>
                <tr>
                    <td>
                        <input type="date" name="nvg_age_in_days">
                    </td>
                    <td>
                        <input type="number" step="0.1" name="nvg_weight" max="9999">
                    </td>
                    <td>
                        <input type="number" step="0.1" name="nvg_height" max="999">
                    </td>
                    <td>
                        <input type="number" step="0.1" name="nvg_chest_measurement" max="999">
                    </td>
                    <td>
                        <input type="number" step="0.1" name="nvg_head_circumference" max="999">
                    </td>
                    <td>
                        <input type="hidden" name="nvg_nutrition_method" value="" checked>
                        <input type="radio" name="nvg_nutrition_method" value="1">母乳
                        <input type="radio" name="nvg_nutrition_method" value="2">混合
                        <input type="radio" name="nvg_nutrition_method" value="3">人工乳
                    </td>
                </tr>
                <tr>
                    <th colspan="2">施設名又は担当者名</th>
                    <td colspan="5">
                        <input type="text" name="nvg_factory_or_person">
                    </td>
                </tr>
                <tr>
                    <th colspan="2">特記事項</th>
                    <td colspan="5">
                        <input type="text" name="notices">
                    </td>
                </tr>
            </table>
        </div>

        <label>※生まれた当日を０日として数えること。</label>

        {{-- ボタン --}}
        <div>
            <button type="submit" class="btn btn-primary">登録</button>
            <a href="{{ route('main.index', $user) }}">戻る</a>
        </div>

    </form>

</body>

</html>
