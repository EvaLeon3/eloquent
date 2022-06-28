<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class PostFactory extends Factory
{
    
    public function definition()
    {
        return [
            'user_id' => rand(1, 4),
            'title'=> $this->faker->sentence
        ];
    }
}
