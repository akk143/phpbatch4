<?php

// => if statement

$x = 10;
$y= 20;

if($x > $y){
    echo "your condition is yes";
}


if($x < $y){
    echo "your condition is yes";
}

if($x > $y){
    echo "Yes,x is greater than y";
}else{
    echo "No,x is less than y";
}

// => Short Hand

if($x < $y) echo "Yes,x is less than y"; else "No,x is greater than y";


$color = 'grey';
$colorvalue = $color;

echo $color;
echo $colorvalue ;

if($colorvalue === "red"){
    echo "I like red color";
}else{
    echo "I hate red color";
}

if($colorvalue === "red"){
    echo "I like $color";
}else{
    echo "I hate red color";
}


$a = 100;
$b = 200;
$c = 300;

if($a < $b && $b < $c){
    echo"It is true";
}else{
    echo "It is false";
}


if($a < $b || $b > $c){
    echo"It is true";
}else{
    echo "It is false";
}

if($a < $b || $b > $c && $a > $c){
    echo"It is true";
}else{
    echo "It is false";
}


if(($a < $b || $b > $c) && $a > $c){
    echo"It is true";
}else{
    echo "It is false";
}


if(!($a < $b )){
    echo"It is true";
}else{
    echo "It is false";
}


// => if() elseif() else()

if($b > $c){
    echo"It is true";
}elseif($b === 200){
    echo "It is equal";
}else{
    echo"It is false";
}


if($b > $c) echo"It is true"; elseif($b === 200) echo "It is equal"; else echo"It is false";


// Python Style

if($b > $c)
    echo"It is true";
elseif($b === 200)
    echo "It is equal";
else
    echo"It is false";


// switch(conditon){
//     case stm1;
//         code to be excute;
    //     break;
//     case stm2;
//         code to be excute;
    //     break;
//     default;
//         code to be excute;
    //     break;
// }


$phone = "iphone";

switch($phone){
    case "sony";
        echo "i can't buy sony phone";
        break;
    case "iphone";
        echo "i hate apple products";
        break;
    case "mi";
        echo "ok,i can buy mi phone";
        break;
    case "samsung";
        echo "my fav product is samsung phone";
        break;
    default;
        echo "i love keypad";
        break;
}




?>