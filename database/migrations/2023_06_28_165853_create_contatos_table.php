<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContatosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contatos', function (Blueprint $table) {
            $table->id();
            $table->string('name',128);
            $table->string('email',128);
            $table->string('telefone',128);
            $table->string('cep',10);
            $table->string('estado',2);
            $table->string('cidade',128);
            $table->string('bairro',128);
            $table->string('endereco',256);
            $table->string('numero',20);
            $table->string('complemento',256);
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
        Schema::dropIfExists('contatos');
    }
}
