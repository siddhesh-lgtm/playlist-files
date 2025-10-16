<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CALL PHP FUN ON CLICK</title>
</head>
<body>
    
    <form action="" method="post">
        <button name="btn" value="btn1">
            call fun
        </button>
    </form>


</body>
</html>
<?php 
if(isset($_REQUEST['btn'])){

f1();
}
function f1(){
    echo "fun called on btn click";
}



?>