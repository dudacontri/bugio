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
        <h1 style="margin-left: 2%; font-family: 'Lilita One', cursive; color: #F28345; width: 57vw;">GERENCIAR COLABORADORES</h1>
            <a href ="{{URL::route('usuario')}}">
                <button type="button" class="btn btn-light button-top">VOLTAR</button>
            </a>
    </div>
    <div style="width: 68vw; margin-left:7.5vw; height: 70vh; flex-direction: column">
        @foreach($users as $key=>$usuario)
            @if($usuario->id == Auth::user()->id)



            @else
                <div style="background-color: #f2f2f2; height: fit-content; margin-top: 3vh; border-radius:10px; ">
                <div class="row">
                    <div class="col" style="margin-left: 2vh;">
                        <h2 style="font-family: 'Lilita One';color: #F28345">{{$usuario->name}}</h2>
                        <p>E-mail: {{ $usuario->email }}</p>
                        <p>Cargo: {{ $usuario->cargo }}</p>
                        <p>Telefone Celular: {{ $usuario->n_celular }}</p>
                    </div>
                    <div class="col">
                        <p style="margin-top: 6.5vh">Faculdade: {{ $usuario->faculdade }}</p>
                        <p>Curso: {{ $usuario->curso }}</p>
                        <p>Semestre: {{ $usuario->semestre }}</p>
                    </div>
                    <div class="col" style="display: flex; flex-direction: column; justify-content: space-evenly;">
                                @if($usuario->atividade == 1)
                                    <form method="POST" action="{{ route('disableUser')}}" style="align-self: flex-end;">
                                    @csrf
                                        <input type="hidden" name="id" value="{{$usuario->id}}">
                                        <button type="submit" class="btn btn-danger"  style="width: 100px; margin-top: 2vh;">Desativar</button>
                                    </form>
                                @endif
                                @if($usuario->atividade == 0)
                                    <form method="POST" action="{{ route('reactivateUser')}}" style="align-self: flex-end;">
                                    @csrf
                                        <input type="hidden" name="id" value="{{$usuario->id}}">
                                        <button type="submit" class="btn btn-success"  style=" width: 100px; margin-top: 2vh;">Reativar</button>
                                    </form>
                                @endif
                            <a href='gerenciar-usuarios/{{$usuario->id}}' style="justify-item: right">
                                <button type="button" class="btn btn-light button-reg" style="align-self: flex-end; width: 100px; margin-left: 31.5vh;">Editar cargo</button>
                            </a>
                    </div>
                </div>
            @endif
        @endforeach
    </div>
    
</body>
<script src="https://unpkg.com/ionicons@5.2.3/dist/ionicons.js"></script>