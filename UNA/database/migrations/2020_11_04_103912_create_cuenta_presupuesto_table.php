<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCuentaPresupuestoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cuenta_presupuesto', function (Blueprint $table) {
            $table->id();
			
			$table->integer('cuenta_id')->unsigned();
            $table->integer('presupuesto_id')->unsigned();

            $table->timestamps();
			
			$table->foreign('cuenta_id')->references('id')->on('cuentas')->onDelete('cascade');
            $table->foreign('presupuesto_id')->references('id')->on('presupuestos')->onDelete('cascade');

			
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cuenta_presupuesto');
    }
}