<!-- 
<form action=" " method="post" > 
     <input type=" text" name="search" placeholder="enter name for search">
     <br> <br>
<button> click 2 search</button>
</form> 
-->



<?php 
// include("./config.php"); 
// if(isset($_POST['search'])){
//   $search=$_POST['search'];
//   $student=$conn-> prepare("select * from students 
//                             WHERE name LIKE :search OR year LIKE :search");
//   $student->execute();
//   $result=$student->fetchAll(PDO::FETCH_ASSOC);
 
// echo "<TABLE border='1'>";
// echo "<th>Name</th>";
// echo "<th>course</th>";
// echo "<th>batch</th>";
// echo "<th>year</th>";
// foreach($result as $std){
//     echo"<tr>";
//     echo "<td>".$std['name']."</td>";
//     echo "<td>".$std['course']."</td>";
//     echo "<td>".$std['batch']."</td>";
//     echo "<td>".$std['year']."</td>";
//     echo"</tr>";
// }
// echo "</TABLE>";
// }


?>

<form action=" " method="post" > 
     <input type=" text" name="search" placeholder="enter name for search">
     <br> <br>

<button> click 2 search</button>

</form>


<?php 
include("./config.php"); 

if(isset($_POST['search'])){
  $search = '%' . $_POST['search'] . '%'; // Add wildcards for partial matching
  $student = $conn->prepare("SELECT * FROM students 
                            WHERE name LIKE :search OR year LIKE :search");
  
  // Bind the parameter to the prepared statement
  $student->bindParam(':search', $search);
  
  $student->execute();
  $result = $student->fetchAll(PDO::FETCH_ASSOC);
 
echo "<TABLE border='1'>";
echo "<th>Name</th>";
echo "<th>course</th>";
echo "<th>batch</th>";
echo "<th>year</th>";
foreach($result as $std){
    echo"<tr>";
    echo "<td>".$std['name']."</td>";
    echo "<td>".$std['course']."</td>";
    echo "<td>".$std['batch']."</td>";
    echo "<td>".$std['year']."</td>";
    echo"</tr>";
}
echo "</TABLE>";
}
?>