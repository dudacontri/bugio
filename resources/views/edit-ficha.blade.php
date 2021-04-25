<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
        <meta charset="utf-8">
        <title>BUGIO</title>
        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>
        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <!-- Styles -->
        <link href="{{ asset('css/styles.css') }}" rel="stylesheet">
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
        <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
</head>
<body>
    <header>
        <nav class="navbar" style="display: flex; justify-content: flex-start; align-items: center;">
            <span class="bugio-white" style="justify-self: flex-start;">BUGIO</span>
            <a  href="{{ route('logout') }}"
                    onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                    <ion-icon name="log-in-outline" style="justify-item: flex-end;margin-left: 77vw;"></ion-icon>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                     @csrf
                    </form>
            </a>
            
        </nav>
</header>

    <div style="display:flex; background-color: white; width: 75.5vw; margin-left:6vw">
        <h1 style="margin-left: 2%; font-family: 'Lilita One', cursive; color: #F28345; width: 57vw;">EDITAR FICHA</h1>
            <a href ='/fichas/{{$ficha->n_hcv}}'>
                <button type="button" class="btn btn-light button-top">VOLTAR</button>
            </a>
    </div>

    <form class="form-horizontal" style="width: 90vw;" method="POST" action="{{ route('updateFicha') }}"><!--Falta route-->
        @csrf
        <fieldset>
            <div class="form-group">
                <div class="form-group">
                    <input type="hidden" name="n_hcv" value="{{$ficha->n_hcv}}">
                    <label class="col-md-2 control-label">Nome comum</label>
                        <div class="col-md-8">
                            <input value="{{$ficha->nome_comum}}" id="nome_comum" name="nome_comum" class="form-control input-md" required="" type="text">
                        </div>
                </div>

                <div class="form-group">
                    <label class="col-md-2 control-label">Nome científico</label>
                         <div class="col-md-8">
                            <input value="{{$ficha->nome_cientifico}}" id="nome_cientifico" name="nome_cientifico" class="form-control input-md" required="" type="text">
                         </div>
                </div>

                <div class="form-group">
                    <label class="col-md-2 control-label">Apelido</label>
                          <div class="col-md-8">
                             <input value="{{$ficha->apelido}}" id="apelido" name="apelido" class="form-control input-md" required="" type="text">
                          </div>
                </div>

                <div class="form-group">
                    <label class="col-md-2 control-label" >Classe</label>
                        <div class="col-md-8">
                            <input value="{{$ficha->classe}}" id="classe" name="classe" class="form-control input-md" required="" type="text">
                         </div>
                </div>

                <div class="form-group">
                    <label class="col-md-2 control-label" >Nº de indivíduos</label>
                        <div class="col-md-2">
                            <input value="{{$ficha->n_individuos}}" id="n_individuos" name="n_individuos" class="form-control input-md" required="" type="text">
                         </div>
                </div>


                <div class="form-group">
                    <label class="col-md-2 control-label">Nº HCV </label>
                            <div class="col-md-2">
                                <input value="{{$ficha->n_hcv}}" id="n_hcv" name="n_hcv"  class="form-control input-md" required="" type="text" disabled>
                            </div>

                        <label class="col-md-2 control-label">Nº PRESERVAS</label>
                            <div class="col-md-2">
                                <input value="{{$ficha->n_pre}}" id="n_pre" name="n_pre"  class="form-control input-md" required="" type="text" maxlength="10">
                            </div>

                </div>
                <div class="form-group">

                    <label class="col-md-2 control-label" for="radios">Identificação</label><!--Verificar inserção do value-->
                    @if($ficha->id_propria == 'Anilha')
                            <div class="col-md-3">
                                <label required="" class="radio-inline" for="radios-0" >
                                    <input name="id_propria" id="anilha" value="Anilha" type="radio" checked>
                                            Anilha
                                </label>

                                <label class="radio-inline" for="radios-1">
                                    <input name="id_propria" id="microchip" value="Microchip" type="radio">
                                            Microchip
                                </label>

                                <label class="radio-inline" for="radios-2">
                                    <input name="id_propria" id="nenhum" value="Nenhuma" type="radio">
                                            Nenhuma identificação própria.
                                </label>
                            </div>
                    @endif
                    @if($ficha->id_propria == 'Nenhuma')
                            <div class="col-md-3">
                                <label required="" class="radio-inline" for="radios-0" >
                                    <input name="id_propria" id="anilha" value="Anilha" type="radio" >
                                            Anilha
                                </label>

                                <label class="radio-inline" for="radios-1">
                                    <input name="id_propria" id="microchip" value="Microchip" type="radio">
                                            Microchip
                                </label>

                                <label class="radio-inline" for="radios-2">
                                    <input name="id_propria" id="nenhum" value="Nenhuma" type="radio" checked>
                                            Nenhuma identificação própria.
                                </label>
                            </div>
                    @endif
                    @if($ficha->id_propria == 'Microchip')
                            <div class="col-md-3">
                                <label required="" class="radio-inline" for="radios-0" >
                                    <input name="id_propria" id="anilha" value="Anilha" type="radio">
                                            Anilha
                                </label>

                                <label class="radio-inline" for="radios-1">
                                    <input name="id_propria" id="microchip" value="Microchip" type="radio" checked>
                                            Microchip
                                </label>

                                <label class="radio-inline" for="radios-2">
                                    <input name="id_propria" id="nenhum" value="Nenhuma" type="radio">
                                            Nenhuma identificação própria.
                                </label>
                            </div>
                    @endif
                    <label class="col-md-2 control-label">Número da identificação </label>
                        <div class="col-md-4" style="width: 15.5vw;">
                            <input value="{{$ficha->n_id}}" id="n_id" name="n_id" class="form-control input-md"  type="text" placeholder="Se houver.">
                        </div>

                </div>


                <div class="form-group">
                    <label class="col-md-2 control-label">Peso</label>
                        <div class="col-md-8" style="width: 15.5vw;">
                            <input value="{{$ficha->peso}}" id="peso" name="peso" class="form-control input-md" required="" type="text" placeholder="Em quilogramas.">
                        </div>


                            <label class="col-md-1 control-label" for="radios">Sexo</label><!--Verificar inserção do value-->
                            @if($ficha->sexo == 'Masculino')
                                <div class="col-md-4">
                                    <label required="" class="radio-inline" for="radios-0" >
                                            <input name="sexo" id="sexo" value="Masculino" type="radio" checked>
                                             Masculino
                                     </label>

                                     <label class="radio-inline" for="radios-1">
                                             <input name="sexo" id="sexo" value="Feminino" type="radio">
                                            Feminino
                                    </label>

                                    <label class="radio-inline" for="radios-2">
                                            <input name="sexo" id="sexo" value="Indefinido" type="radio">
                                            Indefinido
                                    </label>
                                 </div>
                            @endif
                            @if($ficha->sexo == 'Feminino')
                                <div class="col-md-4">
                                    <label required="" class="radio-inline" for="radios-0" >
                                            <input name="sexo" id="sexo" value="Masculino" type="radio">
                                             Masculino
                                     </label>

                                     <label class="radio-inline" for="radios-1">
                                             <input name="sexo" id="sexo" value="Feminino" type="radio" checked>
                                            Feminino
                                    </label>

                                    <label class="radio-inline" for="radios-2">
                                            <input name="sexo" id="sexo" value="Indefinido" type="radio">
                                            Indefinido
                                    </label>
                                 </div>
                            @endif
                            @if($ficha->sexo == 'Indefinido')
                                <div class="col-md-4">
                                    <label required="" class="radio-inline" for="radios-0" >
                                            <input name="sexo" id="sexo" value="Masculino" type="radio">
                                             Masculino
                                     </label>

                                     <label class="radio-inline" for="radios-1">
                                             <input name="sexo" id="sexo" value="Feminino" type="radio">
                                            Feminino
                                    </label>

                                    <label class="radio-inline" for="radios-2">
                                            <input name="sexo" id="sexo" value="Indefinido" type="radio" checked>
                                            Indefinido
                                    </label>
                                 </div>
                            @endif

                </div>

                <div class="form-group">
                     <label class="col-md-2 control-label" for="radios">Faixa etária</label><!--Verificar inserção do value-->
                     @if($ficha->faixa_etaria == 'Filhote')
                            <div class="col-md-8">
                                <label required="" class="radio-inline" for="radios-0" >
                                <input name="faixa_etaria" id="faixa_etaria" value="Filhote" type="radio" checked>
                                Filhote
                                </label>

                                <label class="radio-inline" for="radios-1">
                                <input name="faixa_etaria" id="faixa_etaria" value="Juvenil" type="radio">
                                Juvenil
                                </label>

                                <label class="radio-inline" for="radios-1">
                                <input name="faixa_etaria" id="faixa_etaria" value="Adulto" type="radio">
                                Adulto
                                </label>

                                <label class="radio-inline" for="radios-1">
                                <input name="faixa_etaria" id="faixa_etaria" value="Geriátrico" type="radio">
                                Geriátrico
                                </label>
                            </div>
                    @endif
                    @if($ficha->faixa_etaria == 'Juvenil')
                            <div class="col-md-8">
                                <label required="" class="radio-inline" for="radios-0" >
                                <input name="faixa_etaria" id="faixa_etaria" value="Filhote" type="radio">
                                Filhote
                                </label>

                                <label class="radio-inline" for="radios-1">
                                <input name="faixa_etaria" id="faixa_etaria" value="Juvenil" type="radio" checked>
                                Juvenil
                                </label>

                                <label class="radio-inline" for="radios-1">
                                <input name="faixa_etaria" id="faixa_etaria" value="Adulto" type="radio">
                                Adulto
                                </label>

                                <label class="radio-inline" for="radios-1">
                                <input name="faixa_etaria" id="faixa_etaria" value="Geriátrico" type="radio">
                                Geriátrico
                                </label>
                            </div>
                    @endif
                    @if($ficha->faixa_etaria == 'Adulto')
                            <div class="col-md-8">
                                <label required="" class="radio-inline" for="radios-0" >
                                <input name="faixa_etaria" id="faixa_etaria" value="Filhote" type="radio">
                                Filhote
                                </label>

                                <label class="radio-inline" for="radios-1">
                                <input name="faixa_etaria" id="faixa_etaria" value="Juvenil" type="radio">
                                Juvenil
                                </label>

                                <label class="radio-inline" for="radios-1">
                                <input name="faixa_etaria" id="faixa_etaria" value="Adulto" type="radio" checked>
                                Adulto
                                </label>

                                <label class="radio-inline" for="radios-1">
                                <input name="faixa_etaria" id="faixa_etaria" value="Geriátrico" type="radio">
                                Geriátrico
                                </label>
                            </div>
                    @endif
                    @if($ficha->faixa_etaria == 'Geriátrico')
                            <div class="col-md-8">
                                <label required="" class="radio-inline" for="radios-0" >
                                <input name="faixa_etaria" id="faixa_etaria" value="Filhote" type="radio">
                                Filhote
                                </label>

                                <label class="radio-inline" for="radios-1">
                                <input name="faixa_etaria" id="faixa_etaria" value="Juvenil" type="radio">
                                Juvenil
                                </label>

                                <label class="radio-inline" for="radios-1">
                                <input name="faixa_etaria" id="faixa_etaria" value="Adulto" type="radio">
                                Adulto
                                </label>

                                <label class="radio-inline" for="radios-1">
                                <input name="faixa_etaria" id="faixa_etaria" value="Geriátrico" type="radio" checked>
                                Geriátrico
                                </label>
                            </div>
                    @endif
                 </div>


              <div class="form-group">
                    <label class="col-md-2 control-label">Histórico</label>
                             <div class="col-md-8">
                                    <textarea name="historico" id="historico" class="form-control" aria-label="With textarea">{{$ficha->historico}}</textarea>
                             </div>
              </div>
                    <div class="form-group">
                        <label class="col-md-2 control-label">Motivo de entrada/Conflito</label>
                            <div class="col-md-8">
                                <input value="{{$ficha->conflito}}" id="conflito" name="conflito" class="form-control input-md" required="" type="text">
                            </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-2 control-label">Data de entrada</label>
                            <div class="col-md-2">
                                <input value="{{$ficha->data_entrada}}" id="data_entrada" name="data_entrada" class="form-control input-md" required="" type="date" style="width: 9vw">
                            </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-2 control-label" for="radios">Tipo de caso</label>
                        <!--Verificar inserção do value-->
                        @if($ficha->tipo_de_caso == 'Novo')
                                    <div class="col-md-4">
                                        <label required="" class="radio-inline" for="radios-0" >
                                            <input name="tipo_de_caso" id="tipo_de_caso" value="Novo" type="radio" checked>
                                                    Novo
                                        </label>

                                        <label class="radio-inline" for="radios-1">
                                            <input name="tipo_de_caso" id="tipo_de_caso" value="Retorno" type="radio">
                                                    Retorno
                                        </label>
                                    </div>
                        @endif
                        @if($ficha->tipo_de_caso == 'Retorno')
                                    <div class="col-md-4">
                                        <label required="" class="radio-inline" for="radios-0" >
                                            <input name="tipo_de_caso" id="tipo_de_caso" value="Novo" type="radio">
                                                    Novo
                                        </label>

                                        <label class="radio-inline" for="radios-1">
                                            <input name="tipo_de_caso" id="tipo_de_caso" value="Retorno" type="radio" checked>
                                                    Retorno
                                        </label>
                                    </div>
                        @endif
                    </div>


                    <div class="form-group">
                        <label class="col-md-2 control-label" for="radios">Origem</label>
                        @if($ficha->origem == 'Vida livre')
                                    <div class="col-md-4">
                                        <label required="" class="radio-inline" for="radios-0" >
                                            <input name="origem" id="origem" value="Vida livre" type="radio" checked>
                                                    Vida livre
                                        </label>

                                        <label class="radio-inline" for="radios-1">
                                            <input name="origem" id="origem" value="Pet não-convencional" type="radio">
                                                    Pet não-convencional
                                        </label>

                                        <label class="radio-inline" for="radios-2">
                                            <input name="origem" id="origem" value="Mantenedouros de fauna/Zoológicos" type="radio">
                                                    Mantenedouros de fauna/Zoológicos
                                        </label>

                                    </div>
                        @endif
                        @if($ficha->origem == 'Pet não-convencional')
                                    <div class="col-md-4">
                                        <label required="" class="radio-inline" for="radios-0" >
                                            <input name="origem" id="origem" value="Vida livre" type="radio">
                                                    Vida livre
                                        </label>

                                        <label class="radio-inline" for="radios-1">
                                            <input name="origem" id="origem" value="Pet não-convencional" type="radio" checked>
                                                    Pet não-convencional
                                        </label>

                                        <label class="radio-inline" for="radios-2">
                                            <input name="origem" id="origem" value="Mantenedouros de fauna/Zoológicos" type="radio">
                                                    Mantenedouros de fauna/Zoológicos
                                        </label>
                                    </div>
                        @endif
                        @if($ficha->origem == 'Mantenedouros de fauna/Zoológicos')
                                    <div class="col-md-4">
                                        <label required="" class="radio-inline" for="radios-0" >
                                            <input name="origem" id="origem" value="Vida livre" type="radio">
                                                    Vida livre
                                        </label>

                                        <label class="radio-inline" for="radios-1">
                                            <input name="origem" id="origem" value="Pet não-convencional" type="radio">
                                                    Pet não-convencional
                                        </label>

                                        <label class="radio-inline" for="radios-2">
                                            <input name="origem" id="origem" value="Mantenedouros de fauna/Zoológicos" type="radio" checked>
                                                    Mantenedouros de fauna/Zoológicos
                                        </label>
                                    </div>
                        @endif

                    </div>

                    <div class="form-group">
                        <label class="col-md-2 control-label" >Local de origem</label>
                            <div class="col-md-8">
                                <input value="{{$ficha->local_origem}}" id="local_origem" name="local_origem" class="form-control input-md" required="" type="text">
                            </div>
                    </div>


                    <div class="form-group">
                            <label class="col-md-2 control-label">Colaborador responsável pelo tratamento</label><!--Verificar inserção do value-->
                                <div class="col-md-8">
                                    <select  id="user_id" name="user_id"  class="form-control input-md" type="text" >
                                    @foreach($usuarios as $key=>$usuario)

                                      <option value="{{ $usuario->id}}">{{ $usuario->name }}</option>

                                    @endforeach
                                    </select>

                                </div>

                    </div>


                    <div class="form-group">
                        <label class="col-md-2 control-label">Responsável pela entrada</label>
                            <div class="col-md-8">
                                <input value="{{$ficha->quem_trouxe}}" id="quem_trouxe" name="quem_trouxe" class="form-control input-md" required="" type="text">
                            </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-2 control-label">Observações</label>
                                <div class="col-md-8">
                                        <textarea value="{{$ficha->obs_entrada}}" id="obs_entrada" name="obs_entrada" class="form-control" aria-label="With textarea">{{$ficha->obs_entrada}}</textarea>
                                </div>
                    </div>


                    </div>

                <div class="form-group">
                    <label class="col-md-2 control-label"></label>
                         <div class="col-md-8">
                                    <button type="submit"class="btn btn-light button-top" style="float: right">
                                        SALVAR
                                    </button>
                        </div>
                </div>
        </div>
    </fieldset>
</form>
<script src="https://unpkg.com/ionicons@5.2.3/dist/ionicons.js"></script>
</body>
</html>
