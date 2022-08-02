<?php

$a = $_GET ['num1'];
$b = $_GET ['num2'];
$op =$_GET ['op'];
$c = 0;
if($op == "+")
    $c = $a + $b;
 
else if($op == "-")
    $c = $a - $b;

else if($op == "*")
    $c = $a*$b;
else if($op == "/")
    $c = $a/$b;
 echo "O resultado é: $c";
?>      


