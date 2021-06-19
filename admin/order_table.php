
<?php
    session_start();
    $title = "admin: customer:details";
    $table_title = "All oders:";
    $admin_name = $_SESSION['adminName'];
    require_once '../includes/header.php';
    require_once '../includes/connection.php';
    require_once '../includes/function.php';
    require_once '../admin/navigation.php';
    
    
    // $query = "select * from customer";
    $query = "SELECT * FROM order_info";
    $action = 1; // action 1, means we want add & delete button in the table
    $table = "order_info";
    CreateTable_av($query, $con, $action, $table);

?>


    


<?php require_once '../includes/footer.php'; ?>