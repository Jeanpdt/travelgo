<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRoomsTable extends Migration
{
    public function up()
    {
        Schema::create('rooms', function (Blueprint $table) {
            $table->id();
            $table->string("quantidade_camas");
            $table->string('preco');
            $table->string('titulo');
            $table->string("quantidade_banheiros");
            $table->string("descricao_quarto");
            $table->string("quantidade_hospedes");
            $table->string("quantidade_quartos");
            $table->string("rua");
            $table->string("numero");
            $table->string("cidade");
            $table->string("estado");
            $table->string("pais");
            $table->string("cep");
            $table->string("imagem_url");
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('rooms');
    }
}
