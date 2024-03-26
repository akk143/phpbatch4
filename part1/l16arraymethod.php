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



// => array_chunk(array,length) Function
// => array_chunk(array,length,preservekey)

$couples = ['aung aung','su su','kyaw kyaw','nu nu','zaw zaw','hla hla','tun tun','yin yin'];
$result1 = array_chunk($couples,2);
echo "<pre>".print_r($result1,true)."</pre>";  //  [0] => Array ( [0] => aung aung [1] => su su ) etc......

$result2 = array_chunk($couples,2,true);
echo "<pre>".print_r($result2,true)."</pre>";  // 0 1 2 3 4 5

$result2 = array_chunk($couples,2,false);
echo "<pre>".print_r($result2,false)."</pre>";  // 01 01 01



// => array_diff(arr1,arr2,...) Function
// Note: We don't need to consider keyname or index

$colors1 = ['red','green','blue','pink'];
$colors2 = ['red','blue','pink','silver'];
$colors3 = ['green','blue','orange','violet'];

echo "<pre>".print_r(array_diff($colors1,$colors2),true)."</pre>";  // ( [1] => green )
echo "<pre>".print_r(array_diff($colors2,$colors1),true)."</pre>";  // ( [3] => silver )
echo "<pre>".print_r(array_diff($colors1,$colors2,$colors1),true)."</pre>";


$col1 = ['a'=>'red','b'=>'green','c'=>'blue','d'=>'yellow'];
$col2 = ['e'=>'red','f'=>'green','g'=>'black'];
echo "<pre>".print_r(array_diff($col1,$col2),true)."</pre>";  // ( [c] => blue [d] => yellow )
echo "<pre>".print_r(array_diff($col2,$col1),true)."</pre>";  // ( [g] => black )



// => array_diff_assoc(arr1,arr2,...) Function
// Note: We need to consider keyname and value (just for assoc array)

$col1 = ['a'=>'red','b'=>'yellow','c'=>'blue','d'=>'green'];
$col2 = ['a'=>'red','b'=>'green','c'=>'blue'];
echo "<pre>".print_r(array_diff_assoc($col1,$col2),true)."</pre>";  // ( [b] => yellow [d] => green )
echo "<pre>".print_r(array_diff_assoc($col2,$col1),true)."</pre>";  // ( [b] => green )

// => array_diff_assoc(arr1,arr2,...) Function
// Note: We need to consider any keyname


$col1 = ['a'=>'red','b'=>'yellow','c'=>'blues','d'=>'green','f'=>'pink'];
$col2 = ['a'=>'red','b'=>'green','c'=>'blue','e'=>'orange'];
echo "<pre>".print_r(array_diff_key($col1,$col2),true)."</pre>";  // ( [d] => green [f] => pink)
echo "<pre>".print_r(array_diff_key($col2,$col1),true)."</pre>";  // ( [e] => orange )




// => array_intersect(arr1,arr2,...) Function
// Note: We don't need to consider keyname

$num1 = [10,20,30,60,70,80];
$num2 = array(10,20,30,50,40,90,80);
echo "<pre>".print_r(array_intersect($num1,$num2),true)."</pre>"; // ( [0] => 10 [1] => 20 [2] => 30 [5] => 80 )
echo "<pre>".print_r(array_intersect($num2,$num1),true)."</pre>"; // ( [0] => 10 [1] => 20 [2] => 30 [5] => 80 )


$col1 = ['a'=>'red','b'=>'green','c'=>'blue','d'=>'yellow'];
$col2 = ['a'=>'red','f'=>'green','d'=>'orange'];
echo "<pre>".print_r(array_intersect($col1,$col2),true)."</pre>";  // ( [a] => red [b] => green )
echo "<pre>".print_r(array_intersect($col2,$col1),true)."</pre>";  // ( [a] => red [f] => green )


// => array_fill(start index,count,value) Function

echo "<pre>".print_r(array_fill(0,5,'green'),true)."</pre>"; // ( [0] => green [1] => green [2] => green [3] => green [4] => green)
echo "<pre>".print_r(array_fill(2,5,'blue'),true)."</pre>";  // ( [2] => blue [3] => blue  [4] => blue [5] => blue [6] => blue )


// => array_fill_keys(keys,value) Function

$keys = array('a','b','c','d');
$values = ['red','green','pink','yellow'];
echo "<pre>".print_r(array_fill_keys($keys,'violet'),true)."</pre>"; // ( [a] => violet [b] => violet [c] => violet [d] => violet )
echo "<pre>".print_r(array_fill_keys($keys,$values),true)."</pre>";  // ( [a] => Array ([0] => red[1] => green[2] => pink [3] => yellow )etc....)



// => array_key_exist(key,array) Function  (just for assoc array)
$operators = ['mpt'=>'ftth'];

if(array_key_exists('mpt',$operators)){
    echo 'Key exists';
}else{
    echo 'Key doesn\'t exist';
}


// => array_merge(array1,array2,array3,...) Function

$arr1 = ['red','green'];
$arr2 = array('blue','yellow');
$arr3 = ['pink','violet'];

echo "<pre>".print_r(array_merge($arr1,$arr2),true)."</pre>"; // ( [0] => red  [1] => green [2] => blue [3] => yellow )
echo "<pre>".print_r(array_merge($arr1,$arr2,$arr3),true)."</pre>"; // ( [0] => red  [1] => green [2] => blue [3] => yellow [4] => pink [5] => violet )



?>