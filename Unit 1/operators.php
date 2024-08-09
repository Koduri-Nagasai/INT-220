<?php
//1. Create a PHP Script that calculates and displays the result of a more complex arithmetic expression: (a+b)*c/d-e. Use Variables for the values of a,b,c,d and e.

// $a = 15; 
// $b = 30; 
// $c = 45; 
// $d = 60; 
// $e = 20; 

// $result = ($a + $b) * $c / $d - $e;
// echo "The result of the expression (a + b) * c / d - e is: " . $result;



//2. Create a PHP Script that demonstrates the use of compound assignment operators (+=, -=, *=, %=). Start with a number and apply each operator, displaying the result after each operation.
// $a = 10;
// $a += 20;
// echo "$a" ,"<br>" ; //Output : 30

// $b=10;
// $b -= 20;
// echo "$b" , "<br>"; //Output : -10

// $c = 10;
// $c *= 2;
// echo "$c","<br>"; //Output : 20

// $d = 10;
// $d %=2;
// echo "$d","<br>"; //Output : 0



//3. Create a PHP Script that demonstrates the use of increment and decrement operators. Start with a number, increment it, then decrement it, displaying the result after each operation.
// $a = 30;
// $a++;
// echo "The post-increment value is: ","$a", "<br>";
// ++$a;
// echo "The pre-increment value is: ","$a", "<br>";
// // -$x pre-dec  
// // $x- post-dec



//Comparision Operators
// $x = 25;
// $y = 35;
// $z ="25";
// var_dump($x == $z); //Output: boolean true
// var_dump($x === $z); //Output: boolean false
// var_dump($x!=$y); //Output: boolean true
// var_dump($x!==$y); //Output: boolean true
// var_dump($x<$y); //Output: boolean true
// var_dump($x>$y); //Output: boolean false
// var_dump($x <= $y); //Output: boolean true
// var_dump($x>=$y); //Output: boolean false


//Logical Operators
// $year = 2024;
// if(($year % 400 == 0) || (($year % 100 != 0) && ($year %4 == 0))){
//     echo "$year is a leap year";
// } else{
//     echo "$year is not a leap year";
// }


//Conditonal Assignment Operator 

//Eg: PHP Script to check whether the number is odd or even using ternary operator.
// $a=1;
// echo "Number: ", $a, "<br>";
// echo $a = ($a % 2 == 0) ? "Even" : "Odd";


//1. PHP Script that checks if a person is eligible to vote based on their age using ternary operator. Assume voting age is 18 or older
$b=18;
echo $b = ($b>=18) ? "You are Eligible to Vote" : "You are Not Eligible to Vote";
echo "<br>";
echo "<br>";


//2. Create a PHP Script that assigns a grade based on a student's score using the teranary operator. use the following criteria:
// 90 and above: "A"
// 80 to 89: "B"
// 70 to 79: "C"
// 60 to 69: "D"
// Below 60: "F" 

$marks = 85;
$grade = $marks >= 90 ? 'A' :($marks >= 80 ? 'B' :($marks >= 70 ? 'C' :($marks >= 60 ? 'D' : 'F')));
echo "Your Grade is: $grade";
echo "<br>";
echo "<br>";

//3. PHP Script that determines maximum of three numbers using nested ternary operators. Display the largest number.
$num1 = 10;
$num2 = 20;
$num3 = 15;
$maximum = ($num1 >= $num2) ? (($num1 >= $num3) ? $num1 : $num3) : (($num2 >= $num3) ? $num2 : $num3);

echo "The largest number among three is: " . $maximum;
echo "<br>";
echo "<br>";

//4. PHP Script that checks if a number is positive, negative, or zero using ternary operator. Display result
$number = 10;
$result = ($number > 0) ? "The number $number is +ve." :($number < 0 ? "The number $number is -ve." : "The number $number is zero.");
echo $result;
echo "<br>";
echo "<br>";

//5. PHP Script that checks if a username is valid using ternary operator. A valid username must be atleast 5 characters long. Display an appropriate message.
$uname = "sai";
$message = (strlen($uname) >= 5) ? "The username '$uname' is valid." : "The username '$uname' is too short. It must be at least 5 characters long.";
echo $message;
echo "<br>";
echo "<br>";

//6. PHP Script that checks if a given number is a leap year using the ternary operator. Display appropriate message.
$year = 2025;
echo $year = (($year % 400 == 0) || (($year % 100 != 0) && ($year %4 == 0))) ? "$year is Leap year" : "$year is Not a Leap year";
echo "<br>";
echo "<br>";

//7. PHP Script that checks if one number is divisible by another using ternary operator. Display whether the number is divisible or not.
$num = 12;
$den = 4;

$result = ($den != 0 && $num % $den == 0) ? "The number $num is divisible by $den." : "The number $num is not divisible by $den.";
echo $result;

?> 
