<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableAtividadesPadrao extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        schema::create('atividadesPadrao', function(Blueprint $table){
            $table->integer('id')->nullable(false);
            $table->boolean('flgAtivo')->nullable(false);
            $table->string('titulo',70);
            $table->string('descricao',140);

            $table->primary('id');

            $table->index('titulo','idxTitulo');
            $table->index('flgAtivo');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        schema::drop('atividadesPadrao');
    }
}
