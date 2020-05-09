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

Auth::routes();

//admin route
Route::get('/ad', 'Auth\LoginController@index');

Route::group(['prefix'=>'/admin'], function(){
    Route::group([
        'middleware'=>['prevent-back-history','auth'],
        'namespace'=>'API\Admin',
    ], function(){

        Route::get('/home', 'HomeController@index');

        Route::get('/question', 'ExamController@index');
        Route::get('/question/export','ExportExcelController@exportQuestion')->name('exportQuestion');

        Route::get('/exam', 'ExamController@index');

        Route::get('/listexam', 'ExamController@listexam');

        Route::get('/student', 'StudentController@index');
        Route::post('/student/import', 'StudentController@import');
        Route::get('/student/export', 'StudentController@export');
        Route::get('/student/{id}', 'StudentController@detail');
        Route::post('/student/changeactive', 'StudentController@changeActive');
        Route::post('/student/update', 'StudentController@update');

        Route::get('/question', 'QuestionController@index');
        Route::get('/question/addque', 'QuestionController@add');

        Route::resource('/subject' , 'SubjectController');
        Route::post('/subject','SubjectController@doUpLoad');
        Route::post('/subject/insert','SubjectController@doInsert');
        Route::get('/subject/delete/{id}', 'SubjectController@doDelete');
        Route::post('/subject/update','SubjectController@doUpdate');
    });

    Route::group([
        'namespace'=>'Auth',
    ], function(){

        Route::get('/login', 'LoginController@getLogin')->name('login');

        Route::post('/login', 'LoginController@postLogin');

        Route::get('/logout', 'LogoutController@getLogout');
    });
});

//client
Route::group(['namespace'=>'API\Client',],function(){

    Route::get('/task','TaskController@index');
    Route::get('/task/question','TaskController@getQuestion');
    Route::get('/task/time','TaskController@getTime');

    Route::get('/result','ExamController@index');

    Route::get('/', 'LoginController@index');

    Route::get('/login', 'LoginController@getLogin')->middleware('access');

    Route::get('/logout', 'LoginController@getLogout');

    Route::post('/login', 'LoginController@postLogin');

    Route::get('/home', 'HomeController@index');

    Route::get('/resetcd', 'TaskController@resetcd');
    Route::get('/result','ExamController@index');
    Route::post('/result','ExamController@postdata');
});

// Route::get('/result', 'ResultController@index');



