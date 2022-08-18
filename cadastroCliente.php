<?php
	require_once("model/conexao.class.php");

	if (isset($_POST['cadastrar'])) {
		if ($_POST['cadastrar'] == "clientes") {
			$clientes = new Crud("clientes");
			$array_dados = array(
				"nome" => $_POST['nome'],
				"email" => $_POST['email'],
				"usuario" => $_POST['usuario'],
				"senha" => hash("sha256", $_POST['senha'])
			);

			$resposta = $clientes->insereCrud($array_dados);
			if ($resposta){
				echo "<script language='javascript' type='text/javascript'>
			alert('Cadastro realizado com sucesso.');
			window.location.href='cadastroCliente.php?cadastrar=true';</script>";			
			die();
		}else{
				header("Location: cadastroCliente.php?cadastrar=false");
			}
	}
	}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <title>Cadatro de Usuários</title>
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
        <a class="navbar-brand" href="index.php">Login</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navb">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navb">
            <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <a class="nav-link" href="cadastroCliente.php">Cadastro de Usuários</a>
            </li>
            </ul>
        </div>
        </nav>

    </div>
	<div class="container mt-4" id="admClientes">		
		   <div class="text-center mt-5">
				<button type="button" class="btn btn-secondary" data-toggle="modal" data-target="#myModal">Cadastro de Usuários</button>
							
				<!-- The Modal -->
				<div class="modal fade" id="myModal">
				  <div class="modal-dialog">
					<div class="modal-content">
					  <!-- Modal Header -->
					  <div class="modal-header">
						<h4 class="modal-title">Cadastro de Usuários</h4>
						<button type="button" class="close" data-dismiss="modal">&times;</button>
					  </div>
					  <!-- Modal body -->
					  <div class="modal-body">
							<form action="cadastroCliente.php" method="POST" class="was-validated">
								<div class="form-group text-left">
								  <label for="nome">Nome Completo:</label>
								  <input type="text" class="form-control" id="nome" placeholder="Nome Completo" name="nome" required>				  
								</div>
								<div class="form-group text-left">
								  <label for="email">E-mail:</label>
								  <input type="text" class="form-control" id="email" placeholder="fulano@gmail.com" name="email" required>				  
								</div>
								<div class="form-group text-left">
								  <label for="usuario">Nome do Usuário:</label>
								  <input type="text" class="form-control" id="usuario" placeholder="Nome do Usuário" name="usuario" required>				  
								</div>
								<div class="form-group text-left">
								  <label for="senha">Senha:</label>
								  <input type="password" class="form-control" id="senha" placeholder="Senha" name="senha" required>				  
								</div>								
								<button type="submit" name="cadastrar" value="clientes" class="btn btn-primary">Cadastrar Usuário</button>
							</form>   
						</div>
					  <!-- Modal footer -->
					  <div class="modal-footer">
						<button type="button" class="btn btn-danger" data-dismiss="modal">Fechar</button>
					  </div>
					</div>
				  </div>
				</div>
    </div>  
</body>
</html>
