<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAttributionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::enableForeignKeyConstraints();
        Schema::create('attributions', function (Blueprint $table) {
            $table->id();
            $table->integer('horaire');
            $table->bigInteger('id_ordinateurs')->unsigned()->nullable();
            $table->bigInteger('id_clients')->unsigned()->nullable();
            $table->foreign('id_ordinateurs')->references('id')->on('ordinateurs')->onDelete ('cascade');
            $table->foreign('id_clients')->references('id')->on('clients')->onDelete ('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::disableForeignKeyConstraints();
        Schema::dropIfExists('attributions');
    }
}
