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
        Schema::create('goals', function (Blueprint $table) {
            $table->id();
            $table->string('codigo');
            $table->string('minuto');
            $table->string('desc');
            
            $table->unsignedBigInteger('player_id')->unique();  //unica
            
            $table->foreign('player_id')
                ->references('id')
                ->on('players')
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
        Schema::dropIfExists('goals');
    }
};
