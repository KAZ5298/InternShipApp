<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Page_00_cover extends Model
{
    use HasFactory;

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    protected $fillable = [
        'issue_date',
        'user_id_gurdian',
        'user_id_city_office',
        'parent_fullname1',
        'parent_fullname_huri1',
        'parent_fullname2',
        'parent_fullname_huri2',
        'child_fullname',
        'child_fullname_huri',
        'child_count',
        'child_birthday',
        'child_gender',
    ];
}
