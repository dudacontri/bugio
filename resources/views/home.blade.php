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
    <!-- DataTables JS -->
</head>
<body style="background-color: white">
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
         <div class="row home">
                <aside>
                <div class="label-name">{{ Auth::user()->name }}</div>
                    <a href ="{{URL::route('fichas')}}">
                        <button type="button" class="btn btn-light button-ficha">
                            <ion-icon name="add-circle-outline">
                            </ion-icon>
                        </button>
                    </a>
                    <a href ="{{URL::route('relatorios')}}">
                        <button type="button" class="btn btn-light button-relatorio">
                            <ion-icon name="document-text-outline">
                            </ion-icon>

                        </button>
                    </a>
                    <a href ="{{URL::route('usuario')}}">
                        <button type="button" class="btn btn-light button-perfil">
                            <ion-icon name="person-outline"></ion-icon>
                        </button>
                    </a>
                </aside>
                <div class="main">

                        <form method="ANY" action="{{ route('searchTable') }}">
                            @csrf
                            <div class="search-ficha">
                            <input name="nome_ficha" type="search" class="form-control ds-input" style="margin-top: 0.95vh; width: 92%" placeholder="Pesquise aqui através do nome comum ou do nº HCV!">
                            <button type="submit "class="btn btn-primary btn-search">Pesquisar</button>
                            </div>
                         </form>

                    <div class="row" style="margin-top: 4vh;">
                        <div class= "col-md-12">
                            <div class="box box-info">
                                <div class="box-header with-border">
                                    <h3 class="box-title">FICHAS</h3>
                                </div>
                                <div class="box-body">
                                    <div class="table-responsive">
                                    <table class="table table-hover table-striped">
                                        <thead>
                                            <tr style="width: 100%">
                                            <th scope="col" style="width: 11%">Nº HCV</th>
                                            <th scope="col" style="width: 20%">Nome comum</th>
                                            <th scope="col" style="width: 20%">Conflito</th>
                                            <th scope="col" style="width: 20%">Sinais clínicos</th>
                                            <th scope="col" style="width: 30%">Medicação</th>
                                            <th scope="col" style="width: 10%">     </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                       @foreach($dados as $key=>$dado)
                                            <tr style="width: 100%">
                                                <td style="width: 11%"><strong>{{ $dado->n_hcv}}</strong></td>
                                                <td style="min-width: 20%"> {{ $dado->nome_comum}}</td>
                                                <td style="min-width: 20%"> {{ $dado->conflito}}</td>
                                                <td  style="min-width: 20%"> {{ $dado->sinais_clinicos}}</td>
                                                <td style="min-width: 30%"> {{ $dado->medicacoes}}</td>
                                                <td  style="min-width: 10%;"><a href='/fichas/{{$dado->n_hcv}}'>Ver ficha</a></td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                     <div style="float: left; color: orange">
                                    @if(Route::currentRouteName() == 'searchTable')
                                        <a href="{{ URL::route('home')}}" style="font-size: medium">Limpar pesquisa</a>
                                    @else
                                        Número de atendimentos realizados até o momento: {{$total_atendimentos}}<br>
                                        Número de indivíduos atendidos até o momento: {{$total_individuos}}
                                    @endif
                                    </div>
                                    </div>

                                </div>

                            </div>
                        </div>
                    </div>

                </div>
            </div>
<script src="https://unpkg.com/ionicons@5.2.3/dist/ionicons.js"></script>
</body>
</html>
