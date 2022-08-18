<!DOCTYPE html>
<html lang="pt-br">
<head>
  <title>Login</title>
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
                <a class="nav-link" href="cadastroCliente.php">Cadastro Usuários</a>
            </li>
            </ul>
        </div>
        </nav> 	
		<!-- LOGAR COMO ADMIN -->
	<div class="text-center mt-5">
				<button type="button" class="btn btn-secondary" data-toggle="modal" data-target="#myModalLoginAdmin">Login Admin</button>
								
				<!-- The ModalLogin -->
				<div class="modal fade" id="myModalLoginAdmin">
				  <div class="modal-dialog">
					<div class="modal-content">
					  <!-- Modal Header -->
					  <div class="modal-header">
						<h4 class="modal-title">Login Admin</h4>
						<button type="button" class="close" data-dismiss="modal">&times;</button>
					  </div>
					  <!-- Modal body -->
					  <div class="modal-body">
							<form action="validaAdmin.php" method="POST" class="was-validated">
								<div class="form-group text-left">
								  <label for="usuario">Usuario de Admin:</label>
								  <input type="text" class="form-control" id="usuario" placeholder="dica: 'admin'" name="usuario" required>				  
								</div>
								<div class="form-group text-left">
								  <label for="senha">Senha:</label>
								  <input type="password" class="form-control" id="senha" placeholder="dica: '123'" name="senha" required>				  
								</div>								
								<button type="submit" name="logar" value="clientes" class="btn btn-primary">Entrar</button>
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
	  <!-- LOGAR COMO USER  -->
	<div class="text-center mt-5">
				<button type="button" class="btn btn-secondary" data-toggle="modal" data-target="#myModalLoginUser">Login Usuário</button>
								
				<!-- The ModalLogin -->
				<div class="modal fade" id="myModalLoginUser">
				  <div class="modal-dialog">
					<div class="modal-content">
					  <!-- Modal Header -->
					  <div class="modal-header">
						<h4 class="modal-title">Login Usuário</h4>
						<button type="button" class="close" data-dismiss="modal">&times;</button>
					  </div>
					  <!-- Modal body -->
					  <div class="modal-body">
							<form action="validaCliente.php" method="POST" class="was-validated">
								<div class="form-group text-left">
								  <label for="usuario">Usuario:</label>
								  <input type="text" class="form-control" id="usuario" placeholder="Usuário" name="usuario" required>				  
								</div>
								<div class="form-group text-left">
								  <label for="senha">Senha:</label>
								  <input type="password" class="form-control" id="senha" placeholder="Senha" name="senha" required>				  
								</div>								
								<button type="submit" name="entrar" value="clientes" class="btn btn-primary">Entrar</button>
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
