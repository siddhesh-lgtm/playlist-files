<?php 

//  USE OF ARRAY MAP FUNCTION : ALSO CHECK ARRAY_FILTER()
// $numbers = [1, 2, 3, 4, 5];
// $squares = array_map(function($n) {
//     return ($n % 2==0)?$n: "its not even" ;
// }, $numbers);
// echo "<pre>";
// print_r($squares);
// echo "</pre>";

echo readfile("asdf");
if(isset($_FILES['file'])){
    $file=$_FILES['file']['tmp_name'];
    $myfile=fopen($file,"r") or die("cant read file ");
    echo fread($myfile,filesize($file));
    fclose($myfile);
}
?>


<form action="" method="post" enctype="multipart/form-data">
    <input type="file" name="file"/>
    <br><br><br>
    <button>read file here </button>
</form>
