<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Generator as Faker;
use App\User1;

class UserfactoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name(),
            'content' => $this->faker->unique()->safeEmail(),
            'user_id' =>random_int (1,3),
        ];
    }
}
