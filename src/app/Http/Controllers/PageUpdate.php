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

class PageUpdate extends Controller
{
    public function page_cover_update(Request $request, Page_00_cover $page_00, User $user)
    {
        $loginUser = auth()->user();

        $page_00->parent_fullname1 = $request->parent_fullname1;
        $page_00->parent_fullname_huri1 = $request->parent_fullname_huri1;
        $page_00->parent_fullname2 = $request->parent_fullname2;
        $page_00->parent_fullname_huri2 = $request->parent_fullname_huri2;
        $page_00->child_fullname = $request->child_fullname;
        $page_00->child_fullname_huri = $request->child_fullname_huri;
        $page_00->child_count = $request->child_count;
        $page_00->child_birthday = $request->child_birthday;
        $page_00->child_gender = $request->child_gender;

        $page_00->save();

        $message = '更新しました';

        return view('main.index', compact('user', 'loginUser', 'message'));
    }

    public function page_01_update(Request $request, Page_01 $page_01, User $user)
    {
        $loginUser = auth()->user();

        if ($loginUser->role == '1') {
            $page_01->update($request->only([
                'mother_fullname',
                'mother_fullname_huri',
                'mother_birthday',
                'mother_age',
                'mother_work',
                'father_fullname',
                'father_fullname_huri',
                'father_birthday',
                'father_age',
                'father_work',
                'another_relationship',
                'another_fullname',
                'another_fullname_huri',
                'another_birthday',
                'another_age',
                'another_work',
                'address1',
                'tel1',
                'address2',
                'tel2',
                'address3',
                'tel3',
            ]));
        } else {
            $page_01->update($request->only([
                'brc_child_fullname',
                'brc_child_gender',
                'brc_child_birth_location',
                'brc_child_birthday',
                'brc_date',
                'brc_mayor_fullname',
            ]));
        }

        $message = '更新しました';

        return view('main.index', compact('user', 'loginUser', 'message'));
    }

    public function page_02_update(Request $request, Page_02 $page_02, User $user)
    {
        $loginUser = auth()->user();

        $page_02->height = $request->height;
        $page_02->weight = $request->weight;
        $page_02->mh_high_blood_pressure = $request->mh_high_blood_pressure;
        $page_02->mh_kidney_disease = $request->mh_kidney_disease;
        $page_02->mh_diabetes = $request->mh_diabetes;
        $page_02->mh_hepatitis = $request->mh_hepatitis;
        $page_02->mh_heart_disease = $request->mh_heart_disease;
        $page_02->mh_thyroid_disease = $request->mh_thyroid_disease;
        $page_02->mh_mental_illness = $request->mh_mental_illness;
        $page_02->mh_other_diseases = $request->mh_other_diseases;
        if ($page_02->mh_other_diseases == '0') {
            $page_02->mh_other_diseases_name = null;
        } else {
            $page_02->mh_other_diseases_name = $request->mh_other_diseases_name;
        }
        $page_02->rubella = $request->rubella;
        $page_02->measles = $request->measles;
        $page_02->chickenpox = $request->chickenpox;
        $page_02->surgery_history_select = $request->surgery_history_select;
        if ($page_02->surgery_history_select == '1') {
            $page_02->surgery_history_disease = null;
        } else {
            $page_02->surgery_history_disease = $request->surgery_history_disease;
        }
        $page_02->medicine = $request->medicine;
        $page_02->allergy = $request->allergy;
        $page_02->stress = $request->stress;
        $page_02->pregnant_anxiety = $request->pregnant_anxiety;
        $page_02->other_anxiety = $request->other_anxiety;
        $page_02->tabacco_select = $request->tabacco_select;
        if ($page_02->tabacco_select == '1') {
            $page_02->tabacco_no_count = $request->tabacco_no_count;
            $page_02->tabacco_yes_count = null;
        } elseif ($page_02->tabacco_select == '2') {
            $page_02->tabacco_no_count = null;
            $page_02->tabacco_yes_count = $request->tabacco_yes_count;
        }
        $page_02->cohabitant_tabacco_select = $request->cohabitant_tabacco_select;
        if ($page_02->cohabitant_tabacco_select == '1') {
            $page_02->cohabitant_tabacco_count = null;
        } else {
            $page_02->cohabitant_tabacco_count = $request->cohabitant_tabacco_count;
        }
        $page_02->alcohol_select = $request->alcohol_select;
        if ($page_02->alcohol_select == '1') {
            $page_02->alcohol_no_count = $request->alcohol_no_count;
            $page_02->alcohol_yes_count = null;
        } elseif ($page_02->alcohol_select == '2') {
            $page_02->alcohol_no_count = null;
            $page_02->alcohol_yes_count = $request->alcohol_yes_count;
        }
        $page_02->partner_condition_select = $request->partner_condition_select;
        if ($page_02->partner_condition_select == '1') {
            $page_02->partner_condition_disease = null;
        } else {
            $page_02->partner_condition_disease = $request->partner_condition_disease;
        }
        $page_02->pch_child_birthday1 = $request->pch_child_birthday1;
        $page_02->pch_pregnancy_period1 = $request->pch_pregnancy_period1;
        $page_02->pch_birth_method1 = $request->pch_birth_method1;
        $page_02->pch_child_weight1 = $request->pch_child_weight1;
        $page_02->pch_child_gender1 = $request->pch_child_gender1;
        $page_02->pch_child_condition1 = $request->pch_child_condition1;
        $page_02->pch_child_birthday2 = $request->pch_child_birthday2;
        $page_02->pch_pregnancy_period2 = $request->pch_pregnancy_period2;
        $page_02->pch_birth_method2 = $request->pch_birth_method2;
        $page_02->pch_child_weight2 = $request->pch_child_weight2;
        $page_02->pch_child_gender2 = $request->pch_child_gender2;
        $page_02->pch_child_condition2 = $request->pch_child_condition2;
        $page_02->pch_child_birthday3 = $request->pch_child_birthday3;
        $page_02->pch_pregnancy_period3 = $request->pch_pregnancy_period3;
        $page_02->pch_birth_method3 = $request->pch_birth_method3;
        $page_02->pch_child_weight3 = $request->pch_child_weight3;
        $page_02->pch_child_gender3 = $request->pch_child_gender3;
        $page_02->pch_child_condition3 = $request->pch_child_condition3;

        $page_02->save();

        $message = '更新しました';

        return view('main.index', compact('user', 'loginUser', 'message'));
    }

