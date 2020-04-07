<?php

namespace App\Repositories;

use Illuminate\Database\Eloquent\Model;
use App\Models\Exam;


class ExamRepository  extends EloquentRepository
{
    /**
     * get model
     * @return string
     */
    public function getModel()
    {
        return \App\Models\Exam::class;
    }

    public function getTimeSubject($id_subject)
    {
        return Exam::where('id_subject',$id_subject)
                        ->select('time')
                        ->get()
                        ->toArray();
    }


    
}
