<?php

namespace App\Http\Controllers\API\Admin;

use App\Http\Controllers\Controller;
use App\Models\Student;
use Illuminate\Http\Request;
use App\Services\StudentService;
use Maatwebsite\Excel\Facades\Excel;
use App\Imports\StudentsImport;
use Carbon\Carbon;

class StudentController extends Controller
{
    private $studentService;

    public function __construct(StudentService $studentService)
    {
        $this->studentService = $studentService;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $today = Carbon::today();
        $data['student']=$this->studentService->getListStudent($today);
        return view('admin.student.student', $data);
    }


    public function import(Request $request) 
    {  
        if($request->file('inputFile')){
            $file=$request->file('inputFile');
            Excel::import(new StudentsImport, $file); 
            $result['status_value']=" Nhập File thành công";
            $result['status']=1;
        } else{
            $result['status_value']=" Lỗi nhập File";
            $result['status']=0;
        }
        
        return json_encode($result);
    } 
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Student  $Student
     * @return \Illuminate\Http\Response
     */
    public function edit(Student $Student)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Student  $Student
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Student $Student)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Student  $Student
     * @return \Illuminate\Http\Response
     */
    public function destroy(Student $Student)
    {
        
    }


}
