<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('producto_ticket', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('producto_id');
            $table->unsignedBigInteger('ticket_id');
            $table->integer('cantidad');
            $table->decimal('precio_unitario', 8, 2);
            $table->timestamps();

            $table->foreign('producto_id')->references('id')->on('productos')
                ->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('ticket_id')->references('id')->on('tickets')
                ->onUpdate('cascade')->onDelete('cascade');
            
            $table->unique(['producto_id', 'ticket_id']);

        });
    }

    public function down(): void
    {
        Schema::dropIfExists('producto_ticket');
    }
};
