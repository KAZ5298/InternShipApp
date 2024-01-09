<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Page_11_1 extends Model
{
    use HasFactory;

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    protected $fillable = [
        'user_id_gurdian',
        'user_id_supporter',
        'postpartum_days',
        'postpartum_months',
        'uterus_restoration',
        'lochia',
        'breast_condition',
        'blood_pressure_max',
        'blood_pressure_min',
        'urine_protein',
        'urine_sugar',
        'weight',
        'epds_etc_implementation',
    ];
}
