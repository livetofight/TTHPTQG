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
        return $this->hasMany('App\Models\Question','id_subject','id');
    }

    public function result() {
        return $this->hasMany('App\Models\Result','id_subject','id');
    }

    public function examList() {
        return $this->hasMany('App\Models\Exam_list','id_subject','id');
    }

    public function Exam() {
        return $this->hasMany(Exam::class,'id_subject','id');
    }

}
