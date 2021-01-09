<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTestesTable extends Migration
{
  public function up()
  {
    Schema::create('testes', function (Blueprint $table) {
      $table->id();
      $table->string("teste");
      $table->timestamps();
    });
  }

  public function down()
  {
    Schema::dropIfExists('testes');
  }
}
