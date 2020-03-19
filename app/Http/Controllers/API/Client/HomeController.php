<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class HomeController extends Controller
{
    public function index()
    {
        $a= Hash::make('1234');
        return view('client.home.index',[ 'title' => 'Thi trung học phổ thông'],['a'=>$a]);
        
    }
}
