<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Alumno;

class AlumnoFactory extends Factory
{
  
    public function definition(): array
    {
        return [
            'cuenta'=>fake()->numerify('###########'),
            'nombre'=>fake()->firstname(),
            'nota'=>fake()->numberBetween(40,100),
            'carrera'=>fake()->randomElement(['Administracion de empresas','Informatica administrativa', 'Enfermeria','Ingenieria agroindustrial','Tecnico en cafe'])
        ];
    }
}
