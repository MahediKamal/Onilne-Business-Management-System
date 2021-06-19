<?php
    session_start();
    $cart_id = $_SESSION['cart_id'];
    $order_id = $_SESSION['orde_id'];
    require_once '../includes/function.php';

    require_once 'connection.php';
    $pdt_id = $_GET['pdt_id'];
    $pdt_name = $_GET['pdt_name'];
    $pdt_picture = $_GET['pdt_picture'];
    $pdt_price = $_GET['pdt_price'];

    // product id, cart id -> in session , order id -> in session 
    echo $cart_id . ' ' . $pdt_id . ' ' . $order_id;

    // ------------------check if product already in cart
    $query = 'SELECT quantity FROM has_product_in_cart WHERE pdt_id = :pp_id';
    $stm = oci_parse($con, $query);
    oci_bind_by_name($stm, ':pp_id', $pdt_id, -1);
    if (!$stm) {
        $m = oci_error($con);
        trigger_error('Could not parse statement: '. $m['message'], E_USER_ERROR);
    }
    $r = oci_execute($stm);
    if (!$r) {
        $m = oci_error($stm);
        trigger_error('Could not execute statement: '. $m['message'], E_USER_ERROR);
    }
    $res_nm = 0;
    $quantity = 0;
    while (($row = oci_fetch_array($stm, OCI_ASSOC+OCI_RETURN_NULLS)) != false) {
        foreach ($row as $item) {
            $res_nm++;
            $quantity = htmlspecialchars($item, ENT_QUOTES|ENT_SUBSTITUTE);
        }
    }
    

    if($res_nm == 0){ // new product
        $query = 'INSERT INTO has_product_in_cart VALUES (:c_id, :p_id, :o_id, 1)';
        $stm = oci_parse($con, $query);
        oci_bind_by_name($stm, ':c_id', $cart_id, -1);
        oci_bind_by_name($stm, ':p_id', $pdt_id, -1);
        oci_bind_by_name($stm, ':o_id', $order_id, -1);
    }
    else{// add to quantity
        $quantity++;
        $query = 'UPDATE has_product_in_cart
        SET quantity = :qnt
        WHERE pdt_id = :id AND cart_id = :cc_id';
        $stm = oci_parse($con, $query);

        oci_bind_by_name($stm, ':qnt', $quantity, -1);
        oci_bind_by_name($stm, ':id', $pdt_id, -1);
        oci_bind_by_name($stm, ':cc_id', $cart_id, -1);
    }

    // INSERT INTO has_product_in_cart(cart_id,pdt_id,order_id) VALUES (1,1,1);
    // if(new product)
    // $query = 'INSERT INTO has_product_in_cart VALUES (:c_id, :p_id, :o_id, 1)';

    echo $query;

    if (!$stm) {
        $m = oci_error($con);
        trigger_error('Could not parse statement: '. $m['message'], E_USER_ERROR);
    }
    $r = oci_execute($stm);
    if (!$r) {
        $m = oci_error($stm);
        trigger_error('Could not execute statement: '. $m['message'], E_USER_ERROR);
    }
    echo "<head>";
        echo "<title>done</title>";
        echo "<meta http-equiv = \"refresh\" content = \"0; url = ../customer/cart.php?pdt_id=$pdt_id\" />";
    echo "</head>";
    

   
?>