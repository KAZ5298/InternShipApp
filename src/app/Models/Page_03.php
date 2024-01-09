<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Page_03 extends Model
{
    use HasFactory;

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    protected $fillable = [
        'user_id_gurdian',
        'rp_work',
        'rp_work_content_environment',
        'rp_work_start_time',
        'rp_work_end_time',
        'rp_shift_system',
        'rp_vehicle',
        'rp_commuting_time',
        'rp_congestion',
        'cap_work_rest_pregnancy_weeks',
        'cap_work_rest_pregnancy_months',
        'cap_work_change_pregnancy_weeks',
        'cap_work_change_pregnancy_months',
        'cap_work_end_pregnancy_weeks',
        'cap_work_end_pregnancy_months',
        'cap_other',
        'prenatal_leave_start',
        'prenatal_leave_end',
        'postpartum_leave_start',
        'postpartum_leave_end',
        'cl_mother_start1',
        'cl_mother_end1',
        'cl_mother_start2',
        'cl_mother_end2',
        'cl_father_start1',
        'cl_father_end1',
        'cl_father_start2',
        'cl_father_end2',
        'cl_father_start3',
        'cl_father_end3',
        'tor_detached_house',
        'tor_housing_complex',
        'tor_housing_complex_count',
        'tor_elevator',
        'tor_other',
        'tor_noise',
        'tor_sunshine',
        'lt_child',
        'lt_child_count',
        'lt_husband',
        'lt_husband_father',
        'lt_husband_mother',
        'lt_father',
        'lt_mother',
        'lt_other',
        'lt_other_count',
    ];
}
