<?php

// => Arrays
// (i) Indexed Array (Manual Array)
// (ii) Associative Array
// (iii) Multidimensional Array

$names = array("aung aung","kyaw kyaw","zaw zaw","tun tun","maung maung");
// echo $names; //error
// print $names; //error

echo count($names); //5
var_dump($names);
print_r($names,false); //true doesn't have an output

$colors = ["red","green","blue","black","orange","green"];

echo count($colors);
print_r($colors,false);
echo "<pre>".print_r($colors,true)."</pre>";

$colors[6] = "gray";
$colors[7] = "borwn";
$colors[8] = "stone";
$colors[0] = "pink";

echo "<pre>".print_r($colors,true)."</pre>";
echo count($colors); //9

echo "My fav color is ".$colors[8];

// -------------------------------------------------------------------------------------------------------------

// (ii) Associative Array(key=>value)


$news = array("pone" =>"this is post one","ptwo"=>"this is post two","pthree"=>"this is post three");
echo count($news);
var_dump($news);

$media = [
          "pone" =>"this is post one",
          "ptwo"=>"this is post two",
          "pthree"=>"this is post three"
];
echo count($media);
var_dump($media);


echo "I like this post.post title is ".$media["pthree"]; // I like this post.post title is this is post three

// -------------------------------------------------------------------------------------------------------------

// (iii) Multidimensional Array

$paints = array(
    ["red","green","blue"],
    array("pen","hat","ruler"),
    ["name"=>"nu nu","age"=>23],

);

echo count($paints); //3
var_dump($paints);

echo $paints[0][2]; //blue
echo $paints[1][2]; //ruler
echo $paints[2]["pone"]; 

$vippersons = [
    ["name"=>"aung aung","age"=>20],
    ["name"=>"su su","age"=>18],
    ["name"=>"nu nu","age"=>23]
];

echo count($vippersons);
var_dump($vippersons);

echo $vippersons[0]["name"]; //aung aung
echo $vippersons[0]["age"]; // 18

echo $vippersons[1]["name"]; //su su
echo $vippersons[2]["age"]; //23



?>