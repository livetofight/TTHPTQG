<?php

namespace App\Http\Controllers\API\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Services\TaskService;

use function GuzzleHttp\Promise\task;

class ExamController extends Controller
{
    private $taskService;
    var $data=array();
    var $page_size=2;
    protected $url;

    public function __construct(TaskService $taskService){
        $this->url=config('api.url');
        $this->taskService = $taskService;
    }

    public function index(Request $request)
    {   
        if ($request->ajax()){
            $data = $request->array_selected;
            var_dump($data);
        }
        return view('client.result');
    }

    public function postdata(Request $request){



        $id_exam=[135,1];
        $data=$this->taskService->getQuestion($id_exam);


        
        // $today = today();
        // $id_student = \Session::get('id');
        // $id_subject=$this->taskService->getSubject($today);
        // $id_exam_array=$this->taskService->getIdExamArray($id_subject);
        // $id_exam=$this->taskService->getIdExam($id_student,$id_exam_array);
        
        // $data['student']=$this->taskService->findStudent($id_student);
        //$data['total_record']=$this->taskService->getCountListQuestion($id_exam);


        $ans_selected = $request->all();

        return $data;
    }
}
