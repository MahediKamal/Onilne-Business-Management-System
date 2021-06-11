<?php
    require_once 'connection.php';

    $pk_field = $_GET['pk_nme'];
    $pk_val = $_GET['pk_val'];
    $table = $_GET['tbl'];

    // $page;
    // if($table == "supplier_info") $page = "supplier_table";
    // else if($table == "customer") $page = "customer_details_table";
    // echo "<head>";
    //     echo "<title>done</title>";
    //     echo "<meta http-equiv = \"refresh\" content = \"0; url = ../admin/$page.php\" />";
    // echo "</head>";


    $query = "SELECT * FROM $table WHERE $pk_field = $pk_val";

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

    // ...............showing current row info..................................
    $row = oci_fetch_array($s, OCI_ASSOC+OCI_RETURN_NULLS);
    foreach ($row as $item) {
        echo "<td>";
        echo $item!==null?htmlspecialchars($item, ENT_QUOTES|ENT_SUBSTITUTE):"&nbsp;";
        echo "</td>\n";
    }


    if($pk_field == "SUPPLIER_ID"){
        // ..........................posting new value..........................
        echo "<form action=\"../admin/post_into_supplier_table.php\" method=\"post\">";
            echo "<input type=\"text\" name=\"supplier_id\" placeholder=$row[SUPPLIER_ID] />";
            echo "<input type=\"text\" name=\"supplier_name\" placeholder=$row[SUPPLIER_NAME] />";

            echo "<input type=\"text\" name=\"supplier_company\" placeholder=$row[SUPPLIER_COMPANY] />";
            echo "<input type=\"text\" name=\"supplier_phone\" placeholder=$row[SUPPLIER_PHONE] />";
            echo "<input type=\"text\" name=\"supplier_country\" placeholder=$row[SUPPLIER_COUNTRY] />";
            echo "<input type=\"submit\" name=\"submit\" class=\"btn btn-outline-success btn-sm\"/>";
        echo "</form>";
        // .......deleting new value.................
        $query = "DELETE FROM $table WHERE $pk_field = $pk_val";
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
    }

    else if($pk_field == "CST_ID"){
        // ..........................posting new value..........................
        echo "<form action=\"../admin/post_into_customer_table.php\" method=\"post\">";
            echo "<input type=\"text\" name=\"cst_id\" placeholder=$row[CST_ID] />";
            echo "<input type=\"text\" name=\"cst_name\" placeholder=$row[CST_NAME] />";

            echo "<input type=\"text\" name=\"cst_phone\" placeholder=$row[CST_PHONE] />";
            echo "<input type=\"text\" name=\"cst_email\" placeholder=$row[CST_EMAIL] />";
            echo "<input type=\"text\" name=\"cst_city\" placeholder=$row[CST_CITY] />";
            echo "<input type=\"text\" name=\"cst_houseno\" placeholder=$row[CST_HOUSENO] />";
            echo "<input type=\"text\" name=\"cst_street\" placeholder=$row[CST_STREET] />";
            echo "<input type=\"text\" name=\"cst_password\" placeholder=$row[CST_PASSWORD] />";

            echo "<input type=\"submit\" name=\"submit\" class=\"btn btn-outline-success btn-sm\"/>";
        echo "</form>";
        // .......deleting new value.................
        $query = "DELETE FROM $table WHERE $pk_field = $pk_val";
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
    }

    echo " edited from $table where PK is $pk_field and PK value is $pk_val";

?>