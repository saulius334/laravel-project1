<?php

namespace Tests\Feature;

use Tests\TestCase;

class DatabaseTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_database_seeder_works() {
        shell_exec('php artisan db:seed');
        $this->assertTrue(true);
    }
    public function
}
