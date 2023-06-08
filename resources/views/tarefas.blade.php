@extends('layouts.app2')

@section('content')
<!DOCTYPE html>
<html>
<head>
    <title>Exercícios Físicos</title>
    <link rel="stylesheet" type="text/css" href="./css/tarefas.css">
</head>
<body>
    <div class="container">

        <br><br>
        <h2>IMC ATUAL</h2>
        <br>

        <table class= atual>
            <tr>
                <th>{{Auth::user()->imc_atual}}</th>
            </tr>
        </table>

        <br><br><br><br>
        <h1>LISTA DE EXERCIOS</h1>
        <br><br>

        <table class= exercicios>
            <tr>
                <th>ID Exercicios</th>
                <th>Nome Exercicios</th>
                <th>Descrição Exercicios</th>
            </tr>
            @foreach($exercicios as $exercicio)
            <tr>
                <td>{{$exercicio['id']}}</td>
                <td>{{$exercicio['nome']}}</td>
                <td>{{$exercicio['desc']}}</td>
            </tr>
            @endforeach
        </table>
    </div>
</body>
</html>
@endsection