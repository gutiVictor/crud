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
        Schema::create('personas', function (Blueprint $table) {
            $table->id();
            $table->string('primer_name');
            $table->string('segundo_name');
            $table->string('primer_apellido');

            /* fechade creacion */
            $table->date('fecha_creacion');

            /* fecha de modificacion */
            $table->date('fecha_modificacion');
            /* usuario creacion */
            $table->string('usuario_creacion');
            /* usuario de modificacion */
            $table->string('usuario_modificacion');

        


            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('personas');
    }
};
