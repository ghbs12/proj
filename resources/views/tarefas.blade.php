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
                <th>banco</th>
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
                <th>Data inicio</th>
                <th>Data final</th>

            </tr>
            <tr>
                <td>banco</td>
                <td>banco</td>
                <td>banco</td>
                <td>banco</td>
                <td>banco</td>
            </tr>
        </table>
    </div>
</body>
</html>
@endsection