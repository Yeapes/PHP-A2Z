<?php

echo "Hello World!\n";

//printf — Output a formatted string


$a = 233434;

$b = 66; // Print ASCII value B

$c = 30.7; //Print float number

$d = 90;

$s = "Yeapes";

printf("%%b = %b\n",$a); //Binary Representation
printf("%%f = %f\n",$c); //Float Representation
printf("%%d = %d\n",$d); //Int Representation
printf("%%s = %s\n",$s); //String Representation
printf("%%c = %c\n",$b); //Print ASCII Value B for 66



//String Printf

$firstName = 'Mohammad';

$lastName = "Yeapes";

printf("[%s %s]\n", $firstName,$lastName); //Normal string representation
printf("[%10s %s]\n", $firstName,$lastName); // Right justification string representation 
printf("[%-10s %s]\n", $firstName,$lastName); // Left justification string representation 