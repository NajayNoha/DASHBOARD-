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
        Schema::create('fournisseur', function (Blueprint $table) {
            $table->string('id', 30)->primary();
            $table->string('name')->nullable(false);
            $table->string('email')->nullable(false);
            $table->string('tel')->nullable(false);
            $table->string('pays')->nullable(false);
            $table->string('adresse1')->nullable(false);
            $table->string('adresse2')->nullable(false);
            $table->integer('postalCode')->nullable(false);
            $table->string('city')->nullable(false);
            $table->string('price_level')->nullable(false);
            $table->string('devise')->nullable(false);
            $table->integer('discount')->nullable(false);
            $table->string('taxes')->nullable(false);
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
        Schema::dropIfExists('fournisseurs');
    }
};
