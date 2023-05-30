@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Nova senha</title>
    <link rel="stylesheet" type="text/css" href="./css/esqueci_senha.css">
    <style>
        h2{
            margin-top: 60px;
        }
        form{
            margin-top: 130px;
        }
    </style>
</head>
<body>
    <h2>vamos gerar uma nova senha!</h2>
    <form>
        <div class="form-group">
            <label for="pass"> Digite sua nova senha:</label><br>
            <input type="password" id="pass" name="password"minlength="6"required">
        </div>
        <div class="form-group">
            <label for="pass">Confime sua senha:</label><br>
            <input type="password" id="pass" name="password"minlength="6"required onkeypress="$(this).mask('000000')">
        </div>
        <button type="submit">Salvar</button>
    </form>
</body>
</html>
@endsection