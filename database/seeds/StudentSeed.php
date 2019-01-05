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
            ['id' => 4, 'nic' => '987004527V','phone' => '0758745254', 'school' => 'Ananda College Colombo 10', 'age' => '18', 'olindex' => '45254125','alindex'=>'4572548','user_id' => 7],
            ['id' => 5, 'nic' => '985504520V','phone' => '0718745652', 'school' => 'Visaka Vidyalaya Colombo 05', 'age' => '18', 'olindex' => '45245125','alindex'=>'4582548','user_id' => 8],
            ['id' => 6, 'nic' => '983604525V','phone' => '0758745254', 'school' => 'National School of Colombo', 'age' => '19', 'olindex' => '45254125','alindex'=>'4572548','user_id' => 9],
            ['id' => 7, 'nic' => '98704525V','phone' => '0718745652', 'school' => 'National School of Gampaha', 'age' => '18', 'olindex' => '45245325','alindex'=>'4582548','user_id' => 10],
            ['id' => 8, 'nic' => '987074525V','phone' => '07587645254', 'school' => 'National School of Colombo', 'age' => '19', 'olindex' => '4554125','alindex'=>'4572548','user_id' => 11],
            ['id' => 9, 'nic' => '981064525V','phone' => '0718778652', 'school' => 'National School of Gampaha', 'age' => '18', 'olindex' => '45245125','alindex'=>'4582548','user_id' => 12],
            
            
        ];

        foreach ($items as $item) {
            \App\student::create($item);
        }
    }
}
