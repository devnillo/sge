<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('escolas', function (Blueprint $table) {
            $table->id();
            $table->string('registro')->default('00');
            $table->string('inep')->unique();
            $table->string('situacao');
            $table->string('inicio_ano_letivo')->nullable();
            $table->string('encerramento_ano_letivo')->nullable();
            $table->string('nome');
            $table->string('cep');
            $table->string('municipio');
            $table->string('distrito');
            $table->string('endereco');
            $table->string('numero')->nullable();
            $table->string('complemento')->nullable();
            $table->string('bairro')->nullable();
            $table->string('ddd')->nullable();
            $table->string('telefone')->nullable();
            $table->string('telefone_2')->nullable();
            $table->string('email')->unique()->nullable();
            $table->string('orgao_regional_ensino')->nullable();
            $table->string('localizacao');
            $table->string('localizacao_diferenciada');
            $table->string('dependencia_administrativa');
            $table->string('secretaria_educacao')->nullable();
            $table->string('secretaria_seguranca')->nullable();
            $table->string('secretaria_saude')->nullable();
            $table->string('outro_orgao_administracao_publico')->nullable();
            $table->string('empresa_mantedora')->nullable();
            $table->string('sindicato_trabalhadores')->nullable();
            $table->string('ong')->nullable();
            $table->string('instituicao_sem_fins_lucrativos')->nullable();
            $table->string('sistema_s')->nullable();
            $table->string('oscip')->nullable();
            $table->string('categoria_escola_privada')->nullable();
            $table->string('secretaria_estadual')->nullable();
            $table->string('secretaria_municiapl')->nullable();
            $table->string('nao_possui_parceria_ou_convenio')->nullable();
            $table->string('termo_colaboracao')->nullable();
            $table->string('termo_fomento')->nullable();
            $table->string('acordo_de_cooperacao')->nullable();
            $table->string('pestacao_de_servico')->nullable();
            $table->string('termo_de_cooperacao_tecnica_financeira')->nullable();
            $table->string('cantrato_consorcio_publico')->nullable();
            $table->string('termo_colaboracao_municipal')->nullable();
            $table->string('termo_fomento_municipal')->nullable();
            $table->string('acordo_de_cooperacao_municipal')->nullable();
            $table->string('pestacao_de_servico_municipal')->nullable();
            $table->string('termo_de_cooperacao_tecnica_financeira_municipal')->nullable();
            $table->string('cantrato_consorcio_puplico_municipal')->nullable();
            $table->string('cnpj_mantedora_principal_escola_pivada')->nullable();
            $table->string('cnpj_escola_pivada')->nullable();
            $table->string('regulamentacao_no_orgao_de_educacao')->nullable();
            $table->string('orgao_responsavel_regulamentacao_federal')->nullable();
            $table->string('orgao_responsavel_regulamentacao_estadual')->nullable();
            $table->string('orgao_responsavel_regulamentacao_municipal')->nullable();
            $table->string('unidade_vinculada_a_escola')->nullable();
            $table->string('codigo_escola_sede')->nullable();
            $table->string('codigo_da_ies')->nullable();

            $table->string('senha');
            $table->unsignedBigInteger('admin_id');
            $table->foreign('admin_id')->references('id')->on('admins');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('escolas');
    }
};
