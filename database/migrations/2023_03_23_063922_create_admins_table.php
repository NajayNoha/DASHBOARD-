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
        Schema::create('admins', function (Blueprint $table) {
            $table->id();
            $table ->string('nom')->nullable();
            $table -> string('prenom')->nullable();
            $table -> string('nom_affichage')->nullable();
            $table ->string('email')->unique();
            $table ->string('tele',15)->nullable();
            $table ->integer('actif')->default(1);
            $table ->foreignId('id_user')->constrained('users','id');
            $table -> string('langue')->nullable();
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
        Schema::dropIfExists('admins');
    }
};
