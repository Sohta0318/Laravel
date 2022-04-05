<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'title' => $this->faker->sentence(5,10),
            'body' => $this->faker->paragraphs(rand(10,15),true),
            'category_id' => 2,
            'photo_id' => 1,
            'user_id' => 1,
            
        ];
    }
}