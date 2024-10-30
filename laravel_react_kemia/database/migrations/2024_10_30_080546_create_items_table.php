<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateItemsTable extends Migration
{
    public function up()
    {
        Schema::create('items', function (Blueprint $table) {
            $table->id('item_id'); // Campo item_id como primary key
            $table->string('name', 255); // Campo para el nombre del producto
            $table->integer('category_id')->nullable(); // Campo para el ID de la categoría, que puede ser nulo
            $table->text('description')->nullable(); // Campo para la descripción, que puede ser nulo
            $table->string('size', 50)->nullable(); // Campo para el tamaño, que puede ser nulo
            $table->string('img1', 255)->nullable(); // Campo para la primera imagen, que puede ser nulo
            $table->string('img2', 255)->nullable(); // Campo para la segunda imagen, que puede ser nulo
            $table->string('img3', 255)->nullable(); // Campo para la tercera imagen, que puede ser nulo
            $table->text('precautions')->nullable(); // Campo para precauciones, que puede ser nulo
            $table->text('storage')->nullable(); // Campo para almacenamiento, que puede ser nulo
            $table->text('handling')->nullable(); // Campo para manejo, que puede ser nulo
            $table->timestamps(); // Campos para created_at y updated_at
        });
    }

    public function down()
    {
        Schema::dropIfExists('items'); // Elimina la tabla si existe
    }
}
