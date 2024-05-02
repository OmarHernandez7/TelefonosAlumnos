<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Telefono;

class TelefonosSeeder extends Seeder
{
    
    public function run(): void
    {
        Telefono::factory()->count(15)->create();
    }
}
