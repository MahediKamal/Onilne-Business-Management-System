<?php 
    // $title = "signup";
    require_once '../includes/connection.php';

    // Check if the form is submitted
    if ( isset( $_POST['submit'] ) ) {


        $cst_id = $_REQUEST['cst_id'];
        $cst_name = $_REQUEST['cst_name'];
        $cst_phone = $_REQUEST['cst_phone'];
        $cst_email = $_REQUEST['cst_email'];
        $cst_city = $_REQUEST['cst_city'];
        $cst_houseno = $_REQUEST['cst_houseno'];
        $cst_street = $_REQUEST['cst_street'];
        $cst_password = $_REQUEST['cst_password'];

        // echo   $supplier_id .' ' . $supplier_name . ' ' . $supplier_company . ' ' . $supplier_phone . ' '.$supplier_country;

        //////////// inserting in detabase
        



        $sql = 'INSERT INTO customer (cst_id, cst_name, cst_phone, cst_email, cst_city, cst_houseno, cst_street, cst_password )'.
        'VALUES (:id,:nme, :phn, :eml, :cty, :hus, :str,:pss)';
      
        $stmt = oci_parse($con, $sql);
        
        oci_bind_by_name($stmt, ':id', $cst_id, -1);
        oci_bind_by_name($stmt, ':nme', $cst_name, -1);
        oci_bind_by_name($stmt, ':phn', $cst_phone, -1);
        oci_bind_by_name($stmt, ':eml', $cst_email, -1);
        oci_bind_by_name($stmt, ':cty', $cst_city, -1);
        oci_bind_by_name($stmt, ':hus', $cst_houseno, -1);
        oci_bind_by_name($stmt, ':str', $cst_street, -1);
        oci_bind_by_name($stmt, ':pss', $cst_password, -1);
        
        
        echo $sql;
        

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
            echo "<meta http-equiv = \"refresh\" content = \"0; url = ../customer/index.php\" />";
        echo "</head>";

        exit;
    }


?>
