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
        <nav class="navbar" style="display: flex; justify-content: flex-start; align-items: center">
            <span class="bugio-white" style="justify-self: flex-start; margin-right:84%">BUGIO</span>
            <a  href="{{ route('logout') }}"
                    onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                    <ion-icon name="log-in-outline"></ion-icon>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                     @csrf
                    </form>
            </a>

        </nav>
    </header>
    <div style="display:flex; background-color: white; width: 75.5vw; margin-left:6vw">
        <h1 style="margin-left: 2%; font-family: 'Lilita One', cursive; color: #F28345; width: 57vw;">RELATÓRIOS</h1>
            <a href ="{{URL::route('home')}}">
                <button type="button" class="btn btn-light button-top">VOLTAR</button>
            </a>
    </div>

    <div style="margin-left:7.5vw; font-size: large;"><b>Tipo de relatório:&nbsp;&nbsp;&nbsp;</b>
		<label required="" class="radio-inline" for="radios-0" >
			<input name="tipo_relatorio"  value="grupo" type="radio">
			Grupo
		</label>

		<label class="radio-inline" for="radios-2">
			<input name="tipo_relatorio"  value="sema" type="radio">
			SEMA
		</label>
    </div>
    <div style="font-size: medium; color: red; margin-left: 7.5vw;">
                @if(session('message'))
                {{ session('message') }}
                @endif
    </div>
    <div style="margin-left:7.5vw; margin-top:2vh; font-size: medium;">
            <div id="relatorioGrupo" class="hidden">
                <form action="{{ route('relatorios/grupos')}}" method="POST">
                @csrf
                            <div style="display: flex; align-items: baseline">
                                <label class="control-label" style="margin-right: 2vw;">Período de atendimento: </label>
                                <input id="periodo_inicio" name="periodo_inicio" class="form-control input-md" required="" type="date" style="width: 9vw;margin-right: 3vw;"> à
                                <input id="periodo_final" name="periodo_final" class="form-control input-md" required="" type="date" style="width: 9vw;margin-left: 3vw;">
                            </div>

                            <div>
                                <br>
                                <input type="checkbox" name="options_to_use[]" value="nome_cientifico" style="margin-right: 1vw;">Nome científico
                                        <select name="nome_cientifico" class="form-select form-control" style="display: inline; margin-left: 13.7vw; width: 15vw;">

                                            @foreach($fichas as $ficha)

                                                <option value="{{ $ficha->nome_cientifico}}">
                                                    {{$ficha->nome_cientifico}}
                                                </option>

                                            @endforeach

                                        </select>
                                <br><input type="checkbox" name="options_to_use[]" value="nome_comum" style="margin-right: 1vw;">Nome comum

                                <select name="nome_comum" class="form-select form-control" style="display: inline; margin-left: 14.3vw; width: 15vw;">

                                    @foreach($nome_comum as $nomes)

                                        <option value="{{ $nomes->nome_comum}}">
                                            {{$nomes->nome_comum}}
                                        </option>

                                    @endforeach

                                </select>
                                <br><input type="checkbox" name="options_to_use[]" value="user_id" style="margin-right: 1vw;">Responsável
                                <select name="user_id" class="form-select form-control" style="display: inline; margin-left: 14.68vw; width: 15vw;">

                                    @foreach($usuario as $usuarios)

                                        <option value="{{ $usuarios->id }}">
                                            {{$usuarios->name}}
                                        </option>

                                    @endforeach

                                </select>

                                <br><input type="checkbox" name="options_to_use[]" value="local_origem" style="margin-right: 1vw;">Origem
                                <select name="local_origem" class="form-select form-control" style="display: inline; margin-left: 16.7vw; width: 15vw;">

                                    @foreach($origem as $origens)

                                        <option value="{{ $origens->local_origem}}">
                                            {{$origens->local_origem}}
                                        </option>

                                    @endforeach

                                </select>
                                <br><input type="checkbox" name="options_to_use[]" value="destino" style="margin-right: 1vw;">Destino
                                <select name="destino" class="form-select form-control" style="display: inline; margin-left: 16.65vw; width: 15vw;">

                                    @foreach($destinos as $destino)

                                        <option value="{{ $destino->destino}}">
                                            {{$destino->destino}}
                                        </option>

                                    @endforeach

                                </select>
                            </div>

                            <div class="form-group">
                                <label class="col-md-1 control-label"></label>
                                     <div class="col-md-8">
                                         
                                                <button  type="submit" class="btn btn-light button-top" style="float:right">GERAR</button>
                                         
                                    </div>
                            </div>
                    </form>
            </div>


            <!-- SEMA! -->
            <div id="relatorioSema" class="hidden">
                <form action="{{ route('relatorios/sema')}}" method="POST">
                     @csrf 
                     <div style="display: flex; align-items: baseline">
                                <label class="control-label" style="margin-right: 2vw;">Período de atendimento: </label>
                                <input id="periodo_inicio" name="periodo_inicio" class="form-control input-md" required="" type="date" style="width: 9vw;margin-right: 3vw;"> à
                                <input id="periodo_final" name="periodo_final" class="form-control input-md" required="" type="date" style="width: 9vw;margin-left: 3vw;">
                            </div>
                    <div class="form-group">
                                <label class="col-md-1 control-label"></label>
                                     <div class="col-md-8">
                                                <button type="submit" class="btn btn-light button-top" style="float:right">GERAR</button>
                                   </div>
                            </div>
                    </form>
            </div>

    </div>

    <form class="form-horizontal" style="width: 90vw;">
        <fieldset>
            <div class="form-group">
            </div>
    </fieldset>
</form>
<script src="https://unpkg.com/ionicons@5.2.3/dist/ionicons.js"></script>
<script>
        const tipoRelatorio = $('input[name="tipo_relatorio"]');
		const relatorioGrupo = $('#relatorioGrupo');
		const relatorioSema = $('#relatorioSema');
  		tipoRelatorio.change(function() {
         console.log('change')
      const selectedRadio = $('input[name="tipo_relatorio"]:checked').val();
        if (selectedRadio == 'grupo') {

  				relatorioGrupo.removeClass('hidden');;
  				relatorioSema.addClass('hidden');
  			}
  			if (selectedRadio == 'sema') {
  				relatorioSema.removeClass('hidden');
  				relatorioGrupo.addClass('hidden');
  			}
  		})
</script>
</body>
</html>

