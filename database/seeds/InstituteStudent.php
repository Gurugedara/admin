<?php

use Illuminate\Database\Seeder;

class InstituteStudent extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $items = [
            
            ['id' => 1, 'nic' => '987004525V','phone' => '0758745254', 'school' => 'National School of Colombo', 'age' => '19', 'olindex' => '45254125','alindex'=>'4572548','user' => 4],
        ];

        foreach ($items as $item) {
            \App\student::create($item);
        }
    }
}
