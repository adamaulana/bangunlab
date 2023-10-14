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
        Schema::create('product_validations', function (Blueprint $table) {
            $table->id();
            $table->integer('result_value')->unsigned();
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->unsignedBigInteger('parameter_id');
            $table->foreign('parameter_id')->references('id')->on('references_parameter_validations')->onDelete('cascade');
            $table->unsignedBigInteger('mentor_id');
            $table->foreign('mentor_id')->references('id')->on('mentors')->onDelete('cascade');
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
        Schema::dropIfExists('product_validations');
    }
};
