<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TablePlanAtividadesUsuarios extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        schema::create('planAtividadesUsuarios', function(Blueprint $table){
            $table->integer('id_planilhaAtividades')->nullable(false);
            $table->integer('id_users')->nullable(false);
            $table->integer('flgAtivo');
            $table->json('atribuicao');

            //$table->primary(['id_users']);

            $table->index('flgAtivo');

            //$table->foreign('id_user')
                //->references('id')->on('users');
            //$table->foreign('id_planilha_atividades')
                //->references('id')->on('planilha_atividades');
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
        schema::drop('planAtividadesUsuarios');
    }
}
