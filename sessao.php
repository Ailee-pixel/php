<?php


$login = $_POST["login"];
$senha = $_POST["senha"];

if (($login === "usuario" and $senha === "senha")){

session_start();
$_SESSION['msg'] = "Entrou";
echo $_SESSION["msg"];

}else{
    
header("Location:login.php");

}





?>
