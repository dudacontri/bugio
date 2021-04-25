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
        <h1 class="bugio-h1">{{ $usuario->name }}</h1>
            <a href ="{{URL::route('gerenciar-usuarios')}}">
                <button type="button" class="btn btn-light button-top">VOLTAR</button>
            </a>
    </div>

    <form class="form-horizontal" style="width: 90vw; margin-top: 2vh;"  method="POST" action="{{ route('changeCargo') }}">
    @csrf
        <fieldset>
            <div class="form-group">
                <div class="form-group">
                <input type="hidden" name="id" value="{{ $usuario->id}}">
                    <label class="col-md-2 control-label">E-mail</label>
                        <div class="col-md-5">
                            <input id="email" name="email" class="form-control input-md" type="text" placeholder="{{ $usuario->email}}" disabled readonly>
                        </div>
                </div>

                <div class="form-group">
                    <label class="col-md-2 control-label">Cargo</label>
                        <div class="col-md-5">
                                    <select id="cargo" class="form-control" name="cargo" value="{{ old('cargo')}}" required="">
                                        <option>Voluntário</option>
                                        <option>Estagiário</option>
                                        <option>Bolsista</option>
                                        <option>Residente</option>
                                        <option>Coordenador</option>
                                    </select>
                        </div>
                </div>

                <div class="form-group">
                    <label class="col-md-2 control-label">Telefone Celular</label>
                         <div class="col-md-2">
                            <input id="n_celular" name="n_celular" class="form-control input-md" type="text" placeholder="{{ $usuario->n_celular}}" disabled readonly>
                         </div>

                         <label class="col-md-1 control-label">Faculdade</label>
                          <div class="col-md-2">
                             <input id="faculdade" name="faculdade" class="form-control input-md" type="text" placeholder="{{ $usuario->faculdade}}" disabled readonly>
                          </div>
                </div>

                <div class="form-group">
                    <label class="col-md-2 control-label">Curso</label>
                          <div class="col-md-2">
                             <input id="curso" name="curso" class="form-control input-md" type="text" placeholder="{{ $usuario->curso}}" disabled readonly>
                          </div>

                          <label class="col-md-1 control-label">Semestre</label>
                          <div class="col-md-2">
                             <input id="semestre" name="semestre" class="form-control input-md" type="text" placeholder="{{ $usuario->semestre}}" disabled readonly>
                          </div>
                </div>

                <div class="form-group">
                    <label class="col-md-2 control-label"></label>
                         <div class="col-md-8">
                        <button type="submit" class="btn btn-light button-top" style="background-color: #F28345; color:white;font-size:medium;float:right">
                             Salvar
                        </button>
                        </div>
                </div>
        </div>
    </fieldset>
</form>

</body>
<script src="https://unpkg.com/ionicons@5.2.3/dist/ionicons.js"></script>