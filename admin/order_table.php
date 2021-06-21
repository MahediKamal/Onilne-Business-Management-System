
<?php
    session_start();
    $title = "admin: customer:details";
    $table_title = "All orders:";
    $admin_name = $_SESSION['adminName'];
    require_once '../includes/header.php';
    require_once '../includes/connection.php';
    require_once '../includes/function.php';
    require_once '../admin/navigation.php';

    if(!isset($_SESSION['adminName'])){
        echo "<head>";
            echo "<meta http-equiv = \"refresh\" content = \"0; url = ../customer/index.php\" />";
        echo "</head>";
    }
    
    
    // $query = "select * from customer";

    // order_id, order_date, estimated_date, delivery_date , payment_status, cst_id, courier_id
    $query = "SELECT order_id, order_date, estimated_date, delivery_date , payment_status, cst_id, courier_id FROM order_info
    ORDER BY payment_status, order_id  DESC";

    $action = 1; // action 1, means we want add & delete button in the table
    $table = "order_info";
    CreateTable_for_admin_to_watch_order_av($query, $con, $action, $table);

?>


    


<?php require_once '../includes/footer.php'; ?>