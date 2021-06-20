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
    require_once '../includes/connection.php';
    require_once '../includes/function.php';

    if ( isset( $_POST['submit'] ) ) {
        $ac_num = $_REQUEST['ac_num'];
        $payment_type = $_REQUEST['payment_type'];
        $delivary = $_REQUEST['delivary'];
        echo $ac_num . ' ' . $payment_type .' ' . $delivary .' '. $cst_id;
        // echo "doe";

        //update billing_info, order_info and courier table
        // ---------------update billing_info
        $sql = 'UPDATE billing_info 
        SET payment_type = :typ ,pin_number = :ac_nm 
        WHERE billing_id = :b_id';

        $stmt = oci_parse($con, $sql);

        oci_bind_by_name($stmt, ':typ', $payment_type, -1);
        oci_bind_by_name($stmt, ':ac_nm', $ac_num, -1);
        oci_bind_by_name($stmt, ':b_id', $billing_id, -1);
        
        $rc = oci_execute($stmt);
        if(!$rc){
            $e = oci_error($stmt);
            var_dump($e);
        }

        //-------------------update courier
        $sql = 'UPDATE courier 
        SET courier_company = :cmp 
        WHERE courier_id = :c_id';

        $stmt = oci_parse($con, $sql);
        oci_bind_by_name($stmt, ':cmp', $delivary, -1);
        oci_bind_by_name($stmt, ':c_id', $courier_id, -1);
        
        $rc = oci_execute($stmt);
        if(!$rc){
            $e = oci_error($stmt);
            var_dump($e);
        }
        //--------------order_info
        /*
        order_id  
        order_date 
        estimated_date
        delivery_date 
        freight_charge 
        payment_status
        total_discount 
        order_cancel 
        cst_id
        courier_id 
        */

        $sql = "UPDATE order_info
        SET order_date=sysdate ,estimated_date=sysdate+5 ,delivery_date=sysdate+5 ,freight_charge='1$' ,payment_status='due' ,total_discount= '1$',
        order_cancel='NO' 
        WHERE order_id= :o_id";

        // echo $sql;
        $stmt = oci_parse($con, $sql);
        oci_bind_by_name($stmt, ':o_id', $order_id, -1);
        
        $rc = oci_execute($stmt);
        if(!$rc){
            $e = oci_error($stmt);
            var_dump($e);
        }

        oci_commit($con);



        oci_free_statement($stmt);
        oci_close($con);

        echo "<h1>Congrats</h1>";
        echo "<head>";
            echo "<title>done</title>";
            echo "<meta http-equiv = \"refresh\" content = \"5; url = ./index.php\" />";
        echo "</head>";
        exit;

    }

?>