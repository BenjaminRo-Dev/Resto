<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('egresos', function (Blueprint $table) {
            $table->id();
            $table->date('fecha');
            $table->decimal('total', 8, 2);
            $table->string('descripcion')->nullable();
            $table->unsignedBigInteger('sesion_id');
            $table->unsignedBigInteger('categoria_id');

            $table->foreign('sesion_id')->references('id')->on('sesiones')
                ->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('categoria_id')->references('id')->on('categorias')
                ->onUpdate('cascade')->onDelete('cascade');
            

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('egresos');
    }
};
