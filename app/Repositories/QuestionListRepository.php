<?php

namespace App\Repositories;

use App\Models\QuestionList;
use App\Models\Question;
use Illuminate\Database\Eloquent\Model;


class QuestionListRepository  extends EloquentRepository
{
    /**
     * get model
     * @return string
     */
    public function getModel()
    {
        return \App\Models\QuestionList::class;
    }


    public function findById_exam($id)
    {
        $results = $this->_model->all();
        $result = $results->where('id_exam',$id);
        return $result;
    }
    public function getListQuestion($id_exam)
    {
        return QuestionList::whereIn('id_exam',$id_exam)
                                    ->whereYear('created_at',date('Y'))
                                    ->with('question')
                                    ->get();
    }

    public function getCountListQuestion($id_exam)
    {
       return QuestionList::whereIn('id_exam',$id_exam)
                                    ->with('question')
                                    ->count();
    }

    public function createExamDetail($id_exam, $id_question){
        $questionList = new QuestionList();
        $questionList->id_exam=$id_exam;
        $questionList->id_question=$id_question;
        $questionList->save();
    }
}
