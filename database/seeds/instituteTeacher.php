<?php

use Illuminate\Database\Seeder;

class instituteTeacher extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $items = [
            
            ['teacher_id' => 1, 'institute_id' => '1','regNumber'=>'153585','status' => '0'],
            ['teacher_id' => 1, 'institute_id' => '2','regNumber'=>'784595','status' => '0'],
            ['teacher_id' => 4, 'institute_id' => '2','regNumber'=>'457512','status' => '1'],
            ['teacher_id' => 6, 'institute_id' => '3','regNumber'=>'587564','status' => '1'],
        ];

        foreach ($items as $item) {
            \App\institute_teacher::create($item);
        }
    }
}
