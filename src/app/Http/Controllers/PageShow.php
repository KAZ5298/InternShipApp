<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Page_00_cover;
use App\Models\Page_01;
use App\Models\Page_02;
use App\Models\Page_03;
use App\Models\Page_04;
use App\Models\Page_05;
use App\Models\Page_06;
use App\Models\Page_07;
use App\Models\Page_08;
use App\Models\Page_09_1;
use App\Models\Page_09_2;
use App\Models\Page_10;
use App\Models\Page_11_1;
use App\Models\Page_11_2;
use App\Models\Page_12_1;
use App\Models\Page_12_2;
use App\Models\Page_13;
use App\Models\Page_14;
use App\Models\Page_15;
use Carbon\Carbon;

class PageShow extends Controller
{
    public function page_cover_show(User $user)
    {
        $loginUser = auth()->user();

        if ((Page_00_cover::where('user_id_gurdian', $user->id)->exists())) {
            $page_00 = Page_00_cover::where('user_id_gurdian', $user->id)->first();

            return view('page_00_cover.show', compact('page_00', 'user'));
        } else {
            $message = '作成されていません';

            return view('main.index', compact('user', 'loginUser', 'message'));
        }
    }

    public function page_01_show(User $user)
    {
        $loginUser = auth()->user();

        if ((Page_01::where('user_id_gurdian', $user->id)->exists())) {
            $page_01s = Page_01::where('user_id_gurdian', $user->id)->get();

            $page_01s = $page_01s->map(function ($item, $key) {
                $now = date('Ymd');

                if (isset($item->mother_birthday)) {
                    $mother_birthday = str_replace("-", "", $item->mother_birthday);
                    $mother_age = floor(($now - $mother_birthday) / 10000);
                    $item['mother_age'] = $mother_age;
                } else {
                    $item['mother_age'] = null;
                }
                // 父（年齢）計算
                if (isset($item->father_birthday)) {
                    $father_birthday = str_replace("-", "", $item->father_birthday);
                    $father_age = floor(($now - $father_birthday) / 10000);
                    $item['father_age'] = $father_age;
                } else {
                    $item['father_age'] = null;
                }
                // 三人目（年齢）計算
                if (isset($item->another_birthday)) {
                    $another_birthday = str_replace("-", "", $item->another_birthday);
                    $another_age = floor(($now - $another_birthday) / 10000);
                    $item['another_age'] = $another_age;
                } else {
                    $item['another_age'] = null;
                }
                return $item;
            });

            return view('page_01.show', compact('page_01s', 'user'));
        } else {
            $message = '作成されていません';

            return view('main.index', compact('user', 'loginUser', 'message'));
        }
    }

    public function page_02_show(User $user)
    {
        $loginUser = auth()->user();

        if ((Page_02::where('user_id_gurdian', $user->id)->exists())) {
            $page_02s = Page_02::where('user_id_gurdian', $user->id)->get();

            $page_02s = $page_02s->map(function ($item, $key) {
                // BMI計算
                $height = $item->height / 100;
                $weight = $item->weight;
                $item['bmi'] = round($weight / $height / $height, 2);

                // 病歴を格納する
                $rec = [
                    [
                        'value' => $item->mh_high_blood_pressure,
                        'name' => '高血圧',
                    ],
                    [
                        'value' => $item->mh_kidney_disease,
                        'name' => '腎臓病',
                    ],
                    [
                        'value' => $item->mh_diabetes,
                        'name' => '糖尿病',
                    ],
                    [
                        'value' => $item->mh_hepatitis,
                        'name' => '肝炎',
                    ],
                    [
                        'value' => $item->mh_heart_disease,
                        'name' => '心臓病',
                    ],
                    [
                        'value' => $item->mh_thyroid_disease,
                        'name' => '甲状腺の病気',
                    ],
                    [
                        'value' => $item->mh_mental_illness,
                        'name' => '精神疾患（心の病気）',
                    ],
                    [
                        'value' => $item->mh_other_diseases,
                        'name' => 'その他病気（病名：' . $item->mh_other_diseases_name . '）',
                    ],
                ];

                for ($i = 0; $i < count($rec); $i++) {
                    if ($rec[$i]['value'] == '1') {
                        $rec_new[] = $rec[$i]['name'];
                    }
                }

                if (isset($rec_new)) {
                    $item['diseases_history'] = implode('，', $rec_new);
                } else {
                    $item['diseases_history'] = 'なし';
                }
                return $item;
            });

            return view('page_02.show', compact('page_02s', 'user'));
        } else {
            $message = '作成されていません';

            return view('main.index', compact('user', 'loginUser', 'message'));
        }
    }

