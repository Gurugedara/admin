<?php

use Illuminate\Database\Seeder;

class StudentSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $items = [
            
            ['id' => 1, 'nic' => '987004525V','phone' => '0758745254', 'school' => 'National School of Colombo', 'age' => '19', 'olindex' => '45254125','alindex'=>'4572548','user_id' => 4],
            ['id' => 2, 'nic' => '981004525V','phone' => '0718745652', 'school' => 'National School of Gampaha', 'age' => '18', 'olindex' => '45245125','alindex'=>'4582548','user_id' => 5],
            ['id' => 3, 'nic' => '981004578V','phone' => '0718745653', 'school' => 'National School of Horana', 'age' => '21', 'olindex' => '45244525','alindex'=>'4582575', 'user_id' => 6],
            
            
        ];

        foreach ($items as $item) {
            \App\student::create($item);
        }
    }
}
