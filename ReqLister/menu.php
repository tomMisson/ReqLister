<?php
echo <<<_END
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="styles.css" type="text/css"/>
    <title>Requirements Lister</title>
</head>
<body>
    <nav>
        <h1>Requirements builder</h1>
        <ul>
            <li><a href="index.php" alt="Create requirement">Create</a></li>
            <li><a href="view.php" alt="View requirements">View</a></li>
            <li><a href="export.php" alt="Export requirements">Export</a></li>
            <li><a href="clear.php" alt="Clear requirements">Clear</a></li>
        </ul>
    </nav>
_END
?>