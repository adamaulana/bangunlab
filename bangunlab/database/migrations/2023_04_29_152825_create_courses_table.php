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
        Schema::create('courses', function (Blueprint $table) {
            $table->id();
            $table->string('course_title');
            $table->unsignedBigInteger('mentor_id');
            $table->foreign('mentor_id')->references('id')->on('mentors')->onDelete('cascade');
            $table->string('description');
            $table->string('cover');
            $table->unsignedBigInteger('course_type');
            $table->foreign('course_type')->references('id')->on('reference_course_types')->onDelete('cascade');
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
        Schema::dropIfExists('courses');
    }
};
