<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DishRestaurant extends Model
{
    use HasFactory;

    public function dish()
    {
        $this -> hasMany(Dish::class);
    }

    public function restaurant()
    {
        $this -> hasMany(Restaurant::class);
    }
}