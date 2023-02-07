<?php
$number1 = 1000;
$number2 = 2000;
echo"<br>"."before swap";
echo"<br>";
echo"<br>"."Value of first number is =". $number1;
echo"<br>"."Value of first number is =". $number2;
echo"<hr>";

$temp = 0;
$temp =$number1;
$number1 = $number2;
$number2 = $temp;
echo"<br>"."values after swap";
echo"<br>";
echo"<br>";
echo"<br>"."Value of first number is =". $number1;
echo"<br>"."Value of first number is =". $number2;
?>
