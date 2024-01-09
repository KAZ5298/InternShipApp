<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Page_04 extends Model
{
    use HasFactory;

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    protected $fillable = [
        'user_id_gurdian',
        'month3_start',
        'month3_end',
        'month3_record',
        'month4_start',
        'month4_end',
        'month4_record',
        'last_menstrual_date',
        'first_consultation_date',
        'quickening_date',
        'parturition_date',
        'month5_start',
        'month5_end',
        'month5_record',
        'month6_start',
        'month6_end',
        'month6_record',
        'month7_start',
        'month7_end',
        'month7_record',
        'month8_start',
        'month8_end',
        'month8_record',
        'childbirth_address',
        'childbirth_tel',
        'emergency_contact_fullname1',
        'emergency_contact_fullname_huri1',
        'emergency_contact_tel1',
        'emergency_contact_fullname2',
        'emergency_contact_fullname_huri2',
        'emergency_contact_tel2',
        'am_private_car',
        'am_taxi',
        'am_walking',
        'am_other',
        'am_other_name',
        'am_time_hours',
        'am_time_minutes',
        'helper',
        'month9_start',
        'month9_end',
        'month9_record',
        'month10_start',
        'month10_end',
        'month10_record',
        'week40',
        'birthday',
        'welcoming_feeling',
    ];
}
