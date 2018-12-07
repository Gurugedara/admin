<?php

use Illuminate\Database\Seeder;

class syllabusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $items = [

            ['name'=>'BIT','document'=>'public/syllabus/1p5kfHuSxtBOE7Plarl6reIqrVo99MK1oSJAlsrT.pdf','version'=>'1.0'],
            ['name'=>'AAT','document'=>'public/syllabus/1p5kfHuSxtBOE7Plarl6reIqrVo99MK1oSJAlsrT.pdf','version'=>'3.0'],
            ['name'=>'SIMA','document'=>'public/syllabus/1p5kfHuSxtBOE7Plarl6reIqrVo99MK1oSJAlsrT.pdf','version'=>'13.0'],

        ];

        foreach ($items as $item) {
            \App\Syllabus::create($item);
        }
    }
}
