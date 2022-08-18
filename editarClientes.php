<?php
require_once("model/conexao.class.php");

$id_cliente = "";
$nome = "";
$email = "";
$usuario = "";
$senha = "";

if (isset($_GET['id_cliente'])) {
	$clientes = new Crud("clientes");
	$filtro = array("id_cliente" => $_GET['id_cliente']);
	$resposta = $clientes->selectCrud("*", true, $filtro);
	$id_cliente = $resposta[0]->id_cliente;
	$nome = $resposta[0]->nome;
	$email = $resposta[0]->email;
	$usuario = $resposta[0]->usuario;
	$senha = $resposta[0]->senha;
}

if (isset($_POST['editar'])) {
	if ($_POST['editar'] == "cliente") {
		$clientes = new Crud("clientes");
		$array_dados = array(			
			"nome" => $_POST['nome'],
			"usuario" => $_POST['usuario'],
			"email" => $_POST['email'],
			"senha" => hash("sha256", $_POST['senha'])
		);

		$array_id = array("id_cliente" => $_POST['id_cliente']);

		$resposta = $clientes->atualizaCrud($array_dados, $array_id);
		if ($resposta)
			header("Location: operacoesCliente.php?editado=true");
		else
			header("Location: operacoesCliente.php?editado=false");
	}

}

?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
	<title>Editar Usuários</title>
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
				<div id="divClientes" class="col-12<?php if (isset($_GET['id_cliente'])) echo ""; else echo " d-none";  ?>">
					<div class="col-sm-12 col-md-12 col-lg-12">
						<h2>Editar Usuários</h2>
					</div>
					<form action="editarClientes.php" method="POST" class="was-validated">
						<input type="hidden" name="id_cliente" value="<?php echo $id_cliente; ?>">
						<div class="form-group text-left">
							<label for="nome">Nome Completo:</label>
							<input type="text" class="form-control" id="nome" placeholder="Nome Completo" name="nome" value="<?php echo $nome; ?>" required>				  
						</div>
						<div class="form-group text-left">
							<label for="email">E-mail:</label>
							<input type="text" class="form-control" id="email" placeholder="fulano@gmail.com" name="email" value="<?php echo $email; ?>" required>				  
						</div>
						<div class="form-group text-left">
							<label for="usuario">Nome de Usuário:</label>
							<textarea class="form-control" id="usuario" placeholder="Nome de Usuário" name="usuario" required><?php echo $usuario; ?></textarea>		  
						</div>
						<div class="form-group text-left">
							<label for="senha">Senha:</label>
							<input type="password" class="form-control" id="senha" name="senha" value="<?php echo $senha; ?>" required>	  
						</div>								
						<button type="submit" name="editar" value="cliente" class="btn btn-primary">Atualizar</button>
					</form>
				</div>
			</div>
			<div class="col-sm-12 col-md-12 col-lg-12 text-center mt-4">
				<a class="btn btn-danger" href="operacoesCliente.php">Voltar</a>
			</div>
		</div>
	</div>
</body>

</html>