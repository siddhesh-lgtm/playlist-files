<?php 
echo time();
echo " <br> <br><br>";

$currentTime = time()*5*24*60*60 ;
echo date("D d/M/Y, G:iA     , $currentTime");
echo " <br> <br><br>";

echo date_default_timezone_get();
echo " <br> <br><br>";

date_default_timezone_set('ASIA/KOLKATA');
echo " <br> <br><br>";

echo date("l jS/M/Y, G:iA");
echo " <br> <br><br>";

echo date("H:i:s A");
echo " <br> <br><br>";







?>