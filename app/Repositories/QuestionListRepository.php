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
        $question=Question_list::where('id_exam',$id_exam)
                        ->select('id_question')
                        ->get()
                        ->toArray();
        return Question::whereIn('id',$question)
                        ->select('id','question_content','ans_1','ans_2','ans_3','ans_4')
                        ->get();
    }

    public function countQuestion($id_exam)
    {
        $question=Question_list::where('id_exam',$id_exam)
                        ->select('id_question')
                        ->get()
                        ->toArray();
        return count(Question::whereIn('id',$question)
                        ->get());
    }


    
}
