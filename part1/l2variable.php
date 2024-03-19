<?php

$fullname = "aung aung";
$job = "developer";

echo $fullname; // aung aung
echo $job;

echo "$fullname"; // aung aung
echo '$job';  // single code doesn't know variable

echo "My name is $fullname"; // My name is aung aung
echo 'My name is $fullname'; // My name is $fullname
echo "My name is ${fullname}"; // My name is aung aung
echo "My name is {$fullname}"; // My name is aung aung

echo `Myname is ${fullname}`; // error
echo `Myname is {$fullname}`; // error

echo "He\'s my father, he is a $job"; // He's my father, he is a developer
echo "He's my father, he is a \$job"; // He's my father, he is a $job
echo "He\'s my father, he is a $job"; // He's my father, he is a developer
echo "He's my father, he is a \${job}"; // He's my father, he is a ${job}
echo "He's my father, he is a \{$job}"; // He's my father, he is a \{developer}
echo "He's my father, he is a {\$job}"; // He's my father, he is a {$job}

$gender = echo "female"; // error
$nation = print "burma"; //burma


$firstname = "Aung";
$lastname = "Kyaw Kyaw";

echo $firstname = "Aung";
echo $lastname = "Kyaw Kyaw";

echo $firstname.' '.$lastname;

// Comments

// single line comment
# single line comment
//

// multiline comment
/* */

?>