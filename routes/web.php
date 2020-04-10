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
 Route::get('/admin/question/export','API\Admin\ExportExcelController@exportQuestion')->name('exportQuestion');
// Route::get('/admin/student','API\Admin\StudentController@index');

Auth::routes();

//client route
Route::get('/', 'API\Client\LoginController@index');

Route::get('/login', 'API\Client\LoginController@getLogin');

Route::post('/login', 'API\Client\LoginController@postLogin');

Route::get('/home', 'API\Client\HomeController@index');

//admin route
Route::get('/ad', 'Auth\LoginController@index');

Route::get('/admin/login', 'Auth\LoginController@getLogin');

Route::post('/admin/login', 'Auth\LoginController@postLogin');

Route::get('/admin/logout', 'Auth\LogoutController@getLogout');

Route::get('/admin/home', 'API\Admin\HomeController@index');

Route::get('/admin/question', 'API\Admin\ExamController@index');

Route::get('/admin/exam', 'API\Admin\ExamController@index');

Route::get('/admin/listexam', 'API\Admin\ExamController@listexam');

Route::get('/admin/subject/addsub', 'API\Admin\SubjectController@add');

Route::get('/admin/student', 'API\Admin\StudentController@index');
Route::post('/admin/student/import', 'API\Admin\StudentController@import');
Route::get('/admin/student/addstu', 'API\Admin\StudentController@add');

Route::get('/admin/question', 'API\Admin\QuestionController@index');

Route::get('/admin/question/addque', 'API\Admin\QuestionController@add');

Route::post('/admin/subject','API\Admin\SubjectController@doUpLoad');

//subject
Route::resource('admin/subject' , 'API\Admin\SubjectController');

Route::post('/admin/subject/insert','API\Admin\SubjectController@doInsert');

Route::get('/admin/subject/delete/{id}', 'API\Admin\SubjectController@doDelete');

Route::post('/admin/subject/update','API\Admin\SubjectController@doUpdate');

//client
Route::get('/task','API\Client\TaskController@index');
Route::get('/task/question','API\Client\TaskController@getQuestion');
Route::get('/task/time','API\Client\TaskController@getTime');

Route::get('/result','API\Client\ExamController@index');
