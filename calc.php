<?php
include "calculator.php";
// Getting form values from request
$num1 = $_POST["number1"];
$num2 = $_POST["number2"];
$operator = $_POST["operator"];
 
$calculator = new Calc($num1, $num2, $operator);
echo $calculator->calculate();
?>