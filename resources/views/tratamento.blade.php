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

    <div style="display:flex; background-color: white; width: 90vw; margin-left:6vw; margin-top: 2vh;">
        <h1 class="bugio-h1">TRATAMENTO DO ANIMAL DE FICHA {{$ficha->n_hcv}}</h1>
            <a href='/fichas/{{$ficha->n_hcv}}'>
                <button type="button" class="btn btn-light button-top">VOLTAR</button>
            </a>
</div>
    <div>
            <form class="form-horizontal" style="width: 90vw;" method="POST" action="{{ route('changeTratamento') }}">
                @csrf
                    <fieldset>
                        <div class="form-group">
                            <div class="form-group">
                            <input type="hidden" name="n_hcv" value="{{$ficha->n_hcv}}">
                                <label class="col-md-2 control-label"><strong>Sinais clínicos</strong></label>
                                        <div class="col-md-9">
                                                <textarea name="sinais_clinicos" id="sinais_clinicos" class="form-control" aria-label="With textarea">{{$ficha->sinais_clinicos}}</textarea>
                                        </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-2 control-label"><strong>Medicações</strong></label>
                                    <div class="col-md-9">
                                            <textarea name="medicacoes" id="medicacoes" class="form-control" aria-label="With textarea">{{$ficha->medicacoes}}</textarea>
                                    </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-2 control-label"><strong>Exames realizados</strong></label>
                                    <div class="col-md-9">
                                            <textarea id="exames" name="exames" class="form-control" aria-label="With textarea">{{$ficha->exames}}</textarea>
                                    </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-2 control-label"><strong>Procedimentos cirúrgicos</strong></label>
                                    <div class="col-md-9">
                                            <textarea  id="procedimentos" name="procedimentos" class="form-control" aria-label="With textarea">{{$ficha->procedimentos}}</textarea>
                                    </div>
                        </div>


                            <div class="form-group">
                                <label class="col-md-2 control-label"></label>
                                    <div class="col-md-9">
                                        <a href='/fichas/{{$ficha->n_hcv}}'>
                                                <button type="submit" class="btn btn-primary" style="background-color: #F28345; border: none; width: 100px; float:right">SALVAR</button>
                                        </a>
                                    </div>
                            </div>
                    </div>
                </fieldset>
            </form>
</div>
<script src="https://unpkg.com/ionicons@5.2.3/dist/ionicons.js"></script>
</body>
</html>

