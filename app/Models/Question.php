<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    protected $fillable=[
        'id',
        'ans_1',
        'ans_2',
        'ans_3',
        'ans_4',
        'ans_correct',
        'question_content',
        'id_subject',
        'created_at',
        'updated_at'
    ];
}