    public function page_03_update(Request $request, Page_03 $page_03, User $user)
    {
        $loginUser = auth()->user();

        $page_03->rp_work = $request->rp_work;
        $page_03->rp_work_content_environment = $request->rp_work_content_environment;
        $page_03->rp_work_start_time = $request->rp_work_start_time;
        $page_03->rp_work_end_time = $request->rp_work_end_time;
        $page_03->rp_shift_system = $request->rp_shift_system;
        $page_03->rp_vehicle = $request->rp_vehicle;
        $page_03->rp_commuting_time = $request->rp_commuting_time;
        $page_03->rp_congestion = $request->rp_congestion;
        $page_03->cap_work_rest_pregnancy_weeks = $request->cap_work_rest_pregnancy_weeks;
        $page_03->cap_work_rest_pregnancy_months = $request->cap_work_rest_pregnancy_months;
        $page_03->cap_work_change_pregnancy_weeks = $request->cap_work_change_pregnancy_weeks;
        $page_03->cap_work_change_pregnancy_months = $request->cap_work_change_pregnancy_months;
        $page_03->cap_work_end_pregnancy_weeks = $request->cap_work_end_pregnancy_weeks;
        $page_03->cap_work_end_pregnancy_months = $request->cap_work_end_pregnancy_months;
        $page_03->cap_other = $request->cap_other;
        $page_03->prenatal_leave_start = $request->prenatal_leave_start;
        $page_03->prenatal_leave_end = $request->prenatal_leave_end;
        $page_03->postpartum_leave_start = $request->postpartum_leave_start;
        $page_03->postpartum_leave_end = $request->postpartum_leave_end;
        $page_03->cl_mother_start1 = $request->cl_mother_start1;
        $page_03->cl_mother_end1 = $request->cl_mother_end1;
        $page_03->cl_mother_start2 = $request->cl_mother_start2;
        $page_03->cl_mother_end2 = $request->cl_mother_end2;
        $page_03->cl_father_start1 = $request->cl_father_start1;
        $page_03->cl_father_end1 = $request->cl_father_end1;
        $page_03->cl_father_start2 = $request->cl_father_start2;
        $page_03->cl_father_end2 = $request->cl_father_end2;
        $page_03->cl_father_start3 = $request->cl_father_start3;
        $page_03->cl_father_end3 = $request->cl_father_end3;
        $page_03->tor_select = $request->tor_select;
        if ($page_03->tor_select == '1') {
            $page_03->tor_detached_house = $request->tor_detached_house;
            $page_03->tor_housing_complex = null;
            $page_03->tor_housing_complex_count = null;
            $page_03->tor_elevator = null;
            $page_03->tor_other = null;
        } elseif ($page_03->tor_select == '2') {
            $page_03->tor_detached_house = null;
            $page_03->tor_housing_complex = $request->tor_housing_complex;
            $page_03->tor_housing_complex_count = $request->tor_housing_complex_count;
            $page_03->tor_elevator = $request->tor_elevator;
            $page_03->tor_other = null;
        } elseif ($page_03->tor_select == '3') {
            $page_03->tor_detached_house = null;
            $page_03->tor_housing_complex = null;
            $page_03->tor_housing_complex_count = null;
            $page_03->tor_elevator = null;
            $page_03->tor_other = $request->tor_other;
        }
        $page_03->tor_noise = $request->tor_noise;
        $page_03->tor_sunshine = $request->tor_sunshine;
        $page_03->lt_child = $request->lt_child;
        if ($page_03->lt_child == '0') {
            $page_03->lt_child_count = null;
        } else {
            $page_03->lt_child_count = $request->lt_child_count;
        }
        $page_03->lt_husband = $request->lt_husband;
        $page_03->lt_husband_father = $request->lt_husband_father;
        $page_03->lt_husband_mother = $request->lt_husband_mother;
        $page_03->lt_father = $request->lt_father;
        $page_03->lt_mother = $request->lt_mother;
        $page_03->lt_other = $request->lt_other;
        if ($page_03->lt_other == '0') {
            $page_03->lt_other_count = null;
        } else {
            $page_03->lt_other_count = $request->lt_other_count;
        }

        $page_03->save();

        $message = '更新しました';

        return view('main.index', compact('user', 'loginUser', 'message'));
    }

