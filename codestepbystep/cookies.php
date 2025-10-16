<?php
setcookie("c1","afsgd",time()+5);
setcookie("c2","dfsghj",time()+10);

if(isset($_COOKIE['c1']))
{
    echo "current cookie is ".$_COOKIE['c1'];
}
else{
    echo "no cookies set yet";
}
echo "<br><br><br>";
echo "<br><br><br>".print_r($_COOKIE)."<br><br>";

if(isset($_COOKIE['c2']))
{
    echo "current cookie is ".$_COOKIE['c2'];
}
else{
    echo "no cookies set yet";
}

?>