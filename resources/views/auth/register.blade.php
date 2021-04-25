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
<body class="registro">
        <div class="register-box" style="overflow-y: scroll; overflow-x: hidden">
        <h1 class="bugio">BUGIO</h1><br>
                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                        
                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Nome') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror wid" name="name" value="{{ old('name') }}" required autocomplete="name" >
                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Senha') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="Mínimo de 8 caracteres.">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirme sua senha') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="cargo" class="col-md-4 col-form-label text-md-right">{{ __('Cargo') }}</label>
                                <div class="col-md-6">
                                    <select id="cargo" class="form-control" name="cargo" value="{{ old('cargo')}}">
                                        <option value='Voluntário'>Voluntário</option>
                                        <option value='Estagiário'>Estagiário</option>
                                        <option value='Bolsista'>Bolsista</option>
                                        <option value='Residente'>Residente</option>
                                        <option value='Coordenador'>Coordenador</option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group row">
                            <label for="n_celular" class="col-md-4 col-form-label text-md-right">{{ __('Telefone Celular') }}</label>
                                <div class="col-md-6">
                                    <input id="n_celular" class="form-control" name="n_celular" value="{{ old('n_celular')}}" required="">
                                </div>
                            </div>

                            <div class="form-group row">
                            <label for="faculdade" class="col-md-4 col-form-label text-md-right">{{ __('Faculdade') }}</label>
                                <div class="col-md-6">
                                    <input id="faculdade" class="form-control" name="faculdade" value="{{ old('faculdade')}}" required="">
                                </div>
                            </div>

                            <div class="form-group row">
                            <label for="curso" class="col-md-4 col-form-label text-md-right">{{ __('Curso') }}</label>
                                <div class="col-md-6">
                                    <input id="curso" class="form-control" name="curso" value="{{ old('curso')}}" required="">
                                </div>
                            </div>

                            <div class="form-group row">
                            <label for="semestre" class="col-md-4 col-form-label text-md-right">{{ __('Semestre') }}</label>
                                <div class="col-md-6">
                                    <input id="semestre" type="number "class="form-control" name="semestre" value="{{ old('semestre')}}" required="" placeholder="Utilizar apenas nº. Ex: '10'.">
                                </div>
                            </div>

                           <!-- <div class="form-group row">
                            <label for="link_foto" class="col-md-4 col-form-label text-md-right">{{ __('Foto de perfil') }}</label>
                                <div class="col-md-6">
                                    <input id="link_foto" type="file" class="form-control" name="link_foto" value="{{ old('link_foto')}}" placeholder="Opcional">
                                </div>
                            </div>-->

                            <div class="form-group">
                                    <button type="submit" class="btn btn-primary button-reg" style="margin-top: 2vh;width: 120px;">
                                    {{ __('Cadastrar') }}
                                    </button> 
                            </div>
                    </form>
            <a href="{{URL::route('login')}}" >
                        <button class="btn btn-primary button-reg" style="background-color: #F28345; border: #F28345; font-size: medium; width: 120px; margin-bottom: 2vh; opacity: 0.5">
                             {{ __('Voltar') }}
                        </button> 
            </a>

</div>
