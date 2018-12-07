<?php

use Illuminate\Database\Seeder;

class moduleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $items = [

            ['name'=>'Introduction to ICT','description'=>'Brief Introduction about current usage of ICT',
                'syllabus_id'=>'1','learning_points'=>'get knowledge about what we learn'],
            ['name'=>'Number System','description'=>'Number systems used in computers',
                'syllabus_id'=>'1','learning_points'=>'Binary, Octal, HexaDecimal Conversions'],
            ['name'=>'Accounting','description'=>'Accounting calculations',
                'syllabus_id'=>'2','learning_points'=>'Learn how to balance accounts'],
        ];

        foreach ($items as $item) {
            \App\Module::create($item);
        }
    }
}
