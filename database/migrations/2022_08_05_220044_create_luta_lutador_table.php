<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('luta_lutador', function (Blueprint $table) {
            $table->foreignId('luta_id')->constrained('lutas')->onDelete('cascade');
            $table->foreignId('lutador_id')->constrained('lutadores')->onDelete('cascade');
            //$table->foreignId('lutador_vencedor_id')->constrained('lutadores')->onDelete('cascade');
            $table->boolean('vencedor')->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('luta_lutador');
    }
};
