<?php

namespace App\Http\Controllers\API\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Excel;
class ExportExcelController extends Controller
{
    public function exportStudent(){
        $modelName= 'Student';
        $filltable=['STT',
        'Username',
        'Password',
        'Họ tên',
        'Giới tính',
        'Năm sinh',
        'CMND',
        'Loại',
        'DS môn thi',
        'Tạo ngày',];
        return Excel::download(new DataExport($modelName,$filltable),$modelName.'.xlsx');
    }
}

use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

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
