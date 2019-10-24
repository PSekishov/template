<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableDoctors extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('doctors', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nameDoc',32);
            $table->string('surnameDoc',32);
            $table->string('slug',64);
            $table->string('imgPath',128)->nullable();
            $table->string('descDoc',250)->nullable();
            $table->string('email',64)->unique();
            $table->string('tel',20)->unique()->unique();
            $table->integer('cabinet')->unsigned();
            $table->integer('profession_id')->unsigned();
            $table->foreign('profession_id')->references('id')->on('professions')->onDelete('cascade');
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
        Schema::dropIfExists('doctors');
    }
}
