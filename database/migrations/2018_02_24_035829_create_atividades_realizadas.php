<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAtividadesRealizadas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('atividadesRealizadas', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_planilhaAtividades')->nullable(false);
            $table->integer('id_users')->nullable(false);
            $table->dateTime('date_atividade')->useCurrent();
            $table->boolean('flgdelete');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('atividadesRealizadas');
    }
}
