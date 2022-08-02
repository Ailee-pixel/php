<?php
$a = $_GET ['num1'];
$b = $_GET ['num2'];
$op =$_GET ['op'];
$c = 0;  

function soma($a,$b) {
$c = $a + $b;
return $c;
}
function subtract($a,$b) {
    $c = $a - $b;
    return $c;
}
function multiply($a,$b) {
    $c = $a * $b;
    return $c;
}
function divide($a,$b) {
    $c = $a / $b;
    return $c;
}
function raiz($a){
$c = sqrt($a);
return $c;
}
switch ($op) {
    case '+':
       echo soma($a,$b);
        break;
    case '-':
        echo subtract($a,$b);
        break;
    case '*':
        echo  multiply($a,$b);
        break;
    case '/':
        echo  divide($a,$b);
        break;
    case 'raiz':
        echo  raiz($a);
        break;
}
?>