<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDossierOksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dossier_oks', function (Blueprint $table) {
            $table->increments('id');
            $table->bigInteger('mnt_ok');
            $table->bigInteger('mnt_traite');
            $table->integer('duree');
            $table->date('date_ok');
            $table->integer('dossier_in_id')->unsigned();

            $table->foreign('dossier_in_id')
                ->references('id')
                ->on('dossier_ins');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('dossier_oks');
    }
}
