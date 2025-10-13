 <!-- file php file  -->
<?php 
print_r($_POST);

    echo  "<br>";
    if (isset($_POST['name'])){
    echo "<br>";
    echo "user name is ".$_POST['name'];
    echo "<br>";

    echo "eamil is ".$_POST['email'];
    echo "<br>";

    echo "password  is ".$_POST['password'];
    echo "<br>";

    echo "user skills are  ".implode(", ",$_POST['skills']);
    echo "<br>";

    echo "gender is ".$_POST['gender'];
    echo "<br>";
    echo "city is  ".$_POST['city'];
    echo "<br>";
    echo "bio is ".$_POST['bio'];
    echo "<br>";
    
}


?>