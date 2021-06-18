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
                if($i == 1) $pdt_id = htmlspecialchars($item, ENT_QUOTES|ENT_SUBSTITUTE);
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

    function create_details_cart_av($con, $cart_id){
        // data from has_product_in_cart table
        $query = 'SELECT pdt_picture, pdt_name, pdt_price FROM product '.
        'WHERE (pdt_id) in' .
        '(SELECT pdt_id FROM has_product_in_cart WHERE cart_id = :c_id)';

        ///// 
        $stm = oci_parse($con, $query);
        oci_bind_by_name($stm, ':c_id', $cart_id, -1);


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

        $ncols = oci_num_fields($stm);

        // pdt_picture, pdt_name, pdt_price
        echo "<table>";
            echo "<tr>";
                echo "<th>Product</th>";
                echo "<th>Quantity</th>";
                echo "<th>Subtotal</th>";
            echo "</tr>";
        while (($row = oci_fetch_array($stm, OCI_ASSOC+OCI_RETURN_NULLS)) != false) {
            $pdt_name; $pdt_picture; $pdt_price; 
            $i = 1;            
            foreach ($row as $item) {
                if($i == 1) $pdt_picture = htmlspecialchars($item, ENT_QUOTES|ENT_SUBSTITUTE);
                if($i == 2) $pdt_name = htmlspecialchars($item, ENT_QUOTES|ENT_SUBSTITUTE);
                if($i == 3) $pdt_price = htmlspecialchars($item, ENT_QUOTES|ENT_SUBSTITUTE);
                $i++;
            }
            // $pdt_id = 1;
            // ----------showing added product----------------
                
                echo "<tr>";
                    echo "<td>";
                        echo "<div class=\"cart-info\">";
                            // image 
                            echo "<img src=\"../images/$pdt_picture\" alt=\"\"  width=\"90px\"";
                            echo "height=\"90px\" >";
                            echo "<div>";
                                // product  name, price
                                // echo "<p>Basic T-shirt</p>";
                                // echo "<small>Price: $50.00</small>";
                                echo "<p>$pdt_name</p>";
                                echo "<small>Price: $pdt_price</small>";
                                echo "<br>";
                                echo "<a href=\"\">Remove</a>";
                            echo "</div>";
                        echo "</div>";
                    echo "</td>";    
                    echo "<td><input type=\"number\" value=\"1\"></td>";
                    echo "<td>$50.00</td>";            
                echo "</tr>";
            
            
        }
        echo "</table>";

        /////

        
    }


    function insert_dummy_row_into_billing_info_av($billing_id, $con){
            $pin_number = 1;
            $payment_type = "prepaid";

            //billing_id,payment_type,pin_number
            // $query = 'INSERT INTO cart(cart_id,total,num_of_pdt,billing_id) VALUES (:c_id,:tot,:n_pd,:b_if);';
            $sql = 'INSERT INTO billing_info(billing_id,payment_type,pin_number) VALUES (:b_id, :typ, :pin)';

            $stmt = oci_parse($con, $sql);
            
            oci_bind_by_name($stmt, ':b_id', $billing_id, -1);
            oci_bind_by_name($stmt, ':typ', $payment_type, -1);
            oci_bind_by_name($stmt, ':pin', $pin_number, -1);
            
            // if (!$s) {
            //     $m = oci_error($con);
            //     trigger_error('Could not parse statement: '. $m['message'], E_USER_ERROR);
            // }
            // echo $stmt . '    ';
            // echo $sql;
            $rc = oci_execute($stmt);
            if (!$rc) {
                $m = oci_error($stmt);
                trigger_error('Could not execute statement: '. $m['message'], E_USER_ERROR);
            }

    }
    function insert_dummy_row_into_cart_av($cart_id, $con){
            $total = "1000.00$";
            $num_of_pdt = 1;
            $billing_id = 1;

            $query = 'INSERT INTO cart(cart_id,total,num_of_pdt,billing_id) VALUES (:c_id,:tot,:n_pd,:b_if)';

            $s = oci_parse($con, $query);
            
            oci_bind_by_name($s, ':c_id', $cart_id, -1);
            oci_bind_by_name($s, ':tot', $total, -1);
            oci_bind_by_name($s, ':n_pd', $num_of_pdt, -1);
            oci_bind_by_name($s, ':b_if', $billing_id, -1);
            
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
    function insert_dummy_row_into_courier_av($courier_id, $con){
            $courier_company = "rayben"; 

            // $query = 'INSERT INTO billing_info(billing_id,payment_type,pin_number) VALUES (:b_id,:typ,:pin);'
            $query = 'INSERT INTO courier(courier_id,courier_company) VALUES (:id,:cmp)';

            $s = oci_parse($con, $query);
            
            oci_bind_by_name($s, ':id', $courier_id, -1);
            oci_bind_by_name($s, ':cmp', $courier_company, -1);
            
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
    function insert_dummy_row_into_order_info_av($order_id,$con){
            $order_date = "01-AUG-1";
            $estimated_date = "01-AUG-1";
            $delivery_date = "01-AUG-1";
            $freight_charge = "100.00$";
            $payment_status = "paid";
            $total_discount = "100.00%";
            $order_cancel = "No";
            
            $cst_id = $_SESSION['cst_id'];
            $courier_id = $_SESSION['courier_id'];


            $query = 'INSERT INTO order_info'. 
            '(order_id, order_date, estimated_date, delivery_date, freight_charge, payment_status, total_discount, order_cancel, cst_id, courier_id)'.
            'VALUES (:o_id, :o_dt, :e_dt, :d_dt, :fc, :ps, :td, :oc, :c_id, :cor_id)';

            $stmt = oci_parse($con, $query);
            
            oci_bind_by_name($stmt, ':o_id', $order_id, -1);
            oci_bind_by_name($stmt, ':o_dt', $order_date, -1);
            oci_bind_by_name($stmt, ':e_dt', $estimated_date, -1);
            oci_bind_by_name($stmt, ':d_dt', $delivery_date, -1);
            oci_bind_by_name($stmt, ':fc', $freight_charge, -1);
            oci_bind_by_name($stmt, ':ps', $payment_status, -1);
            oci_bind_by_name($stmt, ':td', $total_discount, -1);
            oci_bind_by_name($stmt, ':oc', $order_cancel, -1);
            oci_bind_by_name($stmt, ':c_id', $cst_id, -1);
            oci_bind_by_name($stmt, ':cor_id', $courier_id, -1);



            if (!$stmt) {
                $m = oci_error($con);
                trigger_error('Could not parse statement: '. $m['message'], E_USER_ERROR);
            }
            $r = oci_execute($stmt);
            if (!$r) {
                $m = oci_error($stmt);
                trigger_error('Could not execute statement: '. $m['message'], E_USER_ERROR);
            }
    }


?>