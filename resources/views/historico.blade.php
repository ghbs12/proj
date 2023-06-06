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
                <th>ID</th>
                <th>usuario</th>
                <th>Data Inicial</th>
                <th>Data Final</th>
                <th>Peso</th>
                <th>Altura</th>
                <th>IMC</th>
            </tr>
            <tr>
                <td>banco</td>
                <td>banco</td>
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