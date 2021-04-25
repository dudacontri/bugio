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
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
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

    <div style="display:flex; background-color: white; width: 90vw; margin-left:6vw; margin-top: 2vh;">
        <h1 class="bugio-h1">FICHA {{$ficha->n_hcv}}</h1>
            <a href ="{{URL::route('home')}}">
                <button type="button" class="btn btn-light button-top">VOLTAR</button>
            </a>
    </div>
    <div class="row ficha-expo" style="margin-left: 7.4vw; margin-top: 1vh;">
            <div class="col">
                <p><label class="ficha-names">Nº PRESERVAS: </label>{{$ficha->n_pre}}</p>
                <p><label class="ficha-names">IDENTIFICAÇÃO PRÓPRIA</label>{{$ficha->id_propria}}</p>
                <p><label class="ficha-names">NÚMERO DA IDENTIFICAÇÃO</label>{{$ficha->n_id}}</p>
                <p><label class="ficha-names">APELIDO</label>{{$ficha->apelido}}</p>
                <p><label class="ficha-names">NOME COMUM</label>{{$ficha->nome_comum}}</p>
                <p><label class="ficha-names">NOME CIENTÍFICO</label>{{$ficha->nome_cientifico}}</p>
                <p><label class="ficha-names">CLASSE</label>{{$ficha->classe}}</p>
                <p><label class="ficha-names">Nº DE INDIVÍDUOS</label>{{$ficha->n_individuos}}</p>
                <p><label class="ficha-names">SEXO</label>{{$ficha->sexo}}</p>
                <p><label class="ficha-names">FAIXA ETÁRIA</label>{{$ficha->faixa_etaria}}</p>
                <p><label class="ficha-names">PESO</label>{{$ficha->peso}}kg</p>
                <p><label class="ficha-names">HISTÓRICO</label>{{$ficha->historico}}</p>
                <p><label class="ficha-names">DATA DE ENTRADA</label>{{ date( 'd/m/Y' , strtotime($ficha->data_entrada))}}</p>
                <p><label class="ficha-names">TIPO DE CASO</label>{{$ficha->tipo_de_caso}}</p>
                <p><label class="ficha-names">CONFLITO</label>{{$ficha->conflito}}</p>
                <p><label class="ficha-names">ORIGEM</label>{{$ficha->origem}}</p>
                <p><label class="ficha-names">LOCAL DE ORIGEM</label>{{$ficha->local_origem}}</p>
            </div>
        <div class="col"> 
                <p><label class="ficha-names">RESPONSÁVEL PELA ENTRADA</label>{{$ficha->quem_trouxe}}</p>
                <p><label class="ficha-names">COLABORADOR RESPONSÁVEL PELO TRATAMENTO</label>
                @foreach($all_users as $user)
                    @if($user->id == $ficha->user_id)
                        {{$user->name}}</p>
                    @endif
                @endforeach
                <p><label class="ficha-names">OBSERVAÇÕES DE ENTRADA</label>{{$ficha->obs_entrada}}</p>
                <p><label class="ficha-names">SINAIS CLÍNICOS</label>{{$ficha->sinais_clinicos}}</p>
                <p><label class="ficha-names">MEDICAÇÕES</label>{{$ficha->medicacoes}}</p>
                <p><label class="ficha-names">PROCEDIMENTOS</label>{{$ficha->procedimentos}}</p>
                <p><label class="ficha-names">EXAMES</label>{{$ficha->exames}}</p>
                <p><label class="ficha-names">DATA DE SAÍDA</label>{{ date( 'd/m/Y' , strtotime($ficha->data_saida))}}</p>
                <p><label class="ficha-names">NÚMERO DO DOCUMENTO DE SAÍDA</label>{{$ficha->n_doc_saida}}</p>
                <p><label class="ficha-names">DESTINO</label>{{$ficha->destino}}</p>
                <p><label class="ficha-names">MOTIVO DE SAÍDA</label>{{$ficha->motivo_saida}}</p>
                <p><label class="ficha-names">RESPONSÁVEL PELA SAÍDA</label>{{$ficha->responsavel_entrega}}</p>
                <p><label class="ficha-names">RESULTADO DA NECRÓPSIA</label>{{$ficha->res_necropsia}}</p>
                <p><label class="ficha-names">DIAGNÓSTICO FINAL</label>{{$ficha->diag_final}}</p>
                <p><label class="ficha-names">OBSERVAÇÕES DE SAÍDA</label>{{$ficha->obs_saida}}</p>
                <a href='pdf/{{$ficha->n_hcv}}'><button class="btn btn-primary button-imprimir">GERAR PDF</button></a>
                <a href='editar/{{$ficha->n_hcv}}'><button class="btn btn-primary button-imprimir">EDITAR FICHA</button></a>
                <a href='tratamento/{{$ficha->n_hcv}}'><button class="btn btn-primary button-imprimir">TRATAMENTO</button></a>
                <a href='saida/{{$ficha->n_hcv}}'><button class="btn btn-primary button-imprimir">SAÍDA</button></a>
        </div>
    </div>
    