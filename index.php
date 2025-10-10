<?php 


echo "Index file is here sybau nigger";
echo "<br>";echo "<br>";echo "<br>";echo "<br>";



echo "atmkbfj";
$mfile=fopen("index2.php","r");
echo fread($mfile,filesize("index2.php"));

fclose($mfile);



print_r($_COOKIE);

echo "<br>";echo "<br>"; echo "<br>";echo "<br>";echo "<br>"; echo "<br>";
echo readfile("signup.html");

// some functions
// strlen()
// var_dump()
// echo date("M");
// echo rand();
// is_int();
// is_string();
// echo substr($str, 10);


// function myFamily($lastname, ...$firstname) {
//   $txt = "";
//   $len = count($firstname);
//   for($i = 0; $i < $len; $i++) {
//     $txt = $txt."Hi, $firstname[$i] $lastname.<br>";
//   }
//   return $txt;
// }
// $a = myFamily("Doe", "Jane", "John", "Joey","alpha","beta","gamma");
// echo $a


//variable functions
// function sum(...$a){
//    $sum=0;
//    $len=count($a);
//     for($i=0;$i<$len;$i++){
//     $sum+=$a[$i];
//     }
//     return $sum;
// }
// $a=sum(10,20,30,40,50);
// echo $a;


// Passing Arguments by Reference
// In PHP, arguments are usually passed by value, 
// which means that a copy of the value is used in the function 
// and the variable that was passed into the function cannot be changed.
// When a function argument is passed by reference, 
// changes to the argument also change the variable that was passed in. 
// To turn a function argument into a reference, the & operator is used:
// code:
// function add_five(&$value) {
//   $value += 5;
//   echo " value inside the function : $value <br>";
// }
// $num = 2;
// echo "num is ".$num."<br>";
// add_five($num);
// echo "num is : ".$num;



//calling  A fun via a variable
// function f1($name="temp"){
//     echo "  f1 is called $name <br>";
// }
//  $val="f1";
//  $val("sid");
// echo $val();



//not done 
// function f1($x,$y){
//     $z=$x+$y;
//     return $z;
// }
// echo "another sum is  ".f1(20,10)." here <br> ";
// echo " sum is ".f1(10,5)." is js <br>";



//nested fun
// f1();
// function f1(){
//     echo "f1 is hereeeeeeee";
//     function f2(){
//         echo " <br> f2 is hereeeeeeeeeeeeeeeeee";
//     }
//     f2();
// }



//parameterized fun
// function f1($name, $color="red"){
//     return "<h1 style='color: $color'> name is $name</h1> ";
// }
// f1("sid", "yellow");
// echo " <br> f1 is ".f1("sid","blue")." after";


// function f2($color, $name){
//     echo "<h1 style='color:$color'> name is : $name </h1>";
// }
// f2("red", "ALPHA");
// f2("blue", "beta");
// f2("yellow", "gamma");




// function f1(){
//    echo "<h1> f1 echo <hr> </h1>";
//    f2();
// //  for($i=0;$i<=3;$i++){
// //     echo "i is :".$i."<hr>";
//  }
// function f2()
// {
//      echo " <h3> f2 echo <hr> <h3>";
//     f1(); 
//     // echo "<h1>   f2 data  </h1>";
//     // f1();
// }
// f2();
// for($i=0;$i<=3;$i++){
// f2();
// }
?>
