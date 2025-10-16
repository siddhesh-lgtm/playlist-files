<?php 
if (isset($_POST['filename']) && isset($_POST['content'])) {
    $filename = $_POST['filename'];
    $content  = $_POST['content'];
    
    if (!empty($filename)) {
        $file = fopen($filename, "w") or die("Cannot create file");
        fwrite($file, $content);
        fclose($file);
        echo "<br> File '$filename' created successfully!";
    } else {
        echo "Please enter a valid filename.";
    }
}
?>
<br><br><br>
<hr>

<form action="" method="post">
    <input type="text" placeholder="Enter file name" name="filename">
    <br><br>
    <textarea name="content" placeholder="Write file content here"></textarea>
    <br><br>
    <button type="submit">Create File</button>
</form>
