<!DOCTYPE html>
<html lang="pt-br">
<head>
  <title>Animais</title>
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
               
                $id_produto = "";
                $nome = "";
                $tipo = "";
                $validade = "";
                $descricao = "";

                if (isset($_GET['id_produto'])) {
                    //nome da tabela
                    $produtos = new Crud("produtos");
                    $filtro = array("id_produto" => $_GET['id_produto']);
                    $resposta = $produtos->selectCrud("*", true, $filtro);
                    
                    $id_produto = $resposta[0]->id_produto;
                    $nome = $resposta[0]->nome;
                    $tipo = $resposta[0]->tipo;
                    $validade = $resposta[0]->validade;
                    $descricao = $resposta[0]->descricao;

                    echo '<div class="col-12">
                    <div class="card flex-md-row mb-4 box-shadow h-md-250">
                    <div class="card-body d-flex flex-column align-items-start">
                      <h3 class="mb-0">
                        <a class="text-dark" href="#">' . htmlspecialchars($nome) . '</a>
                      </h3>
                      <div class="mb-1 text-muted">Raça: ' . htmlspecialchars($tipo) . '</div>
                      <div class="mb-1 text-muted">Data de Desaparecimento: ' . htmlspecialchars($validade) . '</div>
                      <p class="card-text mb-auto">' . htmlspecialchars($descricao) . '</p>
                      </div>
                      </div>
                    </div>';
                }
			?>

        
        </div>
		
	</div>
</body>
</html>
