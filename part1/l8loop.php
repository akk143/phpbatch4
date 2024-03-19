<?php

// => PHP Looping

// for 
// forEach
// while
// dowhile

$colorones = ["red","green","blue","white","balck","gray","pink"]; // index array
echo count($colorones);
var_dump($colorones);

$coloroneskey = array_keys($colorones);
var_dump($coloroneskey);

for($i=0; $i < count($colorones); $i++){

    // echo $i; //0-6

    // echo "this is indexed array or manual array by for loop = index key is ". $i ."and value is =". $colorones[$i];
    
    echo "this is indexed array or manual array by forloop = index key is ". $colorones[$i] ." and value is = ". $colorones[$i];

}

foreach($colorones as $colorone){
    echo " This is indexed array or manual array foreach = ". $colorone;
}

foreach($colorones as $key=>$colorone){
    echo " This is indexed array or manual array by foreach = index is key".$key . "and value is ". $colorone;
}

$x = 0;
while($x < count($colorones)){
    // echo $colorones;
    // $x++;

    echo " This is indexed array or manual array by while = index key ".$coloroneskey[$x]. "and value is ".$colorones[$x];
    $x++;
}

$y = 0;

do{
    echo " This is indexed array or manual array by dowhile = index key ".$coloroneskey[$y]. "and value is ".$colorones[$y];
    $y++;
}while($y < count($colorones));


?>