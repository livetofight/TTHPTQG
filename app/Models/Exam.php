<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Exam extends Model
{
    public function examlist() {
        return $this->hasMany('App\Models\Exam_list','id_exam','id');
    }

    public function questionlist() {
        return $this->hasMany('App\Models\Question_list','id_exam','id');
    }
    public function subject(){
        return $this->belongsTo(Subject::class,'id_subject','id');
    }
}
