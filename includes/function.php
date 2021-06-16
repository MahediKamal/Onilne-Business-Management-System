<?php

    function CreateTable_av($query, $con, $action, $table){
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

        $pk_field;
        for ($i = 1; $i <= $ncols; ++$i) {
            $colname = oci_field_name($s, $i);
            if($i == 1) $pk_field = htmlspecialchars($colname,ENT_QUOTES|ENT_SUBSTITUTE);
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
            $fst; $cnt = 0;
            foreach ($row as $item) {
                if($cnt == 0) $fst = $item!==null?htmlspecialchars($item, ENT_QUOTES|ENT_SUBSTITUTE):"&nbsp;";
                $cnt++;
                echo "<td>";
                echo $item!==null?htmlspecialchars($item, ENT_QUOTES|ENT_SUBSTITUTE):"&nbsp;";
                echo "</td>\n";
            }
            if($action == 1){ // adding button in action column
                echo "<td>";
                echo " <a href='../includes/edit.php?pk_nme=$pk_field&pk_val=$fst&tbl=$table' type=\"button\" class=\"btn btn-outline-success btn-sm\">Edit</a> ";
                echo " <a href='../includes/delete.php?pk_nme=$pk_field&pk_val=$fst&tbl=$table' type=\"button\" class=\"btn btn-outline-danger btn-sm\">Delete</a> ";

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
                echo " <br/> <div class=\"col-sm-3\">";
                echo "<div class=\"card text-white bg-dark\" style=\"width: 18rem;\">";
                    echo "<img src=\"../images/prd1.png\" class=\"card-img-top\" alt=\"...\">";
                    echo "<div class=\"card-body\">";
                        echo $item!==null?htmlspecialchars($item, ENT_QUOTES|ENT_SUBSTITUTE):"&nbsp;";
                        echo "<a href=\"#\" class=\"btn btn-light\">Add to cart</a>";
                    echo "</div>";
                echo "</div> <br/>";
                echo "</div>";
            }
            
        }
        echo "</div>";
    }

    function createCart_av($query, $con, $section){

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

        // price, name, img -> pdt_name, pdt_picture, pdt_price
        while (($row = oci_fetch_array($s, OCI_ASSOC+OCI_RETURN_NULLS)) != false) {
            $pdt_name; $pdt_picture; $pdt_price; $pdt_id;
            $i = 1;            
            foreach ($row as $item) {
                if($i == 2) $pdt_id = htmlspecialchars($item, ENT_QUOTES|ENT_SUBSTITUTE);
                if($i == 2) $pdt_name = htmlspecialchars($item, ENT_QUOTES|ENT_SUBSTITUTE);
                if($i == 3) $pdt_picture = htmlspecialchars($item, ENT_QUOTES|ENT_SUBSTITUTE);
                if($i == 4) $pdt_price = htmlspecialchars($item, ENT_QUOTES|ENT_SUBSTITUTE);
                $i++;
            }
            // ----------showing cart box-----------------
            echo "<div class=\"product-box\">";
            // <!--product-img------------>
                echo "<div class=\"product-img\">";
                    // <!--add-cart---->
                    echo "<a href='../includes/add_to_cart.php?pdt_id=$pdt_id&pdt_name=$pdt_name&pdt_picture=$pdt_picture&pdt_price=$pdt_price' class=\"add-cart\">";
                        echo "<i class=\"fas fa-shopping-cart\"></i>";
                    echo "</a>";
                    // <!--img------>
                echo "<img src=\"../images/$section/$pdt_picture\">";
                echo "</div>";
                // <!--product-details-------->
                echo "<div class=\"product-details\">";
                    echo "<a href=\"#\" class=\"p-name\"> $pdt_name </a>";
                    echo "<span class=\"p-price\">$pdt_price</span>";
                echo "</div>";
            echo "</div>";
        }
    }

    function create_details_cart_av(){
        // data from has_product_in_cart table
        echo "<table>";
            echo "<tr>";
                echo "<th>Product</th>";
                echo "<th>Quantity</th>";
                echo "<th>Subtotal</th>";
            echo "</tr>";
            echo "<tr>";
                echo "<td>";
                    echo "<div class=\"cart-info\">";
                        // image 
                        echo "<img src=\"../images/p-1.png\" alt=\"\"  width=\"90px\"";
                        echo "height=\"90px\" >";
                        echo "<div>";
                            // product  name, price
                            echo "<p>Basic T-shirt</p>";
                            echo "<small>Price: $50.00</small>";
                            echo "<br>";
                            echo "<a href=\"\">Remove</a>";
                        echo "</div>";
                    echo "</div>";
                echo "</td>";    
                echo "<td><input type=\"number\" value=\"1\"></td>";
                echo "<td>$50.00</td>";            
            echo "</tr>";
        echo "</table>";
    }


?>