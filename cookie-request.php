<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>cookie request</title>
</head>
<body>
            <form action="" method="post">
                <input type="text" name="user" placeholder="enter user name "/>
                <br><br><br>

                <button type="submit" name="button" value="set">     set cookies  </button>
                <br><br><br>

                <button type="submit" name="button" value="display"> Display cookies  </button>
                <br><br><br>
                
                <button type="submit" name="button" value="delete"> Delete  cookies  </button>
                <br><br><br>
            </form>
</body>
</html>

<?php 
if(isset($_POST['button'])){

if($_POST['button']=="set"){
    $val=$_POST['user'];
    
    setcookie("user", $val);
    echo "cookie is ready";
}

if($_POST['button']=='display')
{
    if(isset($_COOKIE['user'])){
        echo $_COOKIE['user'];
    }
}

if($_POST['button']=='delete')
{
    if(isset($_COOKIE['user'])){
        setcookie("user", "", time() - 3600); 
        echo "cookie is deleted ";
    }
}


}

?>