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
    <form action="#">
      <label for="name">Nome:</label>
      <input type="text" id="name" name="name" placeholder="Digite seu nome" required>
      
      <label for="email">Email:</label>
      <input type="text" id="email" name="email" placeholder="Digite seu email" required>
      
      <label for="message">Mensagem:</label>
      <textarea id="message" name="message" placeholder="Digite sua mensagem" rows="5" required></textarea>
      
      <button type="submit">Enviar</button>
    </form>
  </div>
</body>
</html>
@endsection