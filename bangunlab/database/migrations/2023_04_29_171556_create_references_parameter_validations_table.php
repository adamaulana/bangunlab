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
        Schema::create('references_parameter_validations', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->integer('kkm')->unsigned();
            $table->unsignedBigInteger('category_id');
            $table->foreign('category_id')->references('id')->on('reference_validation_parameter_categories')->onDelete('cascade');
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
        Schema::dropIfExists('references_parameter_validations');
    }
};
