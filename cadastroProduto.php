<?php
	require_once("model/conexao.class.php");

	if (isset($_POST['cadastrar'])) {
		if ($_POST['cadastrar'] == "produtos") {
			$produtos = new Crud("produtos");
			$array_dados = array(
				"nome" => $_POST['nome'],
				"tipo" => $_POST['tipo'],
				"validade" => $_POST['validade'],
				"descricao" => $_POST['descricao']
			);

			$resposta = $produtos->insereCrud($array_dados);
			if ($resposta)
				header("Location: cadastroProduto.php?cadastrar=true");
			else
				header("Location: cadastroProduto.php?cadastrar=false");
		
	}
	}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <title>Cadastro Animais</title>
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
                <a class="nav-link" href="bemvindoAdmin.php">Bem-vindo</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="cadastroProduto.php">Cadastro de Animais</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="cadastroNoticias.php">Cadastro de Noticias</a>
            </li>
			<li class="nav-item">
                <a class="nav-link" href="operacoesCliente.php">Operações de Usuários</a>
            </li>
            </ul>
        </div>
        </nav>

    </div>
	<div class="container mt-4" id="admProdutos">		
		<div class="row">
		   <div class="col-sm-12 col-md-6 col-lg-6">
				<h2>Lista de Animais</h2>			
		   </div>
		   <div class="col-sm-12 col-md-6 col-lg-6 text-right">
				<button type="button" class="btn btn-secondary" data-toggle="modal" data-target="#myModal">Cadastro de Animais</button>
				<!-- The Modal -->
				<div class="modal fade" id="myModal">
				  <div class="modal-dialog">
					<div class="modal-content">
					  <!-- Modal Header -->
					  <div class="modal-header">
						<h4 class="modal-title">Cadastro de Animais</h4>
						<button type="button" class="close" data-dismiss="modal">&times;</button>
					  </div>
					  <!-- Modal body -->
					  <div class="modal-body">
							<form action="cadastroProduto.php" method="POST" class="was-validated">
								<div class="form-group text-left">
								  <label for="nome">Nome:</label>
								  <input type="text" class="form-control" id="nome" placeholder="Nome" name="nome" required>				  
								</div>
								<div class="form-group text-left">
								  <label for="tipo">Raça:</label>
								  <input type="text" class="form-control" id="tipo" placeholder="Tipo" name="tipo" required>				  
								</div>
								<div class="form-group text-left">
									<label for="validade">Data de Desaparecimento:</label>
									<input type="date" class="form-control" id="validade" name="validade" required>	  
								</div>
								<div class="form-group text-left">
									<label for="descricao">Descrição:</label>
									<textarea class="form-control" id="descricao" placeholder="Descrição" name="descricao" required></textarea>		  
								</div>																
								<button type="submit" name="cadastrar" value="produtos" class="btn btn-primary">Cadastrar</button>
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
		</div>
		
		<table class="table table-striped">
		<thead>
		  <tr>
			<th>Id</th>
			<th>Nome</th>
			<th>Data de Desaparecimento</th>
			<th>Raça</th>
			<th class="text-center">Ações</th>
		  </tr>
		</thead>
		<tbody>
			<?php
				require_once("model/conexao.class.php");

				$produtos = new Crud("produtos");
				$resposta = $produtos->selectCrud("*");

				foreach($resposta as $indice => $valor) {
					echo "<tr>";
					echo "<td>{$valor->id_produto}</td>";
					echo "<td>{$valor->nome}</td>";
					echo "<td>{$valor->validade}</td>";
					echo "<td>{$valor->tipo}</td>";
					echo '<td class="text-center">	
					<a href="editarProdutos.php?id_produto=' . $valor->id_produto . '" title="Editar"><i class="fa fa-pencil"></i></a> 
					<a href="excluirProdutos.php?id_produto=' . $valor->id_produto  . '" title="Excluir"><i class="fa fa-trash-o text-danger"></i></a>
					</td>';
					echo "</tr>";
				}
			?>
		
		</tbody>
		</table>
    </div>
    
</body>
</html>
