<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class MenuFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            "nacimiento"=>$this->faker->date(),
            "direccion"=>$this->faker->address()
        ];
    }
}
