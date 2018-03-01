<?php
session_start();

$number1 = $_SESSION['result'];
$number = (int)$_GET['number'];
$operator = $_GET['operator'];

switch($operator){
    case "+":
        $result = $number1 + $number;
        echo $result;
        break;
    case "-":
        $result = $number1 - $number;
        echo $result;
        break;
    case "*":
        $result = $number1 * $number;
        echo $result;
        break;
    case "/":
        $result = $number1 / $number;
        echo $result;
        break;
    case "%":
        $result = $number1 % $number;
        echo $result;
}

$_SESSION['result'] = $result;
?>
