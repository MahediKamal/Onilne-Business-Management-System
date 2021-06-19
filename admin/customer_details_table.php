
<?php
    session_start();
    $title = "admin: customer:details";
    $table_title = "Registered Customers:";
    $admin_name = $_SESSION['adminName'];
    require_once '../includes/header.php';
    require_once '../includes/connection.php';
    require_once '../includes/function.php';
    require_once '../admin/navigation.php';
    
    
    // $query = "select * from customer";
    $query = "SELECT customer.cst_id, customer.cst_name, customer.cst_email, customer.cst_city, customer.cst_houseno, customer.cst_street , 
    login.login_id, login.login_name ,login.login_password, customer_phone.cst_phone
    FROM ((customer
    INNER JOIN login ON customer.cst_id = login.cst_id)
    INNER JOIN customer_phone ON customer.cst_id = customer_phone.cst_id)";
    $action = 0; // action 1, means we want add & delete button in the table
    $table = "customer";
    CreateTable_av($query, $con, $action, $table);

?>


    


<?php require_once '../includes/footer.php'; ?>