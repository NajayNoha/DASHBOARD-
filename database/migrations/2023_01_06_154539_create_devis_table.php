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
        Schema::create('devis', function (Blueprint $table) {
            $table->string('id', 30)->primary();
            $table->string('client')->nullable(false);
            $table->string('attention')->nullable(false);
            $table->string('ref')->nullable(false);
            $table->string('devise')->nullable(false);
            $table->string('taxes')->nullable(false);
            $table->string('price_level')->nullable(false);
            $table->string('adresse_facturation')->nullable(false);
            $table->string('adresse_livraison')->nullable(false);
            $table->date('date_livraison')->nullable(false);
            $table->string('products')->nullable(false);
            $table->string('notes')->nullable(false);
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
        Schema::dropIfExists('devis');
    }
};
