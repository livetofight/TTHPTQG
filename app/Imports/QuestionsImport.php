<?php

namespace App\Imports;

use App\Models\Question;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithStartRow;

class QuestionsImport implements ToModel,WithStartRow
{
    public function model(array $row)
    {
        return new Question([
            'id_subject'        =>  $row[1],
            'question_content'  =>  $row[2],
            'ans_1'             =>  $row[3],
            'ans_2'             =>  $row[4],
            'ans_3'             =>  $row[5],
            'ans_4'             =>  $row[6],
            'ans_correct'       =>  $row[7],

        ]);
    }
    public function startRow(): int
    {
        return 2;
    }

}
