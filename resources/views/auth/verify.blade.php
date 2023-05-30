@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html>
<head>
    <title>ESQUECI A SENHA</title>
    <link rel="stylesheet" type="text/css" href="./css/esqueci_senha.css">
</head>
<body>
    <br><br>
    <h2>ok, vamos recuperar sua senha senha !</h2><br>
    <h5>Digite seu email para enviarmos um codigo de recuperação:</h5>
    <form>
        <div class="form-group w-75">
            <input type="text" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Email">
            <small id="emailHelp" class="form-text text-muted">.</small>
        </div>
        <button type="submit">Gerar codigo</button>
        <br><br><br>
        <br>
        <div class="form-group">
        <label for="pass"> Digite o Codigo (6 digitos):</label><br>
        <input type="password" id="pass" name="password"minlength="6"required onkeypress="$(this).mask('000000')">
        </div>
        <button type="submit">Continuar</button>
    </form>
</body>
</html>
@endsection
