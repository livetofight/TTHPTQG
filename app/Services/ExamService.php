<?php

namespace App\Services;

use App\Models\Exam;
use App\Repositories\ExamRepository;
use App\Repositories\QuestionListRepository;
use App\Repositories\QuestionRepository;

class ExamService
{
    private $examRepository;
    private $questionRepository;
    private $questionListRepository;

    public function __construct(ExamRepository $examRepository,
                                QuestionRepository $questionRepository,
                                QuestionListRepository $questionListRepository)
    {
        $this->examRepository = $examRepository;
        $this->questionRepository = $questionRepository;
        $this->questionListRepository = $questionListRepository;
    }


    public function getListExam()
    {
        return $this->examRepository->getListExam();
    }

    public function getExamList()
    {
        return $this->examRepository->getAll();
    }

    public function createExam( $id_subject, $number, $time){
        $this->examRepository->createExam($id_subject, $number, $time);
        $id_exam=$this->examRepository->getLastID();
        $listIdQuestion = $this->questionRepository->getListID(1);
        // $question_id = $listIdQuestion[array_rand($listIdQuestion,1)];
        // var_dump($question_id);
        $arrayQuestionId=array();
        for($i=0; $i<$number;){
            $question_id = $listIdQuestion[array_rand($listIdQuestion)];
            if(!in_array($question_id, $arrayQuestionId)){
                $arrayQuestionId[$i] = $question_id;
                $i++;
            }
        }
        // print_r($arrayQuestionId);
        // var_dump($arrayQuestionId);
        foreach($arrayQuestionId as $item){
            $key=key($item);
            $val=$item[$key];
            // print_r($val);
            $this->questionListRepository->createExamDetail($id_exam, $val);
        }
    }

    public function updateExam(int $id, array $exam){
        return $this->examRepository->update($id, $exam);
    }

    public function delete(int $id){
        return $this->examRepository->delete($id);
    }
}
