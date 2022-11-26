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
        Schema::create('tb_inventory', function (Blueprint $table) {
            $table->id();
            $table->string('model');
            $table->string('name');
            $table->string('type');
            $table->string('milage');
            $table->string('delivery');
            $table->string('trim');
            $table->string('color');
            $table->string('internal');
            $table->string('wheels');
            $table->string('autopilot')->nullable();
            $table->string('seatlayout')->nullable();
            $table->string('additional')->nullable();
            $table->float('startspeed');
            $table->integer('topspeed');
            $table->integer('range');
            $table->integer('fee');
            $table->string('image');
            $table->string('trial');
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
        Schema::dropIfExists('tb_inventory');
    }
};
