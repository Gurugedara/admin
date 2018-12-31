<?php

use Illuminate\Database\Seeder;

class courseInstitute extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $items = [
            ['institute_id' => 1, 'course_id' => 2, 'syllabus_id' => '2'],
            ['institute_id' => 1, 'course_id' => 3, 'syllabus_id' => '1'],
            ['institute_id' => 2, 'course_id' => 1, 'syllabus_id' => '3'],
            ['institute_id' => 3, 'course_id' => 1, 'syllabus_id' => '3'],
        ];

        foreach ($items as $item) {
            \App\course_institute::create($item);
        }
    }
}
