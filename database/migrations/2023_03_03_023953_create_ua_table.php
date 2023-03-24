<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('unidad_administrativa', function (Blueprint $table) {
            $table->id();
            $table->string('ua_nombre');
            $table->string('ua_ubicacion')->nullable();
            $table->string('ua_encargado')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('unidad_administrativa');
    }
};
