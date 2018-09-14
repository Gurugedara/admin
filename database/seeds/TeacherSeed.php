<?php

use Illuminate\Database\Seeder;

class TeacherSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $items = [
            
            ['nic' => '987004528V','phone' => '0758745254', 'school' => 'National School of Colombo', 'education' => 'Diploma', 'subjects' => 'Information Technology','user_id'=>'3'],
            ['nic' => '987004529V','phone' => '0758745255', 'school' => 'National School of Colombo', 'education' => 'Digree', 'subjects' => 'Programming','user_id'=>'3'],
            ['nic' => '987004530V','phone' => '0758745256', 'school' => 'National School of Colombo', 'education' => 'A/L', 'subjects' => 'Maths','user_id'=>'3'],
            ['nic' => '987004531V','phone' => '0758745257', 'school' => 'National School of Colombo', 'education' => 'High Diploma', 'subjects' => 'Maths,Financial Studies','user_id'=>'3'],
        ];

        foreach ($items as $item) {
            \App\teacher::create($item);
        }
    }
}
