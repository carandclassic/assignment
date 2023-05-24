<?php

namespace Database\Seeders;

use App\Models\Car;
use Illuminate\Database\Seeder;

class CarSeeder extends Seeder
{
    public function run(): void
    {
        Car::query()->truncate();

        Car::query()->forceCreateQuietly(['make' => 'Volvo', 'model' => 'S40', 'year' => 2008, 'price' => 12_387_00]);
        Car::query()->forceCreateQuietly(['make' => 'Mercedes', 'model' => 'E63', 'year' => 2012, 'price' => 10_801_00]);
        Car::query()->forceCreateQuietly(['make' => 'Bentley', 'model' => 'T1', 'year' => 1971, 'price' => 8_299_00]);
        Car::query()->forceCreateQuietly(['make' => 'Aston Martin', 'model' => 'DB9', 'year' => 2008, 'price' => 12_133_00]);
        Car::query()->forceCreateQuietly(['make' => 'Volkswagen', 'model' => 'T3 Syncro', 'year' => 1988, 'price' => 13_547_00]);
        Car::query()->forceCreateQuietly(['make' => 'Jaguar', 'model' => 'F-Type R', 'year' => 2015, 'price' => 26_500_00]);
    }
}
