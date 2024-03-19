<?php

// Variables Scope
    // (i) Global Variable Scope
    // (ii) Local Variable Scope
    // (iii) Static Variable Scope

    $num1 = 100; // Global Variable Scope

    function funone(){
        echo "Global Variable Scope in function = $num1"; 
    }

    funone(); // Global Variable Scope in function = no printout for $num1 , function will generate error

    echo "Global Variable Scope outside = $num1"; //100

    function funtwo(){
        $num2 = 200;
        echo "Local Variable Scope in function = $num2";
    }
    funtwo(); // Local Variable Scope in function = 200

    echo "Local Variable Scope outside = $num2";  // Local Variable print in function = no printout for $num2, function will generate error

    // => global Keyword

    $num3 = 300;
    $num4 = 400;

    function funthree(){

        // global $num3;
        // global $num4;

        global $num3,$num4;
        global $result;

        $result = $num3 + $num4;
        echo"This is result, print by funthree = $result";
    }

    funthree(); // This is result, print by funthree = 700

    echo "Local Variable Scope outside = $result"; // Local Variable print outside = 700

    // => Super Global Scope

    $num5 = 500;
    $num6 = 600;

    function funfour(){

        $GLOBALS["sum"] = $GLOBALS['num5'] + $GLOBALS['num6'];
        // echo "This is sum , print by funfour = $sun"; // undefied variable sum
    }
    funfour();

    echo "Local Variable Scope outside = $sum"; // Local Variable Scope outside = 1100

    $num7 = 700;

    function five(){
        global $num7;

        $num7++;
        echo $num7;
    }
    function five();
    function five();
    function five();
    function five();

    function funsix(){
        $num8 = 800;

        $num8++;
        echo $num8;
    }
    funsix(); // 801
    funsix(); // 801
    funsix(); // 801
    funsix(); // 801

    function seven(){
        static $num9;

        $num9++;
        echo $num9;
    }
    funseven(); // 901
    funseven(); // 902
    funseven(); // 903
    funseven(); // 904


    // => passing by refrence

    $num10 = 100;

    function funeight($num10){
        $num10 = 10000;
        echo $num10;
    }
    echo $num10; // 100
    funeight($num10); // 10000
    echo $num10; // 100


    $num11 = 110;

    function funnine(&$num11){
        $num11 = 11000;
        echo $num11;
    }
    echo $num11; // 110
    funnine($num11); // 11000
    echo $num11; // 11000
    echo $num11; // 11000


    $name = 'aung aung';
    $fullname = 'aung aung oo';

    function funten(&$val){
        $val = 'su su';
        echo $val;
    }

    echo $name; // aung aung
    funten($name); // su su
    echo $name; // su su
    echo $name; // su su
    echo $fullname; // aung aung oo





?>