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
        Schema::create('categoria_producto', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('categoria_id')->nullable();
            $table->unsignedBigInteger('producto_id')->nullable();

            $table->foreign('categoria_id')->references('id')->on('categorias')
                ->onUpdate('cascade')->onDelete('set null');

            $table->foreign('producto_id')->references('id')->on('productos')
                ->onUpdate('cascade')->onDelete('set null');

            $table->unique(['categoria_id', 'producto_id']);

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('categoria_producto');
    }
};
