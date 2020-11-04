<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddDepartamentoIdToTrabajadorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('trabajadors', function (Blueprint $table) {
            $table->unsignedInteger('departamento_id')->nullable()->after('id');
            $table->foreign('departamento_id')->references('id')->on('departamentos')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('trabajadors', function (Blueprint $table) {
           $table->dropForeign(['departamento_id']);
            $table->dropColumn('departamento_id');
        });
    }
}