    public function page_03_show(User $user)
    {
        $loginUser = auth()->user();

        if ((Page_03::where('user_id_gurdian', $user->id)->exists())) {
            $page_03s = Page_03::where('user_id_gurdian', $user->id)->get();

            $page_03s = $page_03s->map(function ($item, $key) {

                // 仕事をする時間計算
                $work_start = Carbon::parse($item['rp_work_start_time']);
                $work_end = Carbon::parse($item['rp_work_end_time']);
                $work_time = $work_end->diffInMinutes($work_start);
                $item['work_time_hours'] = floor($work_time / 60); // 時間

                $rec = [
                    [
                        'value' => $item['lt_child'],
                        'name' => '子ども（ ' . $item['lt_child_count'] . ' 人 ）',
                    ],
                    [
                        'value' => $item['lt_husband'],
                        'name' => '夫',
                    ],
                    [
                        'value' => $item['lt_husband_father'],
                        'name' => '夫の父',
                    ],
                    [
                        'value' => $item['lt_husband_mother'],
                        'name' => '夫の母',
                    ],
                    [
                        'value' => $item['lt_father'],
                        'name' => '実父',
                    ],
                    [
                        'value' => $item['lt_mother'],
                        'name' => '実母',
                    ],
                    [
                        'value' => $item['lt_other'],
                        'name' => 'その他（ ' . $item['lt_other_count'] . ' 人 ）',
                    ],
                ];

                for ($i = 0; $i < count($rec); $i++) {
                    if ($rec[$i]['value'] == '1') {
                        $rec_new[] = $rec[$i]['name'];
                    }
                }

                if (isset($rec_new)) {
                    $item['housemate'] = implode('，', $rec_new);
                } else {
                    $item['housemate'] = 'なし';
                }

                return $item;
            });

            return view('page_03.show', compact('page_03s', 'user'));
        } else {
            $message = '作成されていません';

            return view('main.index', compact('user', 'loginUser', 'message'));
        }
    }

    public function page_04_show(User $user)
    {
        $loginUser = auth()->user();

        if ((Page_04::where('user_id_gurdian', $user->id)->exists())) {

            $page_04s = Page_04::where('user_id_gurdian', $user->id)->get();
            $page_04s = $page_04s->map(function ($item, $key) {

                $rec = [
                    [
                        'value' => $item->am_private_car,
                        'name' => '自家用車',
                    ],
                    [
                        'value' => $item->am_taxi,
                        'name' => 'タクシー',
                    ],
                    [
                        'value' => $item->am_walking,
                        'name' => '徒歩',
                    ],
                    [
                        'value' => $item->am_other,
                        'name' => 'その他（ ' . $item->am_other_name . ' ）',
                    ],
                ];

                for ($i = 0; $i < count($rec); $i++) {
                    if ($rec[$i]['value'] == '1') {
                        $rec_new[] = $rec[$i]['name'];
                    }
                }

                if (isset($rec_new)) {
                    $item['access_method'] = implode('，', $rec_new);
                } else {
                    $item['access_method'] = 'なし';
                }

                return $item;
            });

            return view('page_04.show', compact('page_04s', 'user'));
        } else {
            $message = '作成されていません';

            return view('main.index', compact('user', 'loginUser', 'message'));
        }
    }

    public function page_05_show(User $user)
    {
        $loginUser = auth()->user();

        if ((Page_05::where('user_id_gurdian', $user->id)->exists())) {
            $page_05 = Page_05::where('user_id_gurdian', $user->id)->first();
            $page_05s = Page_05::where('user_id_gurdian', $user->id)->orderBy('consultation_date', 'asc')->get();

            $weight_before_pregnancy = $page_05->weight_before_pregnancy;

            return view('page_05.show', compact('page_05s', 'user', 'loginUser', 'weight_before_pregnancy'));
        } else {
            $message = '作成されていません';

            return view('main.index', compact('user', 'loginUser', 'message'));
        }
    }

