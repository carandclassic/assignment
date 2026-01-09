<?php

declare(strict_types=1);

namespace Database\Factories;

use App\Models\Car;
use Faker\Provider\FakeCar;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\File;

/** @extends Factory<Car> */
class CarFactory extends Factory
{
    public function definition(): array
    {
        $this->faker->addProvider(new FakeCar($this->faker));

        return [
            'make' => $this->faker->vehicleBrand(),
            'model' => $this->faker->vehicleModel(),
            'price' => $this->faker->numberBetween(7_000, 52_000) * 100,
            'year' => $this->faker->dateTimeBetween('-30 years', '-5 years')->format('Y'),
            'country' => $this->faker->country(),
            'latitude' => $this->faker->latitude(),
            'longitude' => $this->faker->longitude(),
            'image_path' => '/images/'.$this->faker->randomElement(
                File::files(public_path('images'))
            )->getFilename(),
        ];
    }
}
