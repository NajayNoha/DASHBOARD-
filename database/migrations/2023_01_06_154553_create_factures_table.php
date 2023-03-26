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
        Schema::create('factures', function (Blueprint $table) {
            $table->id();
            $table->string('client')->nullable(false);
            $table->string('attention');
            $table->string('ref');
            $table->string('devise')->nullable(false);
            $table->integer('remise');
            $table->integer('pourcentage');
            $table->string('taxes');
            $table->string('price_level');
            $table->date('date_facturation');
            $table->string('adresse_facturation')->nullable(false);
            $table->string('cout_livraison')->nullable(false);
            $table->string('taxes_livraison');
            $table->string('adresse_livraison');
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
        Schema::dropIfExists('factures');
    }
};
