<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlterTableSiteContatosAddFkMotivoContatos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //Adicionando a coluna
        Schema::table('site_contatos', function (Blueprint $table) {
            $table->unsignedBigInteger('motivo_contatos_id');
        });

        //Atribuindo valores p/ nova coluna
        DB::statement('update site_contatos set motivo_contatos_id = motivo_contato');

        //Aplicar a FK e remover motivo_contato
        Schema::table('site_contatos', function (Blueprint $table) {
            $table->foreign('motivo_contatos_id')->references('id')->on('motivo_contatos');
            $table->dropColumn('motivo_contato');
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {

        //Criar motivo_contato novamente e remover fk
        Schema::table('site_contatos', function (Blueprint $table) {
            $table->integer('motivo_contato');
            $table->dropForeign('site_contatos_motivo_contatos_id_foreign');
        });

        //Atribuindo motivos_contato_id p/ a coluna motivo_contato
        DB::statement('update site_contatos set motivo_contato = motivo_contatos_id');

        //Removendo a coluna
        Schema::table('site_contatos', function (Blueprint $table) {
            $table->dropColumn('motivo_contatos_id');
        });
    }
}
