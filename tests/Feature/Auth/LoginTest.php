<?php

namespace Tests\Feature\Auth;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class LoginTest extends TestCase
{
    use RefreshDatabase;
    use WithFaker;
    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_user_can_view_a_login_form(){
        $reponse=$this->get('/login');

        $reponse->assertSuccessful();
        $reponse->assertViewIs('auth.login');
    }
    public function test_user_cannot_view_a_login_form_when_authenticated(){
        $user = factory(\App\User::class)->make();
        $response = $this->actingAs($user)->get('/login');
        $response->assertRedirect('/admin/home');
    }
    public function test_user_can_login_with_correct_credentials(){
        $user = factory(\App\User::class)->create([
            'password' => bcrypt($password= 'secret'),
        ]);

        $response = $this->post('/login',[
            'email' => $user->email,
            'password' => $password,
        ]);

        $response -> assertRedirect('/admin/dashboard');
        $this->assertAuthenticatedAs($user);
    }
    public function test_user_cannot_login_with_incorrect_password(){
        $user = factory(\App\User::class)->create([
            'password' => bcrypt('secret'),
        ]);

        $response = $this->from('/login')->post('login',[
            'email' => $user->email,
            'password' => 'invalied password',
        ]);

        $response->assertRedirect('/login');
        $response->assertSessionHasErrors('email');
        $this->assertTrue(session()->hasOldInput('email'));
        $this->assertFalse(session()->hasOldInput('password'));
        $this->assertGuest();
    }
}
