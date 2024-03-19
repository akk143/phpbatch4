<?php

// Arithmrtic Operators
// +-*/%

$num1 = 100;
$num2 = 200;
$num3 = 10.223;
$city = "Mawlamyine";
$car = false;
$mycarrs = ['maung maung','aung aung',"aye aye"];
$colors = array('red','green','blue');

var_dump($num1); // int(100)
var_dump($num3); // float(10.223)
var_dump($city); // string(10) "Mawlamyine"
var_dump($car); // bool(false)
var_dump($mycarrs); // array(3)
var_dump($colors); // array(3)

$num4 = true;
$num5 = 10;
$num6 = 20;

var_dump($num5,$num6); // string
echo $num4+$num5; //11
echo $num5+$num6; //30
echo $num5-$num4; //10
var_dump($num5+$num6); //int(30)

// Override or Overwrite

$num5 = 50;
$num6 = '60';

var_dump($num5+$num6); //int(110)
echo $num5+$num6; 110
?>

<!-- array can't direct excude with echo & print-->
<!-- var_dump to test data type -->
