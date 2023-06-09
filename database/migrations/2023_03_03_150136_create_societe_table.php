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
        Schema::create('societe', function (Blueprint $table) {
            $table->id();
            $table->string('nom')->nullable();
            $table->string('web_site')->nullable();
            $table->string('email')->nullable();
            $table->string('tel',15)->nullable();
            //Adresse
            $table -> text('address1')->nullable();
            $table -> text('address2')->nullable();
            $table -> integer('codePostal')->nullable();
            $table -> string('ville')->nullable();
            $table -> string('logo')->nullable();
            $table -> string('facebook')->nullable();
            $table -> string('twitter')->nullable();
            // // Valeurs par défaut
            $table -> foreignId('taxe_id')->constrained()->nullable(true);
            $table -> foreignId('niveau_prix_id')->constrained('niveau_prix')->nullable(true);
            $table->foreignId('admin_id')->constrained('admins');
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
        Schema::dropIfExists('societe');
    }
};
