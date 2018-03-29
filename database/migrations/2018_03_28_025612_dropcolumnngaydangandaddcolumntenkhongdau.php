<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Dropcolumnngaydangandaddcolumntenkhongdau extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('tintucs', function (Blueprint $table) {
             $table->dropColumn('ngaydang');
             $table->string('tenkhongdau')->unique();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('tintucs', function (Blueprint $table) {
            //
        });
    }
}
