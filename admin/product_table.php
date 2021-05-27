<?php
    $title = "admin: product";
    require_once '../includes/header.php';
    require_once '../includes/connection.php';
    require_once '../includes/function.php';
    require_once '../admin/navigation.php';

    
    
    $query = "select * from customer";
    $action = 1; // action 1, means we want add & delete button in the table
    CreateTable_av($query, $con, $action);

?>
    
    <h1> product table page <h1>


<?php require_once '../includes/footer.php'; ?>