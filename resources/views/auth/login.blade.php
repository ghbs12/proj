@extends('layouts.app')

@section('content')

<!DOCTYPE html>
<html>
<head>
    <title>Exercícios Físicos - Calculadora de IMC</title>
	<link rel="stylesheet" type="text/css" href="./css/login.css">
</head>
<body>
    <div class="img1">
        <div class="divImage">
            <img src="https://vivariun.com.br/wp-content/uploads/2022/05/silhouette-young-fitness-man-running-sunrise-1024x683.jpg" alt="">
        </div>
        <div class="divForm">
            <form method="POST" action="{{ url('/login') }}">
                @csrf
                <label for="username">Usuário:</label>
                <input  id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                <label for="password">Senha:</label>
                <input type="password" id="password" name="password">
                <br>
                <div class="botao">
                    <a class="entrar"href="http://127.0.0.1:8000/tarefas"><button type="submit">Entrar</button></a>
                    <br><br>
                    <a class="cadastrar"href="http://127.0.0.1:8000/register"><button type="button">Cadastrar-se</button></a>
                </div>
            </form>
        </div>
    </div>
    
    <footer>
        <p>Desenvolvido por Gabriel Henrique Bernardes Santos</p>
    </footer>

	<script src="script.js"></script>
</body>
</html>
@endsection