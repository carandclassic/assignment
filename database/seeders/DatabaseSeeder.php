<?php

namespace Database\Seeders;

use App\Models\Car;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        $this->call(CarSeeder::class);
    }
}
