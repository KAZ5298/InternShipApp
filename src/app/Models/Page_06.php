<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Page_06 extends Model
{
    use HasFactory;

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    protected $fillable = [
        'user_id_gurdian',
        'user_id_supporter',
        'inspection_item_name',
        'inspection_item_date',
        'inspection_item_remarks',
        'blood_type',
        'blood_type_rh',
        'hearing_inspection_right',
        'hearing_inspection_left',
        'spare',
    ];
}
