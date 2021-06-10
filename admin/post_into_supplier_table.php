<?php 
    $title = "supplier:add";
    // require_once '../includes/header.php';
    require_once '../includes/connection.php';

    // Check if the form is submitted
    if ( isset( $_POST['submit'] ) ) {

        $supplier_id = $_REQUEST['supplier_id'];
        $supplier_name = $_REQUEST['supplier_name'];
        $supplier_company = $_REQUEST['supplier_company'];
        $supplier_phone = $_REQUEST['supplier_phone'];
        $supplier_country = $_REQUEST['supplier_country'];




        
        echo   $supplier_id .' ' . $supplier_name . ' ' . $supplier_company . ' ' . $supplier_phone . ' '.$supplier_country;

        //////////// inserting in detabase
        


        // $sql = 'INSERT INTO customer(CUSTOMER_ID, CUSTOMER_NAME, CUSTOMER_CITY) '.
        // 'VALUES(:id, :nme, :cty)';

        $sql = 'INSERT INTO supplier_info (supplier_id, supplier_name, supplier_company, supplier_phone, supplier_country)'. 
        'VALUES (:id, :nme, :cmpny, :phn, :cnt)';

        $stmt = oci_parse($con, $sql);

        oci_bind_by_name($stmt, ':id', $supplier_id, -1);
        oci_bind_by_name($stmt, ':nme', $supplier_name, -1);
        oci_bind_by_name($stmt, ':phn', $supplier_phone, -1);
        oci_bind_by_name($stmt, ':cnt', $supplier_country, -1);
        oci_bind_by_name($stmt, ':cmpny', $supplier_company, -1);


        // oci_bind_by_name($stmt, ':id', $CUSTOMER_ID);
        // oci_bind_by_name($stmt, ':nme', $CUSTOMER_NAME);
        // oci_bind_by_name($stmt, ':cty', $CUSTOMER_CITY);

        $rc = oci_execute($stmt);



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
            echo "<meta http-equiv = \"refresh\" content = \"0; url = supplier_table.php\" />";
        echo "</head>";
        exit;
    }

?>
