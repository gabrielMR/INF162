<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTieneTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tiene', function (Blueprint $table) {
            $table->increments('id_ti');

            $table->integer('id_ef')->unsigned()->nullable();
            $table->foreign('id_ef')
                  ->references('id')
                  ->on('persona')
                  ->onDelete('cascade'); 
            $table->integer('id_horaf')->unsigned()->nullable();
            $table->foreign('id_horaf')
                  ->references('id_hora')
                  ->on('horario')
                  ->onDelete('cascade'); 


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('tiene');
    }
}
