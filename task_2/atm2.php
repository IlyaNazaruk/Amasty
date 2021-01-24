<?php

$value = 0;
$numl = 0;
if (isset($_POST['btn'])){
    $value = $_POST['value'];
    if ($value == 0 || ""){
        echo "value nor acceptable";
    }
    else{
        $numl = $value / 5000;
        $numls = (int)$numl;
        echo "5000 notes :" . $numls . "br";
    }
}

