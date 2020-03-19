<?php

namespace App\Repositories;

use App\Models\Question;

class QuestionRepository  extends EloquentRepository
{
    /**
     * get model
     * @return string
     */
    public function getModel()
    {
        return \App\Models\Question::class;
    }
}
