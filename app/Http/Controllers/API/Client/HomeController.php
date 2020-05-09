<?php

namespace App\Http\Controllers\API\Client;

use App\Http\Controllers\Controller;
use App\Models\Question;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Services\HomeService;
use App\Services\StudentService;
use Carbon\Carbon;

class HomeController extends Controller
{
    private $homeService;
    public function __construct(HomeService $homeService)
    {
        $this->homeService=$homeService;
    }
    public function index()
    {
        $today = today();
        $id = \Session::get('id');
        $id_subject=$this->homeService->getSubject($today);
        if($id==null){
            return redirect('/');
        }
        if($id_subject != null){
            $data['student']=$this->homeService->findStudent($id);
            $data['name_subject']=$this->homeService->getNameSubject($id_subject);
            $data['subject']=$this->homeService->getNT($id_subject);
            $data['date']=$this->homeService->getTest($today);
            //echo $data['subject'];
            echo "anc";
            return view('client.home.index',$data);
        }
        return view('client.error');

    }
}
