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
        Schema::create('bon_commande', function (Blueprint $table) {
            $table->string('id', 30)->primary();
            $table->string('client')->references('id')->on('client');
            $table->string('ref')->nullable(false);
            $table->string('devise');
            $table->integer('remise');
            $table->integer('pourcentage');
            $table->string('taxes');
            $table->string('price_level');
            $table->date('date_facturation')->nullable(false);
            $table->string('adresse_facturation');
            $table->string('cout_livraison')
            $table->string('taxes_livraison');
            $table->string('adresse_livraison')->nullable(false);
            $table->string('products')->references('id')->on('product');
            $table->string('notes');
            $table->timestamps();
        });
    }

    /**b
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bon_commandes');
    }
};
