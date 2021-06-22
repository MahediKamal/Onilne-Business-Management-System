
<?php
    require_once 'connection.php';
    require_once 'function.php';

    $ph_field = $_GET['pk_nme'];
    $pk_val = $_GET['pk_val'];
    $table = $_GET['tbl'];

    if($table == "order_info"){ // we habe order_id in pk_val
        $order_id = $pk_val;
        // delete from order_info, courier, cart, billing_info
        $crt_id = find_cartID_according_to_orderID_from_HasProductInCart($order_id, $con);
        $cur_ID = find_courierID_according_to_orderID_from_orerInfo($order_id, $con);
        $billingId = find_billingId_according_to_cartID_from_cart($crt_id, $con);
        
        // ------------------delete   has_product_in_cart
        $query = "DELETE FROM has_product_in_cart WHERE cart_id = $crt_id";
        $s = oci_parse($con, $query);
        if (!$s) {
            $m = oci_error($con);
            trigger_error('Could not parse statement: '. $m['message'], E_USER_ERROR);
        }
        $r = oci_execute($s);
        if (!$r) {
            $m = oci_error($s);
            trigger_error('Could not execute statement: '. $m['message'], E_USER_ERROR);
        }
        // ------------------delete   order_info
        $query = "DELETE FROM order_info WHERE order_id = $order_id";
        $s = oci_parse($con, $query);
        if (!$s) {
            $m = oci_error($con);
            trigger_error('Could not parse statement: '. $m['message'], E_USER_ERROR);
        }
        $r = oci_execute($s);
        if (!$r) {
            $m = oci_error($s);
            trigger_error('Could not execute statement: '. $m['message'], E_USER_ERROR);
        }
        // ------------------delete   courier
        
        $query = "DELETE FROM courier WHERE courier_id = $cur_ID";
        $s = oci_parse($con, $query);
        if (!$s) {
            $m = oci_error($con);
            trigger_error('Could not parse statement: '. $m['message'], E_USER_ERROR);
        }
        $r = oci_execute($s);
        if (!$r) {
            $m = oci_error($s);
            trigger_error('Could not execute statement: '. $m['message'], E_USER_ERROR);
        }
        // ------------------delete   cart
        

        $query = "DELETE FROM cart WHERE cart_id = $crt_id";
        $s = oci_parse($con, $query);
        if (!$s) {
            $m = oci_error($con);
            trigger_error('Could not parse statement: '. $m['message'], E_USER_ERROR);
        }
        $r = oci_execute($s);
        if (!$r) {
            $m = oci_error($s);
            trigger_error('Could not execute statement: '. $m['message'], E_USER_ERROR);
        }
        // ------------------delete   billing_info
        $query = "DELETE FROM billing_info WHERE billing_id = $billingId";
        $s = oci_parse($con, $query);
        if (!$s) {
            $m = oci_error($con);
            trigger_error('Could not parse statement: '. $m['message'], E_USER_ERROR);
        }
        $r = oci_execute($s);
        if (!$r) {
            $m = oci_error($s);
            trigger_error('Could not execute statement: '. $m['message'], E_USER_ERROR);
        }
        oci_commit($con);
        oci_free_statement($s);
        oci_close($con);

        echo "<head>";
            echo "<title>done</title>";
            echo "<meta http-equiv = \"refresh\" content = \"0; url = ../customer/my_order.php\" />";
        echo "</head>";
        
    }else{
        $page;
        if($table == "supplier_info") $page = "supplier_table";
        else if($table == "customer") $page = "customer_details_table";
        
        

        $query = "DELETE FROM $table WHERE $ph_field = $pk_val";

        $s = oci_parse($con, $query);
        if (!$s) {
            $m = oci_error($con);
            trigger_error('Could not parse statement: '. $m['message'], E_USER_ERROR);
        }
        $r = oci_execute($s);
        if (!$r) {
            $m = oci_error($s);
            trigger_error('Could not execute statement: '. $m['message'], E_USER_ERROR);
        }

        // echo " deleted from $table where PK is $ph_field and PK value is $pk_val";

        oci_commit($con);
        oci_free_statement($s);
        oci_close($con);

        echo "<head>";
            echo "<title>done</title>";
            echo "<meta http-equiv = \"refresh\" content = \"0; url = ../admin/$page.php\" />";
        echo "</head>";

    }

    

    

?>