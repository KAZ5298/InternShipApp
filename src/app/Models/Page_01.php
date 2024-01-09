<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Page_01 extends Model
{
    use HasFactory;

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    protected $fillable = [
        'user_id_gurdian',
        'user_id_city_office',
        'mother_fullname',
        'mother_fullname_huri',
        'mother_birthday',
        'mother_work',
        'father_fullname',
        'father_fullname_huri',
        'father_birthday',
        'father_work',
        'another_relationship',
        'another_fullname',
        'another_fullname_huri',
        'another_birthday',
        'another_work',
        'address1',
        'tel1',
        'address2',
        'tel2',
        'address3',
        'tel3',
        'brc_child_fullname',
        'brc_child_gender',
        'brc_child_birth_location',
        'brc_child_birthday',
        'brc_date',
        'brc_mayor_fullname',
    ];
}
