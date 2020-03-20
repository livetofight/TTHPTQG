<?php

namespace App\Http\Controllers\API\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class HomeController extends Controller
{
    public function index()
    {
        $a= Hash::make('PW_0');
        return view('client.home.index',[ 'title' => 'Thi trung học phổ thông'],['a'=>$a]);

    }
}
