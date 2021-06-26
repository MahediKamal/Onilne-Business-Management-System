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
    echo "<h1> current: ";
    foreach ($row as $item) {
        echo "<td> [";
        echo $item!==null?htmlspecialchars($item, ENT_QUOTES|ENT_SUBSTITUTE):"&nbsp;";
        echo "] </td>\n";
    }
    echo "</h1>";


    if($pk_field == "SUPPLIER_ID"){
        // ..........................posting new value..........................
        echo "<form action=\"../admin/post_into_supplier_table.php\" method=\"post\">";
            echo "<input type=\"text\" name=\"supplier_id\" required placeholder=$row[SUPPLIER_ID] />";
            echo "<input type=\"text\" name=\"supplier_name\" required placeholder=$row[SUPPLIER_NAME] />";

            echo "<input type=\"text\" name=\"supplier_company\" required placeholder=$row[SUPPLIER_COMPANY] />";
            echo "<input type=\"tel\" name=\"supplier_phone\" required pattern=\"[0]{1}[0-9]+\" placeholder=$row[SUPPLIER_PHONE] />";
            echo "<input type=\"text\" name=\"supplier_country\" required  placeholder=$row[SUPPLIER_COUNTRY] />";
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
    else if($pk_field == "PDT_ID"){
        // echo "edid product";

        echo "<form action=\"../admin/update_product.php?pdt_id=$pk_val\" method=\"post\" class=\"form\">";
            // <!-- <input type="text" name="PDT_ID" placeholder="id" /> -->
            echo "<input type=\"text\" name=\"PDT_NAME\" placeholder=\"NAME\" />";

            echo "<input type=\"text\" name=\"UNIT_ORDER\" placeholder=\"UNIT_ORDER\" />";
            echo "<input type=\"text\" name=\"PDT_DESCRIPTION\" placeholder=\"description\" />";
            echo "<input type=\"text\" name=\"PDT_QUANTITY\" placeholder=\"quantity\" />";
            echo "<input type=\"text\" name=\"PDT_PICTURE\" placeholder=\"picture\" />";

            echo "<input type=\"text\" name=\"PDT_PRICE\" placeholder=\"price\" />";
            echo "<input type=\"text\" name=\"PDT_WEIGHT\" placeholder=\"weight\" />";
            echo "<input type=\"text\" name=\"PDT_STOCK\" placeholder=\"stock\" />";
            echo "<input type=\"text\" name=\"PDT_DISCOUNT\" placeholder=\"discount\" />";
            echo "<input type=\"text\" name=\"CATEGORY_ID\" placeholder=\"CATEGORY_ID\" />";
            echo "<input type=\"text\" name=\"SUPPLIER_ID\" placeholder=\"SUPPLIER_ID\" />";
            
            echo "<input type=\"submit\" name=\"submit\" class=\"btn btn-outline-success btn-sm\"/>";
        echo "</form>";
        /*
        UPDATE
            table_name
        SET
            column1 = value1,
            column2 = value2,
            column3 = value3,
            ...
        WHERE
            condition;
        */
    }
    else if($pk_field == "ORDER_ID"){
        // order_date=
        if(isset($_GET['date'])){
            $query = "UPDATE order_info 
            SET delivery_date = sysdate
            WHERE order_id = $pk_val";
            echo "order update";
        }else{
            $query = "UPDATE order_info 
            SET payment_status = 'paid'
            WHERE order_id = $pk_val";
        }
        // echo "order update";
       

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
            echo "<meta http-equiv = \"refresh\" content = \"0; url = ../admin/order_table.php\" />";
        echo "</head>";
    }

    // echo " edited from $table where PK is $pk_field and PK value is $pk_val";

?>