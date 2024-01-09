<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Page_02 extends Model
{
    use HasFactory;

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    protected $fillable = [
        'user_id_gurdian',
        'height',
        'weight',
        'mh_high_blood_pressure',
        'mh_kidney_disease',
        'mh_diabetes',
        'mh_hepatitis',
        'mh_heart_disease',
        'mh_thyroid_disease',
        'mh_mental_illness',
        'mh_other_diseases',
        'mh_other_diseases_name',
        'rubella',
        'measles',
        'chickenpox',
        'surgery_history_select',
        'surgery_history_disease',
        'medicine',
        'allergy',
        'stress',
        'pregnant_anxiety',
        'other_anxiety',
        'tabacco_select',
        'tabacco_no_count',
        'tabacco_yes_count',
        'cohabitant_tabacco_select',
        'cohabitant_tabacco_count',
        'alcohol_select',
        'alcohol_no_count',
        'alcohol_yes_count',
        'partner_condition_select',
        'partner_condition_disease',
        'pch_child_birthday1',
        'pch_pregnancy_period1',
        'pch_birth_method1',
        'pch_child_weight1',
        'pch_child_gender1',
        'pch_child_condition1',
        'pch_child_birthday2',
        'pch_pregnancy_period2',
        'pch_birth_method2',
        'pch_child_weight2',
        'pch_child_gender2',
        'pch_child_condition2',
        'pch_child_birthday3',
        'pch_pregnancy_period3',
        'pch_birth_method3',
        'pch_child_weight3',
        'pch_child_gender3',
        'pch_child_condition3',
    ];
}
