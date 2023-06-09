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
            $table->id();
            $table->string('client')->nullable(false);
            $table->string('attention')->nullable(false);
            $table->string('ref')->nullable(false);
            $table->string('devise')->nullable(false);
            $table->string('taxes');
            $table->string('price_level');
            $table->string('adresse_facturation')->nullable(false);
            $table->string('adresse_livraison')->nullable(false);
            $table->date('date_livraison')->nullable(false);
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
        Schema::dropIfExists('devis');
    }
};
