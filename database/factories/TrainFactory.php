<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class TrainFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'company' => fake()->company(),
           'dep_station' => fake()->city(),
           'arr_station' => fake()->city(),
            'dep_time' => fake()->time(),
            'arr_time' => fake()->time(),
            'train_code' => fake()->randomNumber(5, true),
            'train_wagons' => fake()->randomDigitNotNull(),
            'on_train' => rand(0, 1),
            'deleted' => rand(0, 1),
        ];
    }
}
