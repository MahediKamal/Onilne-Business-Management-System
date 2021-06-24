
<?php
    session_start();
    $title = "admin: customer:details";
    $table_title = "courier company:";
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
    $query = "SELECT * FROM courier_view
    ORDER BY COURIER_COMPANY  DESC";

    $action = 0; // action 1, means we want add & delete button in the table
    $table = "courier";
    CreateTable_av($query, $con, $action, $table);

?>


    


<?php require_once '../includes/footer.php'; ?>