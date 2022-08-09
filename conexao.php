<?php

$servidor = "localhost";
$bancodedados = "bd_imagens";
$usuario = "root";
$senha = "";

$conexao = mysqli_connect($servidor, $usuario, $senha, $bancodedados);

if(!$conexao){
    echo "erro conexao";
}
else{
    echo "conexao ok";
}

?>