    public function page_06_show(User $user)
    {
        $loginUser = auth()->user();

        if ((Page_06::where('user_id_gurdian', $user->id)->exists())) {
            $page_06s = Page_06::where('user_id_gurdian', $user->id)->get();

            $page_06s = $page_06s->map(function ($item, $key) {
                switch ($item['blood_type']) {
                    case ('1'):
                        $item['blood_type_name'] = 'Ａ';
                        break;
                    case ('2'):
                        $item['blood_type_name'] = 'Ｂ';
                        break;
                    case ('3'):
                        $item['blood_type_name'] = 'Ｏ';
                        break;
                    case ('4'):
                        $item['blood_type_name'] = 'ＡＢ';
                        break;
                    default:
                        $item['blood_type_name'] = '';
                        break;
                }

                switch ($item['blood_type_rh']) {
                    case ('1'):
                        $item['blood_type_rh_name'] = '－';
                        break;
                    case ('2'):
                        $item['blood_type_rh_name'] = '＋';
                        break;
                    default:
                        $item['blood_type_rh_name'] = '';
                        break;
                }

                switch ($item['hearing_inspection_right']) {
                    case ('1'):
                        $item['hearing_inspection_right_name'] = 'パス';
                        break;
                    case ('2'):
                        $item['hearing_inspection_right_name'] = 'リファー';
                        break;
                    default:
                        $item['hearing_inspection_right_name'] = '';
                        break;
                }

                switch ($item['hearing_inspection_left']) {
                    case ('1'):
                        $item['hearing_inspection_left_name'] = 'パス';
                        break;
                    case ('2'):
                        $item['hearing_inspection_left_name'] = 'リファー';
                        break;
                    default:
                        $item['hearing_inspection_left_name'] = '';
                        break;
                }

                return $item;
            });

            return view('page_06.show', compact('page_06s', 'user', 'loginUser'));
        } else {
            $message = '作成されていません';

            return view('main.index', compact('user', 'loginUser', 'message'));
        }
    }

    public function page_07_show(User $user)
    {
        $loginUser = auth()->user();

        if ((Page_07::where('user_id_gurdian', $user->id)->exists())) {
            $page_07 = Page_07::where('user_id_gurdian', $user->id)->first();

            return view('page_07.show', compact('page_07', 'user'));
        } else {
            $message = '作成されていません';

            return view('main.index', compact('user', 'loginUser', 'message'));
        }
    }

    public function page_08_show(User $user)
    {
        $loginUser = auth()->user();

        if ((Page_08::where('user_id_gurdian', $user->id)->exists())) {
            $page_08s = Page_08::where('user_id_gurdian', $user->id)->orderBy('attendance_date', 'asc')->get();

            return view('page_08.show', compact('page_08s', 'user'));
        } else {
            $message = '作成されていません';

            return view('main.index', compact('user', 'loginUser', 'message'));
        }
    }

