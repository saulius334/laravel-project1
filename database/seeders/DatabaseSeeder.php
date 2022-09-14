<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Listing;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::factory(10)->create();
        Listing::factory(6)->create();

        // Listing::create([
        //         'title' => 'Laravel Senior Developer',
        //         'tags' => 'laravel, javascript',
        //         'company' => 'BIT',
        //         'location' => 'Vilnius, LT',
        //         'email' => 'bit@bit.lt',
        //         'website' => 'https://www.bit.lt',
        //         'description' => 'best coding school EUW, come learn coding'
        // ]);
        // Listing::create([
        //     'title' => 'PHP Senior Developer',
        //     'tags' => 'PHP, javascript, laravel',
        //     'company' => 'BIT',
        //     'location' => 'Vilnius, LT',
        //     'email' => 'bit@bit.lt',
        //     'website' => 'https://www.bit.lt',
        //     'description' => 'best coding school EUW, come learn coding'
        // ]);

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
