<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    public $timestamps = FALSE;
    protected $dateFormat = 'd-m-Y';
    const CREATED_AT = 'creation_date';
    const UPDATED_AT = 'last_update';
    protected $fillable = [
        'id', 'name', 'created_at', 'updated_at',
    ];

    public function question() {
        return $this->hasMany('App\Models\Question');
    }

    public function result() {
        return $this->hasMany('App\Models\Result');
    }

    public function examList() {
        return $this->hasMany('App\Models\Exam_list');
    }

    public function Exam() {
        return $this->hasMany('App\Models\Exam', 'foreign_key');
    }
    
}