    public function page_04_update(Request $request, Page_04 $page_04, User $user)
    {
        $loginUser = auth()->user();

        $page_04->month3_start = $request->month3_start;
        $page_04->month3_end = $request->month3_end;
        $page_04->month3_record = $request->month3_record;
        $page_04->month4_start = $request->month4_start;
        $page_04->month4_end = $request->month4_end;
        $page_04->month4_record = $request->month4_record;
        $page_04->last_menstrual_date = $request->last_menstrual_date;
        $page_04->first_consultation_date = $request->first_consultation_date;
        $page_04->quickening_date = $request->quickening_date;
        $page_04->parturition_date = $request->parturition_date;
        $page_04->month5_start = $request->month5_start;
        $page_04->month5_end = $request->month5_end;
        $page_04->month5_record = $request->month5_record;
        $page_04->month6_start = $request->month6_start;
        $page_04->month6_end = $request->month6_end;
        $page_04->month6_record = $request->month6_record;
        $page_04->month7_start = $request->month7_start;
        $page_04->month7_end = $request->month7_end;
        $page_04->month7_record = $request->month7_record;
        $page_04->month8_start = $request->month8_start;
        $page_04->month8_end = $request->month8_end;
        $page_04->month8_record = $request->month8_record;
        $page_04->childbirth_address = $request->childbirth_address;
        $page_04->childbirth_tel = $request->childbirth_tel;
        $page_04->emergency_contact_fullname1 = $request->emergency_contact_fullname1;
        $page_04->emergency_contact_fullname_huri1 = $request->emergency_contact_fullname_huri1;
        $page_04->emergency_contact_tel1 = $request->emergency_contact_tel1;
        $page_04->emergency_contact_fullname2 = $request->emergency_contact_fullname2;
        $page_04->emergency_contact_fullname_huri2 = $request->emergency_contact_fullname_huri2;
        $page_04->emergency_contact_tel2 = $request->emergency_contact_tel2;
        $page_04->am_private_car = $request->am_private_car;
        $page_04->am_taxi = $request->am_taxi;
        $page_04->am_walking = $request->am_walking;
        $page_04->am_other = $request->am_other;
        if ($page_04->am_other == '0') {
            $page_04->am_other_name = null;
        } else {
            $page_04->am_other_name = $request->am_other_name;
        }
        $page_04->am_time_hours = $request->am_time_hours;
        $page_04->am_time_minutes = $request->am_time_minutes;
        $page_04->helper = $request->helper;
        $page_04->month9_start = $request->month9_start;
        $page_04->month9_end = $request->month9_end;
        $page_04->month9_record = $request->month9_record;
        $page_04->month10_start = $request->month10_start;
        $page_04->month10_end = $request->month10_end;
        $page_04->month10_record = $request->month10_record;
        $page_04->week40 = $request->week40;
        $page_04->birthday = $request->birthday;
        $page_04->welcoming_feeling = $request->welcoming_feeling;

        $page_04->save();

        $message = '更新しました';

        return view('main.index', compact('user', 'loginUser', 'message'));
    }

