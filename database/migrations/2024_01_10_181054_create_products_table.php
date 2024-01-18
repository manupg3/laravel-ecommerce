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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('title', 255);
            $table->text('description'); // Cambiado a text para permitir descripciones más largas
            $table->unsignedBigInteger('price'); // Cambiado a unsignedBigInteger para precios positivos grandes
            $table->string('image')->nullable(); // Campo nuevo para la imagen, puede ser nulo si el producto no tiene imagen
            $table->timestamps();
    
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
