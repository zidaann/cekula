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
        Schema::create('penilaian_ekstrakulikulers', function (Blueprint $table) {
            $table->id();
            $table->foreignId('ekstrakulikuler_id');
            $table->foreignId('user_id');
            $table->string('nilai_ekstra');
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
        Schema::dropIfExists('penilaian_ekstrakulikulers');
    }
};
