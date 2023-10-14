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
        Schema::create('step_roadmap_results', function (Blueprint $table) {
            $table->id();
            $table->integer('result')->unsigned();
            $table->string('result_file');
            $table->unsignedBigInteger('step_course_id');
            $table->foreign('step_course_id')->references('id')->on('step_roadmaps')->onDelete('cascade');
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->unsignedBigInteger('mentor_id');
            $table->foreign('mentor_id')->references('id')->on('mentors')->onDelete('cascade');
            $table->integer('result_value')->unsigned();
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
        Schema::dropIfExists('step_roadmap_results');
    }
};
