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

Route::get('/', 'Client\HomeController@index');
//admin route
Route::get('/admin', 'Auth\LoginController@index');

Route::get('/admin/login', 'Auth\LoginController@getLogin');

Route::post('/admin/login', 'Auth\LoginController@postLogin');

Route::get('/admin/logout', 'Auth\LogoutController@getLogout');

Route::get('/admin/home', 'Admin\HomeController@index');

Route::get('/admin/question', 'Admin\ExamController@index');

Route::get('/admin/exam', 'Admin\ExamController@index');

Route::get('/admin/listexam', 'Admin\ExamController@listexam');

Route::get('/admin/subject', 'Admin\SubjectController@index');

Route::get('/admin/subject/addsub', 'Admin\SubjectController@add');

Route::get('/subject', 'SubjectController@index');

Route::get('/admin/student', 'Admin\StudentController@index');

Route::post('/admin/student/importfile', 'Admin\StudentController@importfile');

Route::get('/admin/student/addstu', 'Admin\StudentController@add');

Route::get('/admin/question', 'Admin\QuestionController@index');

Route::get('/admin/question/addque', 'Admin\QuestionController@add');

Route::get('export_excel', 'Admin\ExportExcelController@export');

Route::post('/admin/subject','Admin\SubjectController@doUpLoad');
