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
        Schema::create('bukus', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('id_buku')->unique();
            $table->string('judul_buku');
            $table->string('pamflet')->nullable();
            $table->string('slug')->unique();
            $table->foreignId('kategori_id');
            $table->string('penulis');
            $table->string('penerbit');
            $table->string('tahun_terbit');
            $table->string('kota_terbit');
            $table->string('status_buku');
            // $table->string('id_penyumbang')->nullable();
            // $table->string('nama_penyumbang')->nullable();
            // $table->date('tgl_sumbang')->nullable();
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
        Schema::dropIfExists('bukus');
    }
};
