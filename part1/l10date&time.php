<?php

date_default_timezone_set("Asia/Yangon");

// => Date & Time (1 Jan 1970 UTC)

$getdate = getdate();
// echo $getdate; // error
var_dump($getdate);
echo "<pre>".print_r($getdate)."</pre>";

echo "This is second =".$getdate["seconds"];
echo "This is minute =".$getdate["minutes"];
echo "This is hour =".$getdate["hour"];

echo "This is weekday =".$getdate["weekday"]; // tuesday
echo "This is wday =".$getdate["wday"]; // 2 
echo "This is yday =".$getdate["yday"]; // 64 date of the year

echo "This is month =".$getdate["month"]; // march
echo "This is mon =".$getdate["mon"]; //3 month of the day
echo "This is mday =".$getdate["mday"]; // 5

echo "This is year =".$getdate["year"]; // 2024

echo "This is  0 =".$getdate["0"]; // 1709654851

$time = time();
echo "This is 0 =".$time;

// => Date/Time Format
// $date = date(format,timestampe);

$date = date("a",$time);
echo "This is format a=".$date; // am pm

$date = date("A",$time);
echo "This is format A=".$date; // AM PM

$date = date("d",$time);
echo "This is format d=".$date; // 05 day leading 0

$date = date("D",$time);
echo "This is format D=".$date; // Mon Tue


$date = date("F",$time);
echo "This is format F=".$date; // March


$date = date("g",$time);
echo "This is format g=".$date; // 10 hours no leading 0 12hr

$date = date("G",$time);
echo "This is format G=".$date; // 22 hours no leading 0 24hr


$date = date("h",$time);
echo "This is format h=".$date; // 10 hours leading 0 12hr

$date = date("H",$time);
echo "This is format H=".$date; // 22 hours leading 0 24hr


$date = date("i",$time);
echo "This is format i=".$date; // 01 minute

$date = date("j",$time);
echo "This is format j=".$date; // 5 day of month no leading 0


$date = date("l",$time);
echo "This is format l=".$date; // Tuesday

$date = date("L",$time);
echo "This is format L=".$date; // 1   // leap year (1 = true , 0 = false)

$date = date("m",$time);
echo "This is format m=".$date; // 03 month leading 0

$date = date("M",$time);
echo "This is format m=".$date; // Mar (Jan,Feb)


$date = date("n",$time);
echo "This is format n=".$date; // 3 month no leading 0

$date = date("N",$time);
echo "This is format N=".$date; //


$date = date("r",$time);
echo "This is format r=".$date; // Tue, 05 Mar 2024 23:10:45 +0630

$date = date("s",$time);
echo "This is format s=".$date; //59 seconds

$date = date("U",$time);
echo "This is format U=".$date; // 1709657018


$date = date("y",$time);
echo "This is format y=".$date; // 24 year shortcode

$date = date("Y",$time);
echo "This is format Y=".$date; // 2024 year


$date = date("z",$time);
echo "This is format z=".$date; // 64 day of year


?>

<!-- https://www.php.net/manual/en/timezones.asia.php -->