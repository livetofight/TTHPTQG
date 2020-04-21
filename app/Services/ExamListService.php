<?php

namespace App\Services;

use App\Repositories\ExamListRepository;

class ExamListService
{
    private $examListRepository;

    public function __construct(ExamListRepository $examListRepository)
    {
        $this->examListRepository = $examListRepository;
    }

    
    public function getExamList()
    {
        return $this->examListRepository->getAll();
    }
}
