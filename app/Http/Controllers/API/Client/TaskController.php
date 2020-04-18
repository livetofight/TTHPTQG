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
        if($id==null){
            return redirect('/');
        }
        $today = today();
        $subject=$this->taskService->getSubject($today);
        if($subject==null){
            return view('client.erorr',[ 'title' => 'Chưa đến ngày THI']);
        } else return view('client.task');
    }
    
    public function getQuestion(){
        $today = today();
        $id_student = \Session::get('id');
        $id_subject=$this->taskService->getSubject($today);
        $id_exam=$this->taskService->getIdExam($id_student,$id_subject);
        $data=$this->taskService->getQuestion($id_exam);
        $data['student']=$this->taskService->findStudent($id_student);
        $data['total_record']=$this->taskService->getCountListQuestion($id_exam);
        $data['page_size']=$this->page_size;
        $data['time_start']=$this->taskService->getTimeSubject($id_subject);
        echo json_encode($data);
    }
}
