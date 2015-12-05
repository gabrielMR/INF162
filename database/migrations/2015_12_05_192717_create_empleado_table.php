<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmpleadoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('empleado', function (Blueprint $table) {
            $table->integer('id')->unsigned();
            $table->foreign('id')
                  ->references('id')
                  ->on('persona')
                  ->onDelete('cascade');
            $table->time('hora_ini')->nullable();
            $table->time('hora_fin')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('empleado');
    }
}
