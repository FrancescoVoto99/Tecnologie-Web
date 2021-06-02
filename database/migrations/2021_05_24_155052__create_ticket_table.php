<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTicketTable extends Migration
{
   
    public function up()
    {
        Schema::create('tickets', function (Blueprint $table) {
            $table->bigIncrements('id')->unsigned()->index();
            $table->dateTime('dataOra')->default(date("Y-m-d H:i:s"));
            $table->integer('quantita');
            $table->float('prezzo');
            $table->integer('idevento');
            $table->integer('idutente');
        });
    }

    
    public function down()
    {
        Schema::dropIfExists('tickets');
    }
}
