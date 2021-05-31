<?php
    $title = "admin: customer:details";
    require_once '../includes/header.php';
    require_once '../includes/connection.php';
    require_once '../includes/function.php';
    require_once '../admin/navigation.php';

    echo "<h1> Registered Customers </h1>";
    
    $query = "select * from customer";
    $action = 1; // action 1, means we want add & delete button in the table
    CreateTable_av($query, $con, $action);

?>
    


<?php require_once '../includes/footer.php'; ?>