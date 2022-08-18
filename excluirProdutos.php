<?php
	require_once("model/conexao.class.php");

	$parametro = "";

	$mensagem = "Não foi possível retornar a informação";

	if (isset($_GET['id_produto'])) {		
		$produtos = new Crud("produtos");
		$filtro = array("id_produto" => $_GET['id_produto']);
		$resposta = $produtos->selectCrud("*", true, $filtro);
		$parametro = "?id_produto=" . $resposta[0]->id_produto . "&confirmar";
		$mensagem = "Deseja excluir o animal " . $resposta[0]->nome . "?";

		if (isset($_GET['confirmar'])) {
			$resposta = $produtos->excluiCrud($filtro);
			if ($resposta)
				header("Location: cadastroProduto.php?excluido=true");
			else
				header("Location: cadastroProduto.php?excluido=false");
		}
	}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <title>Excluir Animal</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</head>
<body>
	<div class="container">	
		<div class="row pt-4">
			<div class="col-sm-12 col-md-12 col-lg-12">
				<h2><?php echo $mensagem; ?></h2>
			</div>
			<div class="col-sm-12 col-md-12 col-lg-12 mt-4">
				<a class="btn btn-danger" href="<?php echo $parametro; ?>">Confirmar</a>
				<a class="btn btn-secondary" href="cadastroProduto.php">Cancelar</a>
			</div>
		</div>
	</div>
</body>
</html>
