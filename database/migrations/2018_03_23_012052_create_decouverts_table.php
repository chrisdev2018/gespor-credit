<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDecouvertsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('decouverts', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_dossier_in')->unsigned();
            $table->boolean('statut');
            $table->bigInteger('agio');
            $table->date('date_ok');

            $table->foreign('id_dossier_in')
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
        Schema::dropIfExists('decouverts');
    }
}
