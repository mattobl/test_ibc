<!DOCTYPE html>
<html lang="pt-br">
<head>
  <title>Notícias</title>
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
        <a class="navbar-brand" href="index.php">Site</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navb">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navb">
            <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <a class="nav-link" href="index.php">Notícias</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="mostrarProdutos.php">Animais</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="cadastroCliente.php">Cadastro de Usuário</a>
            </li>
            </ul>
            <!-- barra de pesquisa -->
            <form class="form-inline my-2 my-lg-0" method="GET" action="index.php">
                <input class="form-control mr-sm-2" type="text" name="pesquisar" placeholder="Buscar...">
                <button class="btn btn-success my-2 my-sm-0" type="submit">Pesquisar</button>
            </form>
        </div>
        </nav>

    </div>
	<div class="container mt-4">
		<div class="row">

        <?php
				require_once("model/conexao.class.php");
               
                $id_cliente = "";
                $nome = "";
                $email = "";
                $usuario = "";
                $senha = "";

                if (isset($_GET['id_cliente'])) {
                    $noticias = new Crud("clientes");
                    $filtro = array("id_cliente" => $_GET['id_cliente']);
                    $resposta = $clientes->selectCrud("*", true, $filtro);
                    $id_cliente = $resposta[0]->id_cliente;
                    $nome = $resposta[0]->nome;
                    $email = $resposta[0]->email;
                    $usuario = $resposta[0]->usuario;
                    $senha = $resposta[0]->senha;

                }
			?>

        
        </div>
		
	</div>
</body>
</html>
