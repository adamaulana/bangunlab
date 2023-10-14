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
        Schema::create('incubation_tracks', function (Blueprint $table) {
            $table->id();
            $table->integer('status')->unisgned();
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('incubation_step_id');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('incubation_step_id')->references('id')->on('incubation_steps')->onDelete('cascade');

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
        Schema::dropIfExists('incubation_tracks');
    }
};
