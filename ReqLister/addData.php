<?php
session_start();
if (isset($_POST['submit'])){
    $data  = [
        'title' => $_POST['Name'],
        'Desc' => $_POST['Desc'],
        'Rationale' => $_POST['Rationale'],
        'Originator' => $_POST['Originator'],
        'Fit' => $_POST['Fit'],
        'CustSat' => $_POST['CustSat'],
        'CustDisSat' => $_POST['CustSat'],
        'priority' => $_POST['CustSat'],
        'conflicts' => $_POST['conflicts']
    ];
    array_push( $data, $_SESSION['data']);
    
    header("Location: index.php");
}
else if (isset($_POST['submitSess'])){
    
    header("Location: view.php");
}
else{
    $_SESSION['data'] = [];
    header("Location: index.php");
}
 

?>