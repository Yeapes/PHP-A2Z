 <?php

for ($i = 1; $i <=10; $i = $i+1){
    echo $i."\n";
    PHP_EOL;
}


//while loop

$i = 1;

//Print odd number from 0 to 1
while($i <=10){
    echo $i.PHP_EOL;
    $i = $i + 2;
}
PHP_EOL;

//do while 
$i = 0;
do{
    $i++;
    echo $i.PHP_EOL;
}while($i < 5);




//Multiple steping in for loop

//print 1 - 10 & 10  - 1 

for($i = 10, $j = 1; $i > 0; $i--, $j++){
    echo $i.": $j"."\n";
}