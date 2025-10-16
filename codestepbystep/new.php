<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>QWERTY</title>
</head>
<body>
    <?php 
   echo "<h1>".$_GET['username']."</h1>";

?>
   <table border="5">
    <tr >
        <th >
            sr no
        </th>
        <th>
            name
        </th>
        <th>
            adqw
        </th>
    </tr>
    <tr>
        <td>
            test1
        </td>
        <td>
            test2
        </td>
        <td>
            test3
        </td>
    </tr>
    <tr>
        <td>
            alpha1
        </td>
        <td>
            alpha2
        </td>
        <td>
            alpha3
        </td>
    </tr>
    <tr>
        <td>
            beta1
        </td>
        <td>
            beta2
        </td>
        <td>
            beta3
        </td>
    </tr>

</table>

<?php

$users=[
     ["alpha 1"," beta 2"," gamma 3"],
     ["alpha 1"," beta 2"," gamma 3"],
     ["alpha 1"," beta 2"," gamma 3"],
];

echo '<table border="1">';
for($i=0; $i<count($users);$i++){
    echo "<tr>";
    for($j=0; $j<count($users[$i]);$j++){
        echo "<td>";
        echo $users[$i][$j]."<br>";
        echo "</td>";
}
echo "</tr>";
}
echo "</table>";
?>
</body>
</html> 