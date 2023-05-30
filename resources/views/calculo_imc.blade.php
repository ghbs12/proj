<!DOCTYPE html>
<html>
<head>
    <title>Exercícios Físicos</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@300&display=swap" rel="stylesheet">
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="./css/calculo_imc.css">
</head>
<body>
    <!-- Add icon library -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <header>
        <nav>
            <img class="logo" src="./img/logo.png">
            <h2>SuperAÇÃO</h2>
            <div class="icon-bar">
                <a href="#" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                    <i class="fa fa-user"></i>
                        <form id="logout-form" action="/logout" method="POST" class="d-none">
                            @csrf
                        </form>
                </a>
                <a href="http://127.0.0.1:8000/calculo_imc"><i class="fa fa-calculator"></i></a>
                <a href="http://127.0.0.1:8000/tarefas"><i class="fa fa-list"></i></a>
            </div>
        </nav>
    </header>
    <h1>CALCULO IMC ATUAL</h1>
    <table>
    <tr>
        <th>idade</th>
        <th>altura</th>
        <th>peso</th>
        <th>formula</th>
        <th>peso ideal</th>
    </tr>
    <tr>
        <td>banco</td>
        <td>banco____</td>
        <td>banco____</td>
        <td>PESO/ALTURA X ALTURA</td>
        <td>banco________</td>
    </tr>
    </table>
</body>
</html>
