<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLocationVoituresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('location_voitures', function (Blueprint $table) {
            $table->id();
            $table->string('adresse');
            $table->string('ville');
            $table->string('pays');
            $table->string('maison');
            $table->string('societe')->nullable();
            $table->date('date_location');
            $table->time('heure_location');
            $table->date('date_location_back');
            $table->time('heure_location_back');
            $table->string('card');
            $table->foreignId('car_id')->constrained()->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('user_id')->constrained()->onUpdate('cascade')->onDelete('cascade');
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
        Schema::dropIfExists('location_voitures');
    }
}
