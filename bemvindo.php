<!DOCTYPE html>
<html lang="pt-br">
<head>
  <title>Bem-vindo</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</head>
<body class="bg-light">
    <div class="container">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark" >
        <a class="navbar-brand" href="index.php">Sair</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navb">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navb">
            <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <a class="nav-link" href="bemvindo.php">Bem-vindo</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="mostrarProdutos.php">Animais</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="mostrarNoticias.php">Noticias</a>
            </li>
            </ul>
        </div>
        </nav> 	
		<!-- LOGAR COMO ADMIN -->
	<div class="text-center mt-5">
	<?php
	$login_cookie = $_COOKIE['login'];//cookie login
	if(isset($login_cookie)){
		echo "Bem - vindo, $login_cookie <br/>";
	}else{
		echo "Bem-vindo, intruso! <br/>";
	}


?>
    </div>  
</body>
</html>
