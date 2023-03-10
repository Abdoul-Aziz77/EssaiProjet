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
        Schema::create('but_sorties', function (Blueprint $table) {
            $table->id();
            $table->foreignId("but_id")
            /* ->constrained()
            ->onUpdate('restrict')
            ->onDelete('restrict') */;
            $table->foreignId("sorties_id")
            /* ->constrained()
            ->onUpdate('restrict')
            ->onDelete('restrict') */;
            $table->string("libelle")->nullable();
            $table->string("statut")->nullable(); // une liste de a selectionner : en cours, terminer
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
        Schema::dropIfExists('but_sorties');
    }
};
