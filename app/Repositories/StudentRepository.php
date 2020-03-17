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
}
