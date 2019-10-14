<?php

require 'menu.php';

try{
    $filename = "requirements.json";
    $myfile = fopen($filename, "w") or die("Unable to open file!");
    fwrite($myfile, $_SESSION['data']);
    echo "<h1>File saved to server</h1>";

    
}
catch (Exception $e) {
    echo "<h1>File error</h1>";
}


?>