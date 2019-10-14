<?php

session_destroy();
$_SESSION = array();
setcookie(session_name(), ‘’, time()-2592000, ‘/’);

header("Location: index.php");

?>