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
            
            ['studentid' => 1, 'instituteid' => '1','regNumber'=>'153585','status' => '0'],
            ['studentid' => 1, 'instituteid' => '2','regNumber'=>'784595','status' => '0'],
            ['studentid' => 4, 'instituteid' => '2','regNumber'=>'457512','status' => '1'],
            ['studentid' => 6, 'instituteid' => '3','regNumber'=>'587564','status' => '1'],
        ];

        foreach ($items as $item) {
            \App\studentInstitute::create($item);
        }
    }
}
