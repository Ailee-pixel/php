<?php

$errmsg = "Não logado";
session_start();

if (isset($_SESSION['msg']) && !empty($_SESSION['msg'])){
    echo $_SESSION["msg"];

}else{

    header("Location:login.php");
}





?>