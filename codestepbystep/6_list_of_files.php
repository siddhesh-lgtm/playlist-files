<!-- #66 Get List of files from folder -->
 <?php 
 $path="./files/files2";
 $items=scandir($path);
$items=array_diff($items,array(".",".."));

 print_r($items);

echo "<br><hr>";
 foreach($items as $item){
    echo "<b>";
    echo "<a href=./files/files2/$item>$item</a>";
    echo "<br>";
    echo "<b>";
 }


 ?>