<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMailingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mailings', function (Blueprint $table) {
            $table->increments('id');
            $table->string('porcentage');
            $table->string('name');
            $table->string('text_before');
            $table->integer('price');
            $table->string('color');
            $table->mediumText('content');
            $table->string('avatar')->nullable();
            $table->string('valid_month')->nullable();
            $table->string('cellphone01');
            $table->string('cellphone02');
            $table->string('phone');
            $table->string('email');
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
        Schema::dropIfExists('mailings');
    }
}
