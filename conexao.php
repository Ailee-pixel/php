<?php
//Conexao ao banco de dados

$servidor = "localhost";
$bancodedados = "exemplo_crud";
$usuario = "root";
$senha = "";


$conexao = mysqli_connect($servidor, $usuario, $senha, $bancodedados);

if(!$conexao){
    echo "Erro Conexao";
}
Else{
    echo "Conexao OK";

}

?>

