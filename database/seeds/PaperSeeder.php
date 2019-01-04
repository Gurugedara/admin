<?php


use Illuminate\Database\Seeder;

class PaperSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $items = [
            
            ['id' => '1','name' => 'Spot Test1', 'course_id' => '1', 'institute_id' => '1','user_id' => '1', 'marks' => '100'],
            ['id' => '2','name' => 'Spot Test2', 'course_id' => '1', 'institute_id' => '2','user_id' => '1', 'marks' => '100'],
        ];

        foreach ($items as $item) {
            \App\Paper::create($item);
        }
    }
}
