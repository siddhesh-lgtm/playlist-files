<?php 

// Why is ob_start() Necessary?
// The main reason to use output buffering is to solve the "Headers Already Sent" error.

// In web communication (HTTP), headers (like cookies, session IDs, and redirect commands) MUST be sent to the browser before any actual content (the body, which includes HTML or any text echoed by PHP).

// If your script accidentally outputs a single character (even a blank line or space) before a crucial function like setcookie() or header(), PHP throws an error and fails to execute the header function.

// How ob_start() Solves This
// Starts Buffering: You call ob_start() at the very top of your script.

// Captures Output: Every echo, print, or piece of static HTML is trapped in the buffer.

// Allows Header Calls: Since no content has officially left the server, you can call setcookie() or header() safely at any point in your script, even if echo statements have run before them.

// Flushes Output: When the script finishes, or when you explicitly call ob_end_flush(), the buffered content is finally sent to the browser, with the headers being correctly prepended.




// 1. START OUTPUT BUFFERING
// All subsequent output (echo, print, HTML) is captured here and held in memory.
ob_start(); 

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>OB Start Demo</title>
</head>
<body>
    <h1>Output Buffering Demo</h1>
    
    <?php
    // 2. OUTPUT CONTENT
    echo "<p>This is the start of the HTML content.</p>";
    

    include 'new.php';
    $new=ob_get_clean();
    $new=str_replace('name','username',$new);
    echo $new;


    // 3. SET HEADER/COOKIE SAFELY
    // Even though content has been echoed above, this works because the content 
    // is sitting in the buffer and has not yet been sent to the browser.
    $username = "niggerrrrrr" . rand(1, 10);

    setcookie("user_session", $username, time() + 3600); // Set cookie for 1 hour
    
    echo "<p style='color: green;'>Cookie header successfully processed (even though content came first).</p>";
    
    // Optional: Get the current size of the content held in the buffer
    $size = ob_get_length();
    echo "<p>The buffer currently holds " . $size . " bytes of data.</p>";

    // If we didn't use ob_start(), calling setcookie() here would cause the "Headers Already Sent" error.
    ?>

</body>
</html>
<?php 

// 4. END AND FLUSH BUFFER
// This sends the collected output (HTML and text) along with the HTTP headers 
// (including the cookie header) to the browser simultaneously.
ob_end_flush(); 

?>
