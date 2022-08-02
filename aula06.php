<?php

$servidor = "localhost";
$bancodedados = "clube_do_livro_brunodm";
$usuario = "root";
$senha = "";


$conexao = mysqli_connect($servidor,$usuario,$senha,$bancodedados);


$sql = "SELECT ID_VENDEDOR, NOME_VENDEDOR FROM vendedores";
$result = $conexao->query($sql);

if ($result->num_rows > 0) {
  echo "<table><tr><th>ID</th><th>Name</th></tr>";

  while($row = $result->fetch_assoc()) {
    echo "<tr><td>".$row["ID_VENDEDOR"]."</td><td>".$row["NOME_VENDEDOR"]."</td></tr>";
  }
  echo "</table>";
} else {
  echo "0 results";
}
$conexao->close();
?>