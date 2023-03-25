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
        Schema::create('bon_commandes', function (Blueprint $table) {
            $table->id();
            $table->string('client')->nullable(false);
            $table->string('ref')->nullable(false);
            $table->string('attention');
            $table->string('devise')->nullable(false);
            $table->integer('remise');
            $table->integer('pourcentage');
            $table->string('taxes');
            $table->string('price_level');
            $table->date('date_facturation')->nullable(false);
            $table->string('adresse_facturation')->nullable(false);
            $table->string('cout_livraison');
            $table->string('taxes_livraison');
            $table->string('adresse_livraison')->nullable(false);
            $table->string('products')->nullable(false);
            $table->string('notes');
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
        Schema::dropIfExists('bon_commandes');
    }
};