    public function page_09_show(User $user)
    {
        $loginUser = auth()->user();

        if ((Page_09_1::where('user_id_gurdian', $user->id)->exists()) || (Page_09_2::where('user_id_gurdian', $user->id)->exists())) {
            $page_09_1 = Page_09_1::where('user_id_gurdian', $user->id)->first();
            $page_09_2s = Page_09_2::where('user_id_gurdian', $user->id)->orderBy('tc_first_examination_date', 'asc')->get();

            $page_09_2s = $page_09_2s->map(function ($item, $key) {
                for ($i = 1; $i <= 8; $i++) {
                    switch ($item['tc_upper_jaw_left' . $i]) {
                        case ('1'):
                            $item['tc_upper_jaw_left_icon' . $i] = '／';
                            break;
                        case ('2'):
                            $item['tc_upper_jaw_left_icon' . $i] = 'Ｃ';
                            break;
                        case ('3'):
                            $item['tc_upper_jaw_left_icon' . $i] = '◯';
                            break;
                        case ('4'):
                            $item['tc_upper_jaw_left_icon' . $i] = '△';
                            break;
                        default:
                            $item['tc_upper_jaw_left_icon' . $i] = '　';
                            break;
                    }

                    switch ($item['tc_lower_jaw_left' . $i]) {
                        case ('1'):
                            $item['tc_lower_jaw_left_icon' . $i] = '／';
                            break;
                        case ('2'):
                            $item['tc_lower_jaw_left_icon' . $i] = 'Ｃ';
                            break;
                        case ('3'):
                            $item['tc_lower_jaw_left_icon' . $i] = '◯';
                            break;
                        case ('4'):
                            $item['tc_lower_jaw_left_icon' . $i] = '△';
                            break;
                        default:
                            $item['tc_lower_jaw_left_icon' . $i] = '　';
                            break;
                    }

                    switch ($item['tc_upper_jaw_right' . $i]) {
                        case ('1'):
                            $item['tc_upper_jaw_right_icon' . $i] = '／';
                            break;
                        case ('2'):
                            $item['tc_upper_jaw_right_icon' . $i] = 'Ｃ';
                            break;
                        case ('3'):
                            $item['tc_upper_jaw_right_icon' . $i] = '◯';
                            break;
                        case ('4'):
                            $item['tc_upper_jaw_right_icon' . $i] = '△';
                            break;
                        default:
                            $item['tc_upper_jaw_right_icon' . $i] = '　';
                            break;
                    }

                    switch ($item['tc_lower_jaw_right' . $i]) {
                        case ('1'):
                            $item['tc_lower_jaw_right_icon' . $i] = '／';
                            break;
                        case ('2'):
                            $item['tc_lower_jaw_right_icon' . $i] = 'Ｃ';
                            break;
                        case ('3'):
                            $item['tc_lower_jaw_right_icon' . $i] = '◯';
                            break;
                        case ('4'):
                            $item['tc_lower_jaw_right_icon' . $i] = '△';
                            break;
                        default:
                            $item['tc_lower_jaw_right_icon' . $i] = '　';
                            break;
                    }
                }

                return $item;
            });

            return view('page_09.show', compact('page_09_1', 'page_09_2s', 'user'));
        } else {
            $message = '作成されていません';

            return view('main.index', compact('user', 'loginUser', 'message'));
        }
    }

    public function page_10_show(User $user)
    {
        $loginUser = auth()->user();

        if ((Page_10::where('user_id_gurdian', $user->id)->exists())) {
            $page_10s = Page_10::where('user_id_gurdian', $user->id)->get();

            $page_10s = $page_10s->map(function ($item, $key) {
                // 分娩時間・分計算
                $parturition_required_time_start = Carbon::parse($item['parturition_required_time_start']); // 開始時間
                $parturition_required_time_end = Carbon::parse($item['parturition_required_time_end']); // 終了時間

                // 終了時間 - 開始時間 を分で求める
                $parturition_required_times = $parturition_required_time_end->diffInMinutes($parturition_required_time_start);

                $item['parturition_required_hours'] = floor($parturition_required_times / 60); // 時間
                $item['parturition_required_minutes'] = floor($parturition_required_times % 60); // 分

                return $item;
            });

            return view('page_10.show', compact('page_10s', 'user'));
        } else {
            $message = '作成されていません';

            return view('main.index', compact('user', 'loginUser', 'message'));
        }
    }

