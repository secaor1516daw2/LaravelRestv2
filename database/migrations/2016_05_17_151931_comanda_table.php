<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ComandaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comanda', function (Blueprint $table) {
            $table->increments('id')->primary();
            $table->integer('taula');
            $table->string('client',50);
            $table->string('nom',50);
            $table->integer('quantitat');
            $table->string('tipus',20);
            $table->float('preu');
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
        Schema::drop('comanda');
    }
}
