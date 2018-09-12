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
            ['id' => 'CIMA', 'name' => 'CIMA'],
            ['id' => 'AAT', 'name' => 'AAT'],
            ['id' => 'GIT', 'name' => 'General Information Technology'],
        ];

        foreach ($items as $item) {
            \App\course::create($item);
        }
    }
}
