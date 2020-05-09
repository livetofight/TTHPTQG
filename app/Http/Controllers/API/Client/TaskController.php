<?php

namespace App\Http\Controllers\API\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Services\TaskService;
use Carbon\Carbon;

use function GuzzleHttp\Promise\task;

class TaskController extends Controller
{
    private $taskService;
    var $data=array();
    var $page_size=2;
    protected $url;

    public function __construct(TaskService $taskService){
        $this->url=config('api.url');
        $this->taskService = $taskService;
    }
    public function index(){
        $id = \Session::get('id');
        $id_subject=$this->taskService->getIdSubject();
        if($id_subject==null){
            $notification['title']='Chưa đến ngày thi';
            $notification['text']='Vui lòng quay trở lại trong thời gian thi.';
            return view('client.error',[ 'title' => 'Chưa đến ngày thi'],$notification);
        } else return view('client.task');
    }
    
    public function getQuestion(){
        $id_student = \Session::get('id');
        $id_subject=$this->taskService->getIdSubject();
        $id_exam_array=$this->taskService->getIdExamArray($id_subject);
        $id_exam=$this->taskService->getIdExam($id_student,$id_exam_array);
        $data=$this->taskService->getQuestion($id_exam);
        $data['student']=$this->taskService->findStudent($id_student);
        $data['total_record']=$this->taskService->getCountListQuestion($id_exam);
        $data['page_size']=$this->page_size;
        $data['time_start']=$this->taskService->getTimeSubject($id_subject);
        echo json_encode($data);
        
    }
}
