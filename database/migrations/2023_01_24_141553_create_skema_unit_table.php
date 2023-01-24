<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('skema_unit', function (Blueprint $table) {
            $table->id();
            $table->foreignId('skema_id')->constrained('skemas');
            $table->foreignId('unit_id')->constrained('units');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('skema_unit');
    }
};
