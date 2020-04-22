<?php

namespace App\Http\Controllers\API\Admin;

use App\Http\Controllers\Controller;
use App\Models\Exam;
use Illuminate\Http\Request;
use App\Services\ExamService;

class ExamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    private $examService;

    public function __construct(ExamService $examService)
    {
        $this->examService = $examService;
    }
    public function index()
    {
        $data['exam']=$this->examService->getListExam();
        return view('admin.exam.exam',[ 'title' => 'Exams'], $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Exam  $Exam
     * @return \Illuminate\Http\Response
     */
    public function show(Exam $Exam)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Exam  $Exam
     * @return \Illuminate\Http\Response
     */
    public function edit(Exam $Exam)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Exam  $Exam
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Exam $Exam)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Exam  $Exam
     * @return \Illuminate\Http\Response
     */
    public function destroy(Exam $Exam)
    {
        //
    }
}
