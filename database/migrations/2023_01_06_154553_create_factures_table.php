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
        Schema::create('facture', function (Blueprint $table) {
            $table->string('id', 30)->primary();
            $table->string('client')->references('id')->on('product');
            $table->string('attention');
            $table->string('ref')->nullable(false);
            $table->string('devise')->nullable(false);
            $table->integer('remise');
            $table->integer('pourcentage')->nullable(false);
            $table->json('taxes');
            $table->string('price_level')->nullable(false);
            $table->date('date_facturation')->nullable(false);
            $table->string('adresse_facturation')->nullable(false);
            $table->string('cout_livraison');
            $table->string('taxes_livraison');
            $table->string('adresse_livraison')->nullable(false);
            // $table->foreignId('product_id')->constrained();
            $table->unsignedBigInteger('product_id');
            $table->foreign('product_id')
                 ->references('id')
                 ->on('products')
                 ->onUpdate('cascade')
                 ->onDelete('cascade');
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
        Schema::dropIfExists('factures');
    }
};
