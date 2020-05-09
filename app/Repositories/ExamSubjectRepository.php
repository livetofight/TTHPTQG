<?php

namespace App\Repositories;

use App\Models\ExamSubject;
use App\Models\Subject;

class ExamSubjectRepository  extends EloquentRepository
{
    /**
     * get model
     * @return string
     */
    public function getModel(){
        return ExamSubject::class;
    }

    // public function getIdSubject($id_student){
    //     dd( ExamSubject::whereId_student($id_student)->get(['id_subject'])->toArray());
    // }
}
