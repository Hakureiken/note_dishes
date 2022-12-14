<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserDishRestaurant extends Model
{
    use HasFactory;

    public function user()
    {
        $this -> hasMany(User::class);
    }

    public function dishRestaurant()
    {
        $this -> hasMany(DishRestaurant::class);
    }
}
