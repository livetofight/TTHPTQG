<?php

namespace App\Repositories;

use App\Models\ExamList;

class ExamListRepository  extends EloquentRepository
{
    /**
     * get model
     * @return string
     */
    public function getModel(){
        return \App\Models\ExamList::class;
    }

    public function getIdExam($id_student, $id_exam_array){
        return ExamList::whereId_user($id_student)
                        ->whereIn('id_exam',$id_exam_array)
                        ->get(['id_exam'])
                        ->toArray();
        
    }
}
