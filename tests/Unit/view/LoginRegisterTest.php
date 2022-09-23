<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class LoginRegisterTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */

    public function test_displays_login_page() {
        $this
        ->get(route('u_login'))
        ->assertOk()
        ->assertSee('Log into your account to post jobs');
    }
    public function test_displays_register_page() {
        $this
        ->get(route('u_create'))
        ->assertOk()
        ->assertSee('Create an account to post jobs');
    }
    public function test_register_attempt_fail() {
        $this
        ->post(route('u_store'))
        ->assertRedirect()
        ->assertSessionHas('errors');
    }
    public function test_login_attempt_fail() {

        $this
        ->post(route('u_authenticate'))
        ->assertRedirect()
        ->assertSessionHas('errors');
    }
    public function test_register_works() {
        $credential = [
            'name' => 'test',
            'email' => 'test@test.com',
            'password' => '123456',
        ];
        $this
        ->post(route('u_store', $credential))
        ->assertRedirect('/');
    }
    public function test_login_works() {
        $credential = [
            'email' => 'test@test.com',
            'password' => '123456',
        ];
        $this
        ->post(route('u_authenticate'))
        ->assertRedirect('/');
    }
}
