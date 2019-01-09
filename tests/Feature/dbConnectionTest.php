<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class dbConnectionTest extends TestCase
{
    use RefreshDatabase;
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testExample()
    {
        $data = ['id' => 1, 'firstname' => 'Sarath','lastname' => 'Perera', 'email' => 'admin@admin.com', 'password' => '$2y$10$DHKFHDI0EMIRoJzCohQbTOFfBKstTRGSo7lI61IQbSu8Vniyh3rCi','avatar'=>'/admin/img/profile-pics/2.jpg', 'role_id' => 1,];

        $testUser = \App\User::create($data);
        
        $user = \App\User::first();
        $this->assertEquals($user,null);
    }
}
