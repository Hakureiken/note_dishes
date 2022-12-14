<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\UserDishRestaurant>
 */
class UserDishRestaurantFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'user_id' => $this -> faker -> numberBetween(1,10),
            'dish_restaurant_id' => $this -> faker -> numberBetween(1,10),
            'presentation' => $this -> faker -> numberBetween(1,10),
            'proportion' => $this -> faker -> numberBetween(1,10),
            'gout' => $this -> faker -> numberBetween(1,10),
            'prix' => $this -> faker -> numberBetween(1,10),
        ];
    }
}
