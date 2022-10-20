<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\People>
 */
class PeopleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'id_no' => $this->faker->ean8(),
            'dob' => $this->faker->date(),
            'office' => $this->faker->word,
            'registered' => rand(0, 1),
        ];
    }
}
