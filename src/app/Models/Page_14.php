<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Page_14 extends Model
{
    use HasFactory;

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    protected $fillable = [
        'user_id_gurdian',
        'week2_record_date',
        'week2_question1',
        'week2_question2',
        'week2_question3',
        'week2_question4',
        'week2_question5',
        'week2_question6',
        'week2_freespace',
        'month1_record_date',
        'month1_question1',
        'month1_question2',
        'month1_question3',
        'month1_question4',
        'month1_question5',
        'month1_question6',
        'month1_question7',
        'month1_question8',
        'month1_question9',
        'month1_freespace',
        'month2_record_date',
        'month2_question1',
        'month2_question2',
        'month2_question3',
        'month2_question4',
        'month2_question5',
        'month2_question6',
        'month2_question7',
        'month2_freespace',
        'month3_4_record_date',
        'month3_4_question1',
        'month3_4_question2',
        'month3_4_question3',
        'month3_4_question4',
        'month3_4_question5',
        'month3_4_question6',
        'month3_4_question7',
        'month3_4_question8',
        'month3_4_question9',
        'month3_4_question10',
        'month3_4_freespace',
    ];
}
