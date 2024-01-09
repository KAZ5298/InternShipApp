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

class PageEdit extends Controller
{
    public function page_cover_edit(User $user)
    {
        $loginUser = auth()->user();

        if ((Page_00_cover::where('user_id_gurdian', $user->id)->exists())) {
            if ($loginUser->role == '1') {
                $disabled1 = '';
                $disabled2 = 'disabled';
            } else {
                $disabled1 = 'disabled';
                $disabled2 = '';
            }

            $page_00 = Page_00_cover::where('user_id_gurdian', $user->id)->first();

            return view('page_00_cover.edit', compact('page_00', 'user', 'disabled1', 'disabled2'));
        } else {
            $message = '作成されていません';

            return view('main.index', compact('user', 'loginUser', 'message'));
        }
    }

    public function page_01_edit(User $user)
    {
        $loginUser = auth()->user();

        if ((Page_01::where('user_id_gurdian', $user->id)->exists())) {
            if ($loginUser->role == '1') {
                $disabled1 = '';
                $disabled2 = 'disabled';
            } else {
                $disabled1 = 'disabled';
                $disabled2 = '';
            }

            $page_01 = Page_01::where('user_id_gurdian', $user->id)->first();

            return view('page_01.edit', compact('page_01', 'user', 'disabled1', 'disabled2'));
        } else {
            $message = '作成されていません';

            return view('main.index', compact('user', 'loginUser', 'message'));
        }
    }

    public function page_02_edit(User $user)
    {
        $loginUser = auth()->user();

        if ((Page_02::where('user_id_gurdian', $user->id)->exists())) {
            $page_02 = Page_02::where('user_id_gurdian', $user->id)->first();

            return view('page_02.edit', compact('page_02', 'user'));
        } else {
            $message = '作成されていません';

            return view('main.index', compact('user', 'loginUser', 'message'));
        }
    }

    public function page_03_edit(User $user)
    {
        if ((Page_03::where('user_id_gurdian', $user->id)->exists())) {
            $page_03 = Page_03::where('user_id_gurdian', $user->id)->first();

            return view('page_03.edit', compact('page_03', 'user'));
        } else {
            $message = '作成されていません';

            return view('main.index', compact('user', 'loginUser', 'message'));
        }
    }

    public function page_04_edit(User $user)
    {
        $loginUser = auth()->user();

        if ((Page_04::where('user_id_gurdian', $user->id)->exists())) {
            $page_04 = Page_04::where('user_id_gurdian', $user->id)->first();

            return view('page_04.edit', compact('page_04', 'user'));
        } else {
            $message = '作成されていません';

            return view('main.index', compact('user', 'loginUser', 'message'));
        }
    }

    public function page_05_edit(Page_05 $page_05, User $user)
    {
        return view('page_05.edit', compact('page_05', 'user'));
    }

    public function page_06_edit(Page_06 $page_06, User $user)
    {
        return view('page_06.edit', compact('page_06', 'user'));
    }

    public function page_07_edit(User $user)
    {
        $loginUser = auth()->user();

        if ((Page_07::where('user_id_gurdian', $user->id)->exists())) {
            $page_07 = Page_07::where('user_id_gurdian', $user->id)->first();

            return view('page_07.edit', compact('page_07', 'user'));
        } else {
            $message = '作成されていません';

            return view('main.index', compact('user', 'loginUser', 'message'));
        }
    }

    public function page_08_edit(Page_08 $page_08, User $user)
    {
        return view('page_08.edit', compact('page_08', 'user'));
    }

    public function page_09_edit1(User $user)
    {
        $loginUser = auth()->user();

        if ((Page_09_1::where('user_id_gurdian', $user->id)->exists())) {

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

            return view('page_09.edit1', compact('page_09_1', 'page_09_2s', 'user'));
        } else {
            $message = '作成されていません';

            return view('main.index', compact('user', 'loginUser', 'message'));
        }
    }

    public function page_09_edit2(Page_09_2 $page_09_2)
    {
        $user = $page_09_2->user_id_gurdian;

        return view('page_09.edit2', compact('page_09_2', 'user'));
    }

    public function page_10_edit(User $user)
    {
        $loginUser = auth()->user();

        if ((Page_10::where('user_id_gurdian', $user->id)->exists())) {
            $page_10 = Page_10::where('user_id_gurdian', $user->id)->first();

            return view('page_10.edit', compact('page_10', 'user'));
        } else {
            $message = '作成されていません';

            return view('main.index', compact('user', 'loginUser', 'message'));
        }
    }

    public function page_11_edit1(Page_11_1 $page_11_1)
    {
        $user = $page_11_1->user_id_gurdian;

        return view('page_11.edit1', compact('page_11_1', 'user'));
    }

    public function page_11_edit2(User $user)
    {
        $loginUser = auth()->user();

        if ((Page_11_1::where('user_id_gurdian', $user->id)->exists()) || (Page_11_2::where('user_id_gurdian', $user->id)->exists())) {
            if ($loginUser->role == '3') {
                $disabled1 = '';
                $disabled2 = 'disabled';
            } else {
                $disabled1 = 'disabled';
                $disabled2 = '';
            }

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

            return view('page_11.edit2', compact('page_11_1s', 'page_11_2', 'user', 'loginUser', 'disabled1', 'disabled2'));
        } else {
            $message = '作成されていません';

            return view('main.index', compact('user', 'loginUser', 'message'));
        }
    }


    public function page_12_edit1(Page_12_1 $page_12_1, User $user)
    {
        return view('page_12.edit1', compact('page_12_1', 'user'));
    }

    public function page_12_edit2(Page_12_2 $page_12_2, User $user)
    {
        return view('page_12.edit2', compact('page_12_2', 'user'));
    }

    public function page_13_edit(User $user)
    {
        $loginUser = auth()->user();

        if ((Page_13::where('user_id_gurdian', $user->id)->exists())) {
            $page_13 = Page_13::where('user_id_gurdian', $user->id)->get();
            return view('page_13.edit', compact('page_13', 'user'));
        } else {
            $message = '作成されていません';

            return view('main.index', compact('user', 'loginUser', 'message'));
        }
    }

    public function page_14_edit(User $user)
    {
        $loginUser = auth()->user();

        if ((Page_14::where('user_id_gurdian', $user->id)->exists())) {
            $page_14 = Page_14::where('user_id_gurdian', $user->id)->first();

            return view('page_14.edit', compact('page_14', 'user'));
        } else {
            $message = '作成されていません';

            return view('main.index', compact('user', 'loginUser', 'message'));
        }
    }

    public function page_15_edit(User $user)
    {
        $loginUser = auth()->user();

        if ((Page_15::where('user_id_gurdian', $user->id)->exists())) {
            $page_15 = Page_15::where('user_id_gurdian', $user->id)->first();

            return view('page_15.edit', compact('page_15', 'user'));
        } else {
            $message = '作成されていません';

            return view('main.index', compact('user', 'loginUser', 'message'));
        }
    }
}
