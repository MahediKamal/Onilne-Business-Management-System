
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
    
    echo "<h2> Hello $cst_name, This is your order info</h2> "; 
    
    ///--------------------order in process
    $table = "order_info";
    echo "<br> <br> <h2> Orders in process :</h2> <br>"; 
    $query = "SELECT order_id, ORDER_DATE, ORDER_CANCEL
    FROM order_info where cst_id = $cst_id AND payment_status ='due'
    ORDER BY order_id DESC";
    $action = 1;
    CreateTable_for_customer_order_av($query, $con, $action, $table);

    ///////---------in process orer info
    
    echo "<br> <br> <h2> Order details :</h2> <br>"; 
    $query = "SELECT order_info.order_id, order_info.ORDER_DATE, order_info.ESTIMATED_DATE, order_info.PAYMENT_STATUS, courier.courier_company, product.pdt_name, product.pdt_price, has_product_in_cart.quantity
    FROM 
    order_info
    INNER JOIN courier ON courier.courier_id = order_info.courier_id
    INNER JOIN has_product_in_cart ON has_product_in_cart.order_id = order_info.order_id
    -- INNER JOIN cart ON has_product_in_cart.cart_id = cart.cart_id
    INNER JOIN product ON product.pdt_id = has_product_in_cart.pdt_id
    WHERE order_info.cst_id = $cst_id AND payment_status ='due'
    ORDER BY order_info.order_id DESC";

    // echo $query;

    $action = 0; // action 1, means we want add & delete button in the table
    
    // CreateTable_for_customer_order_av($query, $con, $action, $table);
    CreateTable_av($query, $con, $action, $table);


    ///////////////----------------completed order


    echo "<br> <br> <h2>Order history :</h2> <br>"; 
    $query = "SELECT order_id, ORDER_DATE, PAYMENT_STATUS
    FROM order_info where cst_id = $cst_id AND payment_status ='paid'
    ORDER BY order_id DESC";
    $action = 0;
    CreateTable_for_customer_order_av($query, $con, $action, $table);

    // $cid = find_cartID_according_to_orderID_from_HasProductInCart($order_id, $con);
    // echo $cid . 'bal r valo lage na';
    // $courierID = find_courierID_according_to_orderID_from_orerInfo($order_id, $con);
    // echo 'fuccccc dbug '. $courierID;
    // $billingId = find_billingId_according_to_cartID_from_cart($cart_id, $con);
    // echo 'fuccccc dbug '. $billingId;
?>


    


<?php require_once '../includes/footer.php'; ?>