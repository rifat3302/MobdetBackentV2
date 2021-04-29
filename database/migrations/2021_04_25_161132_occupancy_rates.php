<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class OccupancyRates extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       Schema::create('occupancy_rates', function (Blueprint $table) {
            $table->id();
            $table->integer('pool_capacity')->nullable();
            $table->integer('pool_count')->nullable();
            $table->integer('pub_capacity')->nullable();
            $table->integer('pub_count')->nullable();
            $table->integer('sauna_capacity')->nullable();
            $table->integer('sauna_count')->nullable();
            $table->integer('restaurant_capacity')->nullable();
            $table->integer('restaurant_count')->nullable();
            $table->integer('gym_capacity')->nullable();
            $table->integer('gym_count')->nullable();
            $table->integer('hotel_capacity')->nullable();
            $table->integer('hotel_count')->nullable();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
