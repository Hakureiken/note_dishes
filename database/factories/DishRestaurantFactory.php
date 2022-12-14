<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\DishRestaurant>
 */
class DishRestaurantFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'dish_id' => $this -> faker -> numberBetween(1,10),
            'restaurant_id' => $this -> faker -> numberBetween(1,10),
        ];
    }
}
