<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTicketTable extends Migration
{
   
    public function up()
    {
        Schema::create('tickets', function (Blueprint $table) {
            $table->dateTime('dataOra');
            $table->integer('quantità');
            $table->float('prezzo');
        });
    }

    
    public function down()
    {
        Schema::dropIfExists('tickets');
    }
}
