 <?php

// for ($i = 1; $i <=10; $i = $i+1){
//     echo $i."\n";
//     PHP_EOL;
// }


// //while loop

// $i = 1;

// //Print odd number from 0 to 1
// while($i <=10){
//     echo $i.PHP_EOL;
//     $i = $i + 2;
// }
// PHP_EOL;

// //do while 
// $i = 0;
// do{
//     $i++;
//     echo $i.PHP_EOL;
// }while($i < 5);




// //Multiple steping in for loop

// //print 1 - 10 & 10  - 1 

// for($i = 10, $j = 1; $i > 0; $i--, $j++){
//     echo $i.": $j"."\n";
// }


// //Print Factorial using for loop

// // example: 5 * 4 * 3 * 2 * 1

// $n = 3;
// $result = 1;
// for ($i = $n; $i > 1; $i--){
//     $result = $result * $i;
// }

// printf("Factorial of %d is %d", $n, $result);



//While loop using increment operator

$j = 0;

//1,2,3,4,5
while($j++ < 5){
    echo $j;
    echo PHP_EOL;
}


$l = 0;
echo "\n";

//1,2,3,4
while(++$l < 5){
    echo $l;
    echo PHP_EOL;
}