@extends('layouts.app2')

@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
      <link rel="stylesheet" type="text/css" href="./css/historico.css">
</head>
<body>
    <div class="container">
        <br><br>
        <h1>Histórico de IMC</h1>
        <br><br>
        <table id="imc-table">
            <tr>
                <th>id</th>
                <th>IMC</th>
                <th>Peso</th>
                <th>Altura</th>
                <th>Data Inicial</th>
            </tr>
            @foreach($imcs as $imc)
            <tr>
                <td>{{$imc['id']}}</td>
                <td>{{$imc['valor']}}</td>
                <td>{{$imc['peso']}}</td>
                <td>{{$imc['altura']}}</td>
                <td>{{date('d/m/Y', strtotime($imc['created_at']))}}</td>
            </tr>
            @endforeach
        </table>
    </div>

</body>
</html>
@endsection