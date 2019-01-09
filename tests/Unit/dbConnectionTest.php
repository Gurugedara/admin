<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class dbConnectionTest extends TestCase
{
    use RefreshDatabase;
    use WithFaker;
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testUser()
    {
        $userData = [
            'firstname' => $this->faker->name,
            'lastname' => $this->faker->name, 
            'email' => $this->faker->email, 
            'password' => bcrypt($this->faker->word),
            'avatar'=>'/admin/img/profile-pics/2.jpg', 
            'role_id' => 25,
        ];

        $testUser = \App\User::create($userData);
        
        $this->assertInstanceOf(\App\User::class,$testUser);
        $this->assertEquals($userData['firstname'],$testUser->firstname);
    }
    public function testStudent(){
        $studentData = [
            'nic' => $this->faker->word,
            'phone' => $this->faker->word,
            'school' => $this->faker->word,
            'age' => $this->faker->age,
        ];
    }
}
