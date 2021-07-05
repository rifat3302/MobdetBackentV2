<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePlacesUserCrossesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('places_user_crosses', function (Blueprint $table) {
            $table->id();
            $table->integer("user_id")->nullable();
            $table->boolean("pool")->default(0);
            $table->boolean("pub")->default(0);
            $table->boolean("sauna")->default(0);
            $table->boolean("restaurant")->default(0);
            $table->boolean("gym")->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('places_user_crosses');
    }
}
