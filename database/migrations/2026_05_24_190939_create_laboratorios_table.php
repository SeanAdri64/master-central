<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /*
|--------------------------------------------------------------------------
| Autor: Sean Adrian Richard Vargas Cantor
| Migracion creacion Tabla de laboratorios.
|--------------------------------------------------------------------------
*/
    /**
     * Run the migrations.
     */
    
    public function up(): void
    {
        Schema::create('laboratorios', function (Blueprint $table) {
               $table->id();
               $table->string('nombre');
               $table->integer('capacidad');
               $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('laboratorios');
    }
};
