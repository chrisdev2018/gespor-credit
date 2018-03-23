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
            $table->integer('id_dossier_ok')->unsigned();
            $table->boolean('statut');
            $table->date('date_passage');
            $table->bigInteger('mnt_effectif');
            $table->date('date_effective');
            $table->bigInteger('solde_fin_debit');


            $table->foreign('id_dossier_ok')
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
