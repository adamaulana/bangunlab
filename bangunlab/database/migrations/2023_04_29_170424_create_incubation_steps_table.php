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
        Schema::create('incubation_steps', function (Blueprint $table) {
            $table->id();
            $table->string('step_name');
            $table->string('decription');
            $table->string('icon');            
            $table->integer('step')->unsigned();            
            $table->string('redirect');            
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('incubation_steps');
    }
};
