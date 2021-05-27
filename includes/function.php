<?php

    function CreateTable_av($query, $con, $action){
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
        // creating table
        echo "<table class=\"table table-hover table-bordered\">";
        $ncols = oci_num_fields($s);
        echo "<thead>";
        echo "<tr>\n";
        for ($i = 1; $i <= $ncols; ++$i) {
            $colname = oci_field_name($s, $i);
            echo "  <th scope=\"col\">".htmlspecialchars($colname,ENT_QUOTES|ENT_SUBSTITUTE)."</th>\n";
        }

        if($action == 1){ // checking if we need Action column or not
            echo "<th scope=\"col\">Action</tr>";
        }
        
        echo "</tr>\n";
        echo "</thead>";
        echo "<tbody>";
        while (($row = oci_fetch_array($s, OCI_ASSOC+OCI_RETURN_NULLS)) != false) {
            echo "<tr>\n";
            foreach ($row as $item) {
                echo "<td>";
                echo $item!==null?htmlspecialchars($item, ENT_QUOTES|ENT_SUBSTITUTE):"&nbsp;";
                echo "</td>\n";
            }
            if($action == 1){ // adding button in action column
                echo "<td>";
                echo " <button type=\"button\" class=\"btn btn-outline-success btn-sm\">Edit</button> ";
                echo " <button type=\"button\" class=\"btn btn-outline-danger btn-sm\">Delete</button> ";

                echo "</td>\n";
            }
            echo "</tr>\n";
        }

        echo "</tbody>";
        echo "</table>";
    }

    function create_product_chard_av($query, $con){
        

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
        
        $ncols = oci_num_fields($s);
       
        
        echo "<div class=\"row\">";
        while (($row = oci_fetch_array($s, OCI_ASSOC+OCI_RETURN_NULLS)) != false) {
            
            foreach ($row as $item) {
                echo "<div class=\"col-sm-3\">";
                echo "<div class=\"card text-white bg-dark\" style=\"width: 18rem;\">";
                    echo "<img src=\"../images/ER_diagram.png\" class=\"card-img-top\" alt=\"...\">";
                    echo "<div class=\"card-body\">";
                        echo $item!==null?htmlspecialchars($item, ENT_QUOTES|ENT_SUBSTITUTE):"&nbsp;";
                        echo "<a href=\"#\" class=\"btn btn-primary\">Go somewhere</a>";
                    echo "</div>";
                echo "</div>";
                echo "</div>";
            }
            
        }
        echo "</div>";
    }


?>