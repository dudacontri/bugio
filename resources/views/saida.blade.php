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
        <h1 style="margin-left: 2%; font-family: 'Lilita One', cursive; color: #F28345; width: 57vw;">SAÍDA</h1>
            <a href='/fichas/{{$ficha->n_hcv}}'>
                <button type="button" class="btn btn-light button-top">VOLTAR</button>
            </a>
    </div>

    <form class="form-horizontal" style="width: 90vw;  margin-left: 3%" method="POST" action="{{ route('changeSaida') }}">
        @csrf
        <fieldset>
            <div class="form-group">
                <div class="form-group">
                <input type="hidden" name="n_hcv" value="{{$ficha->n_hcv}}">
                    <label class="col-md-2 control-label">Nº do documento de saída</label>
                        <div class="col-md-8">
                            <input value="{{$ficha->n_doc_saida}}" id="n_doc_saida" name="n_doc_saida" class="form-control input-md" type="text">
                        </div>
                </div>

                <div class="form-group">
                    <label class="col-md-2 control-label">Data de saída</label>
                         <div class="col-md-2">
                            <input value="{{$ficha->data_saida}}" id="data_saida" name="data_saida" class="form-control input-md" type="date" style="width: 9vw">
                         </div>
                </div>
                <div class="form-group">
                    <label class="col-md-2 control-label" for="radios">Motivo</label><!--Verificar inserção do value-->
                                <div class="col-md-4">
                                    <label required="" class="radio-inline" for="radios-0" >
                                        <input name="motivo_saida" id="motivo_saida" value="Destinação" type="radio" checked>
                                                Destinação
                                    </label>

                                    <label class="radio-inline" for="radios-1">
                                        <input name="motivo_saida" id="motivo_saida" value="Óbito" type="radio">
                                                Óbito
                                    </label>

                                    <label class="radio-inline" for="radios-1">
                                        <input name="motivo_saida" id="motivo_saida" value="Eutanásia" type="radio">
                                                Eutanásia
                                    </label>
                                </div>
                </div>

                <div class="form-group">
                    <label class="col-md-2 control-label" >Responsável pela saída</label>
                        <div class="col-md-8">
                            <input value="{{$ficha->responsavel_entrega}}" id="res_saida" name="responsavel_entrega" class="form-control input-md" type="text">
                         </div>
                </div>

                <div class="form-group">
                    <label class="col-md-2 control-label">Destino</label>
                        <div class="col-md-8">
                            <input value="{{$ficha->destino}}" id="destino" name="destino" class="form-control input-md" type="text" placeholder="Preencha caso o motivo de saída seja a destinação.">
                        </div>
                </div>

                <div class="form-group">
                    <label class="col-md-2 control-label" for="radios">Necrópsia</label><!--Verificar inserção do value-->
                                <div class="col-md-4">
                                    <label  class="radio-inline" for="radios-0" >
                                        <input name="necropsia" id="necropsia" value="Realizada" type="radio">
                                                Realizada
                                    </label>

                                    <label class="radio-inline" for="radios-1">
                                        <input name="necropsia" id="necropsia" value="Não realizada" type="radio" checked>
                                                Não realizada
                                    </label>
                                </div>
            </div>

            <div class="form-group">

                <div class="form-group">
                    <label class="col-md-2 control-label">Resultado da Necrópsia</label>
                             <div class="col-md-8">
                                    <textarea id="res_necropsia" name="res_necropsia" class="form-control" aria-label="With textarea" placeholder="Se realizada. Senão, deixe este espaço em branco">{{$ficha->res_necropsia}}</textarea>
                             </div>
              </div>

                <div class="form-group">
                    <label class="col-md-2 control-label">Diagnóstico final</label>
                             <div class="col-md-8">
                                    <textarea id="diag_final" name="diag_final" class="form-control" aria-label="With textarea">{{$ficha->diag_final}}</textarea>
                             </div>
              </div>

              <div class="form-group">
                <label class="col-md-2 control-label">Observações de saída</label>
                         <div class="col-md-8">
                                <textarea id="obs_saida" name="obs_saida" class="form-control" aria-label="With textarea">{{$ficha->obs_saida}}</textarea>
                         </div>
          </div>

                <div class="form-group">
                    <label class="col-md-2 control-label"></label>
                         <div class="col-md-8">
                             <a>
                                    <button type="submit" class="btn btn-light button-top" style="background-color: #F28345; border: none; width: 100px; float:right">SALVAR</button>
                             </a>
                        </div>
                </div>
        </div>
    </fieldset>
</form>
<script src="https://unpkg.com/ionicons@5.2.3/dist/ionicons.js"></script>
</body>
</html>

