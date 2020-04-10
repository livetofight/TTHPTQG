<?php

namespace App\Http\Controllers\API\Client;

use App\Http\Controllers\Controller;
use App\Models\Question;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Services\Exam_listService;
use App\Services\Question_listService;

class HomeController extends Controller
{
    private $exam_listService;
    private $question_listService;
    public function __construct(Exam_listService $exam_listService,Question_listService $question_listService)
    {
        $this->exam_listService = $exam_listService;
        $this->question_listService=$question_listService;
    }
    public function index()
    {
        $data['exam_list']=$this->exam_listService->getExam_list();
        $data['question']=$this->question_listService->getQuestion_listById_exam(1);
        return view('client.home.index',[ 'title' => 'Thi trung học phổ thông'],$data);

    }
}
