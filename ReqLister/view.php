<?php
session_start();

require 'menu.php';

echo '<pre>' . print_r($_SESSION, TRUE) . '</pre>';


?>