<?php 
include("./config.php");

$getStudent=$conn->prepare("select * from students");
$getStudent->execute();
$studentData=$getStudent->fetchAll();


// echo "<pre>";
// print_r($studentData);

echo "<select>";
echo"<option>select name </option>";

foreach($studentData as $student){
    echo "<option value= ".$student['id'].">".$student['name']."</option>";
}
echo "<select>";
echo "<button>submit</button>";



?>