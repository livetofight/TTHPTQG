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

    public function __construct(TaskService $taskService){
        $this->taskService = $taskService;
    }
    public function index(){
        $today = Carbon::today();
        $subject=$this->taskService->getSubject($today);
        if($subject==null){
            return view('client.erorr',[ 'title' => 'Chưa đến ngày THI']);
        } else return view('client.task');
    }

    public function getQuestion(){
        $today = Carbon::today();
        $subject=$this->taskService->getSubject($today);
        $id_exam=10;
        $data=$this->taskService->getQuestion($id_exam);
        $data['total_record']=count($data);
        $data['page_size']=$this->page_size;
        $data['time_start']= $this->taskService->getTimeSubject($subject);
        echo json_encode($data);
    }








}
