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
 <div class="container">
    <h1>Calculadora de IMC</h1>
    
    <label for="weight">Peso (kg):</label>
    <input type="number" id="weight">
    
    <label for="height">Altura (cm):</label>
    <input type="number" id="height">
    
    <button onclick="calculateBMI()">Calcular IMC</button>
    
    <div class="result" id="result"></div>
  </div>
</body>
<script src="../js/calculo_imc.js"></script>
</html>
@endsection
