<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMonsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {   
        Schema::dropIfExists('mons');
        Schema::create('mons', function (Blueprint $table) {
            $table->increments('idmon');
            $table->string('ten');
            $table->string('tenkhongdau');
            $table->string('mahocphan');
            $table->string('gioithieu');
            $table->longText('ghichu');
            $table->integer('idvien')->unsigned();
            $table->foreign('idvien')->references('idvien')->on('viens')->onDelete('cascade');
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
        Schema::dropIfExists('mons');
    }
}
