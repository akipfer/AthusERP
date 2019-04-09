<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->bigIncrements('id');
            $table->string('name', 100);
            $table->decimal('CNP', 14, 0)->nullable();
            $table->string('telefone')->nullable();
            $table->string('email', 100);

            $table->string('pais', 100)->nullable();
            $table->string('cidade', 100)->nullable();
            $table->string('logradouro', 100)->nullable();
            $table->string('numero', 10)->nullable();

            $table->decimal('fouc', 1) /* SE FOR CLIENTE 1
                                          SE FOR FORNECEDOR 0*/

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