    public function page_11_show(User $user)
    {
        $loginUser = auth()->user();

        if ((Page_11_1::where('user_id_gurdian', $user->id)->exists()) || (Page_11_2::where('user_id_gurdian', $user->id)->exists())) {
            $page_11_1s = Page_11_1::where('user_id_gurdian', $user->id)->get();
            $page_11_2s = Page_11_2::where('user_id_gurdian', $user->id)->get();

            $page_11_1s = $page_11_1s->map(function ($item, $key) {
                $page_00_rec = Page_00_cover::where('user_id_gurdian', $item['user_id_gurdian'])->first();
                $childBirthday = Carbon::parse($page_00_rec->child_birthday); // 誕生日

                if (isset($item['record_date'])) {
                    $record_date = Carbon::parse($item['record_date']);
                    $item['postpartum_days'] = $record_date->diffInDays($childBirthday);
                    $item['postpartum_months'] = $record_date->diffInMonths($childBirthday);
                } else {
                    $item['postpartum_days'] = null;
                    $item['postpartum_months'] = null;
                }
                return $item;
            });
            $page_11_2s = $page_11_2s->map(function ($item, $key) {
                $page_00_rec = Page_00_cover::where('user_id_gurdian', $item['user_id_gurdian'])->first();

                // 産後日計算
                $childBirthday = Carbon::parse($page_00_rec->child_birthday); // 誕生日
                $bathing_date = Carbon::parse($item->bathing_date); // 入浴
                $housework_date = Carbon::parse($item->housework_date); // 家事開始
                $work_date = Carbon::parse($item->work_date); // 労働開始

                if (isset($item->bathing_date)) { // 入浴（産後日）
                    $item['bathing_dob'] = $bathing_date->diffIndays($childBirthday);
                } else {
                    $item['bathing_dob'] = null;
                }

                if (isset($item->housework_date)) { // 家事開始（産後日）
                    $item['housework_dob'] = $housework_date->diffIndays($childBirthday);
                } else {
                    $item['housework_dob'] = null;
                }

                if (isset($item->work_date)) { // 労働開始（産後日）
                    $item['work_dob'] = $work_date->diffInDays($childBirthday);
                } else {
                    $item['work_dob'] = null;
                }

                return $item;
            });

            return view('page_11.show', compact('page_11_1s', 'page_11_2s', 'user'));
        } else {
            $message = '作成されていません';

            return view('main.index', compact('user', 'loginUser', 'message'));
        }
    }

    public function page_12_show(User $user)
    {
        $loginUser = auth()->user();

        if ((Page_12_1::where('user_id_gurdian', $user->id)->exists()) || (Page_12_2::where('user_id_gurdian', $user->id)->exists())) {
            $page_12_1s = Page_12_1::where('user_id_gurdian', $user->id)->get();
            $page_12_2s = Page_12_2::where('user_id_gurdian', $user->id)->get();

            return view('page_12.show', compact('page_12_1s', 'page_12_2s', 'user', 'loginUser'));
        } else {
            $message = '作成されていません';

            return view('main.index', compact('user', 'loginUser', 'message'));
        }
    }

    public function page_13_show(User $user)
    {
        $loginUser = auth()->user();

        if ((Page_13::where('user_id_gurdian', $user->id)->exists())) {
            $page_13s = Page_13::where('user_id_gurdian', $user->id)->get();

            $page_13s = $page_13s->map(function ($item, $key) {
                $page_00_rec = Page_00_cover::where('user_id_gurdian', $item['user_id_gurdian'])->first();

                // 日齢・生後日計算
                $childBirthday = Carbon::parse($page_00_rec->child_birthday); // 誕生日
                $enp_date1 = Carbon::parse($item['enp_age_in_days1']); // 早期日齢１
                $enp_date2 = Carbon::parse($item['enp_age_in_days2']); // 早期日齢２
                $lnp_date1 = Carbon::parse($item['lnp_age_in_days1']); // 後期日齢１
                $lnp_date2 = Carbon::parse($item['lnp_age_in_days2']); // 後期日齢２
                $nvg_date1 = Carbon::parse($item['nvg_age_in_days']); // 訪問日日齢
                $nvg_date2 = Carbon::parse($item['nvg_date']); // 生後日（訪問日）
                $lh_date = Carbon::parse($item['lh_date']); // 生後日（退院日）

                if (isset($item['enp_age_in_days1'])) { // 早期日齢１
                    $item['enp_days1'] = $enp_date1->diffIndays($childBirthday);
                } else {
                    $item['enp_days1'] = null;
                }

                if (isset($item['enp_age_in_days2'])) { // 早期日齢２
                    $item['enp_days2'] = $enp_date2->diffIndays($childBirthday);
                } else {
                    $item['enp_days2'] = null;
                }

                if (isset($item['lnp_age_in_days1'])) { // 後期日齢１
                    $item['lnp_days1'] = $lnp_date1->diffIndays($childBirthday);
                } else {
                    $item['lnp_days1'] = null;
                }

                if (isset($item['lnp_age_in_days2'])) { // 後期日齢２
                    $item['lnp_days2'] = $lnp_date2->diffIndays($childBirthday);
                } else {
                    $item['lnp_days2'] = null;
                }

                if (isset($item['nvg_age_in_days'])) { // 訪問日日齢
                    $item['nvg_days1'] = $nvg_date1->diffIndays($childBirthday);
                } else {
                    $item['nvg_days1'] = null;
                }

                if (isset($item['nvg_date'])) { // 訪問日日齢
                    $item['nvg_days2'] = $nvg_date2->diffIndays($childBirthday);
                } else {
                    $item['nvg_days2'] = null;
                }

                if (isset($item['lh_date'])) { // 生後日（退院日）
                    $item['lh_days'] = $lh_date->diffIndays($childBirthday);
                } else {
                    $item['lh_days'] = null;
                }

                return $item;
            });
            return view('page_13.show', compact('page_13s', 'user'));
        } else {
            $message = '作成されていません';

            return view('main.index', compact('user', 'loginUser', 'message'));
        }
    }

