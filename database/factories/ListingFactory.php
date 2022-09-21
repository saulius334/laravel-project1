<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Listing>
 */
class ListingFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $tags = ['Laravel', 'API', 'PHP', 'JavaScript'];
        $tags = array_rand(array_flip($tags), 2);
        $tags = implode(",", $tags);
        return [
            'title' => $this->faker->sentence(),
            'date' => $this->faker->dateTimeThisMonth(),
            'tags' => $tags,
            'company' => $this->faker->company(),
            'email' => $this->faker->companyEmail(),
            'website' => $this->faker->url(),
            'location' => $this->faker->city(),
            'description' => $this->faker->paragraph(5),
        ];
    }
}
