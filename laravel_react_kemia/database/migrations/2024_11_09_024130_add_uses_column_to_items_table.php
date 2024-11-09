<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddUsesColumnToItemsTable extends Migration
{
    public function up()
    {
        Schema::table('items', function (Blueprint $table) {
            $table->text('uses')->nullable(); // Agrega la columna 'uses' como texto y permite valores nulos
        });
    }

    public function down()
    {
        Schema::table('items', function (Blueprint $table) {
            $table->dropColumn('uses'); // Elimina la columna 'uses' al revertir la migración
        });
    }
}