    public function page_14_show(User $user)
    {
        $loginUser = auth()->user();

        if ((Page_14::where('user_id_gurdian', $user->id)->exists())) {
            $page_00_rec = Page_00_cover::where('user_id_gurdian', $user->id)->first();
            $page_14 = Page_14::where('user_id_gurdian', $user->id)->first();

            // 生後１か月の年月日計算
            $childBirthday = Carbon::parse($page_00_rec->child_birthday);
            $became1Month = $childBirthday->addMonths(1)->format('Y年m月d日');

            return view('page_14.show', compact('page_14', 'user', 'became1Month'));
        } else {
            $message = '作成されていません';

            return view('main.index', compact('user', 'loginUser', 'message'));
        }
    }

    public function page_15_show(User $user)
    {
        $loginUser = auth()->user();

        if ((Page_15::where('user_id_gurdian', $user->id)->exists())) {
            $page_15s = Page_15::where('user_id_gurdian', $user->id)->get();

            $page_15s = $page_15s->map(function ($item, $key) {
                $page_00_rec = Page_00_cover::where('user_id_gurdian', $item['user_id_gurdian'])->first();

                // 実施日 - 子の誕生日 で月数と日数を計算
                $childBirthday = Carbon::parse($page_00_rec->child_birthday);
                $month1Date = Carbon::parse($item['month1_date']);
                $month2Date = Carbon::parse($item['month2_date']);
                $month3_4Date = Carbon::parse($item['month3_4_date']);

                $m1NumberOfDays = $month1Date->diffIndays($childBirthday); // １ヶ月
                $m2NumberOfDays = $month2Date->diffIndays($childBirthday); // ２ヶ月
                $m3_4NumberOfDays = $month3_4Date->diffIndays($childBirthday); // ３～４ヶ月

                if (isset($item['month1_date'])) {
                    $item['m1_number_of_months'] = floor($m1NumberOfDays / 30);
                    $item['m1_number_of_days'] = floor($m1NumberOfDays % 30);
                } else {
                    $item['m1_number_of_months'] = null;
                    $item['m1_number_of_days'] = null;
                }

                if (isset($item['month2_date'])) {
                    $item['m2_number_of_months'] = floor($m2NumberOfDays / 30);
                    $item['m2_number_of_days'] = floor($m2NumberOfDays % 30);
                } else {
                    $item['m2_number_of_months'] = null;
                    $item['m2_number_of_days'] = null;
                }

                if (isset($item['month3_4_date'])) {
                    $item['m3_4_number_of_months'] = floor($m3_4NumberOfDays / 30);
                    $item['m3_4_number_of_days'] = floor($m3_4NumberOfDays % 30);
                } else {
                    $item['m3_4_number_of_months'] = null;
                    $item['m3_4_number_of_days'] = null;
                }

                return $item;
            });

            return view('page_15.show', compact('page_15s', 'user'));
        } else {
            $message = '作成されていません';

            return view('main.index', compact('user', 'loginUser', 'message'));
        }
    }
}
