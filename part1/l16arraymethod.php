<?php

// => array_combine(key,value) Function

$name = ['kyaw kyaw','aung aung','hla hla','su su'];
$age = [20,32,26,41];

$result = array_combine($name,$age);

echo "<pre>".print_r($result,true)."</pre>";
echo $result["kyaw kyaw"];  // 20


// => count(array) Function

$vehicles = ['toyota','suzuki','audi','ford','bmw','madza'];
echo count($vehicles);  // 6


// => array_count_values(array) Function (case-sensitive)

$cars = ['suzuki','audi','ford','madza'];
echo "<pre>".print_r(array_count_values($cars),true)."</pre>";  // ([suzuki] => 1 [audi] => 1 [ford] => 1[ madza] => 1)

$brands =['toyota','suzuki','audi','bmw','ford','bmw','madza','audi'];
echo "<pre>".print_r(array_count_values($brands),true)."</pre>"; //([toyota] => 1 [suzuki] => 1 [audi] => 2 [bmw] => 2 [ford] => 1 [madza] => 1    )








?>