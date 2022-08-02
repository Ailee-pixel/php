<?php
require_once("conexao.php");

$nome =  $_POST['nome']; 
$idade = $_POST['idade'];


//echo $nome;
//echo $idade;

//INSERT INTO estudante ("nome", "idade") VALUES ("nome", "idade")

$inserir = "INSERT INTO estudante(nome, idade) VALUES ($nome, $idade)";
$salvar = mysqli_query($conexao,$inserir);


if(mysqli_insert_id($conexao)){
    header("Location:consultar.php");
}else{
    echo "Erro ao gravar!";
}
mysqli_close($conexao);

