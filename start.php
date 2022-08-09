<?php

require_once("conexao.php");

$query = 'SELECT * FROM tb_imagens';
$resultado = mysqli_query($conexao, $query);
?>



<!DOCTYPE html>
    <html lang="pt-br">
      <head>
        <title>Document</title>
        <meta charset="utf-8">
      </head>
      <body>
        <h2>INSERIR DADOS</h2>
        <BR>
            <form action="post.php" method="POST">
            <label for="desc">Descrição:<input type="text" name = "desc"></label></br>
            <label for="arquivo_img">Imagem:<input type="text" name = "arquivo_img"></br>
            <input type = "submit" value="Salvar">
            <input type="reset">
        
      </body>
    </html>