<?php

namespace App\Repositories;

use App\Models\Student;
use Maatwebsite\Excel\Concerns\ToArray;

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
    public function setIsA($id, $param){
        $student=Student::find($id);
        $student->isActive=$param;
        $student->save();
    }
}
