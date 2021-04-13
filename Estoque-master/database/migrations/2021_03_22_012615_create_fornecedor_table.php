<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFornecedorTable extends Migration
{
    public function up()
    {
        Schema::create('fornecedor', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('produto_id')->unsigned();
            $table->foreign('produto_id')->references('id')->on('produtos')->onDelete("cascade");
            $table->string('nome_fantasia');
            $table->string('cnpj');
            $table->string('estado');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('fornecedor');
    }
}
