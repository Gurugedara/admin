<?php

use Illuminate\Database\Seeder;

class reviewsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $items = [
            ['comment' => 'Hi this is first comment','stars'=>'4','student_id'=>'1','institute_id'=>'1','status'=>'0'],
            ['comment' => 'I love to comment','stars'=>'5','student_id'=>'2','institute_id'=>'1','status'=>'1','up'=>25,'down'=>45],
            ['comment' => 'This is a great place to learn','stars'=>'2','student_id'=>'2','institute_id'=>'2','status'=>'0','up'=>112,'down'=>15],
            ['comment' => 'I love this place','stars'=>'3','student_id'=>'3','institute_id'=>'2','status'=>'1','up'=>45,'down'=>25],
            ['comment' => 'Teachers are awesome','stars'=>'4','student_id'=>'4','institute_id'=>'3','status'=>'0','up'=>115,'down'=>85],
        ];

        foreach ($items as $item) {
            \App\review::create($item);
        }
    }
}
