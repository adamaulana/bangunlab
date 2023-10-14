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
        Schema::create('users', function (Blueprint $table) {            
            $table->id();
            $table->string('email',225);
            $table->string('name',100);
            $table->string('password',100);
            $table->string('phone',20);
            $table->string('nik',50);
            $table->integer('level')->unsigned();
            $table->string('address',100);
            $table->integer('status')->unsigned();
            $table->timestamp('verifed_at')->nullable();            
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
        Schema::dropIfExists('users');
    }
};
