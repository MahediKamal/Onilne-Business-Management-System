<?php
    $title = "remove from cart";
    require_once '../includes/connection.php';
    require_once '../includes/header.php';
    require_once '../includes/function.php';

    $pdt_id = $_GET['pdt_id'];

    $query = 'DELETE FROM has_product_in_cart WHERE pdt_id = :id';

        ///// 
        $stm = oci_parse($con, $query);
        oci_bind_by_name($stm, ':id', $pdt_id, -1);


        if (!$stm) {
            $m = oci_error($con);
            trigger_error('Could not parse statement: '. $m['message'], E_USER_ERROR);
        }
        // echo $stm . ' '. $query;

        $r = oci_execute($stm);
        if (!$r) {
            $m = oci_error($stm);
            trigger_error('Could not execute statement: '. $m['message'], E_USER_ERROR);
        }


        echo "<head>";
            echo "<title>done</title>";
            echo "<meta http-equiv = \"refresh\" content = \"0; url = ../customer/cart.php\" />";
        echo "</head>";

?>