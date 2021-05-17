<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class OrderCart extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order_cart', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id')->nullable();
            $table->integer('room_number')->nullable();
            $table->integer('order_user_id')->nullable();
            $table->integer('menu_id')->default(1)->nullable();
            $table->integer('menu_sub_id')->nullable();
            $table->integer('count')->nullable();
            $table->integer('total')->nullable();

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
