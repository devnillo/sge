<x-layout>
    @vite('resources/views/admin/style.css')
    <x-slot name="title">
        Criar Escola
    </x-slot>
    <div class="main w-full">
        <x-register title="Registrar Escola" description=' '>            
            <form  action={{ route("escola.register.store") }} method="POST">
                @csrf
                <div class="grid items-center justify-center grid-cols-12 gap-x-4 mb-2">
                    <div class="col-span-full md:col-span-7">
                        <label for="nome">Nome da escola*</label>
                        <x-input name="nome" type="text" placeholder="EX: CEMARP, CEEP" id="nome"/>
                        @error('nome')
                        <p class="error">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="col-span-full md:col-span-5">
                        <label for="inep">Código INEP da escola*</label>
                        <x-input name="inep" type="text" placeholder="Código INEP da escola" id="inep"/>
                        @error('inep')
                            <p class="error">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="div flex flex-col col-span-full gap-2 mb-2">
                        <label for="regulamentacao_no_orgao_de_educacao">Situação de funcionamento*</label>
                        <select name="situacao" id="situacao" class="border border-gray-300 py-2 rounded focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent">
                            <option value="">Selecione</option>
                            <option value="1">Em atividade</option>
                            <option value="2">Paralisada</option>
                            <option value="3">Extinta</option>
                        </select>
                    </div>
                    <div class="datas flex col-span-full md:col-span-12">
                        <div id="datas" >
                            <label for="inicio_ano_letivo">Data de início do ano letivo*</label>
                            <x-input name="inicio_ano_letivo" type="date" placeholder="inicio do ano letivo" id="inicio_ano_letivo"/>
                                @error('inicio_ano_letivo')
                                    <p class="error">{{ $message }}</p>
                                @enderror
                        </div>
                        <div id="datas" class="datas col-span-full md:col-span-12">
                            <label for="encerramento_ano_letivo">Data de término do ano letivo*</label>
                            <x-input name="encerramento_ano_letivo" type="date" placeholder="Data de Abertura" id="encerramento_ano_letivo"/>
                            @error('encerramento_ano_letivo')
                            <p class="error">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                    <div class="div flex flex-col col-span-full gap-2 mb-2">
                        <label for="regulamentacao_no_orgao_de_educacao">Regulamentação/autorização no conselho ou órgão municipal, estadual ou federal de educação</label>
                        <select name="regulamentacao_no_orgao_de_educacao" id="regulamentacao_no_orgao_de_educacao" class="border border-gray-300 py-2 rounded focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent">
                            <option value="">Selecione</option>
                            <option value="0">Não</option>
                            <option value="1">Sim</option>
                            <option value="2">Em tramitação</option>
                        </select>
                    </div>
                    <div class="div flex flex-col col-span-full gap-2">
                        <label for="dependencia_administrativa">Dependência administrativa*</label>
                        <select name="dependencia_administrativa" id="dependencia_administrativa" class="border border-gray-300 py-2 rounded focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent">
                            <option value="">Selecione</option>
                            <option value="1">Federal</option>
                            <option value="2">Estadual</option>
                            <option value="3">Municipal</option>
                            <option value="4">Privada</option>
                        </select>
                    </div>
                    <p class="sub-title col-span-full">Endereço</p>
    
                    <div class="col-span-full md:col-span-6">
                        <label for="cep">CEP da escola*</label>
                        <x-input name="cep" type="text" placeholder="65680000" id="cep"/>
                        @error('cep')
                        <p class="error">{{ $message }}</p>
                        @enderror
                    </div>
                    <div  class="col-span-full md:col-span-6">
                        <div class="div flex flex-col">
                            <label for="municipio">Município da escola*</label>
                            <select name="municipio" id="municipio" class="border border-gray-300 py-2 rounded focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent">
                                <option value="">Selecione</option>
                                <option value="1">Passagem Franca</option>
                                {{-- <option value="2">Zona rural</option> --}}
                            </select>
                        </div>
                    </div>
                    <div class="div  flex flex-col col-span-full md:col-span-4">
                        <label for="distrito">Distrito*</label>
                        <select name="distrito" id="distrito" class="border border-gray-300 py-2 rounded focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent">
                            <option value="">Selecione</option>    
                            <option value="1">MA</option>
                            {{-- <option value="2">Zona rural</option> --}}
                        </select>
                    </div>
                    <div class="col-span-full md:col-span-8">
                        <label for="endereco">Endereço*</label>
                        <x-input name="endereco" type="text" placeholder="EX: avenida casta silva" id="endereco"/>
                        @error('endereco')
                        <p class="error">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="col-span-full md:col-span-4">
                        <label for="numero">Número</label>
                        <x-input name="numero" type="text" placeholder="s/n, caso não tenha" id="numero"/>
                        @error('numero')
                        <p class="error">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="col-span-full md:col-span-8">
                        <label for="complemento">Complemento</label>
                        <x-input name="complemento" type="text" placeholder="Bloco, Lagradouro" id="complemento"/>
                        @error('complemento')
                        <p class="error">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="col-span-full md:col-span-6">
                        <label for="bairro">Bairro</label>
                        <x-input name="bairro" type="text" placeholder="Bloco, Lagradouro" id="bairro"/>
                        @error('bairro')
                        <p class="error">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="div flex flex-col col-span-full md:col-span-6">
                        <label for="localizacao">Localização*</label>
                        <select name="localizacao" id="localizacao" class="border border-gray-300 py-2 rounded focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent">
                            <option value="">Selecione</option>
                            <option value="1">Zona urbana</option>
                            <option value="2">Zona rural</option>
                        </select>
                    </div>
                    <div class="div flex flex-col gap-2 mt-2 col-span-full md:col-span-6">
                        <label for="localizacao_diferenciada">Localização diferenciada da escola*</label>
                        <select name="localizacao_diferenciada" id="localizacao_diferenciada" class="border border-gray-300 py-2 rounded focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent">
                            <option value="">Selecione</option>
                            <option value="1">Não está em área de localização diferenciada</option>
                            <option value="2">Área de assentamento</option>
                            <option value="3">Terra indígena</option>
                            <option value="7">Comunidade quilombola</option>
                            <option value="8">Área onde se localizam povos e comunidades tradicionais</option>
                        </select>
                    </div>
    
                    <p class="sub-title col-span-full">Contato</p>
    
                        <div class="col-span-full md:col-span-3">
                            <label for="ddd">DDD</label>
                            <x-input name="ddd" type="text" placeholder="EX: 99" id="ddd"/>
                        </div>
                        @error('ddd')
                           <p class="error">{{ $message }}</p>
                        @enderror
                        <div class="col-span-full md:col-span-9">
                            <label for="telefone">Telefone</label>
                            <x-input name="telefone" type="text" placeholder="EX: 984121324" id="telefone"/>
                        </div>
                        @error('telefone')
                            <p class="error">{{ $message }}</p>
                        @enderror
                    <div  class="col-span-full">
                        <label for="email">Email</label>
                        <x-input name="email" type="text" placeholder="Ex: escola@email.com" id="email"/>
                            @error('email')
                               <p class="error">{{ $message }}</p>
                            @enderror
                    </div>
                    <div  class="col-span-full md:col-span-6">
                        <label for="orgao_regional_ensino">Orgao regional de ensino</label>
                        <x-input name="orgao_regional_ensino" type="text" placeholder="EX: 12345678" id="orgao_regional_ensino"/>
                            @error('orgao_regional_ensino')
                               <p class="error">{{ $message }}</p>
                            @enderror
                    </div>
                    <div class="div flex flex-col col-span-full md:col-span-6">
                        <label for="categoria_escola_privada">Categoria da escola privada</label>
                        <select name="categoria_escola_privada" id="categoria_escola_privada" class="border border-gray-300 py-2 rounded focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent">
                            <option value="">Selecione</option>
                            <option value="1">Particular</option>
                            <option value="2">Comunitária</option>
                            <option value="3">Cofessional</option>
                            <option value="4">Filantropica</option>
                        </select>
                    </div>
                    
                    <p class="sub-title col-span-full">Órgão ao qual a escola pública está vinculada</p>
                    <div class="flex flex-col gap-2 w-full col-span-full">
                        <div class="div flex flex-col">
                            <label for="secretaria_educacao">Secretaria de Educação/Ministério de Educação</label>
                            <select name="secretaria_educacao" id="secretaria_educacao" class="border border-gray-300 py-2 rounded focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent">
                                <option value="">Selecione</option>
                                <option value="0">Não</option>
                                <option value="1">Sim</option>
                            </select>
                        </div>
                        <div class="div flex flex-col">
                            <label for="secretaria_saude">Secretaria da Saúde/Ministério da Saúde</label>
                            <select name="secretaria_saude" id="secretaria_saude" class="border border-gray-300 py-2 rounded focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent">
                                <option value="">Selecione</option>
                                <option value="0">Não</option>
                                <option value="1">Sim</option>
                            </select>
                        </div>
                        <div class="div flex flex-col">
                            <label for="secretaria_seguranca">Secretaria de Segurança Pública/Forças Armadas/Militar</label>
                            <select name="secretaria_seguranca" id="secretaria_seguranca" class="border border-gray-300 py-2 rounded focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent">
                                <option value="">Selecione</option>
                                <option value="0">Não</option>
                                <option value="1">Sim</option>
                            </select>
                        </div>
                        <div class="div flex flex-col">
                            <label for="outro_orgao_administracao_publico">Outro órgão da administração pública</label>
                            <select name="outro_orgao_administracao_publico" id="outro_orgao_administracao_publico" class="border border-gray-300 py-2 rounded focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent">
                                <option value="">Selecione</option>
                                <option value="0">Não</option>
                                <option value="1">Sim</option>
                            </select>
                        </div>
                        <div id="zona_escola_privada" class="escola-privada">
                            <p class="sub-title">Mantedora da escola privada</p>
                            <div class="div flex flex-col">
                                <label for="empresa_mantedora">Empresa, grupos empresariais do setor privado ou pessoa física</label>
                                <select name="empresa_mantedora" id="empresa_mantedora" class="border border-gray-300 py-2 rounded focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent">
                                    <option value="">Selecione</option>
                                    <option value="0">Não</option>
                                    <option value="1">Sim</option>
                                </select>
                            </div>
                            <div class="div flex flex-col">
                                <label for="sindicato_trabalhadores">Sindicatos de trabalhadores ou patronais, associações, cooperativas</label>
                                <select name="sindicato_trabalhadores" id="sindicato_trabalhadores" class="border border-gray-300 py-2 rounded focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent">
                                    <option value="">Selecione</option>
                                    <option value="0">Não</option>
                                    <option value="1">Sim</option>
                                </select>
                            </div>
                            <div class="div flex flex-col">
                                <label for="ong">Organização não governamental (ONG) - nacional ou internacional</label>
                                <select name="ong" id="ong" class="border border-gray-300 py-2 rounded focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent">
                                    <option value="">Selecione</option>
                                    <option value="0">Não</option>
                                    <option value="1">Sim</option>
                                </select>
                            </div>
                            <div class="div flex flex-col">
                                <label for="instituicao_sem_fins_lucrativos">Instituição sem fins lucrativos</label>
                                <select name="instituicao_sem_fins_lucrativos" id="instituicao_sem_fins_lucrativos" class="border border-gray-300 py-2 rounded focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent">
                                    <option value="">Selecione</option>
                                    <option value="0">Não</option>
                                    <option value="1">Sim</option>
                                </select>
                            </div>
                            <div class="div flex flex-col">
                                <label for="sistema_s">Sistema S (Sesi, Senai, Sesc, outros)</label>
                                <select name="sistema_s" id="sistema_s" class="border border-gray-300 py-2 rounded focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent">
                                    <option value="">Selecione</option>
                                    <option value="0">Não</option>
                                    <option value="1">Sim</option>
                                </select>
                            </div>
                            <div class="div flex flex-col">
                                <label for="oscip">Organização da Sociedade Civil de Interesse Público (Oscip)</label>
                                <select name="oscip" id="oscip" class="border border-gray-300 py-2 rounded focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent">
                                    <option value="">Selecione</option>
                                    <option value="0">Não</option>
                                    <option value="1">Sim</option>
                                </select>
                            </div>
                            <div class="cnpj">
                                {{-- <p class="sub-title">Dados da escola Privada</p> --}}
                                <div>
                                    <label for="cnpj_mantedora_principal_escola_pivada">CNPJ da mantenedora principal da escola privada</label>
                                    <x-input name="cnpj_mantedora_principal_escola_pivada" type="text" id="cnpj_mantedora_principal_escola_pivada"/>
                                        @error('cnpj_mantedora_principal_escola_pivada')
                                           <p class="error">{{ $message }}</p>
                                        @enderror
                                </div>
                                <div>
                                    <label for="cnpj_escola_pivada">CNPJ da escola privada</label>
                                    <x-input name="cnpj_mantedora_principal_escola_pivada" type="text" id="cnpj_mantedora_principal_escola_pivada"/>
                                        @error('cnpj_mantedora_principal_escola_pivada')
                                           <p class="error">{{ $message }}</p>
                                        @enderror
                                </div>
                            </div>
                        </div>
                        
                        <p class="sub-title col-span-12">Poder público responsável pela parceria ou convênio entre a Administração Pública e outras instituições</p>
                        <div class="estadual-campos">
                            <div class="div flex flex-col">
                                <label for="secretaria_estadual">Secretaria estadual</label>
                                <select name="secretaria_estadual" id="secretaria_estadual" class="border border-gray-300 py-2 rounded focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent">
                                    <option value="">Selecione</option>
                                    <option value="0">Não</option>
                                    <option value="1">Sim</option>
                                </select>
                            </div>
                            <div class="div flex flex-col">
                                <label for="secretaria_municiapl">Secretaria municipal</label>
                                <select name="secretaria_municiapl" id="secretaria_municiapl" class="border border-gray-300 py-2 rounded focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent">
                                    <option value="">Selecione</option>
                                    <option value="0">Não</option>
                                    <option value="1">Sim</option>
                                </select>
                            </div>
                            <div class="div flex flex-col">
                                <label for="nao_possui_parceria_ou_convenio">Não possui parceria ou convênio</label>
                                <select name="nao_possui_parceria_ou_convenio" id="nao_possui_parceria_ou_convenio" class="border border-gray-300 py-2 rounded focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent">
                                    <option value="">Selecione</option>
                                    <option value="0">Não</option>
                                    <option value="1">Sim</option>
                                </select>
                            </div>
                            <p class="sub-title">Forma(s) de contratação da parceria ou convênio entre a escola e a Secretaria municipal de educação</p>
                            <div class="div flex flex-col">
                                <label for="termo_colaboracao">Termo de colaboração (Lei nº 13.019/2014)</label>
                                <select name="termo_colaboracao" id="termo_colaboracao" class="border border-gray-300 py-2 rounded focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent">
                                    <option value="">Selecione</option>
                                    <option value="0">Não</option>
                                    <option value="1">Sim</option>
                                </select>
                            </div>
                            <div class="div flex flex-col">
                                <label for="termo_fomento">Termo de fomento (Lei nº 13.019/2014)</label>
                                <select name="termo_fomento" id="termo_fomento" class="border border-gray-300 py-2 rounded focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent">
                                    <option value="">Selecione</option>
                                    <option value="0">Não</option>
                                    <option value="1">Sim</option>
                                </select>
                            </div>
                            <div class="div flex flex-col">
                                <label for="nao_possui_parceria_ou_convenio">Acordo de cooperação (Lei nº 13.019/2014)</label>
                                <select name="acordo_de_cooperacao" id="acordo_de_cooperacao" class="border border-gray-300 py-2 rounded focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent">
                                    <option value="">Selecione</option>
                                    <option value="0">Não</option>
                                    <option value="1">Sim</option>
                                </select>
                            </div>
                            <div class="div flex flex-col">
                                <label for="pestacao_de_servico">Contrato de prestação de serviço</label>
                                <select name="pestacao_de_servico" id="pestacao_de_servico" class="border border-gray-300 py-2 rounded focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent">
                                    <option value="">Selecione</option>
                                    <option value="0">Não</option>
                                    <option value="1">Sim</option>
                                </select>
                            </div>
                            <div class="div flex flex-col">
                                <label for="acordo_de_cooperacao_tecnica_financeira">Termo de cooperação técnica e financeira</label>
                                <select name="acordo_de_cooperacao_tecnica_financeira" id="acordo_de_cooperacao_tecnica_financeira" class="border border-gray-300 py-2 rounded focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent">
                                    <option value="">Selecione</option>
                                    <option value="0">Não</option>
                                    <option value="1">Sim</option>
                                </select>
                            </div>
                            <div class="div flex flex-col">
                                <label for="cantrato_consorcio_puplico">Contrato de consórcio público/Convênio de cooperação</label>
                                <select name="cantrato_consorcio_puplico" id="cantrato_consorcio_puplico" class="border border-gray-300 py-2 rounded focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent">
                                    <option value="">Selecione</option>
                                    <option value="0">Não</option>
                                    <option value="1">Sim</option>
                                </select>
                            </div>
                        </div>
                        <div class="municipal-campos">
                            <p class="sub-title">Forma(s) de contratação da parceria ou convênio entre a escola e a Secretaria estadual de educação</p>
                            <div class="div flex flex-col">
                                <label for="termo_colaboracao">Termo de colaboração (Lei nº 13.019/2014)</label>
                                <select name="termo_colaboracao" id="termo_colaboracao" class="border border-gray-300 py-2 rounded focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent">
                                    <option value="">Selecione</option>
                                    <option value="0">Não</option>
                                    <option value="1">Sim</option>
                                </select>
                            </div>
                            <div class="div flex flex-col">
                                <label for="termo_fomento">Termo de fomento (Lei nº 13.019/2014)</label>
                                <select name="termo_fomento" id="termo_fomento" class="border border-gray-300 py-2 rounded focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent">
                                    <option value="">Selecione</option>
                                    <option value="0">Não</option>
                                    <option value="1">Sim</option>
                                </select>
                            </div>
                            <div class="div flex flex-col">
                                <label for="nao_possui_parceria_ou_convenio">Acordo de cooperação (Lei nº 13.019/2014)</label>
                                <select name="acordo_de_cooperacao" id="acordo_de_cooperacao" class="border border-gray-300 py-2 rounded focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent">
                                    <option value="">Selecione</option>
                                    <option value="0">Não</option>
                                    <option value="1">Sim</option>
                                </select>
                            </div>
                            <div class="div flex flex-col">
                                <label for="pestacao_de_servico">Contrato de prestação de serviço</label>
                                <select name="pestacao_de_servico" id="pestacao_de_servico" class="border border-gray-300 py-2 rounded focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent">
                                    <option value="">Selecione</option>
                                    <option value="0">Não</option>
                                    <option value="1">Sim</option>
                                </select>
                            </div>
                            <div class="div flex flex-col">
                                <label for="acordo_de_cooperacao_tecnica_financeira">Termo de cooperação técnica e financeira</label>
                                <select name="acordo_de_cooperacao_tecnica_financeira" id="acordo_de_cooperacao_tecnica_financeira" class="border border-gray-300 py-2 rounded focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent">
                                    <option value="">Selecione</option>
                                    <option value="0">Não</option>
                                    <option value="1">Sim</option>
                                </select>
                            </div>
                            <div class="div flex flex-col">
                                <label for="cantrato_consorcio_puplico">Contrato de consórcio público/Convênio de cooperação</label>
                                <select name="cantrato_consorcio_puplico" id="cantrato_consorcio_puplico" class="border border-gray-300 py-2 rounded focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent">
                                    <option value="">Selecione</option>
                                    <option value="0">Não</option>
                                    <option value="1">Sim</option>
                                </select>
                            </div>
                        </div>
    
                    </div>
                    
                    <p class="sub-title col-span-full">Esfera administrativa do conselho ou órgão responsável pela regulamentação/autorização</p>
                    <div class="col-span-full flex flex-col gap-2 mb-2">
                        <div class="item">
                            <input type="radio" name="esfera_administrativa" id="municipal" value="1" class="mr-2">
                            <label for="municipal">Municipal</label>
                        </div>
                        <div class="item">
                            <input type="radio" name="esfera_administrativa" id="estadual" value="2" class="mr-2">
                            <label for="estadual">Estadual</label>
                        </div>
                        <div class="item">
                            <input type="radio" name="esfera_administrativa" id="federal" value="3" class="mr-2">
                            <label for="federal">Federal</label>
                        </div>
                    </div>
                    <div class="div flex flex-col col-span-full">
                        <label for="unidade_vinculada_a_escola">Unidade vinculada à escola de educação básica ou unidade ofertante de educação superior</label>
                        <select name="unidade_vinculada_a_escola" id="unidade_vinculada_a_escola" class="border border-gray-300 py-2 rounded focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent">
                            <option value="">Selecione</option>
                            <option value="0">Sem vínculo com outra instituição</option>
                            <option value="1">Unidade vinculada a escola de educação básica</option>
                            <option value="2">Unidade ofertante de educação superior</option>
                        </select>
                    </div>
                    <div class="div flex flex-col col-span-full md:col-span-6">
                        <label for="codigo_escola_sede">Código da Escola Sede</label>
                        <x-input name="codigo_escola_sede" type="text" id="codigo_escola_sede" placeholder="EX: 12345678"/>
                            @error('codigo_escola_sede')
                               <p class="error">{{ $message }}</p>
                            @enderror
                    </div>
                    <div class="div flex flex-col col-span-full md:col-span-6 ">
                        <label for="codigo_da_ies">Código da IES</label>
                        <x-input name="codigo_da_ies" type="text" id="codigo_da_ies" placeholder="EX: 123456789"/>
                            @error('codigo_da_ies')
                               <p class="error">{{ $message }}</p>
                            @enderror
                    </div>
                </div>
                <x-button type="submit" title="Criar Escola"/>
            </form>
        </x-register>
    </div>
    <script>
        let dependencia_administrativa = document.getElementById('dependencia_administrativa')
        let zona_escola_privada = document.getElementById('zona_escola_privada')
        let situacao = document.getElementById('situacao')
        let datas = document.querySelector('.datas')
        zona_escola_privada.style.display = 'none';
        datas.style.display = 'none';
        
        dependencia_administrativa.addEventListener('change', () => {
            if(dependencia_administrativa.value == '4'){
                zona_escola_privada.style.display = 'block';
            }  
          
        })
        situacao.addEventListener('change', () => {
            if(situacao.value == '1'){
                datas.style.display = 'block';
            }else{
                datas.style.display = 'none';
            }
             
          
        })
        
    </script>
</x-layout>