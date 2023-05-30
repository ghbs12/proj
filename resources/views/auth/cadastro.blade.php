@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html>
  <head>
    <title>Página de Cadastro</title>
    <link rel="stylesheet" type="text/css" href="./css/cadastro.css">
  </head>
  <body>
    <br>
    <h1>CADASTRO</h1>
    <form method="POST" action="{{ url('/register') }}">
        @csrf   
        <div class="form-group w-75">
            <label for="name">{{ __('Nome') }}</label>
            <div >
                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>

        <div class="form-group w-75">
            <label for="email">{{ __('E-Mail') }}</label>
            <div >
                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>

        <div class="form-group w-75">
        <label for="endereco">{{ __('ENDEREÇO') }}</label>
            <div >
                <input id="endereco" type="text" class="form-control @error('endereco') is-invalid @enderror" name="endereco" value="{{ old('endereco') }}" required autocomplete="endereco"placeholder="Exemplo Rua.... - Numero ....">
                @error('endereco')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>

        <div class="form-group w-75">
        <label for="cpf">{{ __('CPF') }}</label>
            <div >
                <input id="cpf" type="text" class="form-control @error('cpf') is-invalid @enderror" name="cpf" value="{{ old('cpf') }}" required autocomplete="cpf"placeholder="Exemplo 000.000.000-00"onkeypress="$(this).mask('000.000.000-00')">
                @error('cpf')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>

        <div class="form-group w-75">
        <label for="nascimento">{{ __('NASCIMENTO') }}</label>
            <div >
                <input id="nascimento" type="text" class="form-control @error('nascimento') is-invalid @enderror" name="nascimento" value="{{ old('nascimento') }}" required autocomplete="nascimento"placeholder="ano/mes/dia"onkeypress="$(this).mask('0000/00/00')">
                @error('nascimento')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>

        <div class="form-group w-75">
        <label for="telefone">{{ __('TELEFONE') }}</label>
            <div >
                <input id="telefone" type="text" class="form-control @error('telefone') is-invalid @enderror" name="telefone" value="{{ old('telefone') }}" required autocomplete="telefone"placeholder="Exemplo ddd com 3 digitos + 9 digitos "onkeypress="$(this).mask('000000000000')">
                @error('telefone')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>

        <div class="form-group w-75">
        <label for="cep">{{ __('CEP') }}</label>
            <div >
                <input id="cep" type="text" class="form-control @error('cep') is-invalid @enderror" name="cep" value="{{ old('cep') }}" required autocomplete="telefone"placeholder="Exemplo 00000000"onkeypress="$(this).mask('00000000')">
                @error('cep')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>

        <div class="form-group w-75">
        <label for="altura">{{ __('ALTURA') }}</label>
            <div >
                <input id="altura" type="text" class="form-control @error('altura') is-invalid @enderror" name="altura" value="{{ old('altura') }}" required autocomplete="altura"placeholder="Exemplo 0.00"onkeypress="$(this).mask('0.00')">
                @error('altura')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>

        
        <div class="form-group w-75">
        <label for="peso">{{ __('PESO') }}</label>
            <div >
                <input id="peso" type="text" class="form-control @error('peso') is-invalid @enderror" name="peso" value="{{ old('altura') }}" required autocomplete="peso"placeholder="Exemplo 000.00"onkeypress="$(this).mask('000.00')">
                @error('peso')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>
    

        <div class="form-group w-75">
            <label for="password">{{ __('SENHA') }}</label>

            <div >
                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>

        <div class="form-group w-75">
            <label for="password-confirm">{{ __('CONFIRME SENHA') }}</label>

            <div >
                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
            </div>
        </div>

        <div class="form-group w-75">
            <div class="col-md-6 offset-md-4">
                <button type="submit" class="btn btn-danger">
                    {{ __('Salvar') }}
                </button>
            </div>
        </div>
    </form>
    <script src="script.js"></script>
  </body>
</html>
@endsection