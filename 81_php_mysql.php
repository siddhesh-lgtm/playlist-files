<?php 
//using mysqli


// $host="localhost";
// $username="root";
// $password="";
// $database="php-laravel-crud";


// $conn =new mysqli($host, $username, $password, $database);
// if($conn->connect_error){
//     echo "ererererer";
//      die( "error on conn");
//       $conn->$connect_error;
// }
// echo "conn success <br>";


// echo "<pre>";
// $result=$conn->query("show tables")->fetch_all();
// print_r($result);


//using pdo  php data object 
$host="localhost";
$username="root";
$password="";
$database="college";
$conn=null;
try{
    $conn=new PDO("mysql:host=$host; dbname=college",$username,$password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "conn done";
}catch(PDOException $err){
    echo "conn failed".$err->getMessage();
}
echo "<br>";
$result=$conn->query("show tables");
while($row=$result->fetch(PDO::FETCH_NUM)){
    print_r($row);
}
?>