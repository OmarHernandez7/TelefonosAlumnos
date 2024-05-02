<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Telefono;
use App\Models\Alumno;

class DatabaseSeeder extends Seeder
{

    public function run(): void
    {
        $this->call(AlumnosSeeder::class);

        $this->call(TelefonosSeeder::class);
    }
}
