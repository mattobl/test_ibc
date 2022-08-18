<?php
$login = $_POST['usuario'];
$senha = hash("sha256", $_POST['senha']);
$entrar = $_POST['entrar'];
$conectar = mysqli_connect('localhost','root','123','app');


if(isset($entrar)){
    //login = $login
    //verifica
    $verifica = mysqli_query($conectar,"select * from clientes
     where usuario = '$login' and senha ='$senha'") or die("erro ao buscar do banco");
    
     if(mysqli_num_rows($verifica)<=0){
        echo "<script language='javascript' type='text/javascript'>
        alert('Não foi possível fazer login. Usuário/senha incorretos.');
        window.location.href='index.php';</script>";			
        die();
    }else{
        //$login
        setcookie("login",$login);
        header("Location:bemvindo.php");
    }
    
}

?>