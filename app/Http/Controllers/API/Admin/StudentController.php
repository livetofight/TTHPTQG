<?php

namespace App\Http\Controllers\API\Admin;

use App\Http\Controllers\Controller;
use App\Models\Student;
use Illuminate\Http\Request;
use App\Services\StudentService;
use Maatwebsite\Excel\Facades\Excel;
use App\Imports\StudentsImport;
use App\Exports\StudentsExport;
use Carbon\Carbon;
use DateTime;

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
        $data['student']=$this->studentService->getListStudent();
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

    public function export(){
        return Excel::download(new StudentsExport, 'students'.date('dmY').'.xlsx');
    }


    public function changeActive(Request $request){

        try {
            $result['status']=$this->studentService->changeExam($request->id);
            $result['status_value']=" Đổi trạng thái thành công";

        } catch (ModelNotFoundException $exception) {
            $result['status_value']=$exception->getMessage();
            $result['status']=0;
            //return back()->withError($exception->getMessage())->withInput();
        }
        return json_encode($result);
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Student  $Student
     * @return \Illuminate\Http\Response
     */
    public function detail($id){
        $data['student']=$this->studentService->findStudent($id);
        $data['id_school']=$this->studentService->findStudentSchool($id);
        $data['school']=$this->studentService->getAllSchool();
        $data['id_subject']=$this->studentService->findStudentSubject($id);
        $data['subject']=$this->studentService->getAllSubject();
        return view('admin.student.student-detail',$data);
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Student  $Student
     * @return \Illuminate\Http\Response
     */


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Student  $Student
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {

        $data = $request->all();
        $data['date_of_birth']= new DateTime($request->date_of_birth);
        $student = $this->studentService->update($request->id, $data);
        return json_encode($student);
    }


}
