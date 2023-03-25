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
        Schema::create('price_rules', function (Blueprint $table) {
            $table->id();
            $table->string('selection');
            $table->string('libelle');
            $table->unsignedBigInteger('price_level');
            $table->foreign('price_level')->references('id')->on('niveau_prix')->onUpdate('cascade')->onDelete('cascade');
            $table->string('price_type');
            $table->string('prix_base')->nullable();
            $table->string('operation')->nullable();
            $table->string('valeur');
            $table->string('saison')->nullable();
            $table->string('devise')->nullable();
            $table->string('tag_client')->nullable();
            $table->string('date_debut')->nullable();
            $table->string('date_fin')->nullable();
            $table->string('lieu_stockage')->nullable();
            $table->boolean('actif')->nullable()->default(false);
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
        Schema::dropIfExists('price_rules');
    }
};
