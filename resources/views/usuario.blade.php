@extends('layouts.app2')

@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
      <title>Meus Dados</title>
      <link rel="stylesheet" type="text/css" href="./css/usuario.css">
</head>
<body>
      <div class="container">
            
            <h1>Meus Dados</h1>

            <form id="data-form">
                  <label for="name">Nome:</label>
                  <input type="text" id="name" required>

                  <label for="email">Email:</label>
                  <input type="email" id="email" required>

                  <label for="age">Idade:</label>
                  <input type="number" id="age" required>
                  <br><br><br>
                  <button type="submit">Salvar</button>
            </form>
    </div>
</body>
</html>
@endsection