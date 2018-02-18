<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TablePlanAtividades extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        schema::create('planAtividades', function(Blueprint $table){
            $table->integer('id')->nullable(false);
            $table->integer('id_users')->nullable(false);
            $table->integer('flgAtivo')->nullable(false);
            $table->date('data_ini');
            $table->date('data_fim');


            //$table->primary(['id','id_users']);

            $table->index('flgAtivo');
            $table->index('id_users');
            $table->index('id');

            //$table->foreign('id_users')
               // ->references('id')->on('users');
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
        schema::drop('planAtividades');
    }
}
