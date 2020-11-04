<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddReformulacionIdAtMovReformulacions extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('mov_reformulacions', function (Blueprint $table) {
            $table->unsignedInteger('reformulacion_id')->nullable()->after('id');
            $table->foreign('reformulacion_id')->references('id')->on('reformulacions')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('reformulacions', function (Blueprint $table) {
            $table->dropForeign(['reformulacion_id']);
            $table->dropColumn('reformulacion_id');
            
        });
    }
}
