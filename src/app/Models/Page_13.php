<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Page_13 extends Model
{
    use HasFactory;

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    protected $fillable = [
        'user_id_gurdian',
        'user_id_supporter',
        'enp_age_in_days1',
        'enp_weight1',
        'enp_sucking_power1',
        'enp_jaundice1',
        'enp_others1',
        'enp_age_in_days2',
        'enp_weight2',
        'enp_sucking_power2',
        'enp_jaundice2',
        'enp_others2',
        'vitamin_administration_date',
        'enp_abnormality_select',
        'enp_abnormality',
        'enp_abnormality_treatment',
        'lh_date',
        'lh_weight',
        'lh_nutrition_method',
        'lh_observation_matter',
        'lh_factory_or_person',
        'lh_tel',
        'lnp_age_in_days1',
        'lnp_weight1',
        'lnp_sucking_power1',
        'lnp_nutrition_method1',
        'lnp_factory_or_person1',
        'lnp_age_in_days2',
        'lnp_weight2',
        'lnp_sucking_power2',
        'lnp_nutrition_method2',
        'lnp_factory_or_person2',
        'nvg_date',
        'nvg_age_in_days',
        'nvg_weight',
        'nvg_height',
        'nvg_chest_measurement',
        'nvg_head_circumference',
        'nvg_nutrition_method',
        'nvg_factory_or_person',
        'notices',
    ];
}
