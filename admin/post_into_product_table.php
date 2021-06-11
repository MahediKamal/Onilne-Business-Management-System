<?php 
    $title = "product:add";
    // require_once '../includes/header.php';
    require_once '../includes/connection.php';

    // Check if the form is submitted
    if ( isset( $_POST['submit'] ) ) {

        $PDT_ID = $_REQUEST['PDT_ID'];
        $PDT_NAME = $_REQUEST['PDT_NAME'];
        $UNIT_ORDER = $_REQUEST['UNIT_ORDER'];
        $PDT_DESCRIPTION = $_REQUEST['PDT_DESCRIPTION'];
        $PDT_QUANTITY = $_REQUEST['PDT_QUANTITY'];
        $PDT_PRICE = $_REQUEST['PDT_PRICE'];
        $PDT_WEIGHT = $_REQUEST['PDT_WEIGHT'];
        $PDT_STOCK = $_REQUEST['PDT_STOCK'];
        $PDT_DISCOUNT = $_REQUEST['PDT_DISCOUNT'];

        
        // echo   $PDT_ID .' ' . $PDT_NAME . ' ' . $UNIT_ORDER . ' ' . $PDT_STOCK . ' '.$PDT_DISCOUNT;

        //////////// inserting in detabase


        // $sql = 'INSERT INTO supplier_info (supplier_id, supplier_name, supplier_company, supplier_phone, supplier_country)'. 
        // 'VALUES (:id, :nme, :cmpny, :phn, :cnt)';
        $sql = 'INSERT INTO product (PDT_ID, PDT_NAME, UNIT_ORDER, PDT_DESCRIPTION, PDT_QUANTITY, PDT_PRICE, PDT_WEIGHT, PDT_STOCK, PDT_DISCOUNT)'. 
        'VALUES (:id, :nme, :ord, :dsc, :qnt, :prc, :wt, :stk, :dis)';

        $stmt = oci_parse($con, $sql);

        oci_bind_by_name($stmt, ':id', $PDT_ID, -1);
        oci_bind_by_name($stmt, ':nme', $PDT_NAME, -1);
        oci_bind_by_name($stmt, ':ord', $UNIT_ORDER, -1);
        oci_bind_by_name($stmt, ':dsc', $PDT_DESCRIPTION, -1);
        oci_bind_by_name($stmt, ':qnt', $PDT_QUANTITY, -1);
        oci_bind_by_name($stmt, ':prc', $PDT_PRICE, -1);
        oci_bind_by_name($stmt, ':wt', $PDT_WEIGHT, -1);
        oci_bind_by_name($stmt, ':stk', $PDT_STOCK, -1);
        oci_bind_by_name($stmt, ':dis', $PDT_DISCOUNT, -1);


        $rc = oci_execute($stmt);

        // echo $stmt;
        // echo $rc;

        // $stmt = oci_parse($con,$isql);
        // $rc=oci_execute($stmt);
            if(!$rc){
                $e = oci_error($stmt);
                var_dump($e);
            }

            oci_commit($con);

        oci_free_statement($stmt);
        oci_close($con);

        echo "<head>";
            echo "<title>done</title>";
            echo "<meta http-equiv = \"refresh\" content = \"0; url = product_table.php\" />";
        echo "</head>";
        exit;
    }

?>
