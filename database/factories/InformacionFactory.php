<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class InformacionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            "paterno" =>$this->faker->firstName(),
            "materno" => $this->faker->lastName(),
            "sexo"=>$this->faker->randomElement(['female','male']),
            "nombre" => function(array $genero){
                return $this->faker->name($genero['sexo']);
            },
        ];
    }
}
