<?php
//echo "Hello World";

$integerVar = 10;
$floatVar = 3.14;
$stringVar = "Hello, PHP!";
$booleanVar = true;
$arrayVar = [1, 2, 3];
$nullVar = null;

echo "Data value of integerVar: ",  $integerVar ,"<br>";
echo "Daata type of integerVar: ", var_dump($integerVar), "<br>", "<br>";
echo "Data value of floattVar: ", $floatVar , "<br>";
echo "Data type of floatVar: ", var_dump($floatVar), "<br>", "<br>";
echo "Data value of StringVar: ", $stringVar, "<br>";
echo "Data type of StringVar: ", var_dump($stringVar), "<br>", "<br>";
echo "Data type of booleanVar: ", var_dump($booleanVar), "<br>", "<br>";
echo "Data type of arrayVar: ", var_dump($arrayVar), "<br>", "<br>";
echo "Data type of nullVar: ", var_dump($nullVar);

?>