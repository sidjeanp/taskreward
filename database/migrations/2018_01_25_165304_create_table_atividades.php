<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableAtividades extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        schema::create('atividades', function(Blueprint $table){
            $table->integer('id_users')->nullable(false);
            $table->integer('id')->nullable(false);
            $table->boolean('flgAtivo');
            $table->string('titulo',70);
            $table->string('descricao',140);
            $table->decimal('valor');
            $table->string('frequencia',15);
            $table->json('periodo');
            $table->json('dia');
            $table->json('hora');

            //$table->primary(['id_users','id']);
            $table->index('flgAtivo');

            //$table->foreign('id_user')
                //->references('id')->on('users');

            $table->index('titulo');

            $table->index('valor');
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
        schema::drop('atividades');
    }
}
