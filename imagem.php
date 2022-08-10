<?php
session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <title>Celke - Upload multiplo</title>
</head>

<body>
    <h1>Upload de Imagem</h1>

    <?php
   
    $dados = filter_input_array(INPUT_POST, FILTER_DEFAULT);

 
    if (!empty($dados['SendCadImg'])) {

        $arquivo = $_FILES['arquivo'];

    
        for ($cont = 0; $cont < count($arquivo['name']); $cont++) {

            $destino = "imagens/" . $arquivo['name'][$cont];

          
            if (move_uploaded_file($arquivo['tmp_name'][$cont], $destino)) {
                $_SESSION['msg'] = "<p style='color: green;'>Upload realizado com sucesso!</p>";
            } else {
                $_SESSION['msg'] = "<p style='color: #f00;'>Erro: Upload não realizado com sucesso!</p>";
            }
        }
    }

    if(isset($_SESSION['msg'])){
        echo $_SESSION['msg'];
        unset($_SESSION['msg']);
    }
    ?>


    <form method="POST" action="" enctype="multipart/form-data">
        <label>Imagens</label>
        <input type="file" name="arquivo[]" multiple="multiple"><br><br>

        <input type="submit" name="SendCadImg" value="Cadastrar">
    </form>


</body>

</html>