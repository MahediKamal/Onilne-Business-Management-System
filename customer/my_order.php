
<?php
    session_start();
    $cart_id = $_SESSION['cart_id'];
    $cst_email = $_SESSION['customer_mail'];
    $cst_password = $_SESSION['customer_password'];
    $cst_name = $_SESSION['customer_name'];
    $cst_id = $_SESSION['cst_id'];
    $order_id = $_SESSION['orde_id'];
    $billing_id = $_SESSION['billing_id'];
    $courier_id = $_SESSION['courier_id'];
    require_once '../includes/header.php';
    require_once '../includes/connection.php';
    require_once '../includes/function.php';
    
    
    echo "<h2> hello $cst_name, This is your order info</h2> <br> <br>"; 
    // $query = "select * from customer";
    // $query = "SELECT ORDER_DATE, ESTIMATED_DATE, PAYMENT_STATUS, ORDER_CANCEL
    //  FROM order_info where cst_id = $cst_id";

    $query = "SELECT order_info.ORDER_DATE, order_info.ESTIMATED_DATE, order_info.PAYMENT_STATUS, order_info.ORDER_CANCEL, courier.courier_company, product.pdt_name, product.pdt_price
    FROM 
    order_info
    INNER JOIN courier ON courier.courier_id = order_info.courier_id
    INNER JOIN has_product_in_cart ON has_product_in_cart.order_id = order_info.order_id
    -- INNER JOIN cart ON has_product_in_cart.cart_id = cart.cart_id
    INNER JOIN product ON product.pdt_id = has_product_in_cart.pdt_id
    WHERE order_info.cst_id = $cst_id";

    // echo $query;

    $action = 0; // action 1, means we want add & delete button in the table
    $table = "order_info";
    CreateTable_av($query, $con, $action, $table);

    echo "<br> <br> <h2> Different Oders date :</h2> <br>"; 
    $query = "SELECT ORDER_DATE
    FROM order_info where cst_id = $cst_id";
    $action = 1;
    CreateTable_av($query, $con, $action, $table);
?>


    


<?php require_once '../includes/footer.php'; ?>