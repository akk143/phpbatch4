<?php

// User Defined Function

// function(){
//     code to be excuted;
// }

// -------------------------

// Parameter Function (or) Argument Function

// (i)single
// (ii)multi

// function name($arg1){
//     code to be excuted;
// }

// -------------------------

// Default Parameter Function (or) Deafault Argument Function

// function($arg1,$arg2){
//     code to be excuted;
// }

// -------------------------

// User Defined Function

function myfun(){
    echo "i am working";
}

myfun();

function myfun1(){
    $num1 = 10;
    $num2 = 20;
    $cal = $num1 + $num2;
    echo $num1;
}

// -------------------------

// Parameter Function (or) Argument Function

// (i)single

function singlefun($name){
    echo "My name is $name";
}
singlefun("aung aung");
singlefun("su su");

// -------------------------

// Parameter Function (or) Argument Function

// (ii)multi

function multifun($name,$age){
    echo "My name is $name and i am $age years old";
}
multifun('kyaw kyaw',20);

// -------------------------

// Default Parameter Function (or) Deafault Argument Function

function defalultfun($name = "hla hla"){
    echo "My name is ${name}";
}
defalultfun();
defalultfun("su su");

function defalultfun1($num1 = 10,$num2 = 20, $num3 =30){
   $cal = $num1+$num2+$num3;
    echo "$cal";
}
defalultfun1(); //60
defalultfun1(20,30); //80
defalultfun1(40,10,20); //70


// Return 

function myfunction($num1){
    $cal = $num1+10;
    return $cal;
}
echo myfunction(50);


function returnfun1($num1){
    return $cal = $num1+10;
}

echo returnfun1(100); //110

function returnfun2($num1,$num2,$num3){
    $cal = $num1+$num2+$num3;
    return $cal;
}
echo returnfun2(10,20,30); // 60


function returnfun3($num1=10,$num2=20,$num3=30){
    $cal = $num1+$num2+$num3;
    return $cal;
}
echo returnfun3(50); //100
echo returnfun3(); //60

// => Dynamic Function Call

$dyn1 = returnfun1(100);
    echo $dyn1;

$dyn2 = returnfun3();
    echo $dyn2;

$dyn3 = "returnfun1"; // dynamic function call
    echo $dyn3; // returnfun1
    echo $dyn3(100); // 110

$myfun = "returnfun3";
echo $myfun;

if(function_exists($myfun)){
    echo "Yes, your variable is already in some kind of function.";
}else{
    echo "No";
}

?>