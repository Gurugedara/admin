<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(RoleSeed::class);
        $this->call(UserSeed::class);
        $this->call(StudentSeed::class);
        $this->call(TeacherSeed::class);
        $this->call(InstituteSeeder::class);
        $this->call(InstituteStudent::class);
        $this->call(courseSeed::class);
        $this->call(instituteTeacher::class);
        $this->call(OwnerSeeder::class);
        $this->call(courseInstitute::class);
        $this->call(reviewsSeeder::class);
    }
}
