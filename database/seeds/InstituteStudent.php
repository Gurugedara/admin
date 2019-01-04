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
            ['student_id' => 1, 'institute_id' => 1,'course_id'=>1,'regNumber'=>'153585','status' => '0'],
            ['student_id' => 1, 'institute_id' => '2','course_id'=>'2','regNumber'=>'784595','status' => '0'],
            ['student_id' => 3, 'institute_id' => '2','course_id'=>'1','regNumber'=>'457512','status' => '1'],
            ['student_id' => 2, 'institute_id' => '3','course_id'=>'3','regNumber'=>'587564','status' => '1'],
        ];

        foreach ($items as $item) {
            \App\institute_student::create($item);
        }
    }
}
