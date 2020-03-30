<?php

namespace App\Services;

use App\Repositories\TaskRepository;
use App\Repositories\ScheduleRepository;
use App\Repositories\QuestionRepository;
use App\Repositories\QuestionListRepository;

class TaskService
{
    private $scheduleRepository;
    private $questionListRepository;

    public function __construct(
        ScheduleRepository $scheduleRepository,
        QuestionListRepository $questionListRepository
    ){
        $this->scheduleRepository = $scheduleRepository;
        $this->questionListRepository = $questionListRepository;
    }

    public function getSubject($date){
        return $this->scheduleRepository->getSubject($date);
    }

    public function getQuestion($id_exam){
        return $this->questionListRepository->getListQuestion($id_exam);
    }
}