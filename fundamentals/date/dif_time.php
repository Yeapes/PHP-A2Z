
<?php

$dt_one = mktime(0,0,0,11,1,2020);

$dt_two = mktime(0,0,0,10,30,2020);

$dif_time = ($dt_one - $dt_two)/(24*60*60);

echo $dif_time;