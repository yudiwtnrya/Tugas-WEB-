<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class DbSetup extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orangtua', function (Blueprint $table) {
            $table->string('nik_ortu',16)->unique();
            $table->string('nama_orangtua');
            $table->unsignedBigInteger('id_admin');
            $table->unsignedBigInteger('no_region');
            $table->string('alamat');
            $table->enum('jenis_kelamin',['pria','wanita','tidak_menyebutkan']);
            $table->boolean('ibu_atau_ayah');
            $table->date('tgl_lahir')->nullable();
            $table->timestamps();
        });
        Schema::create('balita', function (Blueprint $table) {
            $table->string('no_akta')->unique();
            $table->string('nama_balita');
            $table->string('nik_ortu',16);
            $table->unsignedBigInteger('kode_penyuluhan');
            $table->enum('jenis_kelamin',['pria','wanita','tidak_menyebutkan']);
            $table->date('tgl_lahir_balita')->nullable();
            $table->timestamps();
        });
        Schema::create('admin', function (Blueprint $table) {
            $table->bigIncrements('id_admin');
            $table->string('nama_admin');
            $table->unsignedBigInteger('no_region');
            $table->enum('jenis_kelamin',['pria','wanita','tidak_menyebutkan']);
            $table->date('tgl_lahir_admin')->nullable();
            $table->timestamps();
        });
        Schema::create('posyandu', function (Blueprint $table) {
            $table->bigIncrements('no_region');
            $table->string('nama_posyandu');
            $table->unsignedBigInteger('kode_penyuluhan');
            $table->string('alamat_posyandu');
            $table->timestamps();
        });
        Schema::create('tanggal_penyuluhan', function (Blueprint $table) {
            $table->bigIncrements('kode_penyuluhan');
            $table->unsignedBigInteger('no_region');
            $table->date('tanggal_penyuluhan');
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
        Schema::dropIfExists('orangtua');
        Schema::dropIfExists('balita');
        Schema::dropIfExists('admin');
        Schema::dropIfExists('posyandu');
        Schema::dropIfExists('tanggal_penyuluhan');
    }
}
