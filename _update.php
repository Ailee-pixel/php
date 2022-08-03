<?php

require_once("conexao.php");

$id = $_POST['id'];
$nome =  $_POST['nome']; 
$idade = $_POST['idade'];

$update = "UPDATE estudante SET nome= '$nome', idade='$idade' WHERE id = $id";
$salvar = mysqli_query($conexao,$update);


if(mysqli_affected_rows($conexao)){
HEADER("Location:frmconsultar.php");
}else{
    echo "ERRO AO ATUALIZAR";
}
mysqli_close($conexao);
 
?>