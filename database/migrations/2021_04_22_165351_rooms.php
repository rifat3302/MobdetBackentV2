<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Rooms extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('rooms', function (Blueprint $table) {
        /*    $table->id();
            $table->integer('user_id')->nullable();
            $table->integer('room_number')->nullable();
            $table->string('qr_key')->nullable();
            $table->string('private_key')->nullable();
            $table->boolean('isClean')->nullable();
            $table->boolean("isBook")->nullable();
            $table->boolean("isActive")->nullable();
            $table->integer("guest_count")->nullable();
            $table->string('note',250)->nullable();*/
            $table->integer('guest_count')->nullable()->after('note');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('rooms');
    }
}
