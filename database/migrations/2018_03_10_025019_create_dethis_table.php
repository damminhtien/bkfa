<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDethisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::dropIfExists('dethis');
        Schema::create('dethis', function (Blueprint $table) {
            $table->increments('iddethi');
            $table->string('url');
            $table->string('urlanh');
            $table->string('gioithieu');
            $table->integer('nam');
            $table->longText('ghichu');
            $table->string('luotxem');
            $table->integer('idmon')->unsigned();
            $table->string('urlloigiai');
            $table->foreign('idmon')->references('idmon')->on('mons');
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
        Schema::dropIfExists('dethis');
    }
}
