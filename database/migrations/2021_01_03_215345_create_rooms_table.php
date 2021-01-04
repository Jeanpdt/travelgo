<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRoomsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rooms', function (Blueprint $table) {
            $table->id();
            $table->integer("quantidade_camas");
            $table->decimal('preco', 8, 2);
            $table->string('titulo');
            $table->integer("quantidade_banheiros");
            $table->string("descricao_quarto");
            $table->integer("quantidade_hospedes");
            $table->integer("quantidade_quartos");
            $table->string("rua");
            $table->string("numero");
            $table->string("estado");
            $table->string("pais");
            $table->string("cep");
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
        Schema::dropIfExists('rooms');
    }
}
