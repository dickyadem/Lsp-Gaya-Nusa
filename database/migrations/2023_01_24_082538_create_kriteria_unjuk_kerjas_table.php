<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('kriteria_unjuk_kerjas', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->foreignId('elemen_kompetensi_id')->constrained('elemen_kompetensis');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('kriteria_unjuk_kerjas');
    }
};
