<?php

// => Check Variable Type

// =>is_string(variable) Function

$val1 = "Save Myanmar";
echo "val1 is ". is_string($val1);  // 1
echo gettype($val1); // string

$val2 = 50;
echo "val2 is ". is_string($val2);

$val3 = "50";
echo "val3 is ". is_string($val3);  // 1


$val4 = true;
echo "val4 is ". is_string($val4);

$val5 = "";
echo "val5 is ". is_string($val5);  // 1


// ----------------------------------------------


// =>is_numbaric(variable) Function

$val6 = 30;
echo "val6 is ". is_numeric($val6);
echo "val6 is ". is_int($val6);
echo "val6 is ". is_integer($val6);
echo gettype($val6);

$val7 = 29.23;
echo "val7 is ". is_numeric($val7);
echo "val7 is ". is_int($val7);
echo "val7 is ". is_integer($val7);



$val8 = "40";
// *************
echo "val8 is ". is_numeric($val8); // 1  

echo "val8 is ". is_int($val8);
echo "val8 is ". is_integer($val8);

// ----------------------------------------------


// =>is_float(variable) Function

$val9 = 20;
echo "val7 is ". is_float($val9);

$val10 = 20.56;
echo "val10 is ". is_float($val10); // 1
echo gettype($val10); // double
echo gettype($val10); // float (lower decimal)

$val11 = "23.93";
echo "val7 is ". is_float($val11);


// ----------------------------------------------


// =>is_bool(variable) Function

$val12 = true;
echo "val12 is ". is_bool($val12); // 1
echo gettype($val12); // boolean

$val13 = FALSE;
echo "val13 is ". is_bool($val13); // 1

$val14 = 1;
echo "val14 is ". is_bool($val14);

$val15 = "true";
echo "val15 is ". is_bool($val15);

// ----------------------------------------------


// =>is_array(variable) Function

$val16 = "Help Myanmar";
echo "val16 is ". is_array($val16);

// $val17 = ["aung aung","su su"];
$val17 = array("aung aung","su su");
echo "val17 is ". is_array($val17);  // 1
echo gettype($val17); // array


// ----------------------------------------------


// =>is_null(variable) Function

$val18 = 0;
echo "val18 is ". is_null($val18);

$val19 = null;
echo "val19 is ". is_null($val19);  // 1

$val20 = null;
echo "val20 is ". is_null($val20);  // 1

$val21 = Null;
echo "val21 is ". is_null($val21);  // 1

$val22 = NULL;
echo "val22 is ". is_null($val22);  // 1

$val23 = "null";
echo "val23 is ". is_null($val23);

// ----------------------------------------------


// =>empty(variable) Vs isset(variable)

// Note : The followin value are empty
// 0
// 0.0
// "0"
// ""
// []
// NULL
// FALSE

$val24 = [];

if(empty($val24)){
    echo "Your value is empty";
}

if(isset($val24)){
    echo "Your variable is with value";
}else{
    echo "Your variable is without value"
}

// => isset() Vs unset()

//city
$city = 'Yangon';
$country = 'Thailand';
echo $city;  // Yangon
echo $country;  // Thailand

unset($city);
unset($city,$country);
echo $city;



?>