    public function page_05_update(Request $request, Page_05 $page_05, User $user)
    {
        $loginUser = auth()->user();

        $page_05->weight_before_pregnancy = $request->weight_before_pregnancy;

        $page_05->consultation_date = $request->consultation_date;
        $page_05->pregnancy_week_count = $request->pregnancy_week_count;
        $page_05->pregnancy_day_count = $request->pregnancy_day_count;
        $page_05->uterine_fundal_length = $request->uterine_fundal_length;
        $page_05->waist = $request->waist;
        $page_05->weight_before_pregnancy = $request->weight_before_pregnancy;
        $page_05->weight_after_pregnancy = $request->weight_after_pregnancy;
        $page_05->blood_pressure_max = $request->blood_pressure_max;
        $page_05->blood_pressure_min = $request->blood_pressure_min;
        $page_05->edema = $request->edema;
        $page_05->urine_protein = $request->urine_protein;
        $page_05->urine_sugar = $request->urine_sugar;
        $page_05->other_tests = $request->other_tests;
        $page_05->notices = $request->notices;
        $page_05->factory_or_person = $request->factory_or_person;

        $page_05->save();

        $page_05 = Page_05::where('user_id_gurdian', $user->id)->first();
        $page_05s = Page_05::where('user_id_gurdian', $user->id)->get();

        $weight_before_pregnancy = $page_05->weight_before_pregnancy;

        $message = '更新しました';

        return view('page_05.show', compact('page_05s', 'user', 'loginUser', 'weight_before_pregnancy', 'message'));
    }

    public function page_06_update(Request $request, Page_06 $page_06, User $user)
    {
        $loginUser = auth()->user();

        // 検査項目名
        $page_06->inspection_item_name = $request->inspection_item_name;
        if ($request->inspection_item_name == 'E') {
            $page_06->inspection_item_name_other = $request->inspection_item_name_other;
        }

        $page_06->inspection_item_date = $request->inspection_item_date;

        // 検査項目備考
        if ($request->inspection_item_name == '1') {
            $page_06->blood_type = $request->blood_type;
            $page_06->blood_type_rh = $request->blood_type_rh;
            $page_06->hearing_inspection_right = null;
            $page_06->hearing_inspection_left = null;
            $page_06->inspection_item_remarks = null;
        } elseif ($request->inspection_item_name == '2' || $request->inspection_item_name == '3') {
            $page_06->blood_type = null;
            $page_06->blood_type_rh = null;
            $page_06->hearing_inspection_right = $request->hearing_inspection_right;
            $page_06->hearing_inspection_left = $request->hearing_inspection_left;
            $page_06->inspection_item_remarks = null;
        } else {
            $page_06->blood_type = null;
            $page_06->blood_type_rh = null;
            $page_06->hearing_inspection_right = null;
            $page_06->hearing_inspection_left = null;
            $page_06->inspection_item_remarks = $request->other_inspection_item_remarks;
        }

        $page_06->spare = $request->spare;

        $page_06->save();

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

        $message = '更新しました';

        return view('page_06.show', compact('page_06s', 'user', 'loginUser', 'message'));
    }

    public function page_07_update(Request $request, Page_07 $page_07, User $user)
    {
        $loginUser = auth()->user();

        $page_07->father_or_other_person_record = $request->father_or_other_person_record;

        $page_07->save();

        $message = '更新しました';

        return view('main.index', compact('user', 'loginUser', 'message'));
    }

    public function page_08_update(Request $request, Page_08 $page_08, User $user)
    {
        $loginUser = auth()->user();

        $page_08->attendance_date = $request->attendance_date;
        $page_08->subject = $request->subject;
        $page_08->remarks = $request->remarks;
        $page_08->spare = $request->spare;

        $page_08->save();

        $message = '更新しました';

        return view('main.index', compact('user', 'loginUser', 'message'));
    }

    public function page_09_update1(Request $request, Page_09_1 $page_09_1, User $user)
    {
        $loginUser = auth()->user();

        $page_09_1->ei_first_examination_date = $request->ei_first_examination_date;
        $page_09_1->ei_pregnancy_weeks = $request->ei_pregnancy_weeks;
        $page_09_1->ei_tooth_decay_select = $request->ei_tooth_decay_select;
        if ($page_09_1->ei_tooth_decay_select == '1') {
            $page_09_1->ei_tooth_decay_count = null;
        } else {
            $page_09_1->ei_tooth_decay_count = $request->ei_tooth_decay_count;
        }
        $page_09_1->ei_tartar = $request->ei_tartar;
        $page_09_1->ei_gums_inflammation = $request->ei_gums_inflammation;
        $page_09_1->ei_notices = $request->ei_notices;
        $page_09_1->ei_factory_or_person = $request->ei_factory_or_person;

        $page_09_1->save();

        $message = '更新しました';

        return view('main.index', compact('user', 'loginUser', 'message'));
    }

