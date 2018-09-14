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
            ['student_id' => 1, 'institute_id' => '1','course_id'=>'CIMA','regNumber'=>'153585','status' => '0'],
            ['student_id' => 1, 'institute_id' => '2','course_id'=>'GIT','regNumber'=>'784595','status' => '0'],
            ['student_id' => 4, 'institute_id' => '2','course_id'=>'CIMA','regNumber'=>'457512','status' => '1'],
            ['student_id' => 6, 'institute_id' => '3','course_id'=>'AAT','regNumber'=>'587564','status' => '1'],
        ];

        foreach ($items as $item) {
            \App\institute_student::create($item);
        }
    }
}
