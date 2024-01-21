<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cars', function (Blueprint $table) {
            $table->id();
            $table->string('nom');
            $table->text('description');
            $table->string('dimensions');
            $table->string('empattement');
            $table->string('poids_vide');
            $table->string('prix');
            $table->string('nombre_usager');
            $table->string('carburant');
            $table->string('cylindre');
            $table->string('garde_sol');
            $table->string('capacite_reservoir');
            $table->string('alimentation');
            $table->string('photo');
            $table->foreignId('categorie_id')->constrained()->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('marque_id')->constrained()->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('user_id')->default(1)->constrained()->onUpdate('cascade')->onDelete('cascade');
            $table->enum('statut',['Reservé','disponible'])->default('disponible');
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
        Schema::dropIfExists('cars');
    }
}
