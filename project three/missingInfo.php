<?php
require_once "calculator.php";
$Calculator = new Calculator();
echo $Calculator->calc("/", 10, 0); 
echo $Calculator->calc("*", 10, 2); 
echo $Calculator->calc("/", 10, 2); 
echo $Calculator->calc("-", 10, 2); 
echo $Calculator->calc("+", 10, 2); 
echo $Calculator->calc("*", 10); 
echo $Calculator->calc(10); 
?>
