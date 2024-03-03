<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    
    public function up(): void
    {
        Schema::create('egreso_producto', function (Blueprint $table) {
            $table->id();

            $table->integer('cantidad');
            $table->decimal('precio_unitario', 8, 2);

            $table->unsignedBigInteger('egreso_id');
            $table->unsignedBigInteger('producto_id');
            
            $table->foreign('egreso_id')->references('id')->on('egresos')
                ->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('producto_id')->references('id')->on('productos')
                ->onUpdate('cascade')->onDelete('cascade');
            
            $table->unique(['egreso_id', 'producto_id']);
            
            $table->timestamps();
        });
    }

    
    public function down(): void
    {
        Schema::dropIfExists('egreso_producto');
    }
};
