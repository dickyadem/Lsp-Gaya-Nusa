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
        Schema::create('skemas', function (Blueprint $table) {
            $table->id();
            $table->string('kode');
            $table->string('image')->nullable();
            $table->string('nama');
            $table->string('slug')->unique();
            $table->string('jenis');
            $table->integer('harga');
            $table->string('unit_kompetensi');
            $table->text('ringkasan');
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
        Schema::dropIfExists('skemas');
    }
};
