<?php

use Illuminate\Database\Seeder;

class OwnerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $items = [
            ['institute_id' => '1','user_id'=>'1'],
            ['institute_id' => '2','user_id'=>'1'],
            ['institute_id' => '3','user_id'=>'1'],
        ];

        foreach ($items as $item) {
            \App\institute_owner::create($item);
        }
    }
}
