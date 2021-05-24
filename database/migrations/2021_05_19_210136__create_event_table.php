<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEventTable extends Migration
{/**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('events', function (Blueprint $table) {
            $table->bigIncrements('id')->unsigned()->index();
            $table->string('nomeEvento',25);
            $table->string('categoria',20);
            //$table->foreign('catId')->references('catId')->on('category');
            $table->dateTime('dataOra');
            $table->string('luogo',500);
            $table->string('descrizione',2500);
            $table->string('raggiungere',1000);
            $table->float('prezzo');
            $table->integer('bigliettiDisponibili');
            $table->integer('bigliettiVenduti')->default(0);
            $table->float('incassoTotale')->default(0);
            $table->integer('sconto')->nullable();
            $table->tinyInteger('insconto');
            $table->string('regione',20);
            $table->text('image')->nullable();
            $table->integer('admin');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('events');
    }
}
