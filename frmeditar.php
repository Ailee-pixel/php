<?php
require_once("conexao.php"); //CONEXAO COM O BD

$id = $_GET['id']; //CAPTURA DO ID DO ESTUDANTE VIA METODO GET

//GERAÇÃO DA CONSULTA PARA O ID DO ESTUDANTE
$query = "SELECT * FROM estudante WHERE id = $id";
$resultado = mysqli_query($conexao, $query);
$select_usuario = mysqli_fetch_assoc($resultado);

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <title>INSERIR DADOS</title>
  <meta charset="utf-8">
</head>
<body>
  <h2>INSERIR DADOS</h2>
  <HR>
  <form action="_update.php" method="POST">
    <input type="hidden" name="id" value="<?php echo $select_usuario['id'] ?>"><br>
    <label for="nome">Nome Do Estudante:
        <input type="text" name="nome" value="<?php echo $select_usuario['nome'] ?>"></label><br>
    <label for="idade">Idade do Estudante:
       <input type="number" name="idade" value="<?php echo $select_usuario['idade'] ?>"></label><br>
    <br>
    <input type="submit" value="Atualizar">&nbsp;&nbsp;<a href='frmConsultar.php'>Voltar</a>
  </form>
</body>
</html>