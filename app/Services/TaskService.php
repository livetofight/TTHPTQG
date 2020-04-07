<?php

namespace App\Services;

use App\Repositories\ScheduleRepository;
use App\Repositories\QuestionListRepository;
use App\Repositories\ExamRepository;

class TaskService
{
    private $scheduleRepository;
    private $questionListRepository;
    private $examRepository;

    public function __construct(
        ScheduleRepository $scheduleRepository,
        QuestionListRepository $questionListRepository,
        ExamRepository $examRepository
    ){
        $this->scheduleRepository = $scheduleRepository;
        $this->questionListRepository = $questionListRepository;
        $this->examRepository = $examRepository;
    }

    public function getSubject($date){
        return $this->scheduleRepository->getSubject($date);
    }

    public function getQuestion($id_exam){
        return $this->questionListRepository->getListQuestion($id_exam);
    }

    public function countQuestion($id_exam){
        return $this->questionListRepository->countQuestion($id_exam);
    }

    public function getTimeSubject($id_subject){
        return $this->examRepository->getTimeSubject($id_subject);
    }
    
}