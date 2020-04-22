<?php

namespace App\Services;

use App\Repositories\ExamRepository;

class ExamService
{
    private $examRepository;

    public function __construct(ExamRepository $examRepository)
    {
        $this->examRepository = $examRepository;
    }


    public function getListExam()
    {
        return $this->examRepository->getListExam();
    }

    public function getExamList()
    {
        return $this->examRepository->getAll();
    }
}
