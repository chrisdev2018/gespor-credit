<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTraitesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('traites', function (Blueprint $table) {
            $table->increments('id');
            $table->boolean('statut')->default(false);
            $table->date('date_passage');
            $table->bigInteger('mnt_effectif');
            $table->date('date_effective');
            $table->integer('retard')->unsigned();
            $table->integer('solde_debut_debiteur')->default(0);
            $table->integer('dossier_ok_id')->unsigned();


            $table->foreign('dossier_ok_id')
                ->references('id')
                ->on('dossier_oks');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('traites');
    }
}
