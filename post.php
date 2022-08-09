<?php
require_once("conexao.php");

$description =  $_POST['desc']; 
$img = $_POST['arquivo_img'];


$inserir = "INSERT INTO tb_imagens(descricao_img, arquivo_img) VALUES ('$description', '$img')";
$salvar = mysqli_query($conexao,$inserir);


if(mysqli_insert_id($conexao)){
    //header("");
    echo "Deu bom";
}else{
    echo "Erro ao gravar!";
}
mysqli_close($conexao);

