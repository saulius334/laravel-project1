<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ListingTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_displays_home_page() {
        $this
        ->get(route('l_home'))
        ->assertOk()
        ->assertSee('Find or post Laravel jobs');
    }
    // public function test_displays_create_page() {
    //     $user = User::class;
    //     $this
    //     ->get(route('l_create'))
    //     ->actingAs($user)
    //     ->assertOk()
    //     ->assertSee('Post a job to find a developer');
    // }

}
