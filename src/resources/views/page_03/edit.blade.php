<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ページ３</title>
</head>

<body>
    <form method="POST" action="{{ route('page_03.update', [$page_03, $user]) }}">
        @csrf
        @method('patch')

        <div class="head">
            <label>＜このページは妊婦自身で入力してください。＞</label>
        </div>

        <div class="title">
            <h1>妊婦の職業と環境</h1>
        </div>

        <div class="container">
            <table border="1">
                <tr>
                    <th rowspan="7">
                        妊<br>娠<br>に<br>気<br>づ<br>い<br>た<br>と<br>き<br>の<br>状<br>況
                    </th>
                </tr>
                <tr>
                    <th>職業</th>
                    <td colspan="3">
                        <input name="rp_work" value="{{ $page_03->rp_work }}">
                    </td>
                </tr>
                <tr>
                    <th>仕事の内容と職場環境<span>※</span></th>
                    <td colspan="3">
                        <input name="rp_work_content_environment" value="{{ $page_03->rp_work_content_environment }}">
                    </td>
                </tr>
                <tr>
                    <th rowspan="2">仕事をする時間</th>
                    <td colspan="3">
                        開始：<input type="time" name="rp_work_start_time" value="{{ $page_03->rp_work_start_time }}">
                        <br>
                        終了：<input type="time" name="rp_work_end_time" value="{{ $page_03->rp_work_end_time }}">
                    </td>
                </tr>
                <tr>
                    <td colspan="3">
                        交代制など変則的な勤務（
                        <input type="hidden" name="rp_shift_system" value=""
                            {{ $page_03->rp_shift_system == '' ? 'checked' : '' }}>
                        <input type="radio" name="rp_shift_system" value="1"
                            {{ $page_03->rp_shift_system == '1' ? 'checked' : '' }}>あり
                        <input type="radio" name="rp_shift_system" value="2"
                            {{ $page_03->rp_shift_system == '2' ? 'checked' : '' }}>なし
                        ）
                    </td>
                </tr>
                <tr>
                    <th>通勤や仕事に利用する乗り物</th>
                    <td colspan="3">
                        <input name="rp_vehicle" value="{{ $page_03->rp_vehicle }}">
                    </td>
                </tr>
                <tr>
                    <th>通勤の時間</th>
                    <td>片道（<input name="rp_commuting_time" value="{{ $page_03->rp_commuting_time }}">）分</td>
                    <th>混雑の程度</th>
                    <td>
                        <input type="hidden" name="rp_congestion" value=""
                            {{ $page_03->rp_congestion == '' ? 'checked' : '' }}>
                        <input type="radio" name="rp_congestion" value="1"
                            {{ $page_03->rp_congestion == '1' ? 'checked' : '' }}>ひどい
                        <input type="radio" name="rp_congestion" value="2"
                            {{ $page_03->rp_congestion == '2' ? 'checked' : '' }}>普通
                    </td>
                </tr>
                <tr>
                    <th colspan="2" rowspan="2">妊娠してからの変更点</th>
                </tr>
                <tr>
                    <td colspan="3">
                        仕事を休んだ　（妊娠
                        <select name="cap_work_rest_pregnancy_weeks">
                            <option value=""
                                {{ $page_03->cap_work_rest_pregnancy_weeks == '' ? 'selected' : '' }}>
                            </option>
                            @for ($i = 1; $i <= 99; $i++)
                                <option value="{{ $i }}"
                                    {{ $page_03->cap_work_rest_pregnancy_weeks == $i ? 'selected' : '' }}>
                                    {{ $i }}
                                </option>
                            @endfor
                        </select>
                        週（第
                        <select name="cap_work_rest_pregnancy_months">
                            <option value=""
                                {{ $page_03->cap_work_rest_pregnancy_months == '' ? 'selected' : '' }}>
                            </option>
                            @for ($i = 1; $i <= 12; $i++)
                                <option value="{{ $i }}"
                                    {{ $page_03->cap_work_rest_pregnancy_months == $i ? 'selected' : '' }}>
                                    {{ $i }}
                                </option>
                            @endfor
                        </select>
                        月）のとき）
                        <br>
                        仕事を変えた　（妊娠
                        <select name="cap_work_change_pregnancy_weeks">
                            <option value=""
                                {{ $page_03->cap_work_change_pregnancy_weeks == '' ? 'selected' : '' }}>
                            </option>
                            @for ($i = 1; $i <= 99; $i++)
                                <option value="{{ $i }}"
                                    {{ $page_03->cap_work_change_pregnancy_weeks == $i ? 'selected' : '' }}>
                                    {{ $i }}
                                </option>
                            @endfor
                        </select>
                        週（第
                        <select name="cap_work_change_pregnancy_months">
                            <option value=""
                                {{ $page_03->cap_work_change_pregnancy_months == '' ? 'selected' : '' }}>
                            </option>
                            @for ($i = 1; $i <= 12; $i++)
                                <option value="{{ $i }}"
                                    {{ $page_03->cap_work_change_pregnancy_months == $i ? 'selected' : '' }}>
                                    {{ $i }}
                                </option>
                            @endfor
                        </select>
                        月）のとき）
                        <br>
                        仕事をやめた　（妊娠
                        <select name="cap_work_end_pregnancy_weeks">
                            <option value=""
                                {{ $page_03->cap_work_end_pregnancy_weeks == '' ? 'selected' : '' }}>
                            </option>
                            @for ($i = 1; $i <= 99; $i++)
                                <option value="{{ $i }}"
                                    {{ $page_03->cap_work_end_pregnancy_weeks == $i ? 'selected' : '' }}>
                                    {{ $i }}
                                </option>
                            @endfor
                        </select>
                        週（第
                        <select name="cap_work_end_pregnancy_months">
                            <option value=""
                                {{ $page_03->cap_work_end_pregnancy_months == '' ? 'selected' : '' }}>
                            </option>
                            @for ($i = 1; $i <= 12; $i++)
                                <option value="{{ $i }}"
                                    {{ $page_03->cap_work_end_pregnancy_months == $i ? 'selected' : '' }}>
                                    {{ $i }}
                                </option>
                            @endfor
                        </select>
                        月）のとき）
                        <br>
                        その他（<input name="cap_other" value="{{ $page_03->cap_other }}">）
                    </td>
                </tr>
                <tr>
                    <th colspan="2">産前休業</th>
                    <td colspan="3">
                        <input type="date" name="prenatal_leave_start" value="{{ $page_03->prenatal_leave_start }}">
                        から
                        <input type="date" name="prenatal_leave_end" value="{{ $page_03->prenatal_leave_end }}"> まで
                    </td>
                </tr>
                <tr>
                    <th colspan="2">産後休業</th>
                    <td colspan="3">
                        <input type="date" name="postpartum_leave_start"
                            value="{{ $page_03->postpartum_leave_start }}"> から
                        <input type="date" name="postpartum_leave_end" value="{{ $page_03->postpartum_leave_end }}">
                        まで
                    </td>
                </tr>
                <tr>
                    <th rowspan="2">育児休業</th>
                    <th>母親</th>
                    <td colspan="3">
                        <input type="date" name="cl_mother_start1" value="{{ $page_03->cl_mother_start1 }}"> から
                        <input type="date" name="cl_mother_end1" value="{{ $page_03->cl_mother_end1 }}"> まで
                        <br>
                        <input type="date" name="cl_mother_start2" value="{{ $page_03->cl_mother_start2 }}"> から
                        <input type="date" name="cl_mother_end2" value="{{ $page_03->cl_mother_end2 }}"> まで
                    </td>
                </tr>
                <tr>
                    <th>父親</th>
                    <td colspan="3">
                        <input type="date" name="cl_father_start1" value="{{ $page_03->cl_father_start1 }}"> から
                        <input type="date" name="cl_father_end1" value="{{ $page_03->cl_father_end1 }}"> まで
                        <br>
                        <input type="date" name="cl_father_start2" value="{{ $page_03->cl_father_start2 }}"> から
                        <input type="date" name="cl_father_end2" value="{{ $page_03->cl_father_end2 }}"> まで
                        <br>
                        <input type="date" name="cl_father_start3" value="{{ $page_03->cl_father_start3 }}"> から
                        <input type="date" name="cl_father_end3" value="{{ $page_03->cl_father_end3 }}"> まで
                    </td>
                </tr>
                <tr>
                    <th colspan="2">住居の種類</th>
                    <td colspan="3">
                        <input type="hidden" name="tor_select" value=""
                            {{ $page_03->tor_select == '' ? 'checked' : '' }}>
                        <input type="radio" name="tor_select" value="1"
                            {{ $page_03->tor_select == '1' ? 'checked' : '' }}>一戸建て（
                        <select name="tor_detached_house">
                            <option value="" {{ $page_03->tor_detached_house == '' ? 'selected' : '' }}>
                            </option>
                            @for ($i = 1; $i <= 99; $i++)
                                <option value="{{ $i }}"
                                    {{ $page_03->tor_detached_house == $i ? 'selected' : '' }}>{{ $i }}
                                </option>
                            @endfor
                        </select> 階建）
                        <br>
                        <input type="radio" name="tor_select" value="2"
                            {{ $page_03->tor_select == '2' ? 'checked' : '' }}>集合住宅（
                        <select name="tor_housing_complex">
                            <option value="" {{ $page_03->tor_housing_complex == '' ? 'selected' : '' }}>
                            </option>
                            @for ($i = 1; $i <= 99; $i++)
                                <option value="{{ $i }}"
                                    {{ $page_03->tor_housing_complex == $i ? 'selected' : '' }}>{{ $i }}
                                </option>
                            @endfor
                        </select> 階建
                        <select name="tor_housing_complex_count">
                            <option value="" {{ $page_03->tor_housing_complex_count == '' ? 'selected' : '' }}>
                            </option>
                            @for ($i = 1; $i <= 99; $i++)
                                <option value="{{ $i }}"
                                    {{ $page_03->tor_housing_complex_count == $i ? 'selected' : '' }}>
                                    {{ $i }}
                                </option>
                            @endfor
                        </select> 階・エレベーター：
                        <input type="hidden" name="tor_elevator" value=""
                            {{ $page_03->tor_elevator == '' ? 'checked' : '' }}>
                        <input type="radio" name="tor_elevator" value="1"
                            {{ $page_03->tor_elevator == '1' ? 'checked' : '' }}>有
                        <input type="radio" name="tor_elevator" value="2"
                            {{ $page_03->tor_elevator == '2' ? 'checked' : '' }}>無
                        ）
                        <br>
                        <input type="radio" name="tor_select" value="3"
                            {{ $page_03->tor_select == '3' ? 'checked' : '' }}>その他（<input name="tor_other"
                            value="{{ $page_03->tor_other }}">）
                    </td>
                </tr>
                <tr>
                    <th colspan="2">騒音</th>
                    <td>
                        <input type="hidden" name="tor_noise" value=""
                            {{ $page_03->tor_noise == '' ? 'checked' : '' }}>
                        <input type="radio" name="tor_noise" value="1"
                            {{ $page_03->tor_noise == '1' ? 'checked' : '' }}>静
                        <input type="radio" name="tor_noise" value="2"
                            {{ $page_03->tor_noise == '2' ? 'checked' : '' }}>普通
                        <input type="radio" name="tor_noise" value="3"
                            {{ $page_03->tor_noise == '3' ? 'checked' : '' }}>騒
                    </td>
                    <th>日当たり</th>
                    <td>
                        <input type="hidden" name="tor_sunshine" value=""
                            {{ $page_03->tor_sunshine == '' ? 'checked' : '' }}>
                        <input type="radio" name="tor_sunshine" value="1"
                            {{ $page_03->tor_sunshine == '1' ? 'checked' : '' }}>良
                        <input type="radio" name="tor_sunshine" value="2"
                            {{ $page_03->tor_sunshine == '2' ? 'checked' : '' }}>普通
                        <input type="radio" name="tor_sunshine" value="3"
                            {{ $page_03->tor_sunshine == '3' ? 'checked' : '' }}>悪
                    </td>
                </tr>
                <tr>
                    <th colspan="2">同居</th>
                    <td colspan="3">
                        <input type="hidden" name="lt_child" value="0">
                        <input type="checkbox" name="lt_child" value="1"
                            {{ $page_03->lt_child == '1' ? 'checked' : '' }}>子ども（
                        <select name="lt_child_count">
                            <option value="" {{ $page_03->lt_child_count == '' ? 'selected' : '' }}></option>
                            @for ($i = 1; $i <= 99; $i++)
                                <option value="{{ $i }}"
                                    {{ $page_03->lt_child_count == $i ? 'selected' : '' }}>{{ $i }}
                                </option>
                            @endfor
                        </select>
                        人）
                        <input type="hidden" name="lt_husband" value="0">
                        <input type="checkbox" name="lt_husband" value="1"
                            {{ $page_03->lt_husband == '1' ? 'checked' : '' }}>夫
                        <input type="hidden" name="lt_husband_father" value="0">
                        <input type="checkbox" name="lt_husband_father" value="1"
                            {{ $page_03->lt_husband_father == '1' ? 'checked' : '' }}>夫の父
                        <input type="hidden" name="lt_husband_mother" value="0">
                        <input type="checkbox" name="lt_husband_mother" value="1"
                            {{ $page_03->lt_husband_mother == '1' ? 'checked' : '' }}>夫の母
                        <input type="hidden" name="lt_father" value="0">
                        <input type="checkbox" name="lt_father" value="1"
                            {{ $page_03->lt_father == '1' ? 'checked' : '' }}>実父
                        <input type="hidden" name="lt_mother" value="0">
                        <input type="checkbox" name="lt_mother" value="1"
                            {{ $page_03->lt_mother == '1' ? 'checked' : '' }}>実母
                        <input type="hidden" name="lt_other" value="0">
                        <input type="checkbox" name="lt_other" value="1"
                            {{ $page_03->lt_other == '1' ? 'checked' : '' }}>その他（
                        <select name="lt_other_count">
                            <option value="" {{ $page_03->lt_other_count == '' ? 'selected' : '' }}></option>
                            @for ($i = 1; $i <= 99; $i++)
                                <option value="{{ $i }}"
                                    {{ $page_03->lt_other_count == $i ? 'selected' : '' }}>{{ $i }}
                                </option>
                            @endfor
                        </select>
                        人）
                    </td>
                </tr>
            </table>
        </div>

        <label>※立ち作業など負担の大きい作業が多い、温湿度が厳しい、たばこの煙がひどい、</label>
        <br>
        <label>　振動が多い、ストレスが多い、休憩がとりにくい、時間外労働が多いなどの特記事項も記入しましょう。</label>

        {{-- ボタン --}}
        <div>
            <button type="submit" class="btn btn-primary">修正</button>
            <a href="{{ route('main.index', $user) }}">戻る</a>
        </div>

    </form>

</body>

</html>
