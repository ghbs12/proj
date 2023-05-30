@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <title>INICIO</title>
    <link rel="stylesheet" type="text/css" href="../css/inicio.css">
</head>
<body>
    
    <img src="/img/inicio1.png" alt="Descrição da imagem">

    <a class="acesse"href="http://127.0.0.1:8000/login"><button type="button">LOGIN</button></a>
    
    <footer>
        <div class="container">
            <div class="row">
            <div class="col-md-4">
                <h4>Sobre Nós</h4>
                <p>O site foi criado no intuito de ajudar as pessoas praticar atividade física regular,
                pois pode levar a um aumento da expectativa de vida e a uma melhor qualidade de vida geral.</p>
            </div>
            <div class="col-md-4">
                <h4>Contato</h4>
                <p>Telefone: +55 35 999194771</p>
                <p>Email: gabriel6.santos@ifsuldeminas.edu.br</p>
            </div>
            <div class="col-md-4">
                <h4 class="h41">Redes Sociais</h4>
                <ul class="social-icons">
                <li><a href="#" class="fa fa-facebook"></a></li>
                <li><a href="#" class="fa fa-twitter"></a></li>
                <li><a href="#" class="fa fa-instagram"></a></li>
                <li><a href="#" class="fa fa-linkedin"></a></li>
                </ul>
            </div>
            </div>
        </div>
    </footer>

	<script src="script.js"></script>
   
</body>
</html>
@endsection
