<?php

namespace App\Services;

use App\Repositories\Question_listRepository;

class Question_listService
{
    private $question_listRepository;

    public function __construct(Question_listRepository $question_listRepository)
    {
        $this->question_listRepository = $question_listRepository;
    }

    public function getQuestion_list()
    {
        return $this->question_listRepository->getAll();
    }
    public function getQuestion_listById_exam($id)
    {
        return $this->question_listRepository->findById_exam($id);
    }
}
