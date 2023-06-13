@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html>
<head>
  <title>Formulário de Contato</title>
  <link rel="stylesheet" type="text/css" href="../css/contatos.css">
</head>
<body>
    <br><br><br><br>
  <div class="container">
    <h2>Formulário de Contato</h2>
    <form method="POST" enctype="multipart/form-data" action="{{route('contatos.store')}}"">
    @csrf
    @method('POST')
      <label for="nome">Nome:</label>
      <input type="text" id="nome" name="nome" placeholder="Digite seu nome" required>
      
      <label for="email">Email:</label>
      <input type="text" id="email" name="email" placeholder="Digite seu email" required>
      
      <label for="mensagem">Mensagem:</label>
      <textarea id="mensagem" name="mensagem" placeholder="Digite sua mensagem" rows="5" required></textarea>
      
      <button type="submit">Enviar</button>
      {{$dados}}
    </form>
  </div>
</body>
</html>
@endsection