<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Page_12_1 extends Model
{
    use HasFactory;

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    protected $fillable = [
        'user_id_gurdian',
        'user_id_supporter',
        'pc_use_date',
        'pc_use_method',
        'pc_use_location',
        'pc_use_remarks',
    ];
}
