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
        $numcorrect = 0;
        $selected_ans= $request->arr_selected;
        $id_exam=135;
        $data=$this->taskService->getlistquestionbyidexam($id_exam);
        for ($i=0; $i<count($selected_ans);$i++){
            for ($j=0; $j<count($data);$j++){
                if ($selected_ans[$i]['question']==$data[$j]['id'] && $selected_ans[$i]['selected']==$data[$j]['ans_correct']) $numcorrect++;
            }   
        }
        //$returnHTML = view('client.result')->render();
        return view('client.result')->render();
        //return $numcorrect;
    }   
}
