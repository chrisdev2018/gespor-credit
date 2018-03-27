<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDossierInsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dossier_ins', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('mnt_dmd');
            $table->date('date_in');
            $table->longText('garantie');
            $table->string('type_credit');
            $table->integer('membre_id')->unsigned();

            $table->foreign('membre_id')
                ->references('id')
                ->on('membres');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('dossier_ins');
    }
}
