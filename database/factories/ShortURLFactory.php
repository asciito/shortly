<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ShortURL>
 */
class ShortURLFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $url = $this->faker->url();

        return [
            'url' => $url,
            'slug' => hash('crc32', $url . now()),
            'user_id' => \App\Models\User::factory(),
            'description' => $this->faker->paragraph(),
        ];
    }
}
