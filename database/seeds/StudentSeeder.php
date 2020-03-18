<?php

use App\Models\Student;
use Illuminate\Database\Seeder;

class StudentSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $so_stu = 10;

        $mon_hoc = ['Toán', 'Ngữ Văn', 'Anh Văn', 'Lý', 'Hóa', 'Sinh', 'Sử', 'Địa'];

        for ($stu = 0; $stu < $so_stu; $stu++) {
            $student = Student::create([
                'cmnd' => rand(0,9),
                'fullname' => 'FUll_000_' . $stu,
                'gender' => rand(0,1),
                'isActive' => '0',
                'subject_list' => $mon_hoc[rand(0,7)],
                'date_of_birth' => now(),
                'username' => 'Stu_'.$stu,
                'password' =>'Pass_'.rand(0,9),
                'created_at' => now(),
                'updated_at' => now()
            ]);
        }
    }
}
