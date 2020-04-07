<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    public function examList() {
        return $this->hasMany('App\Models\Exam_list', 'id_student');
    }

    public function result() {
        return $this->hasMany('App\Models\Result', 'id_student');
    }

    public function task() {
        return $this->hasMany('App\Models\Task', 'id_student');
    }
}
