<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    const UPDATED_AT = null;
    protected $fillable = [
        'username', 'fullname', 'password', 'isActive','cmnd','date_of_birth','gender','nation','id_school','address','subject_list'
    ];
    
    protected $dates = [
        'date_of_birth',
        'created_at'
    ];


    public function examList() {
        return $this->hasMany('App\Models\Exam_list', 'id_student','id');
    }

    public function result() {
        return $this->hasMany('App\Models\Result', 'id_student','id');
    }

    public function task() {
        return $this->hasMany('App\Models\Task', 'id_student','id');
    }
}
