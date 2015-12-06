<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRegistraTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('registra', function (Blueprint $table) {
            $table->increments('id_registro');
            $table->integer('id_hor')->nullable();
            $table->integer('id_e')->nullable();
            $table->date('fecha_ac')->nullable();
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
        Schema::drop('registra');
    }
}
