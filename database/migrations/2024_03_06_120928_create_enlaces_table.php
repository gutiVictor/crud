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
        Schema::create('enlaces', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('pagina_id');
           
            $table->unsignedBigInteger('rol_id');
           
            $table->string('descripcion');
            /* fecha de creacion */
            $table->date('fecha_creacion');
            /* fecha de modificacion */
            $table->date('fecha_modificacion');
            /* usuario creacion */
            $table->string('usuario_creacion');
            /* usuario de modificacion */
            $table->string('usuario_modificacion');

            $table ->foreign('pagina_id')->references('id')->on('paginas')->onDelete('cascade');
            $table ->foreign('rol_id')->references('id')->on('roles')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('enlaces');
    }
};
