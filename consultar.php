<?php


require_once("conexao.php");


$query = 'SELECT * FROM estudante';
$resultado = mysqli_query($conexao, $query);

echo "<br><br>";

echo "<table border = 1><tr><th>ID</th><th>Name</th><th></th><th></th></tr>";

while($busca = $resultado->fetch_assoc()){

  echo "<tr><td>".$busca["id"]."</td><td>".$busca["nome"]."</td><td>".$busca["idade"]."</td><td> Editar </td><td> Excluir </td></tr>";
    
}
  
  echo "</table>";


?>
