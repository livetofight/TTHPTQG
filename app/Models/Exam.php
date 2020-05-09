<?php 

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Subject;

class Exam extends Model
{
    // public function examlist() {
    //     return $this->hasMany('App\Models\ExamList','id_exam','id');
    // }

<<<<<<< HEAD
    // public function questionlist() {
    //     return $this->hasMany('App\Models\QuestionList','id_exam','id');
    // } 
=======
    public function questionlist() {
        return $this->hasMany('App\Models\Question_list','id_exam','id');
    }
    public function subject(){
        return $this->belongsTo(Subject::class,'id_subject','id');
    }
>>>>>>> 96521c663ed17912938078f5c90d9bf3aaba6ae1
}
