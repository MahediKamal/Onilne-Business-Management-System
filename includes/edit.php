<?php
    require_once 'connection.php';

    $pk_field = $_GET['pk_nme'];
    $pk_val = $_GET['pk_val'];
    $table = $_GET['tbl'];


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

    echo " edited from $table where PK is $pk_field and PK value is $pk_val";

?>