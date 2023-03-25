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
        Schema::create('employes', function (Blueprint $table) {
            $table->id();
            $table->string('identifient', 30)->unique();
            $table->string('firstName')->nullable(false);
            $table->string('lastName')->nullable(false);
            $table->string('email')->nullable(false);
            $table->string('tel')->nullable(false);
            $table->string('pays')->nullable(false);
            $table->string('adresse1')->nullable(false);
            $table->string('adresse2');
            $table->integer('postalCode')->nullable(false);
            $table->string('city')->nullable(false);
            $table->string('employer')->nullable(false);
            $table->string('position')->nullable(false);
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
        Schema::dropIfExists('employes');
    }
};
