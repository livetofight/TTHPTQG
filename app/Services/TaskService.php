<?php

namespace App\Services;

use App\Repositories\ScheduleRepository;
use App\Repositories\QuestionListRepository;
use App\Repositories\ExamRepository;
use App\Repositories\ExamListRepository;
use App\Repositories\SubjectRepository;
use App\Repositories\StudentRepository;

class TaskService
{
    private $scheduleRepository;
    private $questionListRepository;
    private $examRepository;
    private $examListRepository;
    private $subjectRepository;
    private $studentRepository;

    public function __construct(
        ScheduleRepository $scheduleRepository,
        QuestionListRepository $questionListRepository,
        ExamRepository $examRepository,
        ExamListRepository $examListRepository,
        SubjectRepository $subjectRepository,
        StudentRepository $studentRepository
    ){
        $this->scheduleRepository = $scheduleRepository;
        $this->questionListRepository = $questionListRepository;
        $this->examRepository = $examRepository;
        $this->examListRepository = $examListRepository;
        $this->subjectRepository = $subjectRepository;
        $this->studentRepository=$studentRepository;
    }

    public function getIdSubject(){
        return $this->scheduleRepository->getIdSubject();
    }

    public function getIdExamArray($id_subject){
        return $this->examRepository->getIdExamArray($id_subject);
    }

    public function getIdExam($id_student, $id_exam_array){
        return $this->examListRepository->getIdExam($id_student, $id_exam_array);
    }

    public function getQuestion($id_exam){
        return $this->questionListRepository->getListQuestion($id_exam);
    }

    public function getCountListQuestion($id_exam){
        return $this->questionListRepository->getCountListQuestion($id_exam);
    }

    public function getTimeSubject($id_subject){
        return $this->examRepository->getTimeSubject($id_subject);
    }


    public function findStudent($id){
        return $this->studentRepository->find($id);
    }

    public function getlistquestionbyidexam($id_exam){
        return $this->questionListRepository->get_list_question($id_exam);
    }

}
