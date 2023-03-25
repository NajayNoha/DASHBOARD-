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
        Schema::create('niveau_prix', function (Blueprint $table) {
            $table->id();
            // $table->integer('prix');
            $table ->string('nom');
            // $table->integer('devise');
            $table->string('type_niveau');
            $table -> integer('actif')->default(1);
            // $table->string('id_produit');
            // $table->string('id_user');
            // $table->string('id_societe');
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
        Schema::dropIfExists('niveau_prix');
    }
};
