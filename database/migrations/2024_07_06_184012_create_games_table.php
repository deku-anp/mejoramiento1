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
        Schema::create('games', function (Blueprint $table) {
            $table->id();
            $table->string('fecha');
            $table->string('goles_fuera');
            $table->string('goles_casa');

            $table->unsignedBigInteger('goal_id')->unique();  //unica
            
            $table->foreign('goal_id')
                ->references('id')
                ->on('goals')
                ->onDelete('cascade')             //get null para no borrar y no funcionar
                ->onUpdate('cascade');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('games');
    }
};
