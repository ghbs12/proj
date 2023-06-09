@extends('layouts.app2')

@section('content')
<!DOCTYPE html>
<html>
<head>
    <title>Calculadora de IMC</title>
	<link rel="stylesheet" type="text/css" href="../css/calculo_imc.css">
</head>
 <body>
    <br><br><br><br>
    <form method="POST"enctype="multipart/form-data" action="{{route('calculo_imc.store')}}">
      @csrf
      @method('POST')
      <div class="container">
         <h1>Calculadora de IMC</h1>
         
         <label for="weight">Peso (kg):</label>
         <input name = "peso" type="number" id="peso">
         
         <label for="height">Altura (cm):</label>
         <input name = "altura" type="number" step="any"  id="altura">
         
         <button type = "submit"> Calcular IMC </button>
         
         <div class="result" id="result">{{$imc}}</div>
      </div>
    </form>
 
</body>
</html>
@endsection
