<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Page_09_2 extends Model
{
    use HasFactory;

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    protected $fillable = [
        'user_id_gurdian',
        'user_id_supporter',
        'tc_upper_jaw_left1',
        'tc_upper_jaw_left2',
        'tc_upper_jaw_left3',
        'tc_upper_jaw_left4',
        'tc_upper_jaw_left5',
        'tc_upper_jaw_left6',
        'tc_upper_jaw_left7',
        'tc_upper_jaw_left8',
        'tc_lower_jaw_left1',
        'tc_lower_jaw_left2',
        'tc_lower_jaw_left3',
        'tc_lower_jaw_left4',
        'tc_lower_jaw_left5',
        'tc_lower_jaw_left6',
        'tc_lower_jaw_left7',
        'tc_lower_jaw_left8',
        'tc_upper_jaw_right1',
        'tc_upper_jaw_right2',
        'tc_upper_jaw_right3',
        'tc_upper_jaw_right4',
        'tc_upper_jaw_right5',
        'tc_upper_jaw_right6',
        'tc_upper_jaw_right7',
        'tc_upper_jaw_right8',
        'tc_lower_jaw_right1',
        'tc_lower_jaw_right2',
        'tc_lower_jaw_right3',
        'tc_lower_jaw_right4',
        'tc_lower_jaw_right5',
        'tc_lower_jaw_right6',
        'tc_lower_jaw_right7',
        'tc_lower_jaw_right8',
        'tc_pregnancy_weeks',
        'tc_tartar',
        'tc_gums_inflammation',
        'tc_notices',
        'tc_first_examination_date',
        'tc_factory_or_person',
    ];
}
