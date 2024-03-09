<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    
    public function up(): void
    {
        Schema::create('bitacoras', function (Blueprint $table) {
            $table->id();

            $table->string('accion_realizada')->nullable();
            $table->string('tabla_afectada')->nullable();
            $table->unsignedBigInteger('id_registro_afectado')->nullable();
            $table->string('ruta')->nullable();
            $table->string('usuario')->nullable();
            $table->unsignedBigInteger('sesion_id')->nullable();
            $table->string('direccion_ip')->nullable();
            // $table->string('navegador')->nullable();
            $table->string('dispositivo')->nullable();

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('bitacoras');
    }
};
