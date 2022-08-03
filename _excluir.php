<?php
require_once("conexao.php");

$id = $_GET['id'];

$query = "DELETE FROM alunos WHERE id = $id";
$resultado = mysqli_query($conexao, $query);
$select_usuario = mysqli_fetch_assoc($resultado);
?>

<!DOCTYPE html>
    <html lang="pt-br">
      <head>
        <title>EXCLUIR DADOS</title>
        <meta charset="utf-8">
      </head>
      <body>
        <h2>EXCLUIR DADOS</h2>
        <BR>
        <form action="_delete.php" method="POST">
          <input type="hidden" name = "id" value = "<?php echo $select_usuario['id']?>"><br>  
          <label for="nome">Nome Do Estudante:<input type="text" name ="nome" value = "<?php echo $select_usuario['nome']?>" disabled></label><br>
          <label for="idade">Idade do Estudante:<input type="text" name = "idade" value = "<?php echo $select_usuario['idade']?>" disabled></label><br>
          <input type = "submit" value="Excluir">&nbsp;&nbsp;<a href = 'frmConsultar.php'>Voltar</a>
    
      </body>
    </html>