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
        Schema::create('paginas', function (Blueprint $table) {
            $table->id();
            /* fecha de creaccion */
            $table->date('fecha_creacion');
            /* fecha de modificacion */
            $table->date('fecha_modificacion');
            /* usuario creacion */
            $table->string('usuario_creacion');
            /* usuario de modificacion */
            $table->string('usuario_modificacion');
            $table->string('nombre');
            $table->string('descripcion');            
            $table->string('url');
            $table->string('icono');
            $table->string('tipo');



            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('paginas');
    }
};
