<?php

namespace App\Http\Controllers\API\Client;

use App\Http\Controllers\Controller;
use App\Models\Question;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Services\TaskService;
use App\Services\Question_listService;
use App\Services\StudentService;
use Carbon\Carbon;

class HomeController extends Controller
{
    private $taskService;
    private $studentService;
    public function __construct(
        StudentService $studentService,
        TaskService $taskService      
    )
    {
        $this->studentService=$studentService;
        $this->taskService = $taskService;
    }
    public function index()
    {
        $today = today();
        $id = \Session::get('id');
        $id_subject=$this->taskService->getSubject($today);
        if($id==null){
            return redirect('/');
        }
        if($id_subject->isEmpty()){
            return view('client.error');
        }
        $data['student']=$this->studentService->findStudent($id);
        $data['name_subject']=$this->taskService->getNameSubject($id_subject);
        return view('client.home.index',$data);

    }
}
