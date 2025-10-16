<?php 
include_once("./config.php");

$student=$conn->prepare("select * from students");
$student->execute(); 

// $result=$stud->fetchAll(); // err here, prints values twice
$result = $student  ->fetchAll(PDO::FETCH_ASSOC);
// print_r($result);


echo "<table border='5'>";
echo "<th>id</th>";
echo "<th>name</th>";
echo "<th>course</th>";
echo "<th>branch</th>";
echo "<th>city</th>";
echo "<th>age</th>";
echo "<th>action</th>";
echo "<th>edit</th>";
foreach($result as $student){
    echo  
    "<tr>
    <td>" .$student['id']."</td>
    <td>" .$student['name']."</td>
    <td>" .$student['course']."</td>
    <td>" .$student['batch']."</td>
    <td>" .$student['city']."</td>
    <td>" .$student['year']."</td>
    <td>    <form method='post'> <button name='delete' value='".$student['id']."'> delete </button> </td>
    <td>   <a  href='v87_populate.php?id=".$student['id']."'>edit</a> </td>
    </tr>";
}
 
echo "</table>";
if(isset($_POST['delete']))
{
    echo $id=$_POST['delete'];
    $student=$conn->prepare("delete from students where id='$id'");
    // $students->execute();

    if($student->execute()){
        echo  "record deleted ";
    }
    else{
        echo "cant delete ";
    }
}
?>
