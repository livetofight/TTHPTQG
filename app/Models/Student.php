<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    
    protected $fillable = [
        'username', 'fullname', 'password', 'isActive','cmnd','date_of_birth','gender','nation','id_school','address','subject_list'
    ];
    protected $dates = [
        'created_at',
        'updated_at',
        'date_of_birth'
    ];
    public $timestamps = FALSE;
    protected $dateFormat = 'd-m-Y';
    
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
