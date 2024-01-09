<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Page_10 extends Model
{
    use HasFactory;

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    protected $fillable = [
        'user_id_gurdian',
        'user_id_supporter',
        'pregnancy_weeks',
        'pregnancy_days',
        'parturition_date',
        'parturition_time',
        'parturition_progress_select',
        'parturition_progress_other',
        'parturition_progress_remarks',
        'parturition_method',
        'parturition_required_time_start',
        'parturition_required_time_end',
        'bleeding_amount_select',
        'bleeding_amount_ml',
        'transfusion_select',
        'transfusion_record',
        'child_gender',
        'single_or_multiple_select',
        'single_or_multiple_count',
        'weight',
        'height',
        'head_circumference',
        'chest_measurement',
        'special_findings_treatment',
        'proof',
        'child_birth_location',
        'parturition_handler_name_docter',
        'parturition_handler_name_midwife',
        'parturition_handler_name_other',
    ];
}
