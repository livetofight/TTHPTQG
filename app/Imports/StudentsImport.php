<?php

namespace App\Imports;

use App\Models\Student;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Illuminate\Support\Str;
use App\Services\StudentService;
use Maatwebsite\Excel\Facades\Excel;
use App\Imports\StudentsImport;
use Carbon\Carbon;
class StudentsImport implements ToModel, WithHeadingRow
{
    public function headingRow() : int
    {
        return 6;
    }
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Student([
            'id'    => $row['stt'], 
            'username'    => $row['mssv'], 
            'password' => Str::random(),
            'fullname'=>$row['ho_ten'],
            'date_of_birth'=> \PhpOffice\PhpSpreadsheet\Shared\Date::excelToDateTimeObject($row['ngay_sinh'])->format('y-m-d'),
            'cmnd'=>$row['cmnd'] ,
            'gender'=>$row['gioi_tinh'] ,
            'nation'=>$row['dan_toc'] ,
            'id_school'=>$row['ma_truong'],
            'address'=>$row['dia_chi'] ,
            'subject_list'=>$row['mon_thi'],
            'isActive'=>'0',
            'created_at'=>now(),
            'updated_at'=>'null'
        ]);
    }
    public function chunkSize(): int
    {
        return 1000;
    }


}
