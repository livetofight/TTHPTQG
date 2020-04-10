<?php

namespace App\Repositories;

use App\Models\Student;

class StudentRepository  extends EloquentRepository 
{
    /**
     * get model
     * @return string
     */
    public function getModel()
    {
        return \App\Models\Student::class;
    }

    public function getAllYear($today){
        return Student::whereYear('created_at','=',$today)
                        ->get();
    }
}