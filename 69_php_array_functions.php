<?php 
// #69 10 Important php array functions

$users=["sid","tony","nolan","elon","carl","sid","elon"];
$user1=["name"=>"sid", "email"=>"sid@sfsdf", "age"=>23];
$user2=[[
    "name"=>"cap",
    "age"=>150,  
],
[
    "name"=>"thor",
    "age"=>1500,
]];

echo is_array($users)." this is is_array<br>";

if(is_array($users)){
    echo "this is an array, 2nd way ";
}

echo  "<br> array count ".count($users)."<br><br><br>";

print_r($users);
unset($users[1]); 
echo "<br>array after unset : ";
print_r($users);
echo "<br>"; 

array_push($users,"batman");
echo "<br> array after push   : ";
print_r($users);


array_pop($users);
echo "<br> array after pop  : ";
print_r($users);

echo "<br><br>";
print_r(array_keys($user1));

echo "<br><br><br> <pre>";
echo implode('/',$users)."<pre>";

$str= "<br>what,when,where,whose,who,whatever<br>";
$delimitter=",";
echo "$str";

print_r(explode($delimitter, $str, $limit=3));



$language_array = ["PHP", "JavaScript", "Python", "SQL"];
// 2. Join the array elements using " - " as the separator
$final_string = implode(' - ', $language_array);
// Output: PHP - JavaScript - Python - SQL
echo $final_string. "<br><br><br>";



//array_merge
echo "array merge here ";
print_r(array_merge($users,$user1,$user2));


$unique=array_unique($users);
print_r($unique);







?>