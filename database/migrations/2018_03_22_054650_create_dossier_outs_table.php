<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDossierOutsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dossier_outs', function (Blueprint $table) {
            $table->increments('id');
            $table->text('motif');
            $table->date('date_out');
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
        Schema::dropIfExists('dossier_outs');
    }
}
