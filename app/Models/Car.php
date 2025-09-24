<?php

namespace App\Models;

use Database\Factories\CarFactory;
use Illuminate\Database\Eloquent\Attributes\UseFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

#[UseFactory(CarFactory::class)]
class Car extends Model
{
    /** @use HasFactory<CarFactory> */
    use HasFactory;
}
