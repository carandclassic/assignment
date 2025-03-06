<?php

declare(strict_types=1);

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Car;
use Illuminate\Contracts\Pagination\Paginator;
use Illuminate\Http\Request;

class CarController extends Controller
{
    /**
     * @return Paginator<Car>
     */
    public function index(Request $request): Paginator
    {
        $limit = $request->integer('limit', 10);

        return Car::query()->paginate($limit);
    }
}
