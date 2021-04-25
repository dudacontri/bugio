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
     <div style="display: flex;">
            <h1 style="font-family: 'Lilita One', cursive; color: #F28345; width: 50vw; margin-left: 6vw;">
                                {{ Auth::user()->name }}
                <a href="{{URL::route('edit-usuario')}}">
                        <ion-icon name="create-outline" style="color: #F28345;"></ion-icon>
                </a>
            </h1>
                <a href ="{{URL::route('home')}}">
                    <button type="button" class="btn btn-light button-top" style="float: right">VOLTAR</button>
                </a>
        </div>
        <div class="col align-items-start" style="width: 77vw; height: 70vh; margin-left:5vw;">
                    
                    <div class="col"><label  style="font-size: medium; margin-top: 2vh; margin-right: 4vw;">E-mail:&nbsp&nbsp&nbsp{{ Auth::user()->email }}</label></div>
                    <div class="col"><label  style="font-size: medium; margin-top: 2vh; margin-right: 4vw;">Cargo:&nbsp&nbsp&nbsp{{ Auth::user()->cargo }}</label></div>
                    <div class="col"><label  style="font-size: medium; margin-top: 2vh; margin-right: 4vw;">Telefone celular:&nbsp&nbsp&nbsp{{ Auth::user()->n_celular}}</label></div>
                    <div class="col"><label  style="font-size: medium; margin-top: 2vh; margin-right: 4vw;">Faculdade:&nbsp&nbsp&nbsp{{ Auth::user()->faculdade}}</label></div>
                    <div class="col"><label  style="font-size: medium; margin-top: 2vh; margin-right: 4vw;">Curso:&nbsp&nbsp&nbsp{{ Auth::user()->curso}}</label></div>
                    <div class="col"><label  style="font-size: medium; margin-top: 2vh; margin-right: 4vw;">Semestre:&nbsp&nbsp&nbsp{{ Auth::user()->semestre}}</label></div>  
                    @if(Auth::user()->cargo =='Residente' or Auth::user()->cargo =='Bolsista' or Auth::user()->cargo =='Coordenador')
                    <a href="{{URL::route('gerenciar-usuarios')}}">
                        <button class="btn btn-light button-top" style="background-color: #F28345; color:white;font-size:small;float:right; width: fit-content;">
                            GERENCIAR USUÁRIOS
                        </button>
                    </a>
               @endif
            </div>
        </div>
</body>
<script src="https://unpkg.com/ionicons@5.2.3/dist/ionicons.js"></script>