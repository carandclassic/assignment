<?php

declare(strict_types=1);

namespace Tests\Feature\Http\Controllers\Api;

use App\Models\Car;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class CarControllerTest extends TestCase
{
    use RefreshDatabase;

    public function testIndexReturnsCars(): void
    {
        Car::factory(5)->create();

        $response = $this->get('/api/cars');

        $response->assertJsonCount(5, 'data');
    }
}
