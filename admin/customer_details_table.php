
<?php
    $title = "admin: customer:details";
    $table_title = "Registered Customers:";
    require_once '../includes/header.php';
    require_once '../includes/connection.php';
    require_once '../includes/function.php';
    require_once '../admin/navigation.php';
    
    
    $query = "select * from customer";
    $action = 1; // action 1, means we want add & delete button in the table
    $table = "customer";
    CreateTable_av($query, $con, $action, $table);

?>


    


<?php require_once '../includes/footer.php'; ?>