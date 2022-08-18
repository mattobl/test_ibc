<!DOCTYPE html>
<html lang="pt-br">
<head>
  <title>Operações Clientes</title>
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
		<table class="table table-striped">
		<thead>
		  <tr>
			<th>Id</th>
			<th>Nome</th>
			<th>Email</th>
			<th>Usuario</th>
			<th class="text-center">Ações</th>
		  </tr>
		</thead>
		<tbody>
			<?php
				require_once("model/conexao.class.php");

				$clientes = new Crud("clientes");
				$resposta = $clientes->selectCrud("*");

				foreach($resposta as $indice => $valor) {
					echo "<tr>";
					echo "<td>{$valor->id_cliente}</td>";
					echo "<td>{$valor->nome}</td>";
					echo "<td>{$valor->email}</td>";
					echo "<td>{$valor->usuario}</td>";
					echo '<td class="text-center">	
					<a href="editarClientes.php?id_cliente=' . $valor->id_cliente . '" title="Editar"><i class="fa fa-pencil"></i></a> 
					<a href="excluirClientes.php?id_cliente=' . $valor->id_cliente  . '" title="Excluir"><i class="fa fa-trash-o text-danger"></i></a>
					</td>';
					echo "</tr>";
				}
			?>
		
		</tbody>
		</table>
    </div>  
</body>
</html>
