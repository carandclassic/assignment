<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    protected $visible = ['id', 'make', 'model', 'year', 'price'];
}
