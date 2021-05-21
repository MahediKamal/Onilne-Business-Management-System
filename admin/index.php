<?php
    $title = "admin";
    require_once '../includes/header.php';
    require_once '../includes/connection.php';
    require_once '../includes/function.php';


    $query = "select * from customer";
    $action = 1; // action 1, means we want add & delete button in the table
    CreateTable_av($query, $con, $action);
    // CreateTable_av($APEX$_ACL, $c);

?>
    
    <h1> Admin index page <h1>


<?php require_once '../includes/footer.php'; ?>