<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class OrderUser extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {


        Schema::create('order_user', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id')->nullable();
            $table->integer('room_number')->nullable();
            $table->float('total')->nullable();
            $table->boolean('state')->default(1)->nullable();
            $table->date('order_date')->nullable();
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
