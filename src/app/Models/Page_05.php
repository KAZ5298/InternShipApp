<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Page_05 extends Model
{
    use HasFactory;

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    protected $fillable = [
        'user_id_gurdian',
        'user_id_supporter',
        'consultation_date',
        'pregnancy_week_count',
        'pregnancy_day_count',
        'uterine_fundal_length',
        'waist',
        'weight_before_pregnancy',
        'weight_after_pregnancy',
        'blood_pressure_max',
        'blood_pressure_min',
        'edema',
        'urine_protein',
        'urine_sugar',
        'other_tests',
        'notices',
        'factory_or_person',
    ];
}
