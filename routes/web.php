<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });
// Route::get('/admin/student','API\Admin\StudentController@index');

Auth::routes();

Route::get('/', 'API\Client\HomeController@index');
//admin route
Route::get('/admin', 'Auth\LoginController@index');

Route::get('/admin/login', 'Auth\LoginController@getLogin');

Route::post('/admin/login', 'Auth\LoginController@postLogin');

Route::get('/admin/logout', 'Auth\LogoutController@getLogout');

Route::get('/admin/home', 'API\Admin\HomeController@index');

Route::get('/admin/question', 'API\Admin\ExamController@index');

Route::get('/admin/exam', 'API\Admin\ExamController@index');

Route::get('/admin/listexam', 'API\Admin\ExamController@listexam');

Route::get('/admin/subject', 'API\Admin\SubjectController@index');

Route::get('/admin/subject/addsub', 'API\Admin\SubjectController@add');

Route::get('/admin/subject', 'API\Admin\SubjectController@index');

Route::get('/admin/student', 'API\Admin\StudentController@index');

Route::post('/admin/student/importfile', 'API\Admin\StudentController@importfile');

Route::get('/admin/student/addstu', 'API\Admin\StudentController@add');

Route::get('/admin/question', 'API\Admin\QuestionController@index');

Route::get('/admin/question/addque', 'API\Admin\QuestionController@add');

Route::post('/admin/subject','API\Admin\SubjectController@doUpLoad');
