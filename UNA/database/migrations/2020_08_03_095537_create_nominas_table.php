<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNominasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nominas', function (Blueprint $table) {
            $table->id();
			$table->float('salarioSemanal');
			$table->float('salarioDiario');
			$table->float('salarioHora');
			$table->float('salarioHoraExtraDiurno');
			$table->float('salarioIntegral');
			$table->float('feriado');
			$table->integer('diasLaborados');
			$table->float('utilidades');
			$table->float('montoTotal');
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
        Schema::dropIfExists('nominas');
    }
}
