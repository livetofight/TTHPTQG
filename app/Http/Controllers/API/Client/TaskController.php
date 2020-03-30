<?php

namespace App\Http\Controllers\API\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

use function GuzzleHttp\Promise\task;

class TaskController extends Controller
{
    public function index()
    {
       return view('client.result');
    }
}
