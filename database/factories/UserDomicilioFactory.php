<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class UserDomicilioFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id' => User::all()->random()->id,
            'domicilio' => $this->faker->address(),
            'numero_exterior' => $this->faker->numberBetween(1,1800),
            'colonia' => $this->faker->word(),
            'cp' => $this->faker->postcode(),
            'ciudad' => $this->faker->city(),
        ];
    }
}
