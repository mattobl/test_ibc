<?php
require_once("model/conexao.class.php");

$id_produto = "";
$nome = "";
$tipo = "";
$validade = "";
$descricao = "";

if (isset($_GET['id_produto'])) {
	$produtos = new Crud("produtos");
	$filtro = array("id_produto" => $_GET['id_produto']);
	$resposta = $produtos->selectCrud("*", true, $filtro);
	$id_produto = $resposta[0]->id_produto;
	$nome = $resposta[0]->nome;
	$tipo = $resposta[0]->tipo;
	$validade = $resposta[0]->validade;
	$descricao = $resposta[0]->descricao;
}

if (isset($_POST['editar'])) {
	if ($_POST['editar'] == "produto") {
		$produtos = new Crud("produtos");
		$array_dados = array(			
			"nome" => $_POST['nome'],
			"tipo" => $_POST['tipo'],
			"validade" => $_POST['validade'],
			"descricao" => $_POST['descricao'],
		);

		$array_id = array("id_produto" => $_POST['id_produto']);

		$resposta = $produtos->atualizaCrud($array_dados, $array_id);
		if ($resposta)
			header("Location: cadastroProduto.php?editado=true");
		else
			header("Location: cadastroProduto.php?editado=false");
	}

}

?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
	<title>Editar Animal</title>
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
				<div id="divProdutos" class="col-12<?php if (isset($_GET['id_produto'])) echo ""; else echo " d-none";  ?>">
					<div class="col-sm-12 col-md-12 col-lg-12">
						<h2>Editar Animais</h2>
					</div>
					<form action="editarProdutos.php" method="POST" class="was-validated">
						<input type="hidden" name="id_produto" value="<?php echo $id_produto; ?>">
						<div class="form-group text-left">
							<label for="nome">Nome do animal:</label>
							<input type="text" class="form-control" id="nome" placeholder="Nome do produto" name="nome" value="<?php echo $nome; ?>" required>				  
						</div>
						<div class="form-group text-left">
							<label for="tipo">Raça do animal:</label>
							<input type="text" class="form-control" id="tipo" placeholder="Tipo do produto" name="tipo" value="<?php echo $tipo; ?>" required>				  
						</div>
						<div class="form-group text-left">
							<label for="validade">Data de desaparecimento:</label>
							<input type="date" class="form-control" id="validade" name="validade" value="<?php echo $validade; ?>" required>	  
						</div>
						<div class="form-group text-left">
							<label for="descricao">Descrição do animal:</label>
							<textarea class="form-control" id="descricao" placeholder="Descrição do produto" name="descricao" required><?php echo $descricao; ?></textarea>		  
						</div>							
						<button type="submit" name="editar" value="produto" class="btn btn-primary">Atualizar</button>
					</form>
				</div>
			</div>
			<div class="col-sm-12 col-md-12 col-lg-12 text-center mt-4">
				<a class="btn btn-danger" href="cadastroProduto.php">Voltar</a>
			</div>
		</div>
	</div>
</body>

</html>