    public function page_09_update2(Request $request, Page_09_2 $page_09_2, User $user)
    {
        $loginUser = auth()->user();

        $page_09_2->tc_upper_jaw_left1 = $request->tc_upper_jaw_left1;
        $page_09_2->tc_upper_jaw_left2 = $request->tc_upper_jaw_left2;
        $page_09_2->tc_upper_jaw_left3 = $request->tc_upper_jaw_left3;
        $page_09_2->tc_upper_jaw_left4 = $request->tc_upper_jaw_left4;
        $page_09_2->tc_upper_jaw_left5 = $request->tc_upper_jaw_left5;
        $page_09_2->tc_upper_jaw_left6 = $request->tc_upper_jaw_left6;
        $page_09_2->tc_upper_jaw_left7 = $request->tc_upper_jaw_left7;
        $page_09_2->tc_upper_jaw_left8 = $request->tc_upper_jaw_left8;
        $page_09_2->tc_lower_jaw_left1 = $request->tc_lower_jaw_left1;
        $page_09_2->tc_lower_jaw_left2 = $request->tc_lower_jaw_left2;
        $page_09_2->tc_lower_jaw_left3 = $request->tc_lower_jaw_left3;
        $page_09_2->tc_lower_jaw_left4 = $request->tc_lower_jaw_left4;
        $page_09_2->tc_lower_jaw_left5 = $request->tc_lower_jaw_left5;
        $page_09_2->tc_lower_jaw_left6 = $request->tc_lower_jaw_left6;
        $page_09_2->tc_lower_jaw_left7 = $request->tc_lower_jaw_left7;
        $page_09_2->tc_lower_jaw_left8 = $request->tc_lower_jaw_left8;
        $page_09_2->tc_upper_jaw_right1 = $request->tc_upper_jaw_right1;
        $page_09_2->tc_upper_jaw_right2 = $request->tc_upper_jaw_right2;
        $page_09_2->tc_upper_jaw_right3 = $request->tc_upper_jaw_right3;
        $page_09_2->tc_upper_jaw_right4 = $request->tc_upper_jaw_right4;
        $page_09_2->tc_upper_jaw_right5 = $request->tc_upper_jaw_right5;
        $page_09_2->tc_upper_jaw_right6 = $request->tc_upper_jaw_right6;
        $page_09_2->tc_upper_jaw_right7 = $request->tc_upper_jaw_right7;
        $page_09_2->tc_upper_jaw_right8 = $request->tc_upper_jaw_right8;
        $page_09_2->tc_lower_jaw_right1 = $request->tc_lower_jaw_right1;
        $page_09_2->tc_lower_jaw_right2 = $request->tc_lower_jaw_right2;
        $page_09_2->tc_lower_jaw_right3 = $request->tc_lower_jaw_right3;
        $page_09_2->tc_lower_jaw_right4 = $request->tc_lower_jaw_right4;
        $page_09_2->tc_lower_jaw_right5 = $request->tc_lower_jaw_right5;
        $page_09_2->tc_lower_jaw_right6 = $request->tc_lower_jaw_right6;
        $page_09_2->tc_lower_jaw_right7 = $request->tc_lower_jaw_right7;
        $page_09_2->tc_lower_jaw_right8 = $request->tc_lower_jaw_right8;
        $page_09_2->tc_pregnancy_weeks = $request->tc_pregnancy_weeks;
        $page_09_2->tc_tartar = $request->tc_tartar;
        $page_09_2->tc_gums_inflammation = $request->tc_gums_inflammation;
        $page_09_2->tc_notices = $request->tc_notices;
        $page_09_2->tc_first_examination_date = $request->tc_first_examination_date;
        $page_09_2->tc_factory_or_person = $request->tc_factory_or_person;

        $page_09_2->save();

        $page_09_1 = Page_09_1::where('user_id_gurdian', $user->id)->first();
        $page_09_2s = Page_09_2::where('user_id_gurdian', $user->id)->get();

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

        $message = '更新しました';

        return view('page_09.edit1', compact('page_09_1', 'page_09_2s', 'user', 'loginUser', 'message'));
    }
    public function page_10_update(Request $request, Page_10 $page_10, User $user)
    {
        $loginUser = auth()->user();

        $page_10->pregnancy_weeks = $request->pregnancy_weeks;
        $page_10->pregnancy_days = $request->pregnancy_days;
        $page_10->parturition_date = $request->parturition_date;
        $page_10->parturition_time = $request->parturition_time;
        $page_10->parturition_progress_select = $request->parturition_progress_select;
        if ($page_10->parturition_progress_select != '3') {
            $page_10->parturition_progress_other = null;
        } else {
            $page_10->parturition_progress_other = $request->parturition_progress_other;
        }
        $page_10->parturition_progress_remarks = $request->parturition_progress_remarks;
        $page_10->parturition_method = $request->parturition_method;
        $page_10->parturition_required_time_start = $request->parturition_required_time_start;
        $page_10->parturition_required_time_end = $request->parturition_required_time_end;
        $page_10->bleeding_amount_select = $request->bleeding_amount_select;
        $page_10->bleeding_amount_ml = $request->bleeding_amount_ml;
        $page_10->transfusion_select = $request->transfusion_select;
        if ($page_10->transfusion_select != '2') {
            $page_10->transfusion_record = null;
        } else {
            $page_10->transfusion_record = $request->transfusion_record;
        }
        $page_10->child_gender = $request->child_gender;
        $page_10->single_or_multiple_select = $request->single_or_multiple_select;
        if ($page_10->single_or_multiple_select != '2') {
            $page_10->single_or_multiple_count = null;
        } else {
            $page_10->single_or_multiple_count = $request->single_or_multiple_count;
        }
        $page_10->weight = $request->weight;
        $page_10->height = $request->height;
        $page_10->head_circumference = $request->head_circumference;
        $page_10->chest_measurement = $request->chest_measurement;
        $page_10->special_findings_treatment = $request->special_findings_treatment;
        $page_10->proof = $request->proof;
        $page_10->child_birth_location = $request->child_birth_location;
        $page_10->parturition_handler_name_docter = $request->parturition_handler_name_docter;
        $page_10->parturition_handler_name_midwife = $request->parturition_handler_name_midwife;
        $page_10->parturition_handler_name_other = $request->parturition_handler_name_other;

        $page_10->save();

        $message = '更新しました';

        return view('main.index', compact('user', 'loginUser', 'message'));
    }

