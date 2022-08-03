<?php
require_once("conexao.php");

$id = $_POST['id'];
$deletar = "DELETE FROM estudante WHERE id = $id";
$excluir = mysqli_query($conexao, $deletar);

if(mysqli_affected_rows($conexao)){
    HEADER("Location:frmconsultar.php");
    }else{
        echo "ERRO AO EXCLUIR";
    }
    mysqli_close($conexao);
     







?>