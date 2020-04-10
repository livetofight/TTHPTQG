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

    public function getListStudent($today)
    {
        return $this->studentRepository->getAllYear($today);
    }

    
}