    public function page_11_update1(Request $request, Page_11_1 $page_11_1, User $user)
    {
        $loginUser = auth()->user();

        if ($loginUser->role == '3') {
            $disabled1 = '';
            $disabled2 = 'disabled';
        } else {
            $disabled1 = 'disabled';
            $disabled2 = '';
        }

        $page_11_1->record_date = $request->record_date;
        $page_11_1->uterus_restoration = $request->uterus_restoration;
        $page_11_1->lochia = $request->lochia;
        $page_11_1->breast_condition = $request->breast_condition;
        $page_11_1->blood_pressure_max = $request->blood_pressure_max;
        $page_11_1->blood_pressure_min = $request->blood_pressure_min;
        $page_11_1->urine_protein = $request->urine_protein;
        $page_11_1->urine_sugar = $request->urine_sugar;
        $page_11_1->weight = $request->weight;
        $page_11_1->epds_etc_implementation = $request->epds_etc_implementation;

        $page_11_1->save();

        $page_11_1s = Page_11_1::where('user_id_gurdian', $user->id)->get();

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

        $page_11_2 = Page_11_2::where('user_id_gurdian', $user->id)->first();

        $message = '更新しました';

        return view('page_11.edit2', compact('page_11_1s', 'page_11_2', 'loginUser', 'user', 'disabled1', 'disabled2', 'message'));
    }

    public function page_11_update2(Request $request, Page_11_2 $page_11_2, User $user)
    {
        $loginUser = auth()->user();

        $page_11_2->mother_feeling = $request->mother_feeling;
        $page_11_2->mother_freespace = $request->mother_freespace;
        $page_11_2->bathing_date = $request->bathing_date;
        $page_11_2->housework_date = $request->housework_date;
        $page_11_2->work_date = $request->work_date;
        $page_11_2->menstruation_start_date = $request->menstruation_start_date;
        $page_11_2->family_plan_select = $request->family_plan_select;
        if ($page_11_2->family_plan_select == '1') {
            $page_11_2->family_plan_person = null;
        } else {
            $page_11_2->family_plan_person = $request->family_plan_person;
        }
        $page_11_2->family_plan_date = $request->family_plan_date;

        $page_11_2->save();

        $message = '更新しました';

        return view('main.index', compact('user', 'loginUser', 'message'));
    }

    public function page_12_update1(Request $request, Page_12_1 $page_12_1, User $user)
    {
        $loginUser = auth()->user();

        $page_12_1->pc_use_date = $request->pc_use_date;
        $page_12_1->pc_use_method = $request->pc_use_method;
        $page_12_1->pc_use_location = $request->pc_use_location;
        $page_12_1->pc_use_remarks = $request->pc_use_remarks;

        $page_12_1->save();

        $page_12_1s = Page_12_1::where('user_id_gurdian', $user->id)->get();
        $page_12_2s = Page_12_2::where('user_id_gurdian', $user->id)->get();

        $message = '更新しました';

        return view('page_12.show', compact('page_12_1s', 'page_12_2s', 'loginUser', 'user', 'message'));
    }

    public function page_12_update2(Request $request, Page_12_2 $page_12_2, User $user)
    {
        $loginUser = auth()->user();

        $page_12_2->co_use_date = $request->co_use_date;
        $page_12_2->co_use_summary = $request->co_use_summary;
        $page_12_2->co_use_location = $request->co_use_location;

        $page_12_2->save();

        $page_12_1s = Page_12_1::where('user_id_gurdian', $user->id)->get();
        $page_12_2s = Page_12_2::where('user_id_gurdian', $user->id)->get();

        $message = '更新しました';

        return view('page_12.show', compact('page_12_1s', 'page_12_2s', 'loginUser', 'user', 'message'));
    }

