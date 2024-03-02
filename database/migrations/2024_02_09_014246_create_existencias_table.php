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
        Schema::create('existencias', function (Blueprint $table) {
            $table->id();
            $table->integer('cantidad_actual');
            $table->integer('cantidad_min');
            $table->integer('cantidad_max');
            $table->unsignedBigInteger('producto_id')->unique();

            $table->foreign('producto_id')->references('id')->on('productos')
                ->onUpdate('cascade')->onDelete('cascade');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('existencias');
    }
};
