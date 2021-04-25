<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFichasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fichas', function (Blueprint $table) 
        {
            $table->BigInteger('n_hcv')->unsigned();
            $table->primary('n_hcv');
            $table->integer('n_pre');
            $table->string('id_propria')->nullable();
            $table->string('n_id')->nullable()->default('Este animal não possui identificação própria.');
            $table->string('apelido')->nullable()->default('Este animal não possui apelido registrado.');
            $table->string('nome_cientifico');
            $table->string('nome_comum');
            $table->integer('n_individuos');
            $table->string('classe')->nullable();
            $table->string('sexo')->nullable();
            $table->string('faixa_etaria');
            $table->float('peso');
            $table->string('historico')->nullable()->default('Não registrado.');
            $table->date('data_entrada');
            $table->string('tipo_de_caso');
            $table->string('conflito');
            $table->string('origem');
            $table->string('local_origem');
            $table->string('quem_trouxe');
            $table->BigInteger('user_id')->unsigned()->index();
            $table->string('obs_entrada')->nullable()->default('Não registrado.');
            $table->string('sinais_clinicos')->nullable()->default('Não registrado.');
            $table->string('medicacoes')->nullable()->default('Não registrado.');
            $table->string('procedimentos')->nullable()->default('Não registrado.');
            $table->string('exames')->nullable()->default('Não registrado.');
            $table->date('data_saida')->nullable();
            $table->string('n_doc_saida')->nullable()->default('Não registrado.');
            $table->string('destino')->nullable()->default('Não registrado.');
            $table->string('motivo_saida')->nullable()->default('Não registrado.');
            $table->string('responsavel_entrega')->nullable()->default('Não registrado.');
            $table->string('res_necropsia')->nullable()->default('Não registrado.');
            $table->string('diag_final')->nullable()->default('Não registrado.');
            $table->string('obs_saida')->nullable()->default('Não registrado.');
            $table->string('status')->default('Em internação.');
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
            Schema::dropIfExists('fichas');
    }
}
