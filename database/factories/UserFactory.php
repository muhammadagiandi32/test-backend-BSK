<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $gender = $this->faker->randomElement(['male', 'female']);
        $city = $this->faker->randomElement(['Jakarta', 'Bandung', 'Yogyakartya', 'Medan', 'Makasar', 'surabaya']);


        return [
            'name' =>  $this->faker->name,
            'birth_date' => $this->faker->date($format = 'Y-m-d', $max = '2010-02-14'),
            'birth_place' => $city,
            'gender' => $gender, // password
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     *
     * @return static
     */
    public function unverified()
    {
        return $this->state(fn (array $attributes) => [
            'email_verified_at' => null,
        ]);
    }
}
