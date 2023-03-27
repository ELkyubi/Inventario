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
        Schema::create('product', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->integer('stock');
            $table->set('unidades',['Pieza','Docena','Paquete','Caja']);
            $table->string('foto', 500)->nullable()->default('/Images/Conalep-logo.png');
            $table->foreignId('ua_id')->constrained('unidad_administrativa')->onUpdate('cascade')
            ->onDelete('cascade');
            $table->foreignId('cat_id')->constrained('categoria')->onUpdate('cascade')
            ->onDelete('cascade');
            $table->date('fech_ingr');
            $table->date('fech_egr')->nullable();
            $table->longtext('observacion')->nullable();
            $table->set('estado',['Activo','Baja'])->default('Activo');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('product');
    }
};
