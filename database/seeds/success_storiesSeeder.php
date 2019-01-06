<?php

use Illuminate\Database\Seeder;

class success_storiesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $items = [
            
            ['id' => 1, 'student_id' => 1,'institute_id' => '1', 'image' => 'public/stories/qn3PA0A2fXEhgVNQmMhQD2Wz3t2XJgEJzLE8Lvws.jpeg', 'description' => 'I learned not only Subject but also learned How to live in society. Im very thank full for what i gained from this institute.'],
            ['id' => 2, 'student_id' => 2,'institute_id' => '2', 'image' => 'public/stories/46MCUTNiWdrdCSDhcEiFflJ5LsUlbwK1LpkGAOen.jpeg', 'description' => 'I learned not only Subject but also learned How to live in society. Im very thank full for what i gained from this institute.'],
            ['id' => 3, 'student_id' => 3,'institute_id' => '3', 'image' => 'public/stories/K0ygrB0EcBWWKgDkOYtM2VDu4KemQ0j9DVf3qcmZ.jpeg', 'description' => 'I learned not only Subject but also learned How to live in society. Im very thank full for what i gained from this institute.'],
    
        ];

        foreach ($items as $item) {
            \App\SuccessStory::create($item);
        }
    }
}
