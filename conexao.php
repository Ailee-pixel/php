<?php

$servidor = "localhost";
$bancodedados = "exemplo_crud";
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