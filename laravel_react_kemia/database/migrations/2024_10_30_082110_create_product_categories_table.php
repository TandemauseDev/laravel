<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductCategoriesTable extends Migration
{
    public function up()
    {
        // Crear la tabla product_categories
        Schema::create('product_categories', function (Blueprint $table) {
            $table->id('category_id'); // Campo category_id como primary key
            $table->string('category_name', 100); // Campo para el nombre de la categoría
            $table->timestamps(); // Campos para created_at y updated_at
        });
    }

    public function down()
    {
        // Eliminar la tabla product_categories si existe
        Schema::dropIfExists('product_categories');
    }
}
