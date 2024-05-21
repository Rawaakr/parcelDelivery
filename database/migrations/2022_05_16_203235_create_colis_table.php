<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateColisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('colis', function (Blueprint $table) {
            $table->id();
            $table->string('contenu');
            $table->string('fournisseur');
            $table->integer('quantité');
            $table->float('prix');
            $table->string('nom');
            $table->string('email')->unique();
            $table->string('adresse');
            $table->string('tél');
            $table->integer('payé')->default(0);
            $table->integer('pickup')->default(0);
            $table->integer('confirmé')->default(0);
            $table->integer('retour')->default(0);
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
        Schema::dropIfExists('colis');
    }
}
