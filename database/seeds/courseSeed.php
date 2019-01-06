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
            ['id' => 4, 'name' => 'CIMA'],
            ['id' => 3, 'name' => 'General Information Technology'],
            ['id' => 5, 'name' => 'BIT'],
            ['id' => 6, 'name' => 'Cysco Networking'],
        ];

        foreach ($items as $item) {
            \App\course::create($item);
        }
    }
}
