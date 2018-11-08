<?php

use Illuminate\Database\Seeder;

class reviewCommentSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $items = [
            ['comment' => 'I agree with this','user_id'=>'1','type'=>'1','review_id'=>'1'],
            ['comment' => 'Are you kidding me?','user_id'=>'2','type'=>'1','review_id'=>'1'],
            ['comment' => 'Sorry, I dont agree with you','user_id'=>'1','type'=>'1','review_id'=>'1'],
        ];

        foreach ($items as $item) {
            \App\review_comment::create($item);
        }
    }
}
