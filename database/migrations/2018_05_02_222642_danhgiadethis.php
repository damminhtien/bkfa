<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Danhgiadethis extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::dropIfExists('danhgiadethis');
        Schema::create('danhgiadethis', function (Blueprint $table) {
            $table->increments('iddanhgiadethis');
            $table->integer('id')->unsigned();
            $table->foreign('id')->references('id')->on('users')->onDelete('cascade');
            $table->integer('iddethi')->unsigned();
            $table->foreign('iddethi')->references('iddethi')->on('dethis')->onDelete('cascade');
            
            $table->integer('star');


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
        //
    }
}
