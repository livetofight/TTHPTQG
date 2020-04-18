<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ExamList extends Model
{
    protected $table = 'exam_list';

    public function questionList()
    {
        return $this->hasMany(QuestionList::class,'id_exam','id_exam');
    }
}


