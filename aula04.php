<?php
$nm = $_GET['nome'];
$ps = $_GET ['senha'];
$gn = $_GET ['genero'];
$tn = $_GET ['turno'];
$ct = $_GET ['cidade'];

$nm = filter_input(INPUT_POST, 'nome');
$ps = filter_input(INPUT_POST, 'senha');
$gn = filter_input(INPUT_POST, 'genero');
$tn = filter_input(INPUT_POST, 'turno');
$ct = filter_input(INPUT_POST,'cidade');

if (empty($nm)){
    $nm = "Preencha seu nome";
}

else 

$nm = $_GET['nome'];

if (empty($ps)){
    $ps = "Preencha com uma senha";
}

if (empty($gn)){
    $gn = "Escolha um genero";
}

if (empty($tn)){
    $tn= "Escolha um genero";
}

if (empty($ct))
    $ct = "Escolha uma opção";


?>

<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Document</title>
</head>
<body>

<table>
<tr><td><b>Nome:</b></td><td><?php echo $nm?></td></tr>
<tr><td><b>Senha:</b></td><td><?php echo $ps?></td></tr>
<tr><td><b>Genero:</b></td><td><?php echo $gn?></td></tr>
<tr><td><b>Turno:</b></td></b><td><?php echo $tn?></td></tr>
<tr><td><b>Cidade:</b></td><td><?php echo $ct?></td></tr>
</table>
<form action="form_cadastro.html">
    <input type="submit" value="Voltar" />
</form>

</body>
</html>