    public function page_13_update(Request $request, Page_13 $page_13, User $user)
    {
        $loginUser = auth()->user();

        $page_13->enp_age_in_days1 = $request->enp_age_in_days1;
        $page_13->enp_weight1 = $request->enp_weight1;
        $page_13->enp_sucking_power1 = $request->enp_sucking_power1;
        $page_13->enp_jaundice1 = $request->enp_jaundice1;
        $page_13->enp_others1 = $request->enp_others1;
        $page_13->enp_age_in_days2 = $request->enp_age_in_days2;
        $page_13->enp_weight2 = $request->enp_weight2;
        $page_13->enp_sucking_power2 = $request->enp_sucking_power2;
        $page_13->enp_jaundice2 = $request->enp_jaundice2;
        $page_13->enp_others2 = $request->enp_others2;
        $page_13->vitamin_administration_date = $request->vitamin_administration_date;
        $page_13->enp_abnormality_select = $request->enp_abnormality_select;
        if ($page_13->enp_abnormality_select == '1') {
            $page_13->enp_abnormality = null;
            $page_13->enp_abnormality_treatment = null;
        } else {
            $page_13->enp_abnormality = $request->enp_abnormality;
            $page_13->enp_abnormality_treatment = $request->enp_abnormality_treatment;
        }
        $page_13->lh_date = $request->lh_date;
        $page_13->lh_weight = $request->lh_weight;
        $page_13->lh_nutrition_method = $request->lh_nutrition_method;
        $page_13->lh_observation_matter = $request->lh_observation_matter;
        $page_13->lh_factory_or_person = $request->lh_factory_or_person;
        $page_13->lh_tel = $request->lh_tel;
        $page_13->lnp_age_in_days1 = $request->lnp_age_in_days1;
        $page_13->lnp_weight1 = $request->lnp_weight1;
        $page_13->lnp_sucking_power1 = $request->lnp_sucking_power1;
        $page_13->lnp_nutrition_method1 = $request->lnp_nutrition_method1;
        $page_13->lnp_factory_or_person1 = $request->lnp_factory_or_person1;
        $page_13->lnp_age_in_days2 = $request->lnp_age_in_days2;
        $page_13->lnp_weight2 = $request->lnp_weight2;
        $page_13->lnp_sucking_power2 = $request->lnp_sucking_power2;
        $page_13->lnp_nutrition_method2 = $request->lnp_nutrition_method2;
        $page_13->lnp_factory_or_person2 = $request->lnp_factory_or_person2;
        $page_13->nvg_date = $request->nvg_date;
        $page_13->nvg_age_in_days = $request->nvg_age_in_days;
        $page_13->nvg_weight = $request->nvg_weight;
        $page_13->nvg_height = $request->nvg_height;
        $page_13->nvg_chest_measurement = $request->nvg_chest_measurement;
        $page_13->nvg_head_circumference = $request->nvg_head_circumference;
        $page_13->nvg_nutrition_method = $request->nvg_nutrition_method;
        $page_13->nvg_factory_or_person = $request->nvg_factory_or_person;
        $page_13->notices = $request->notices;

        $page_13->save();

        $message = '更新しました';

        return view('main.index', compact('user', 'loginUser', 'message'));
    }

    public function page_14_update(Request $request, Page_14 $page_14, User $user)
    {
        $loginUser = auth()->user();

        $page_14->week2_record_date = $request->week2_record_date;
        $page_14->week2_question1 = $request->week2_question1;
        $page_14->week2_question2 = $request->week2_question2;
        $page_14->week2_question3 = $request->week2_question3;
        $page_14->week2_question4 = $request->week2_question4;
        $page_14->week2_question5 = $request->week2_question5;
        $page_14->week2_question6 = $request->week2_question6;
        $page_14->week2_freespace = $request->week2_freespace;
        $page_14->month1_record_date = $request->month1_record_date;
        $page_14->month1_question1 = $request->month1_question1;
        $page_14->month1_question2 = $request->month1_question2;
        $page_14->month1_question3 = $request->month1_question3;
        $page_14->month1_question4 = $request->month1_question4;
        $page_14->month1_question5 = $request->month1_question5;
        $page_14->month1_question6 = $request->month1_question6;
        $page_14->month1_question7 = $request->month1_question7;
        $page_14->month1_question8 = $request->month1_question8;
        $page_14->month1_question9 = $request->month1_question9;
        $page_14->month1_freespace = $request->month1_freespace;
        $page_14->month2_record_date = $request->month2_record_date;
        $page_14->month2_question1 = $request->month2_question1;
        $page_14->month2_question2 = $request->month2_question2;
        $page_14->month2_question3 = $request->month2_question3;
        $page_14->month2_question4 = $request->month2_question4;
        $page_14->month2_question5 = $request->month2_question5;
        $page_14->month2_question6 = $request->month2_question6;
        $page_14->month2_question7 = $request->month2_question7;
        $page_14->month2_freespace = $request->month2_freespace;
        $page_14->month3_4_record_date = $request->month3_4_record_date;
        $page_14->month3_4_question1 = $request->month3_4_question1;
        $page_14->month3_4_question2 = $request->month3_4_question2;
        $page_14->month3_4_question3 = $request->month3_4_question3;
        $page_14->month3_4_question4 = $request->month3_4_question4;
        $page_14->month3_4_question5 = $request->month3_4_question5;
        $page_14->month3_4_question6 = $request->month3_4_question6;
        $page_14->month3_4_question7 = $request->month3_4_question7;
        $page_14->month3_4_question8 = $request->month3_4_question8;
        $page_14->month3_4_question9 = $request->month3_4_question9;
        $page_14->month3_4_question10 = $request->month3_4_question10;
        $page_14->month3_4_freespace = $request->month3_4_freespace;

        $page_14->save();

        $message = '更新しました';

        return view('main.index', compact('user', 'loginUser', 'message'));
    }

