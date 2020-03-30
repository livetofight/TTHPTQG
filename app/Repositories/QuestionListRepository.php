<?php

namespace App\Repositories;

use App\Models\Question_list;
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
        return \App\Models\Question_list::class;
    }

    public function getListQuestion($id_exam)
    {
        return Question_list::where('id_exam',$id_exam)
                        ->get(['id_question'])
                        ->Question
                        ->toArray();
    }


    
}
