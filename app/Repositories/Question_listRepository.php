<?php

namespace App\Repositories;

use App\Models\Question_list;

class Question_listRepository  extends EloquentRepository
{
    /**
     * get model
     * @return string
     */
    public function getModel()
    {
        return \App\Models\Question_list::class;
    }
    public function findById_exam($id)
    {
        $results = $this->_model->all();
        $result = $results->where('id_exam',$id);
        return $result;
    }
}