    public function page_15_update(Request $request, Page_15 $page_15, User $user)
    {
        $loginUser = auth()->user();

        $page_15->month1_date = $request->month1_date;
        $page_15->month1_weight = $request->month1_weight;
        $page_15->month1_height = $request->month1_height;
        $page_15->month1_head_circumference = $request->month1_head_circumference;
        $page_15->month1_nutritional_status = $request->month1_nutritional_status;
        $page_15->month1_nutritional_method = $request->month1_nutritional_method;
        $page_15->month1_health_observation = $request->month1_health_observation;
        $page_15->month1_notices = $request->month1_notices;
        $page_15->month1_factory_or_person = $request->month1_factory_or_person;
        $page_15->month1_date_next = $request->month1_date_next;
        $page_15->month1_moon_phase_next = $request->month1_moon_phase_next;
        $page_15->month1_weight_next = $request->month1_weight_next;
        $page_15->month1_height_next = $request->month1_height_next;
        $page_15->month1_notices_next = $request->month1_notices_next;
        $page_15->month1_factory_or_person_next = $request->month1_factory_or_person_next;
        $page_15->month2_date = $request->month2_date;
        $page_15->month2_weight = $request->month2_weight;
        $page_15->month2_height = $request->month2_height;
        $page_15->month2_head_circumference = $request->month2_head_circumference;
        $page_15->month2_nutritional_status = $request->month2_nutritional_status;
        $page_15->month2_nutritional_method = $request->month2_nutritional_method;
        $page_15->month2_health_observation = $request->month2_health_observation;
        $page_15->month2_notices = $request->month2_notices;
        $page_15->month2_factory_or_person = $request->month2_factory_or_person;
        $page_15->month2_date_next = $request->month2_date_next;
        $page_15->month2_moon_phase_next = $request->month2_moon_phase_next;
        $page_15->month2_weight_next = $request->month2_weight_next;
        $page_15->month2_height_next = $request->month2_height_next;
        $page_15->month2_notices_next = $request->month2_notices_next;
        $page_15->month2_factory_or_person_next = $request->month2_factory_or_person_next;
        $page_15->month3_4_date = $request->month3_4_date;
        $page_15->month3_4_weight = $request->month3_4_weight;
        $page_15->month3_4_height = $request->month3_4_height;
        $page_15->month3_4_head_circumference = $request->month3_4_head_circumference;
        $page_15->month3_4_nutritional_status = $request->month3_4_nutritional_status;
        $page_15->month3_4_nutritional_method = $request->month3_4_nutritional_method;
        $page_15->month3_4_hip_opening_restriction = $request->month3_4_hip_opening_restriction;
        $page_15->month3_4_health_observation = $request->month3_4_health_observation;
        $page_15->month3_4_notices = $request->month3_4_notices;
        $page_15->month3_4_detailed_exam_date = $request->month3_4_detailed_exam_date;
        $page_15->month3_4_factory_or_person = $request->month3_4_factory_or_person;
        $page_15->month3_4_date_next = $request->month3_4_date_next;
        $page_15->month3_4_moon_phase_next = $request->month3_4_moon_phase_next;
        $page_15->month3_4_weight_next = $request->month3_4_weight_next;
        $page_15->month3_4_height_next = $request->month3_4_height_next;
        $page_15->month3_4_notices_next = $request->month3_4_notices_next;
        $page_15->month3_4_factory_or_person_next = $request->month3_4_factory_or_person_next;

        $page_15->save();

        $message = '更新しました';

        return view('main.index', compact('user', 'loginUser', 'message'));
    }
}
