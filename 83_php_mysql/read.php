<?php 
//v83
include("./config.php");

$getStudents=$conn->prepare("SELECT * FROM students");
$getStudents->execute();
$students=$getStudents->fetchALL();

echo "<TABLE border='1'>";
echo "<th>Name</th>";
echo "<th>course</th>";
echo "<th>batch</th>";
echo "<th>year</th>";
foreach($students as $std){
    echo"<tr>";
    echo "<td>".$std['name']."</td>";
    echo "<td>".$std['course']."</td>";
    echo "<td>".$std['batch']."</td>";
    echo "<td>".$std['year']."</td>";
    echo"</tr>";
}
echo "</TABLE>";

?>