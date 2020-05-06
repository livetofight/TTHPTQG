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
        return Exam::whereId_subject($id_subject)
                        ->get(['time'])
                        ->first()
                        ->toArray();
    }

    public function getIdExamArray($id_subject)
    {
        return Exam::whereId_subject($id_subject)
                        ->get(['id'])
                        ->toArray();
    }

    public function getNT($id_subject)
    {
        return Exam::whereId_subject($id_subject)
                        ->get()
                        ->first();
    }

    public function getListExam(){
        return Exam::whereYear('created_at',date('Y'))
                        ->with('subject')
                        ->get();
    }

}
