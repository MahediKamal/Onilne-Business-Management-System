<?php 
    $title = "product:add";
    require_once '../includes/connection.php';

    // Check if the form is submitted
    if ( isset( $_POST['submit'] ) ) {

        $PDT_ID = $_GET['pdt_id'];
        // $PDT_ID = $_REQUEST['PDT_ID'];
        $PDT_NAME = $_REQUEST['PDT_NAME'];
        $UNIT_ORDER = $_REQUEST['UNIT_ORDER'];
        $PDT_DESCRIPTION = $_REQUEST['PDT_DESCRIPTION'];
        $PDT_QUANTITY = $_REQUEST['PDT_QUANTITY'];
        $PDT_PICTURE = $_REQUEST['PDT_PICTURE'];
        $PDT_PRICE = $_REQUEST['PDT_PRICE'];
        $PDT_WEIGHT = $_REQUEST['PDT_WEIGHT'];
        $PDT_STOCK = $_REQUEST['PDT_STOCK'];
        $PDT_DISCOUNT = $_REQUEST['PDT_DISCOUNT'];
        $CATEGORY_ID = $_REQUEST['CATEGORY_ID'];
        $SUPPLIER_ID = $_REQUEST['SUPPLIER_ID'];

        
        // echo    $PDT_NAME . ' ' . $UNIT_ORDER . ' ' . $PDT_STOCK . ' '.$PDT_DISCOUNT;

        //////////// update in detabase
        // $sql = 'INSERT INTO product (PDT_ID, PDT_NAME, UNIT_ORDER, PDT_DESCRIPTION, PDT_QUANTITY, '.
        // 'PDT_PICTURE, PDT_PRICE, PDT_WEIGHT, PDT_STOCK, PDT_DISCOUNT, CATEGORY_ID, SUPPLIER_ID)'. 
        // 'VALUES (pdt_id_sequence.nextval, :nme, :ord, :dsc, :qnt, :pic, :prc, :wt, :stk, :dis, :c_id, :s_id)';
        $sql = 'UPDATE product
        SET PDT_NAME = :nme, UNIT_ORDER = :ord, PDT_DESCRIPTION = :dsc, PDT_QUANTITY = :qnt, PDT_PICTURE = :pic,
        PDT_PRICE = :prc, PDT_WEIGHT = :wt, PDT_STOCK = :stk, PDT_DISCOUNT = :dis, CATEGORY_ID = :c_id, SUPPLIER_ID = :s_id
        WHERE pdt_id = :id';

        echo $sql;
        $stmt = oci_parse($con, $sql);

        oci_bind_by_name($stmt, ':id', $PDT_ID, -1);
        oci_bind_by_name($stmt, ':nme', $PDT_NAME, -1);
        oci_bind_by_name($stmt, ':ord', $UNIT_ORDER, -1);
        oci_bind_by_name($stmt, ':dsc', $PDT_DESCRIPTION, -1);
        oci_bind_by_name($stmt, ':qnt', $PDT_QUANTITY, -1);
        oci_bind_by_name($stmt, ':pic', $PDT_PICTURE, -1);
        oci_bind_by_name($stmt, ':prc', $PDT_PRICE, -1);
        oci_bind_by_name($stmt, ':wt', $PDT_WEIGHT, -1);
        oci_bind_by_name($stmt, ':stk', $PDT_STOCK, -1);
        oci_bind_by_name($stmt, ':dis', $PDT_DISCOUNT, -1);
        oci_bind_by_name($stmt, ':c_id', $CATEGORY_ID, -1);
        oci_bind_by_name($stmt, ':s_id', $SUPPLIER_ID, -1);


        $rc = oci_execute($stmt);
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
