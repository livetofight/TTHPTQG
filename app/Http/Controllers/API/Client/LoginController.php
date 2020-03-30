<?php

namespace App\Http\Controllers\API\Client;

use App\Http\Controllers\Controller;
use App\Models\Student;
use Illuminate\Contracts\Validation\Validator as ValidationValidator;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Session;


class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    // protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function index() {
        return redirect('/login');
    }

    public function getLogin(Request $request) {

        // $data['user']= User::all();
        // var_dump($data);
        //var_dump($data = $request->session()->all());
        return view('client.home.login',['title'=>'Login']);
    }
    public function postLogin(Request $request) {
        // Kiểm tra dữ liệu nhập vào
        $rules = [
            'username' =>'required',
            'password' => 'required'
        ];
        // $messages = [
        //     'username.required' => 'Username là trường bắt buộc',
        //     'password.required' => 'Mật khẩu là trường bắt buộc',
        // ];
        $validator = Validator::make(request()->all(), $rules);


        if ($validator->fails()) {
            // Điều kiện dữ liệu không hợp lệ sẽ chuyển về trang đăng nhập và thông báo lỗi
            return redirect('/')->withErrors($validator)->withInput();
        } else {
            // $arr=[
            // 'username' => $request->username,
            // 'password' => $request->password
            // ];
            $username = Request::get('username');
            $password = Request::get('password');
            if( Student::where('username','=',$username)->where('password','=', $password)->count()==1)
            {
                $student= Student::where('username','=',$username)->where('password','=', $password);
                if($student->isActive==1){
                    // var_dump($student->isActive);
                    $a='ánbcd';
                    var_dump($a);
                    Session::flash('error', 'Tài khoản đang đăng nhập trên thiết bị khác!');
                    $result['status']=-1;
                }
                else{
                    $student->isActive=1;
                    $result['status']=1;
                }
            }
             else {
                $result['status']=0;
                $result['uesrname']=$username;
                $result['password']=$password;
            }
            return json_encode($result);
            // if(Student::where('username','=',$username)->where('isActive','=',1)){
            //     $result['status']=-1;
            // }
            // elseif(Student::where('username','=',$username)->where('password','=',$password)->count()==1){
            //     $result['status']=1;
            // } else{
            //     $result['status']=0;
            // }
            // return json_encode($result);
        }
    }
}
