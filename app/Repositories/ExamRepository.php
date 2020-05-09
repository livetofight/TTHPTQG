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
        return Exam::with('subject')
                        ->get();
    }

    public function updateExam($id_exam, $time){
        $exam=Exam::find($id_exam);
        $exam->time=$time;
        $exam->save();
    }

    public function getLastID(){
        return Exam::orderBy('created_at', 'desc')->first()->id;
    }

    public function createExam($id_subject, $number, $time){
        $exam = new Exam();
        $exam->id_subject = $id_subject;
        $exam->number = $number;
        $exam->time = $time;
        $exam->save();
    }

}
