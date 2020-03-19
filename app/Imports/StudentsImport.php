<?php

namespace App\Imports;

use App\Student;
use Maatwebsite\Excel\Concerns\ToModel;
use Illuminate\Support\Str;

class StudentsImport implements ToModel
{
    
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Student([
            'id'     => $row[1],
            'username'    => $row[2], 
            'password' => Str::random(),
            'fullname'=>$row[3],
            'cmnd'=>$row[4],
            'date_of_birth'=>$row[5],
            'gender'=>$row[6],
            'created_at'=>now()

        ]);
    }


}
