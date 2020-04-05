<?php

namespace App\Services;

use App\Repositories\QuestionRepository;

class QuestionService
{
    private $questionRepository;

    public function __construct(QuestionRepository $questionRepository)
    {
        $this->questionRepository = $questionRepository;
    }

    public function getListQuestion()
    {
        return $this->questionRepository->getAll();
    }

    
}
