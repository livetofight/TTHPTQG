<?php

namespace App\Http\Controllers\API\Client;

use App\Http\Controllers\Controller;
use App\Services\ExamService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Services\TaskService;
use Carbon\Carbon;

use function GuzzleHttp\Promise\task;

class TaskController extends Controller
{
    private $taskService;
    private $examService;
    var $data=array();
    var $page_size=2;
    protected $url;

    public function __construct(TaskService $taskService,ExamService $examService){
        $this->url=config('api.url');
        $this->taskService = $taskService;
        $this->examService = $examService;
    }
    public function index(){
        $id = \Session::get('id');
        if($id==null){
            return redirect('/');
        }
        $today = today();
        $subject=$this->taskService->getidSubject($today);
        $subjectTime=$this->examService->getExamTime($subject);
    $over_time=now()->addMinute($subjectTime['time']);
        if (\Session::has('over_time')) {
            $data['over_time']= \Session::get('over_time');
        }
        else{
            $time = \Session::put('over_time',$over_time);
            $data['over_time']= \Session::get('over_time');
        }
        if($subject==null){
            return view('client.erorr',[ 'title' => 'Chưa đến ngày THI']);
        }
        else return view('client.task',$data);
    }

    public function getQuestion(){
        $today = today();
        $id_student = \Session::get('id');
        $id_subject=$this->taskService->getidSubject($today);
        $id_exam_array=$this->taskService->getIdExamArray($id_subject);
        $id_exam=$this->taskService->getIdExam($id_student,$id_exam_array);
        $data=$this->taskService->getQuestion($id_exam);
        $data['student']=$this->taskService->findStudent($id_student);
        $data['total_record']=$this->taskService->getCountListQuestion($id_exam);
        $data['page_size']=$this->page_size;
        $data['time_start']=$this->taskService->getTimeSubject($id_subject);
        echo json_encode($data);
    }

    public function resetcd()
    {
        \Session::pull('over_time', 'default');
        return ('<a href="home">xóa thành công</a>');
    }
}
