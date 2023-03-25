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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('sku', 30)->unique();
            $table->string('name');
            $table->string('description');
            $table->string('price');
            $table->string('buying_price');
            $table->unsignedBigInteger('fournisseur');
            $table->foreign('fournisseur')->references('id')->on('fournisseurs')->onUpdate('cascade')->onDelete('cascade');
            // $table->json('taxes');
            // $table->unsignedBigInteger('taxes');
            // $table->foreign('taxes')->references('id')->on('taxe')->onUpdate('cascade')->onDelete('cascade');
            $table->string('image' , 300);
            $table->string('marque');
            $table->string('pays_origine');
            $table->string('poids');
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
        Schema::dropIfExists('products');
    }
};
