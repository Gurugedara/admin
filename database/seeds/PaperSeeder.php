<?php
use Illuminate\Database\Seeder;
class McqSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $items = [
            
            ['id' => '1','paper_id' => '1', 'description' => 'What is the correct Statement?', 'marks' => '5'],
            ['id' => '2','paper_id' => '1', 'description' => 'Who invented the Telephone?', 'marks' => '5'],
            ['id' => '3','paper_id' => '2', 'description' => 'What is the correct Statement?', 'marks' => '4'],
            ['id' => '4','paper_id' => '2', 'description' => 'What is the correct Statement?', 'marks' => '3' ],
        ];
        foreach ($items as $item) {
            \App\Mcq::create($item);
        }
    
    }
}