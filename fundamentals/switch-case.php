<?php

//Find Even or odd number using switch case

$n = 100;

$r = $n % 2;

switch ($r) {
    case 0:
        echo "{$n} is even number \n";
        break;
    
    default:
        echo "{$n} is odd number \n";
        break;
}



// multiple case
$payment_method = "nagad";

switch ($payment_method) {
    case 'bkash':
        echo "{$payment_method} activated for this order!";
        break;

    case 'sslcommerz':
        echo "{$payment_method} activated for this order!";
        break;

    case 'nagad':
        echo "{$payment_method} activated for this order!";
        break;
    
    default:
        echo "COD activated for this order!";
        break;
}