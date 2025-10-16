<?php
include("./config.php");
// echo "<br> issa update file ";

if(isset($_GET['id'])){
    $id = $_GET['id'];
    // echo "<BR> ID IS : ".$id;
    $getStudent=$conn->prepare("select * from students where id='$id'");
    $getStudent->execute();

    echo "<br>";
    $student=$getStudent->fetchAll(PDO::FETCH_ASSOC);

    echo   $name=$student[0]['name'];
    echo   $course=$student[0]['course'];
    echo   $batch=$student[0]['batch'];
    echo   $city=$student[0]['city'];
    echo   $year=$student[0]['year'];
} else {
    echo "No ID provided!";
}

?>
<form action=" " method="post">
    <input type="text" value="<?php echo $name ?>" name="name"/>
    <br><br>

    <input type="text" value="<?php echo $course ?>" name="course"/>
    <br><br>

    <input type="text" value="<?php echo $batch ?>" name="batch"/>
    <br><br>

    <input type="text" value="<?php echo $city ?>" name="city"/>
    <br><br>

    <input type="text" value="<?php echo $year ?>" name="year"/>
    <br><br>

    <button value="<?php echo $id?>" name="update">click to update</button>
</form>

<?php 
if(isset($_POST['update'])){
    //    echo $i d= $_POST['id'];
        $name= $_POST['name'];
        $course= $_POST['course'];
        $batch= $_POST['batch'];
        $city= $_POST['city'];
        $year= $_POST['year'];

    $updatestudent=$conn->prepare("update students set
        name='$name',
        course='$course',
        batch='$batch',
        year='$year',
        city='$city'     
        where id ='$id'");
    // echo $updatestudent->execute();

    if($updatestudent->execute()){
        header('location:86_delete_edit.php');
    }
    else
    {
        echo "failed";
    }

}
?>