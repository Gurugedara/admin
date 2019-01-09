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
        $testUser = factory(\App\User::class)->make([
            'firstname' => 'kamal',
        ]);
        
        $this->assertInstanceOf(\App\User::class,$testUser);
        $this->assertEquals("kamal",$testUser->firstname);
    }
    public function testStudent(){
        $testStudent = factory(\App\student::class)->make([
            'school' => 'mySchool',
        ]);
        $this->assertInstanceOf(\App\student::class,$testStudent);
        $this->assertEquals("mySchool",$testStudent->school);
    }
    public function testInstitute(){
        $testInstitute = factory(\App\institute::class)->make([
            'name' => 'myInstitute',
        ]);
        $this->assertInstanceOf(\App\institute::class,$testInstitute);
        $this->assertEquals("myInstitute",$testInstitute->name);
    }
}
