<?php 

date_default_timezone_set("Asia/Dhaka");

// echo date_default_timezone_get();


$date_time = date("dS F, h:i:s a",time() * 24 * 60 * 60);

echo $date_time;