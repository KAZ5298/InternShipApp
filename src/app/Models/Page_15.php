<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Page_15 extends Model
{
    use HasFactory;

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    protected $fillable = [
        'user_id_gurdian',
        'month1_date',
        'month1_weight',
        'month1_height',
        'month1_head_circumference',
        'month1_nutritional_status',
        'month1_nutritional_method',
        'month1_health_observation',
        'month1_notices',
        'month1_factory_or_person',
        'month1_date_next',
        'month1_moon_phase_next',
        'month1_weight_next',
        'month1_height_next',
        'month1_notices_next',
        'month1_factory_or_person_next',
        'month2_date',
        'month2_weight',
        'month2_height',
        'month2_head_circumference',
        'month2_nutritional_status',
        'month2_nutritional_method',
        'month2_health_observation',
        'month2_notices',
        'month2_factory_or_person',
        'month2_date_next',
        'month2_moon_phase_next',
        'month2_weight_next',
        'month2_height_next',
        'month2_notices_next',
        'month2_factory_or_person_next',
        'month3_4_date',
        'month3_4_weight',
        'month3_4_height',
        'month3_4_head_circumference',
        'month3_4_nutritional_status',
        'month3_4_nutritional_method',
        'month3_4_hip_opening_restriction',
        'month3_4_health_observation',
        'month3_4_notices',
        'month3_4_detailed_exam_date',
        'month3_4_factory_or_person',
        'month3_4_date_next',
        'month3_4_moon_phase_next',
        'month3_4_weight_next',
        'month3_4_height_next',
        'month3_4_notices_next',
        'month3_4_factory_or_person_next',
    ];
}
