<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('elemen_kompetensis', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->foreignId('unit_id')->constrained('units');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('elemen_kompetensis');
    }
};
