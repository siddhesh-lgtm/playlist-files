<?php
echo "before include <br>";

for($i=0;$i<=5;$i++){

    include("./index.php"); 
    echo"<br>";
}

//include("./index.php");
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";

$cars2=array (
    array("v",22,15),
    array("s",98,13),
    array("q",23,87),
    array("e",43,34),
    array("r",76,98)
);

foreach($cars2 as $car){
    foreach($car as $key=>$item){
        echo "key is ".$key." value is  ".$item."<br>";
    }
}


// $cars=array("Volvo","BW","Toyota","Honda","Mercedes","Opel");
// print_r(array_chunk($cars,2));
// echo "<hr>";

// $a1=array_fill(3,4,"blue");
// $b1=array_fill(0,1,"red");
// print_r($a1);
// echo "<br>";
// print_r($b1);

//associative array 
// $aarr=array(
//     array("india",12,23),
//     array("cindia",12,23),
//     array("zendya",12,23),
//     array("dandiya",12,23),
// );

// for($i=0;$i<count($aarr);$i++){
//     for($j=0;$j<count($aarr[$i]);$j++)
//     {
//         echo " | ".$aarr[$i][$j]." | <hr> ";
//     }
//     echo "<br>";
// }


// //execution of a fun from an array;
// function f1(){
//     echo "helloooo functionnnnnnnn";
// }


// $arr= array("k1",23,"f1");
// echo $arr[2]();
// array_push($arr, "text");
// $arr[]="text2";
// var_dump($arr);


// create and access associative arrays
// $car=array(
//     "z"=>"v6",
//     "y"=>"v2", 
//     "x"=>"v3",
//     "w"=>"v4",
//     "v"=>"v5", 
// );


// foreach($car as $x=>$y){
//     echo " key is :".$x." value is :".$y."<br>";
// }
// echo "<hr>";
// echo $car["k1"];
// var_dump($car);
// //printing all elements of an associative array
// foreach($car as $key =>$value){
//     echo  "<hr>".$key." ".$value." <br> ";
// }
// $car +=["k5"=>"v5","k6"=>"v6","k7"=>"v7","k8"=>"v8"];
// array_splice($car,0,1);
// $new_car=array_diff($car, ["v1","v2"]);


// $last = array_shift($car);

// sort($car);  //values in alphabetical order

// rsort($car);  //reverse sort by values

// asort($car); //sort associative arrays in by ascending values


// ksort($car);
// foreach($car as $x=>$y){
//     echo " key is :".$x." value is :".$y."<br>";
// }


// multidimensional array and accessing elements
// $cars2=array (
//     array("v",22,15),
//     array("s",98,13),
//     array("q",23,87),
//     array("e",43,34),
//     array("r",76,98)
// );

// for($i=0;$i<count($cars2);$i++){
//     for($j=0;$j<count($cars2[$i]);$j++){
//         echo $cars2[$i][$j];
//     }
//      echo "<br>";
// }

// echo  "<br> count is ".count($cars2);
// var_dump($cars2);

// accessing indexed array elements using for each
// $arr=array("sample",12,23,43);

// foreach($arr as $x){
//     echo "$x <br>";
// }
// array_push($arr,"ford");
// foreach($arr as $x){
//     echo "$x <br>";
// }


// $users=[
//     [1,"a"],
//     [2,"b"],
//     [3,"c"],
//     [4,"d"],
// ];
// echo "<pre>";
// echo "<h2>Initial Array Structure</h2>";
// echo "<hr>";
// print_r ($users);
// echo "</pre>"; 
// echo "<hr>";
// echo "<h2>1. Correct Iteration using Nested FOR Loops</h2>";
// echo "<ul>";
// for($i=0; $i < count($users); $i++) {
//     // CORRECTION: The loop condition MUST count the elements of the inner array.
//     for($j=0; $j < count($users[$i]); $j++)
//     {
//         // CORRECTION: Use proper nested index syntax $users[$i][$j]
//         echo "<li>User: " . $users[$i][$j] . "</li>";
//     }
// }
// echo "</ul>";
// echo "<hr>";




// $users=[
//     [1,"a"],
//     [2,"b"],
//     [3,"c"],
//     [4,"d"],
// ];
// echo "<pre>";
// echo "<hr>";
// print_r ($users);
// echo "<pre>"; 
// echo "<hr>";


// for($i=0;$i<count($users);$i++){
//     for($j=0;$j<count($users[$i]);$j++)
//     {
//         echo "User [{$i}][{$j}] :"   ;
//     }
// }

//associative arrays 
// $aa=[
//    "a"=>"alpha",
//    "b"=>"beta",
//    "c"=>"gamma" 
// ];
// echo $aa["b"];
// foreach($aa as $key=> $data){
//     echo "<br> key is ".$key. " data is : ".$data;
// }

//for each
    // $n=["a","ad","dsf" ,"dsadasd"];
    // foreach ($n as $a){
    //     echo "<br> $a";
    //     if($a=="dsf"){
    //         break;
    //     }
    // }

?>