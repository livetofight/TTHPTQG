<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $fillable = [
        'username', 'fullname', 'password', 'isActive'
    ];
    public function examList() {
        return $this->hasMany('App\Models\Exam_list', 'foreign_key');
    }

    public function result() {
        return $this->hasMany('App\Models\Result', 'foreign_key');
    }

    public function task() {
        return $this->hasMany('App\Models\Task', 'foreign_key');
    }
}
