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

    public function getQuestion($id_exam){
        $question=$this->taskService->getQuestion($id_exam);
        var_dump($question) ;
    }



}
