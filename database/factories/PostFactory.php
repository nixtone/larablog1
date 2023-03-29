<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $name = $this->faker->name(); // title() не годится
        return [
            'name' => $name,
            'translit' => Str::slug($name),
            'anons' => $this->faker->realText(150),
            'text' => $this->faker->realText(800),

        ];
    }
}
