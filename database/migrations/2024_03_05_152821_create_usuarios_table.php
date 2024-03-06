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
        Schema::create('usuarios', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('persona_id');
           

            $table->unsignedBigInteger('rol_id');
            
         
            
            $table->string('clave');
            $table->string('habilitado');

            /* fecha  */
            $table->dateTime('fecha');

            /* fecha de creacion */
            $table->dateTime('fecha_creacion');
            /* creacion de usuaRIO */
            $table->unsignedBigInteger('usuario_creacion');
            /* MODIFICAION USUARIO */
            $table->unsignedBigInteger('usuario_modificacion'); 

            
            $table->foreign('persona_id')->references('id')->on('personas')->onDelete('cascade');
            $table->foreign('rol_id')->references('id')->on('roles')->onDelete('cascade')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('usuarios');
    }
};
