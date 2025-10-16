<?php 
$temp=0;
switch($temp){
    case 1: echo " one";
    break;

    case 2:
    case 3: echo " two and three";
    break;

    case 0;
    echo " zero";
    break;

    default:
    echo "default";
}

echo "<hr>";


$print = match($temp){
    1=>'one',
    2=>'two',
    3=>'zero',
    default=> 'default'
};

echo $print;







?>