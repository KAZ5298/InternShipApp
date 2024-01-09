<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Page_09_1 extends Model
{
    use HasFactory;

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    protected $fillable = [
        'user_id_gurdian',
        'user_id_supporter',
        'ei_first_examination_date',
        'ei_pregnancy_weeks',
        'ei_tooth_decay_select',
        'ei_tooth_decay_count',
        'ei_tartar',
        'ei_gums_inflammation',
        'ei_notices',
        'ei_factory_or_person',
    ];
}
