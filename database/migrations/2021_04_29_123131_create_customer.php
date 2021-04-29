<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCustomer extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customer', function (Blueprint $table) {
            $table->id();
            $table->integer('room_number')->nullable();
            $table->integer('tc')->nullable();
            $table->String('name')->nullable();
            $table->String('surname')->nullable();
            $table->String('phone')->nullable();
            $table->String('private_key')->nullable();
            $table->String('entry_date')->nullable();
            $table->integer('exit_date')->nullable();
            $table->float('amount')->nullable();
            $table->boolean('active')->default(1)->nullable();


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('customer');
    }
}
