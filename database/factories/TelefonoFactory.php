<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Telefono;

class TelefonoFactory extends Factory
{
  
    public function definition(): array
    {
        return [
            'telefono'=>fake()->sentence(3),
            'tipo'=>fake()->randomElement(['Personal','Fijo']),
            'alumno_id'=>fake()->numberBetween(1,50)
        ];
    }
}
