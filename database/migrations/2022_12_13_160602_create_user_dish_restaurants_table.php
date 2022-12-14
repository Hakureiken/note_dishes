<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_dish_restaurants', function (Blueprint $table) {
            $table->id();
            $table->string('presentation');
            $table->string('proportion');
            $table->string('gout');
            $table->string('prix');
            $table->foreignId('user_id') -> constrained();
            $table->foreignId('dish_restaurant_id') -> constrained();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user_dish_restaurants');
    }
};
