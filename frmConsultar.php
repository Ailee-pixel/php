<?php
//pagina consultar
require_once("conexao.php"); // conexao com o Banco de dados
//Consulta
$query = 'SELECT * FROM estudante';
$resultado = mysqli_query($conexao, $query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>CONSULTAR</title>
</head>
<body>
CONSULTAR
<HR>

<table border=1><tr><th>ID</th><th>Name</th><th></th><th></th></tr>

<?php while($busca = $resultado->fetch_assoc()){ ?>

  <tr>
    <td><?php echo $busca["id"]?></td>
    <td><?php echo $busca["nome"]?></td>
    <td><?php echo $busca["idade"]?></td>
    <td><a href='frmeditar.php?  id=<?php echo $busca["id"]?>'>Editar</a></td>
    <td><a href='frmexcluir.php? id=<?php echo $busca["id"]?>'>Excluir</a></td>
</tr>
    
<?php } ?>
  
</table>
<br><br>
<a href='frminserir.php'>Inserir Aluno</a>


</body>
</html>
