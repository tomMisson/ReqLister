<?php
session_start();
require 'menu.php';

try{

    $filename = "requirements.json";
    $myfile = fopen($filename, "a") or die("Unable to open file!");

    for($i=0; $i< count($_SESSION['data']); $i++){
        fwrite($myfile, json.encode($_SESSION['data'][i]));
    }
    
    echo "<h1>File saved to server</h1>";

    fclose($myfile);
    
}
catch (Exception $e) {
    echo "<h1>File error</h1>";
}


?>