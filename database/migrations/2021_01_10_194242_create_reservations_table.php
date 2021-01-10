<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReservationsTable extends Migration
{
    public function up()
    {
        Schema::create('reservations', function (Blueprint $table) {
            $table->id();
            $table->integer("user_id");
            $table->integer("quarto_id");
            $table->date("data_inical");
            $table->date("data_final");
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('quarto_id')->references('id')->on('rooms');
        });
    }

    public function down()
    {
        Schema::dropIfExists('rooms');
    }
}


