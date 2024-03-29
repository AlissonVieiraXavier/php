<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('produtos', function (Blueprint $table) {
            $table->id();
            $table->string('nome')->nullable(true);//esse campo espera um texto
            $table->decimal('custo')->nullable(true);//este campo espera um tipo decimal
            $table->decimal('preco')->nullable(true);//este campo espera um tipo decimal
            $table->integer('quantidade')->nullable(true);//esse campo espera um tipo inteiro
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
        Schema::dropIfExists('produtos');
    }
};
