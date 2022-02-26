<?php

$a = 4;

$b = $a++;

echo "$a \n {$b} \n"; // print 5, 4

/**
 *  $b = $a++ // a = 5
 *  $b = $a // a = 4
 *  $a = $a + 1
 *  
 */


 $c = 3;

 $d = ++$c;

 echo "{$d} \n {$c}"; // print 4, 4


 /**
  *  $d = ++$c
  *  $c = $c + 1
  *  $d = $c;
  */
 