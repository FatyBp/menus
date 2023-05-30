<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class TrabajoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            "role"=>$this->faker->randomElement(['empleado', 'jefe', 'subjefe']),
            "telefono"=>$this->faker->phoneNumber()
        ];
    }
}
