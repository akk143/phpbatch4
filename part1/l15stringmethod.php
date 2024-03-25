<?php

// => strlen(string) Function 

$words = "Save Myanmar";
echo strlen($words);  // 12



// => str_word_count(string) Function
// => str_word_count(string,return) Function

$text = "Save Myanmar Country";
echo str_word_count($text);  // 3

echo str_word_count($text,0);  // 3
echo "<pre>".print_r(str_word_count($text,1,true))."</pre>";  // ([0] => Save[1] => Myanmar [2] => Country [3])
echo "<pre>".print_r(str_word_count($text,2,true))."</pre>";  // ([0] => Save[5] => Myanmar [13] => Country [13])



// => ucwords(string) Function
// => ucwords(string,delimiter) Function

$country = "welcome to myanmar country,i live in yangon";
echo ucwords($country);  // Welcome To Myanmar Country,i Live In Yangon
echo ucwords($country,",");  // Welcome To Myanmar Country,I live in yangon


 
// => ucfirst(string) Function

$message = "welcome to yangon,i live in tamwe";
echo ucfirst($message);



// => lcfirst(string) Function

$msg = "Welcome To Yangon";
echo lcfirst($msg);  // welcome To Yangon     


// => strtoupper(string) Function

$string = "welcome to my country";
echo strtoupper($string);


// => strtolower(string) Function

$str = "WElcome To my Country";
echo strtolower($str);


// => chunk_split(string,length,delimiter) Function

$letters = "Myanmar Country";
echo chunk_split($letters,1,".");  // M.y.a.n.m.a.r. .C.o.u.n.t.r.y.
echo chunk_split($letters,3,"-");  // Mya-nma-r C-oun-try-


// => substr(string,start index/offset , end length) Function

$country = "Welcome Myanmar";
echo substr($country,0);    // Welcome Myanmar
echo substr($country,0,7);  // Welcome
echo substr($country,0,9);  // Welcome M


// => strpos(string,find) Function
// => strrpos(string,find) Function
// => stripos(string,find) Function
// => strripos(string,find) Function

$caption = "Lorem Ipsum is simply dummy text of the printinf and typesetting industry Ipsum.";
echo strpos($caption,"Ipsum");      // 6   (index number)
echo strrpos($caption,"Ipsum");     // 74  (index number)
echo stripos($caption,"printing");  // 40  (index number) (case sensitive မဖြစ် ေအာင် i)
echo strripos($caption,"Ipsum");    // 74  (index number)


// => str_replace(search,replace,string) Function (**case sensitive)

$topic = "Save Myanmar";
echo str_replace("Myanmar","CRPH",$topic);  // Save CRPH 


// => substr_replace(string,replace,start index) Function
// => substr_replace(string,replace,start index, end length) Function

$greeting = "Welcome Myanmar";
echo substr_replace($greeting,"Hello",0);     // Hello 
echo substr_replace($greeting,"Thailand",8);  // Welcome Thailand

echo substr_replace($greeting,"Hello",0,0); // HelloWelcome Myanmar
echo substr_replace($greeting,"Hello",0,3);   // Hellocome Myanmar
echo substr_replace($greeting,"Hello",0,7);   // Hello Myanmar


// => trim() Function (space delete)
// => trim(string,characters) Function

$title = " Welcome to My Country ";  
echo trim($title);  // Welcome to My Country


$subtitle = "Welcome to My Country";  
echo trim($subtitle,"Wel");  // come to My Country
echo trim($subtitle,"try");  // come to My CountryWelcome to My Coun

// => ltrim() Function (space delete)
// => ltrim(string,characters) Function

$say = '/hi/';
echo ltrim($say,"/");  // /hi

// => rtrim() Function (space delete)
// => rtrim(string,characters) Function

$say = '/hi/';
echo rtrim($say,"/");  // hi/




// => str_repeat() Function (space delete)
// => str_repeat(string,count) Function

echo str_repeat('အကျယ်ကြီး',3); // အကျယ်ကြီးအကျယ်ကြီးအကျယ်ကြီး



// => strcmp(string1,string2) Function    (case-sensitive)

//  0  = if string1 and string2 are equal
// <0  = if string1 is less than string2 
// >0  = if string1 is greater string2 

echo strcmp("i love my job","i love my job"); // 0
echo strcmp("i love my job","i love");  // 7
echo strcmp("i love","i love my job");  // -7


// => explode(seperator,string,limit) Function

$words =  "Welcome to my Country";
echo "<pre>" .print_r(explode(" ",$words,true)). "</pre>";  //  [0] => Welcome to my Country
echo "<pre>" .print_r(explode(" ",$words,1)). "</pre>";     //  [0] => Welcome to my Country
echo "<pre>" .print_r(explode(" ",$words,2)). "</pre>";     // [0] => Welcome[1] => to my Country
echo "<pre>" .print_r(explode(" ",$words,3)). "</pre>";     //  [0] => Welcome [1] => to [2] => my Country


// => implode(seperator,array) Function  

$words =  ["Welcome","to","my","City"];
echo implode(" ",$words);  // Welcome to my City
echo implode("-",$words);  // Welcome-to-my-City


// => join(seperator,array) Function  

$words =  ["Welcome","to","my","Village"];
echo join(" ",$words);  // Welcome to my Village
echo join("-",$words);  // Welcome-to-my-Village


// => number_format(number) Function
// => number_format(number,decimal) Function

echo number_format(100000); //100,000
echo number_format(100000,2); //100,000.00


// => stripslashes(string) Function

$str = 'she\'s my mother';
echo($str); // she's my mother

$str = "he\'s my father";
echo($str);               // he\'s my father
echo stripslashes($str);  // he's my father


// => basename(path)  (အသုံးများ)
// => basename(path,suffix)

$path = "./assests/img/cover.jpg";
echo ($path);                 // ./assests/img/cover.jpg
echo basename($path);         // cover.jpg
echo basename($path,".jpg");  // cover


// => pathinfo(path)  (အသုံးများ)
// => pathinfo(path,falgs)

PATHINFO_DIRNAME
PATHINFO_BASENAME
PATHINFO_EXTENSION
PATHINFO_FILENAME



$filepaths = "./assests/img/cover.jpg";
echo "<pre>".print_r(pathinfo($filepaths),true)."</pre>";  //  [dirname] => ./assests/img [basename] => cover.jpg [extension] => jpg [filename] => cover
echo pathinfo($filepaths)["filename"]; // cover
echo pathinfo($filepaths)["extension"]; // jpg


echo pathinfo($filepaths,PATHINFO_DIRNAME);  // ./assests/img
echo pathinfo($filepaths,PATHINFO_FILENAME);  // cover



?>