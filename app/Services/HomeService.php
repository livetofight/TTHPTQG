<?php

namespace App\Services;
use App\Repositories\ScheduleRepository;
use App\Repositories\StudentRepository;
use App\Repositories\SubjectRepository;
use App\Repositories\ExamRepository;

class HomeService
{
    private $scheduleRepository;
    private $studentRepository;
    private $subjectRepository;
    private $examRepository;

    public function __construct(
        ScheduleRepository $scheduleRepository,
        StudentRepository $studentRepository,
        SubjectRepository $subjectRepository,
        ExamRepository $examRepository
    )
    {
        $this->studentRepository = $studentRepository;
        $this->scheduleRepository = $scheduleRepository;
        $this->subjectRepository = $subjectRepository;
        $this->examRepository = $examRepository;
    }

    public function getSubject($date){
        return $this->scheduleRepository->getSubject($date);
    }

    public function findStudent($id){
        return $this->studentRepository->find($id);  
    }

    public function getNameSubject($id_subject){
        return $this->subjectRepository->find($id_subject);
    }

    public function getNT($id_subject){
        return $this->examRepository->getNT($id_subject);
    }

    public function getTest($date){
        return $this->scheduleRepository->getTest($date);
    }

    

}