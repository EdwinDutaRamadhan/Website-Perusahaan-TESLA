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
            $table->string('trim');
            $table->string('ekpaint');
            $table->string('inpaint');
            $table->string('wheels');
            $table->string('autopilot');
            $table->string('seatlayout');
            $table->string('additional');
            $table->float('startspeed');
            $table->string('topspeed');
            $table->string('range');
            $table->float('fee');
            $table->string('image');
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
