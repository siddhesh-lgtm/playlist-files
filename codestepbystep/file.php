<?php 

//print_r($_FILES['file2upload']); 

if($_FILES['file2upload']){
    $path=$_FILES['file2upload']['name']; 
    $upload_path="".$path;
    move_uploaded_file($_FILES['file2upload'] ['temp_name'], $upload_path) || die("failed to upload");
 }
else{ 
    die ("no file detected");
}


?>