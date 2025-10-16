<?php

function sum(int |float  ...$numbers){
    return array_sum($numbers);

};
$var='sum';
if(is_callable($var)){
    echo $var(111,2,3,4,5,6, 3.3);
}
else
    echo "not callable";


$afun=function( int| float $num){
    return $num;
};

echo "<br>".$afun(50);


echo "<br> <br>";

function invalidReturn(int $num): string {
     return "not an  qk".$num;
}
echo "<br> <br>";

// array map
echo "array map";
$arr=[121,32,43,546,657,767,8889,898,76,53,20,43,4567,534];

$arr2=array_map(fn($number)=>$number*2,$arr);


echo "<pre>";
print_r($arr2);
echo "</pre>";

?>