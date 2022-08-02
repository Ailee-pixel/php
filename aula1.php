<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
<?php
$txt = $_POST['txt'];
$tam = $_POST['tam'];
$cor = $_POST['cor'];
?>
<style>
    span.texto{
font-size: <?php echo $tam; ?>;
color: <?php echo $cor; ?>;

    }

 </style>   
</head>
<body>
    <?php
        echo "<span class='texto'>$txt</span><br>";
    ?>
    <br>
    <a href="aula.html">Voltar</a>
</body>
</html>