<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin\Student;
use Excel;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class ExportExcelController extends Controller
{
    public function export(){
        return Excel::download(new DataExport,'user.xlsx');
    }

}
class DataExport implements FromCollection,WithHeadings{

    function collection(){
        $data=Student::all();
        return $data;
    }
    public function headings(): array
    {
        return [
            'STT',
            'Username',
            'Password',
            'Họ tên',
            'Giới tính',
            'Năm sinh',
            'CMND',
            'Loại',
            'DS môn thi',
            'Tạo ngày',
        ];
    }
}
