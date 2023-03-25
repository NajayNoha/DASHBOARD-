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
        Schema::table('societe', function (Blueprint $table) {
            $table -> unsignedBigInteger('id_country')->nullable();
            $table -> foreign('id_country')->references('id')->on('countries')->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('societe', function (Blueprint $table) {
            $table -> dropForeign('id_country');
        });
    }
};
