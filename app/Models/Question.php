<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    protected $fillable=[
        'id',
        'question_content',
        'ans_1',
        'ans_2',
        'ans_3',
        'ans_4',
        'ans_correct',
        'id_subject',
        'created_at',
        'updated_at'
    ];

    protected $hidden = ['ans_correct'];

    public function questionList() {
        return $this->hasMany('App\Models\Question_list','id_question','id');
    }

    


}
