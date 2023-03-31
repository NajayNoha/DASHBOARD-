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
        Schema::create('devise_sittings', function (Blueprint $table) {
            $table->id();
            $table ->integer('taux_change');
            $table -> integer('actif')->default(1);
            $table -> foreignId('id_currency')->constrained('currencies','id');
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
        Schema::dropIfExists('devise_sittings');
    }
};
