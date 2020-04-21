<?php

namespace App\Services;

use App\Repositories\StudentRepository;

class StudentService
{
    private $studentRepository;

    public function __construct(StudentRepository $studentRepository)
    {
        $this->studentRepository = $studentRepository;
    }

    public function getListStudent()
    {
        return $this->studentRepository->getAllYear();
    }

    public function setIsA($id, $param){
        $this->studentRepository->setIsA($id,$param);
    }

    public function findStudent($id){
        return $this->studentRepository->find($id);  
    }

}
