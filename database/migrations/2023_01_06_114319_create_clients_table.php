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
        Schema::create('clients', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable(false);
            $table->string('email')->nullable(false);
            $table->string('website');
            $table->string('tel')->nullable(false);
            $table->string('taxe_number');
            $table->string('adresse_lib');
            $table->string('adresse_type');
            $table->string('adresse_tel');
            $table->string('pays')->nullable(false);
            $table->string('adresse1')->nullable(false);
            $table->string('adresse2');
            $table->integer('postalCode')->nullable(false);
            $table->string('city')->nullable(false);
            $table->string('price_level');
            $table->string('devise')->nullable(false);
            $table->integer('discount');
            $table->string('taxe_type');
            $table->string('taxes');
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
        Schema::dropIfExists('clients');
    }
};
