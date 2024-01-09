<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ページ１３</title>
</head>

<body>
    <form method="POST" action="{{ route('page_13.update', [$page_13[0], $user]) }}">
        @csrf
        @method('patch')

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
                            <input type="date" name="enp_age_in_days{{ $i }}"
                                value="{{ $page_13[0]['enp_age_in_days' . $i] }}">
                        </td>
                        <td>
                            <input type="number" step="0.1" name="enp_weight{{ $i }}" max="9999"
                                value="{{ $page_13[0]['enp_weight' . $i] }}">
                        </td>
                        <td>
                            <input type="radio" name="enp_sucking_power{{ $i }}" value="1"
                                {{ $page_13[0]['enp_sucking_power' . $i] == '1' ? 'checked' : '' }}>普通
                            <input type="radio" name="enp_sucking_power{{ $i }}" value="2"
                                {{ $page_13[0]['enp_sucking_power' . $i] == '2' ? 'checked' : '' }}>弱
                        </td>
                        <td>
                            <input type="radio" name="enp_jaundice{{ $i }}" value="1"
                                {{ $page_13[0]['enp_jaundice' . $i] == '1' ? 'checked' : '' }}>なし
                            <input type="radio" name="enp_jaundice{{ $i }}" value="2"
                                {{ $page_13[0]['enp_jaundice' . $i] == '2' ? 'checked' : '' }}>普通
                            <input type="radio" name="enp_jaundice{{ $i }}" value="3"
                                {{ $page_13[0]['enp_jaundice' . $i] == '3' ? 'checked' : '' }}>強
                        </td>
                        <td>
                            <input type="text" name="enp_others{{ $i }}"
                                value="{{ $page_13[0]['enp_others' . $i] }}">
                        </td>
                    </tr>
                @endfor
                <tr>
                    <th colspan="3">ビタミンＫ<span>2</span>シロップ投与</th>
                    <td colspan="3">
                        実施日：<input type="date" name="vitamin_administration_date"
                            value="{{ $page_13[0]['vitamin_administration_date'] }}">
                    </td>
                </tr>
                <tr>
                    <th colspan="3">出生時またはその後の異常</th>
                    <td colspan="3">
                        <input type="radio" name="enp_abnormality_select" value="1"
                            {{ $page_13[0]['enp_abnormality_select'] == '1' ? 'checked' : '' }}>なし
                        <br>
                        <input type="radio" name="enp_abnormality_select" value="2"
                            {{ $page_13[0]['enp_abnormality_select'] == '2' ? 'checked' : '' }}>あり
                        （ <input type="text" name="enp_abnormality" value="{{ $page_13[0]['enp_abnormality'] }}">
                        その処置
                        <input type="text" name="enp_abnormality_treatment"
                            value="{{ $page_13[0]['enp_abnormality_treatment'] }}"> ）
                    </td>
                </tr>
                <tr>
                    <th colspan="6">退院時の記録（ <input type="date" name="lh_date"
                            value="{{ $page_13[0]['lh_date'] }}"> ）</th>
                </tr>
                <tr>
                    <td colspan="2">
                        体重：<input type="number" step="0.1" name="lh_weight" max="9999"
                            value="{{ $page_13[0]['lh_weight'] }}"> g
                    </td>
                    <th>栄養法</th>
                    <td colspan="3">
                        <input type="radio" name="lh_nutrition_method" value="1"
                            {{ $page_13[0]['lh_nutrition_method'] == '1' ? 'checked' : '' }}>母乳
                        <input type="radio" name="lh_nutrition_method" value="2"
                            {{ $page_13[0]['lh_nutrition_method'] == '2' ? 'checked' : '' }}>混合
                        <input type="radio" name="lh_nutrition_method" value="3"
                            {{ $page_13[0]['lh_nutrition_method'] == '3' ? 'checked' : '' }}>人工乳
                    </td>
                </tr>
                <tr>
                    <td colspan="6">
                        引き続き観察を要する事項：<input type="text" name="lh_observation_matter"
                            value="{{ $page_13[0]['lh_observation_matter'] }}">
                    </td>
                </tr>
                <tr>
                    <th colspan="2">施設名又は担当者名</th>
                    <td colspan="2">
                        <input type="text" name="lh_factory_or_person"
                            value="{{ $page_13[0]['lh_factory_or_person'] }}">
                    </td>
                    <th>電話</th>
                    <td><input type="text" name="lh_tel" value="{{ $page_13[0]['lh_tel'] }}"></td>
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
                            <input type="date" name="lnp_age_in_days{{ $i }}"
                                value="{{ $page_13[0]['lnp_age_in_days' . $i] }}">
                        </td>
                        <td>
                            <input type="number" step="0.1" name="lnp_weight{{ $i }}" max="9999"
                                value="{{ $page_13[0]['lnp_weight' . $i] }}">
                        </td>
                        <td>
                            <input type="radio" name="lnp_sucking_power{{ $i }}" value="1"
                                {{ $page_13[0]['lnp_sucking_power' . $i] == '1' ? 'checked' : '' }}>普通
                            <input type="radio" name="lnp_sucking_power{{ $i }}" value="2"
                                {{ $page_13[0]['lnp_sucking_power' . $i] == '2' ? 'checked' : '' }}>弱
                        </td>
                        <td>
                            <input type="radio" name="lnp_nutrition_method{{ $i }}" value="1"
                                {{ $page_13[0]['lnp_nutrition_method' . $i] == '1' ? 'checked' : '' }}>母乳
                            <input type="radio" name="lnp_nutrition_method{{ $i }}" value="2"
                                {{ $page_13[0]['lnp_nutrition_method' . $i] == '2' ? 'checked' : '' }}>混合
                            <input type="radio" name="lnp_nutrition_method{{ $i }}" value="3"
                                {{ $page_13[0]['lnp_nutrition_method' . $i] == '3' ? 'checked' : '' }}>人工乳
                        </td>
                        <td colspan="2">
                            <input type="text" name="lnp_factory_or_person{{ $i }}"
                                value="{{ $page_13[0]['lnp_factory_or_person' . $i] }}">
                        </td>
                    </tr>
                @endfor
                <tr>
                    <th colspan="6">新生児訪問指導等の記録（ <input type="date" name="nvg_date"
                            value="{{ $page_13[0]['nvg_date'] }}"> ）
                    </th>
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
                        <input type="date" name="nvg_age_in_days" value="{{ $page_13[0]['nvg_age_in_days'] }}">
                    </td>
                    <td>
                        <input type="number" step="0.1" name="nvg_weight" max="9999"
                            value="{{ $page_13[0]['nvg_weight'] }}">
                    </td>
                    <td>
                        <input type="number" step="0.1" name="nvg_height" max="999"
                            value="{{ $page_13[0]['nvg_height'] }}">
                    </td>
                    <td>
                        <input type="number" step="0.1" name="nvg_chest_measurement" max="999"
                            value="{{ $page_13[0]['nvg_chest_measurement'] }}">
                    </td>
                    <td>
                        <input type="number" step="0.1" name="nvg_head_circumference" max="999"
                            value="{{ $page_13[0]['nvg_head_circumference'] }}">
                    </td>
                    <td>
                        <input type="radio" name="nvg_nutrition_method" value="1"
                            {{ $page_13[0]['nvg_nutrition_method'] == '1' ? 'checked' : '' }}>母乳
                        <input type="radio" name="nvg_nutrition_method" value="2"
                            {{ $page_13[0]['nvg_nutrition_method'] == '2' ? 'checked' : '' }}>混合
                        <input type="radio" name="nvg_nutrition_method" value="3"
                            {{ $page_13[0]['nvg_nutrition_method'] == '3' ? 'checked' : '' }}>人工乳
                    </td>
                </tr>
                <tr>
                    <th colspan="2">施設名又は担当者名</th>
                    <td colspan="5">
                        <input type="text" name="nvg_factory_or_person"
                            value="{{ $page_13[0]['nvg_factory_or_person'] }}">
                    </td>
                </tr>
                <tr>
                    <th colspan="2">特記事項</th>
                    <td colspan="5">
                        <input type="text" name="notices" value="{{ $page_13[0]['notices'] }}">
                    </td>
                </tr>
            </table>
        </div>

        <label>※生まれた当日を０日として数えること。</label>

        {{-- ボタン --}}
        <div>
            <button type="submit" class="btn btn-primary">修正</button>
            <a href="{{ route('main.index', $user) }}">戻る</a>
        </div>

    </form>

</body>

</html>
