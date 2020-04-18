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

    public function getIdExam($id_student, $id_subject){
        $id_exam= ExamList::whereId_user($id_student)
                        ->whereIn('id_subject',$id_subject)
                        ->get(['id_exam'])
                        ->toArray();
        return $id_exam;
        
    }
}
