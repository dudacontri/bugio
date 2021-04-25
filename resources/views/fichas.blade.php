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
        <h1 style="margin-left: 2%; font-family: 'Lilita One', cursive; color: #F28345; width: 57vw;">ENTRADA DE FICHA</h1>
            <a href ="{{URL::route('home')}}">
                <button type="button" class="btn btn-light button-top">VOLTAR</button>
            </a>
    </div>

    <form class="form-horizontal" style="width: 90vw; margin-left: 3%" method="POST" action="{{ route('envio') }}">
        @csrf
        <fieldset>
            <div class="form-group">

                <div class="form-group">
                    <label class="col-md-2 control-label">Nome comum</label>
                        <div class="col-md-8">
                            <input id="nome_comum" name="nome_comum" class="form-control input-md" required="" type="text">
                        </div>
                </div>

                <div class="form-group">
                    <label class="col-md-2 control-label">Nome científico</label>
                         <div class="col-md-8">
                            <input id="nome_cientifico" name="nome_cientifico" class="form-control input-md" required="" type="text">
                         </div>
                </div>

                <div class="form-group">
                    <label class="col-md-2 control-label">Apelido</label>
                          <div class="col-md-8">
                             <input id="apelido" name="apelido" class="form-control input-md" required="" type="text">
                          </div>
                </div>

                <div class="form-group">
                    <label class="col-md-2 control-label" >Classe</label>
                        <div class="col-md-8">
                            <input id="classe" name="classe" class="form-control input-md" required="" type="text">
                         </div>
                </div>

                <div class="form-group">
                    <label class="col-md-2 control-label" >Nº de indivíduos</label>
                        <div class="col-md-2">
                            <input id="n_individuos" name="n_individuos" class="form-control input-md" type="text">
                         </div>
                </div>

                <div class="form-group">
                        <label class="col-md-2 control-label">Nº HCV </label>
                            <div class="col-md-2">
                                <input id="n_hcv" name="n_hcv"  class="form-control input-md" required="" type="text" placeholder="Apenas números.">
                            </div>

                        <label class="col-md-1 control-label">Nº PRESERVAS</label>
                            <div class="col-md-2">
                                <input id="n_pre" name="n_pre"  class="form-control input-md" required="" type="text" maxlength="10" placeholder="Apenas números.">
                            </div>

                </div>
                <div class="form-group">

                    <label class="col-md-2 control-label" for="radios">Identificação</label>
                            <div class="col-md-3">
                                <label required="" class="radio-inline" for="radios-0" >
                                    <input name="id_propria" id="anilha" value="Anilha" type="radio">
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

                    <label class="col-md-2 control-label">Número da identificação </label>
                        <div class="col-md-4" style="width: 15.5vw;">
                            <input id="n_id" name="n_id" class="form-control input-md"  type="text" placeholder="Se houver.">
                        </div>

                </div>


                <div class="form-group">
                    <label class="col-md-2 control-label">Peso</label>
                        <div class="col-md-8" style="width: 15.5vw;">
                            <input id="peso" name="peso" class="form-control input-md" required="" type="text" placeholder="Em quilogramas. Ex: 0.888">
                        </div>


                            <label class="col-md-1 control-label" for="radios">Sexo</label>
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
                                            <input name="sexo" id="sexo" value="Indefinido" type="radio">
                                            Indefinido
                                    </label>
                            </div>

                </div>

                <div class="form-group">
                     <label class="col-md-2 control-label" for="radios">Faixa etária</label>
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
                                <input name="faixa_etaria" id="faixa_etaria" value="Geriátrico" type="radio">
                                Geriátrico
                                </label>

                            </div>
                 </div>


              <div class="form-group">
                    <label class="col-md-2 control-label">Histórico</label>
                             <div class="col-md-8">
                                    <textarea name="historico" id="historico" class="form-control" aria-label="With textarea"></textarea>
                             </div>
              </div>
                    <div class="form-group">
                        <label class="col-md-2 control-label">Motivo de entrada/Conflito</label>
                            <div class="col-md-8">
                                <input id="conflito" name="conflito" class="form-control input-md" required="" type="text">
                            </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-2 control-label">Data de entrada</label>
                            <div class="col-md-2">
                                <input id="data_entrada" name="data_entrada" class="form-control input-md" required="" type="date" style="width: 9vw">
                            </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-2 control-label" for="radios">Tipo de caso</label>
                                    <div class="col-md-4">
                                        <label required="" class="radio-inline" for="radios-0" >
                                            <input name="tipo_de_caso" id="tipo_de_caso" value="Novo" type="radio">
                                                    Novo
                                        </label>

                                        <label class="radio-inline" for="radios-1">
                                            <input name="tipo_de_caso" id="tipo_de_caso" value="Retorno" type="radio">
                                                    Retorno
                                        </label>
                                    </div>
                    </div>


                    <div class="form-group">
                        <label class="col-md-2 control-label" for="radios">Origem</label>
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
                                            <input name="origem" id="origem" value="Mantenedouros de fauna/Zoológicos" type="radio">
                                                    Mantenedouros de fauna/Zoológicos
                                        </label>

                                    </div>

                    </div>

                    <div class="form-group">
                        <label class="col-md-2 control-label" >Local de origem</label>
                            <div class="col-md-8">
                                <input id="local_origem" name="local_origem" class="form-control input-md" required="" type="text">
                            </div>
                    </div>


                    <div class="form-group">
                            <label class="col-md-2 control-label">Colaborador responsável pelo tratamento</label>
                                <div class="col-md-8">
                                    <select id="user_id" name="user_id"  class="form-control input-md" type="text">
                                    @foreach($usuarios as $key=>$usuario)

                                      <option value="{{ $usuario->id}}">{{ $usuario->name }}</option>

                                    @endforeach
                                    </select>

                                </div>

                    </div>


                    <div class="form-group">
                        <label class="col-md-2 control-label">Responsável pela entrada</label>
                            <div class="col-md-8">
                                <input id="quem_trouxe" name="quem_trouxe" class="form-control input-md" required="" type="text">
                            </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-2 control-label">Observações</label>
                                <div class="col-md-8">
                                        <textarea id="obs_entrada" name="obs_entrada" class="form-control" aria-label="With textarea"></textarea>
                                </div>
                    </div>


                    </div>

                <div class="form-group">
                    <label class="col-md-2 control-label"></label>
                         <div class="col-md-8">
                             <a href="{{URL::route('home')}}">
                                    <button type="submit" id="proximo" name="proximo" class="btn btn-light button-top" style="float: right">
                                        SALVAR
                                    </button>
                             </a>
                        </div>
                </div>
        </div>
    </fieldset>
</form>
<script src="https://unpkg.com/ionicons@5.2.3/dist/ionicons.js"></script>
</body>
</html>

