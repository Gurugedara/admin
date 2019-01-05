<?php

use Illuminate\Database\Seeder;

class InstituteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $items = [
            ['id' => 1, 'name' => 'E Soft Metro Campus','address' => 'colombo', 'telephone' => '0115485456'],
            ['id' => 2, 'name' => 'Sipwin','address' => 'Kurunegala', 'telephone' => '0375485456'],
            ['id' => 3, 'name' => 'Pencil Opera','address' => 'Kurunegala', 'telephone' => '0378754254'],
            ['id' => 4, 'name' => 'Java Institute','address' => 'Colombo', 'telephone' => '0378754254'],
            ['id' => 5, 'name' => 'IDM','address' => 'colombo', 'telephone' => '0378754254'],
        ];

        foreach ($items as $item) {
            \App\institute::create($item);
        }
    }
}
