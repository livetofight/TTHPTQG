<?php

namespace App\Repositories;

use App\Models\Exam_list;

class Exam_listRepository  extends EloquentRepository
{
    /**
     * get model
     * @return string
     */
    public function getModel()
    {
        return \App\Models\Exam_list::class;
    }
}
