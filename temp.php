<?php


// while($i<=20){
//     while($i<=10){
//         echo "inside ";
//         break 2;
//     }
//     echo "outside";
//     break;
// }


// $text="hello ngr";
// for($i=0; $i<strlen($text);  $i++){
//     echo $text[$i]."<br>";
// }


//callback fun 


function square($n) {
    return $n * $n;
}

$numbers = [1, 2, 3, 4, 5];
$squared_numbers = array_map('square', $numbers);

echo "<PRE>";
print_r($squared_numbers);

echo "<br>";

print_r($squared_numbers)

?>
