<?php

namespace App\Http\Controllers;

use App\Models\Car;
use Illuminate\Http\Request;
use Inertia\Response;

class IndexController extends Controller
{
    public function __invoke(Request $request): Response
    {
        $limit = $request->integer('limit', 10);

        $cars = Car::query()->paginate($limit);

        return inertia('Index', [
            'cars' => $cars,
        ]);
    }
}
