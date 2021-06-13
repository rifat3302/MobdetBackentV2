<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TesResults extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('TestResults', function (Blueprint $table) {
            $table->id();
           $table->integer("user_id")->nullable();
           $table->integer("test_id")->nullable();
           $table->string("test_name",60)->nullable();
           $table->integer("score")->nullable();
           $table->dateTime("test_created_at")->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('TestResults');
    }
}
