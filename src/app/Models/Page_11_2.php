<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Page_11_2 extends Model
{
    use HasFactory;

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    protected $fillable = [
        'user_id_gurdian',
        'user_id_supporter',
        'mother_feeling',
        'mother_freespace',
        'bathing_date',
        'housework_date',
        'work_date',
        'menstruation_start_date',
        'family_plan_select',
        'family_plan_person',
        'family_plan_date',
    ];
}
