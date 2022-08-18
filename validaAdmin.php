<?php
require_once("model/conexao.class.php");


//usuario ADMIN
$login_correto = "admin";
$senha_correta = "123";

$login = $_POST['usuario'];
$senha = $_POST['senha'];

//IF para validar o usuario ADMIN
if($login == $login_correto && $senha == $senha_correta){
    //direcionando para uma página de ADMIN onde é possivel cadastrar, excluir e alterar produtos e noticias
    header("Location: bemvindoAdmin.php");
}else{
    echo "<script language='javascript' type='text/javascript'>
			alert('Não foi possível fazer login. Usuário/senha incorretos.');
			window.location.href='index.php';</script>";			
			die();
}

?>