<form action="" method="post">
    <input type="text" placeholder="enter name" name="name"  required>
    <br/><br/>

    <input type="text" placeholder="enter course" name="course"  required>
    <br/><br/>

    <input type="text" placeholder="enter batch" name="batch" required>
    <br/><br/>

    <!-- <input type="text" placeholder="enter city" name="city">
    <br/><br/> -->

    <input type="text" placeholder="enter year" name="year"  required>
    <br/><br/>

    <select name="city2">
        <option >SELECT CITY</option>
        <option value="M">M</option>
        <option value="P">P</option>
        <option value="D">D</option>
    </select>
    
    <?php 

    echo "<select>";
    echo"<option>select name </option>";

    foreach($studentData as $student){
        echo "<option>$student[name]</option>";
    }
    echo"<select>";
    ?>

    <button>submit</button> 
</form>

<?php 

if(isset($_POST['name']))
{
    $name=$_POST['name']  ?? null;
    $course=$_POST['course'] ?? null;
    $batch=$_POST['batch'] ?? null;
    // $city=$_POST['city'];
    $year=$_POST['year'] ?? null;
    $city2=$_POST['city2'] ?? null;


    include("./config.php");

    $query="
    INSERT INTO students(id,name,course,batch,city,year)
    VALUES
            (null, '$name', '$course', '$batch', '$city2', '$year' );
    ";

    $stud=$conn->prepare($query);
    $result=$stud->execute();
    echo "<BR>";
    if($result){
        echo "successs";
    }else{
        echo"failed";
    }
}

// include("./config.php");
// $student=$conn->prepare("
// INSERT INTO 'students' ('id','name', 'course', 'batch','city','year'),
// VALUES  (null, 'stan lee', 'mcu', 'infinite', 'new york nigga', '2022');
// ");
// $result=$student->execute();
// if($result){
//     echo "inserted successfuly";
// }
// else{
//     echo "insert failed ";
// }


// include("./config.php");

// $sql_query = 
// "INSERT INTO students (id, name, course, batch, city, year)
// VALUES 
//     (NULL, 'stan lee', 'mcu', 'infinite', 'new york nigga', '2022'),
//     (NULL, 'carol danvers', 'cosmic powers', 'kree force', 'new york city', '2024');
// ";


// $student = $conn->prepare($sql_query);
// $result = $student->execute();

// echo "<br>";
// if($result){
//     echo "Inserted two records successfully!";
// }

// else{
//     // Use errorInfo() to display the exact PDO error for debugging
//     echo "Insert failed. Error details: ";
//     print_r($student->errorInfo()); 
// }
?>