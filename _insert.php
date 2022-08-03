<?php

require_once("conexao.php"); // conexao com o Banco de dados


$nome = $_POST['nome'];
$idade = $_POST['idade'];


//echo $nome;
//echo $idade;

$inserir = "INSERT INTO estudante(nome, idade) VALUES ('$nome',$idade)";
$salvar = mysqli_query($conexao,$inserir);


if(mysqli_insert_id($conexao)){
    header("Location:frmconsultar.php");
}else{
   echo "ERRO DE GRAVAÇÃO";
}
mysqli_close($conexao);


