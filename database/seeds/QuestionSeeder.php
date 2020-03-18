<?php

use App\Models\Question;
use Illuminate\Database\Seeder;

class QuestionSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $so_que = 100;

        $correct = ['A', 'B', 'C', 'D'];



        for ($que = 0; $que < $so_que; $que++) {
            $question = Question::create([
                'ans_1' => 'A',
                'ans_2' => 'B',
                'ans_3' => 'C',
                'ans_4' => 'D',
                'ans_correct' => $correct[rand(0,3)],
                'id_subject' => rand(1, 8),
                'question_content' => 'Content_'.$que,
                'created_at' => now(),
                'updated_at' => now()
            ]);
        }
    }
}
