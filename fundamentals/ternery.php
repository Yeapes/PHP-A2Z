<?php

//Thinking you're going university but your time & situation not suiting for what will be decide you

// Then make a simple estimate for what will be great for you , is it good valueable for going university or not 


//You have three option

// Number 1 is 

$go_multiplan = 10;
$adda_with_friend = 11;
$going_university = 11;

//Now calculate whate will be best for you 

// We can check it simply using ternery opeartor

// Nested Ternery deprected from php 7.4
$result = ($go_multiplan > $adda_with_friend && $go_multiplan > $going_university) ? "Oh! Please go multiplan": (($adda_with_friend > $going_university && $adda_with_friend > $go_multiplan)) ? "Oh! Go for Adda!!!!": "Sorry! Go University";

echo $result;