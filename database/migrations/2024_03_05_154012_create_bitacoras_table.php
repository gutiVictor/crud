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
        Schema::create('bitacoras', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            /* fecha */
            $table->date('fecha');
            /* hora */
            $table->time('hora');
            /* ip */
            $table->string('ip');
            /* so */
            $table->string('so');
            /* navegador */
            $table->string('navegador');
            $table->string('usuario');


            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');




            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bitacoras');
    }
};
