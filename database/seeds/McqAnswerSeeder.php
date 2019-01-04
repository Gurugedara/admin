<?php

use Illuminate\Database\Seeder;

class McqAnswerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $items = [
            
            ['id' => '1','mcq_id' => '1', 'answer' => '1+1=2', 'status' => '1'],
            ['id' => '2','mcq_id' => '1', 'answer' => '1+3=2', 'status' => '0'],
            ['id' => '3','mcq_id' => '1', 'answer' => '2+2=5', 'status' => '0'],
            ['id' => '4','mcq_id' => '1', 'answer' => 'None of Above.', 'status' => '0' ],
            ['id' => '5','mcq_id' => '2', 'answer' => 'Nikolai Tesla.', 'status' => '0'],
            ['id' => '6','mcq_id' => '2', 'answer' => 'Alexander Graham Bell.', 'status' => '1'],
            ['id' => '7','mcq_id' => '2', 'answer' => 'Adolf Hitler.', 'status' => '0'],
            ['id' => '8','mcq_id' => '2', 'answer' => 'None of Above.', 'status' => '0' ],
            ['id' => '9','mcq_id' => '3', 'answer' => '1*1=1', 'status' => '1'],
            ['id' => '10','mcq_id' => '3', 'answer' => '1/1=0', 'status' => '0'],
            ['id' => '11','mcq_id' => '3', 'answer' => '2+2=3', 'status' => '0'],
            ['id' => '12','mcq_id' => '3', 'answer' => 'None of Above.', 'status' => '0' ],
            ['id' => '13','mcq_id' => '4', 'answer' => 'Everest isthe Highest Mountain in the world.', 'status' => '1'],
            ['id' => '14','mcq_id' => '4', 'answer' => 'Longest river in Sri Lanka is Kelani river.', 'status' => '0'],
            ['id' => '15','mcq_id' => '4', 'answer' => 'Sun is not a star.', 'status' => '0'],
            ['id' => '16','mcq_id' => '4', 'answer' => 'None of Above.', 'status' => '0' ],
        ];
        foreach ($items as $item) {
            \App\McqAnswer::create($item);
        }
    }
}
