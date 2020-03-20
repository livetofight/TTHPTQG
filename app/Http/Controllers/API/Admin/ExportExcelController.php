<?php

namespace App\Http\Controllers\API\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Excel;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
class ExportExcelController extends Controller
{
    public function exportStudent(){
        $modelName= 'Student';
        $table_heading=[
        'STT',
        'Username',
        'Password',
        'Họ tên',
        'Giới tính',
        'Năm sinh',
        'CMND',
        'Loại',
        'DS môn thi',
        'Tạo ngày',];
        return Excel::download(new DataExport($modelName,$table_heading),$modelName.'.xlsx');
    }

    public function exportQuestion(){
        $modelName= 'Question';
        $table_heading=[
        'id',
        'Nội dung câu hỏi',
        'Đáp án 1',
        'Đáp án 2',
        'Đáp án 3',
        'Đáp án 4',
        'Đáp án đúng',
        'id môn học',
        'Ngày tạo',
        'Chỉnh sửa',];
        return Excel::download(new DataExport($modelName,$table_heading),$modelName.'.xlsx');
    }
}


//class export
class DataExport implements FromCollection,WithHeadings
{
    private $modelName;
    private $filltable;
    public function __construct(String $modelName, array $filltable)
    {
        $this->modelName= $modelName;
        $this->filltable= $filltable;
    }
    function collection(){
        $yourModel ="App\Models\\$this->modelName";
        $data=$yourModel::all();
        return $data;
    }
    public function headings(): array
    {
        return $this->filltable;
    }
}
