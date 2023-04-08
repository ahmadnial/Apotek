<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Distributor extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('distributor', function (Blueprint $table) {
            $table->increments('Kode_Suplier', 8);
            $table->string('Nama_Suplier');
            $table->string('alamat');
            $table->string('Kota_Suplier', 30);
            $table->string('Provinsi_Suplier', 30);
            $table->string('Kode_POS_Suplier', 10);
            $table->string('Email_Suplier', 30);
            $table->string('No_HP_Suplier', 20);
            $table->string('NPWP_Suplier', 30);
            $table->string('petugas');
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
