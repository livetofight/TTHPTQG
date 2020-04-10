<?php

namespace App\Services;

use App\Repositories\Exam_listRepository;

class Exam_listService
{
    private $exam_listRepository;

    public function __construct(Exam_listRepository $exam_listRepository)
    {
        $this->exam_listRepository = $exam_listRepository;
    }

    public function getExam_list()
    {
        return $this->exam_listRepository->getAll();
    }
}
