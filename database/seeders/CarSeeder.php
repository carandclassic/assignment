<?php

namespace Database\Seeders;

use App\Models\Car;
use Illuminate\Database\Seeder;

class CarSeeder extends Seeder
{
    public function run(): void
    {
        Car::query()->truncate();

        Car::query()->forceCreateQuietly(['make' => 'Volvo', 'model' => '850 T-5 Auto', 'year' => 1996, 'price' => 12_387_00, 'country' => 'United Kingdom', 'latitude' => '51.501366', 'longitude' => '-0.141890', 'image_path' => '/images/volvo-850-t-5-auto.jpeg', 'created_at' => '2021-05-24 14:45:50']);
        Car::query()->forceCreateQuietly(['make' => 'Mercedes', 'model' => 'E63', 'year' => 2007, 'price' => 10_801_00, 'country' => 'United Kingdom', 'latitude' => '53.815919', 'longitude' => '-3.055261', 'image_path' => '/images/mercedes-e63.jpeg', 'created_at' => '2023-05-04 16:13:50']);
        Car::query()->forceCreateQuietly(['make' => 'Bentley', 'model' => 'T1', 'year' => 1971, 'price' => 8_299_00, 'country' => 'United Kingdom', 'latitude' => '55.948676', 'longitude' => '-3.200402', 'image_path' => '/images/bentley-t1.jpeg', 'created_at' => '2023-05-13 09:55:34']);
        Car::query()->forceCreateQuietly(['make' => 'Cadillac', 'model' => 'Fleetwood Brougham', 'year' => 1975, 'price' => 85_133_00, 'country' => 'Sweden', 'latitude' => '59.32503', 'longitude' => '18.096947', 'image_path' => '/images/cadillac-fleetwood-brougham.jpeg', 'created_at' => '2023-05-13 09:55:34']);
        Car::query()->forceCreateQuietly(['make' => 'Volkswagen', 'model' => 'Golf', 'year' => 1980, 'price' => 13_547_00, 'country' => 'Spain', 'latitude' => '41.403191', 'longitude' => '2.174840', 'image_path' => '/images/volkswagen-golf.jpeg', 'created_at' => '2023-05-22 14:37:22']);
        Car::query()->forceCreateQuietly(['make' => 'Citroen', 'model' => 'DS21 convertible', 'year' => 1967, 'price' => 26_500_00, 'country' => 'France', 'latitude' => '48.861', 'longitude' => '2.335833', 'image_path' => '/images/citroen-ds21-convertible.jpeg', 'created_at' => '2023-05-01 08:16:20']);
        Car::query()->forceCreateQuietly(['make' => 'Mercedes', 'model' => '280 SE Coupe 3.5', 'year' => 1970, 'price' => 66_050_00, 'country' => 'France', 'latitude' => '48.858093', 'longitude' => '2.294694', 'image_path' => '/images/mercedes-280-se-coupe-3-5.jpeg', 'created_at' => '2023-05-01 21:19:25']);
        Car::query()->forceCreateQuietly(['make' => 'Lamborghini', 'model' => 'Espada', 'year' => 1971, 'price' => 89_140_00, 'country' => 'Italy', 'latitude' => '41.890209', 'longitude' => '12.492231', 'image_path' => '/images/lamborghini-espada.jpeg', 'created_at' => '2023-05-25 07:55:21']);
        Car::query()->forceCreateQuietly(['make' => 'Fiat', 'model' => '500', 'year' => 1971, 'price' => 17_00_00, 'country' => 'Italy', 'latitude' => '43.722954', 'longitude' => '10.396594', 'image_path' => '/images/fiat-500.jpeg', 'created_at' => '2023-05-18 22:04:55']);
        Car::query()->forceCreateQuietly(['make' => 'ASA', 'model' => '1000 GT Spider', 'year' => 1965, 'price' => 150_00_00, 'country' => 'Italy', 'latitude' => '45.4353', 'longitude' => '12.3265', 'image_path' => '/images/asa-1000-gt-spider.jpeg', 'created_at' => '2023-05-20 15:15:15']);
    }
}
