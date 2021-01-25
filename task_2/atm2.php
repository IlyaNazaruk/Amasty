<?php

$value = 0;
$num1 = 0;
$value = $_POST['value'];
if ($value == 0 || ""){
    echo "value not acceptable";
}
else {
    $num1 = $value / 500;
    $num1s = (int)$num1;
    echo "500 notes :" . $num1s . "<br>";
    $value = $value - ($num1s * 500);
    $num2 = $value / 200;
    $num2s = (int)$num2;
    echo "200 notes :" . $num2s . "<br>";
    $value = $value - ($num2s * 200);
    $num3 = $value / 100;
    $num3s = (int)$num3;
    echo "100 notes :" . $num3s . "<br>";
    $value = $value - ($num3s * 100);
    $num4 = $value / 50;
    $num4s = (int)$num4;
    echo "50 notes :" . $num4s . "<br>";
    $value = $value - ($num4s * 50);
    $num5 = $value / 20;
    $num5s = (int)$num5;
    echo "50 notes :" . $num5s . "<br>";
    $value = $value - ($num4s * 50);
    $num5 = $value / 20;
    $num5s = (int)$num5;
    echo "50 notes :" . $num5s . "<br>";

}


