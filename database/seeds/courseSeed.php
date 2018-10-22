<?php

use Illuminate\Database\Seeder;

class courseSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $items = [
            ['id' => 1, 'name' => 'CIMA'],
            ['id' => 2, 'name' => 'AAT'],
            ['id' => 3, 'name' => 'General Information Technology'],
        ];

        foreach ($items as $item) {
            \App\course::create($item);
        }
    }
}
