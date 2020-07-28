<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBakusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bakus', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nm_barang');
            $table->integer('jml_barang');

            $table->unsignedBigInteger('satuan_id');
            $table->foreign('satuan_id')->references('id')->on('satuans')->onDelete('cascade');

            $table->integer('hrg_barang');
            $table->integer('hrg_total');

            $table->unsignedBigInteger('toko_id');
            $table->foreign('toko_id')->references('id')->on('tokos')->onDelete('cascade');
            
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
        Schema::dropIfExists('bakus');
    }
}
