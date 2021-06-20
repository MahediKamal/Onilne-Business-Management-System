<style>
            *{
                padding: 0;
                margin: 0;
                box-sizing: border-box;
            }
            body{
                background-color: rgb(219, 226, 226);
            }
            .row{
                background-color: white;
                border-radius: 30px;
                box-shadow: 12px 12px 22px grey;
            }
            img{
                border-top-left-radius: 30px;
                border-bottom-left-radius: 30px;
            }
            .btn1{
                border: none;
                outline: none;
                height: 50px;
                width: 100%;
                background-color: black;
                color: white;
                border-radius: 4px;
                font-weight: bold;
            }
            .btn1:hover{
                background: white;
                border: 1px solid;
                color: black;
            }
        .font-weight-bold {
            color: black;
            padding-top: 7px;
            margin-left: 25px;
            padding-bottom: 4px;
    
        }
</style>

<?php 
    // $title = "signup";
    require_once '../includes/connection.php';
    require_once '../includes/header.php';
    require_once '../includes/function.php';

    // Check if the form is submitted
    if ( isset( $_POST['submit'] ) ) {
        // $cst_id = $_REQUEST['cst_id'];
        $cst_name = $_REQUEST['cst_name'];
        $cst_phone = $_REQUEST['cst_phone'];
        $cst_email = $_REQUEST['cst_email'];
        $cst_city = $_REQUEST['cst_city'];
        $cst_houseno = $_REQUEST['cst_houseno'];
        $cst_street = $_REQUEST['cst_street'];
        $cst_password = $_REQUEST['cst_password'];

        // echo   $supplier_id .' ' . $supplier_name . ' ' . $supplier_company . ' ' . $supplier_phone . ' '.$supplier_country;

        // .........................validation..........

        // $sql = 'SELECT cst_id FROM customer WHERE cst_phone = :phn  OR cst_email = :eml';
        $sql = 'SELECT cst_id FROM customer WHERE cst_email = :eml';

        $stmt = oci_parse($con, $sql);
        
        // oci_bind_by_name($stmt, ':phn', $cst_phone, -1);
        oci_bind_by_name($stmt, ':eml', $cst_email, -1);
        
        $rc = oci_execute($stmt);

        if(!$rc){
            $e = oci_error($stmt);
            var_dump($e);
        }



        $res_nm = 0;
        while (($row = oci_fetch_array($stmt, OCI_ASSOC+OCI_RETURN_NULLS)) != false) {
            foreach ($row as $item) {
                $res_nm++;
            }
        }

        // echo $res_nm . ' -- ';
        if($res_nm > 0){ // invalid signup
            // -------------------warning
            echo "<div class=\"alert alert-danger\" role=\"alert\">";
                echo "Looks like your password or mail is already in use !\n Try again.";
            echo "</div>";
            // ------------------------from ----------
            echo "<section class=\"Form my-5 mx-5\">";
                echo "<div class=\"container\">";
                    echo "<div class=\"row\">";
                        echo "<div class=\"col-lg-5 px-0\">";
                            echo "<img src=\"https://img.freepik.com/free-photo/beautiful-asian-woman-carrying-colorful-bags-shopping-online-with-mobile-phone_8087-3877.jpg?size=626&ext=jpg\"  height=\"550\" width=\"500\" alt=\"\" >";
                        echo "</div>";
                        echo "<div class=\"col-lg-7 px-5 \">";
                            echo "<h1 class=\"font-weight-bold \">Signup</h1>";

                            // <!-- ............................form.................... -->
                            echo "<form action=\"customer_post_signup.php\" method=\"post\">";
                                echo "<div class=\"form-row\">";
                                echo "<div class=\"col-lg-7\">";
                                echo " <input type=\"number\" name=\"cst_id\" placeholder=\"ID\" class=\"form-control my-2 p-2 mx-4\" >";
                                echo "</div>";
                                echo "<div class=\"form-row\">";
                                echo "<div class=\"col-lg-7\">";
                                echo "<input type=\"text\" name=\"cst_name\" placeholder=\"Name\" class=\"form-control my-2 p-2 mx-4\">";
                                echo "</div>";
                                echo "<div class=\"form-row\">";
                                echo "<div class=\"col-lg-7\">";
                                echo "<input type=\"number\" name=\"cst_phone\" placeholder=\"Phone-number\" class=\"form-control my-2 p-2 mx-4\">";
                                echo "</div>";
                                echo "<div class=\"form-row\">";
                                echo "<div class=\"col-lg-7\">";
                                echo "<input type=\"email\" name=\"cst_email\" placeholder=\"Email\" class=\"form-control my-2 p-2 mx-4\">";
                                echo "</div>";
                                echo " <div class=\"form-row\">";
                                echo "<div class=\"col-lg-7\">";
                                echo "<input type=\"text\" name=\"cst_city\" placeholder=\"City\" class=\"form-control my-2 p-2 mx-4\">";
                                echo "</div>";
                                echo "<div class=\"form-row\">";
                                echo " <div class=\"col-lg-7\">";
                                echo "<input type=\"number\" name=\"cst_houseno\" placeholder=\"Holding Number\" class=\"form-control my-2 p-2 mx-4\">";
                                echo " </div>";

                                echo "<div class=\"form-row\">";
                                echo "<div class=\"col-lg-7\">";
                                echo "<input type=\"text\" name=\"cst_street\" placeholder=\"Street Number\" class=\"form-control my-2 p-2 mx-4\">";
                                echo "</div>";
                                echo "<div class=\"form-row\">";
                                echo "<div class=\"col-lg-7\">";
                                echo "<input type=\"text\" name=\"cst_password\" placeholder=\"*********\" class=\"form-control my-2 p-2 mx-4\">";
                                echo "</div>";


                                echo " <div class=\"form-row\">";
                                echo "<div class=\"col-lg-7 mx-4 my-3\">";
                                                    
                                echo "<input class=\"btn1\" type=\"submit\" name=\"submit\">";
                                                                
                                                            

                                echo "</div>";                    
                                echo "</div>";
                            
                        echo "</form>";
                        echo "</div>";
                    echo "</div>";
                echo "</div>";

            echo "</section>";

            //////-   --- - 
            oci_commit($con);
            oci_free_statement($stmt);
            oci_close($con);
            //-------------------redirect
            echo "<head>";
            echo "<title>done</title>";
            echo "<meta http-equiv = \"refresh\" content = \"3; url = customer_signup.php\" />";
            echo "</head>";

        }

        //////////// inserting in detabase
        else{
            // ------------------getting next cart_id
            $sql = 'SELECT MAX(cart_id) FROM cart';
            $stmt = oci_parse($con, $sql);
            $rc = oci_execute($stmt);
            if(!$rc){
                $e = oci_error($stmt);
                var_dump($e);
            }
            $cart_id = 0;
            while (($row = oci_fetch_array($stmt, OCI_ASSOC+OCI_RETURN_NULLS)) != false) {
                foreach ($row as $item) {
                    $cart_id = htmlspecialchars($item, ENT_QUOTES|ENT_SUBSTITUTE);
                }
            }
            // ------------------getting next order_id
            $sql = 'SELECT MAX(order_id) FROM order_info';
            $stmt = oci_parse($con, $sql);
            $rc = oci_execute($stmt);
            if(!$rc){
                $e = oci_error($stmt);
                var_dump($e);
            }
            $order_id = 0;
            while (($row = oci_fetch_array($stmt, OCI_ASSOC+OCI_RETURN_NULLS)) != false) {
                foreach ($row as $item) {
                    $order_id = htmlspecialchars($item, ENT_QUOTES|ENT_SUBSTITUTE);
                }
            }
            // ------------------getting next courier_id
            $sql = 'SELECT MAX(courier_id) FROM courier';
            $stmt = oci_parse($con, $sql);
            $rc = oci_execute($stmt);
            if(!$rc){
                $e = oci_error($stmt);
                var_dump($e);
            }
            $courier_id = 0;
            while (($row = oci_fetch_array($stmt, OCI_ASSOC+OCI_RETURN_NULLS)) != false) {
                foreach ($row as $item) {
                    $courier_id = htmlspecialchars($item, ENT_QUOTES|ENT_SUBSTITUTE);
                }
            }
            // ------------------getting next billing_id
            $sql = 'SELECT MAX(billing_id) FROM billing_info';
            $stmt = oci_parse($con, $sql);
            $rc = oci_execute($stmt);
            if(!$rc){
                $e = oci_error($stmt);
                var_dump($e);
            }
            $billing_id = 0;
            while (($row = oci_fetch_array($stmt, OCI_ASSOC+OCI_RETURN_NULLS)) != false) {
                foreach ($row as $item) {
                    $billing_id = htmlspecialchars($item, ENT_QUOTES|ENT_SUBSTITUTE);
                }
            }
            
            ///------------------------------end-------------------
            $cart_id++; $order_id++; $courier_id++; $billing_id++;

            // $sql = 'INSERT INTO customer (cst_id, cst_name, cst_phone, cst_email, cst_city, cst_houseno, cst_street, cst_password )'.
            // 'VALUES (:id,:nme, :phn, :eml, :cty, :hus, :str,:pss)';

            // --------------insert in customer table
            $sql = 'INSERT INTO customer (cst_id, cst_name, cst_email, cst_city, cst_houseno, cst_street) '.
            'VALUES (cst_id_sequence.nextval, :nme, :eml, :cty, :hus, :str)';
            $stmt = oci_parse($con, $sql);
            oci_bind_by_name($stmt, ':nme', $cst_name, -1);
            oci_bind_by_name($stmt, ':eml', $cst_email, -1);
            oci_bind_by_name($stmt, ':cty', $cst_city, -1);
            oci_bind_by_name($stmt, ':hus', $cst_houseno, -1);
            oci_bind_by_name($stmt, ':str', $cst_street, -1);
            $rc = oci_execute($stmt);
            if(!$rc){
                $e = oci_error($stmt);
                var_dump($e);
            }
            //////////
            // ------------------getting next customer_id
            $sql = 'SELECT MAX(cst_id) FROM customer';
            $stmt = oci_parse($con, $sql);
            $rc = oci_execute($stmt);
            if(!$rc){
                $e = oci_error($stmt);
                var_dump($e);
            }
            $cst_id = 0;
            while (($row = oci_fetch_array($stmt, OCI_ASSOC+OCI_RETURN_NULLS)) != false) {
                foreach ($row as $item) {
                    $cst_id = htmlspecialchars($item, ENT_QUOTES|ENT_SUBSTITUTE);
                }
            }

            // --------------insert in login table
            $sql = 'INSERT INTO login (login_id, login_name, login_password, cst_id) '.
            'VALUES (login_id_sequence.nextval, :nme, :pss, :c_id)';
            $stmt = oci_parse($con, $sql);
            oci_bind_by_name($stmt, ':nme', $cst_name, -1);
            oci_bind_by_name($stmt, ':pss', $cst_password, -1);
            oci_bind_by_name($stmt, ':c_id', $cst_id, -1);
            $rc = oci_execute($stmt);
            if(!$rc){
                $e = oci_error($stmt);
                var_dump($e);
            }

            // --------------insert in customer_phone table
            $sql = 'INSERT INTO customer_phone (cst_id, cst_phone) '.
            'VALUES (:c_id, :phn)';
            $stmt = oci_parse($con, $sql);
            oci_bind_by_name($stmt, ':c_id', $cst_id, -1);
            oci_bind_by_name($stmt, ':phn', $cst_phone, -1);
            $rc = oci_execute($stmt);
            if(!$rc){
                $e = oci_error($stmt);
                var_dump($e);
            }

            session_start();
            $_SESSION['customer_mail'] = $cst_email;
            $_SESSION['customer_password'] = $cst_password;
            $_SESSION['customer_name'] = $cst_name;
            $_SESSION['cst_id'] = $cst_id;
            $_SESSION['cart_id'] = $cart_id;
            $_SESSION['orde_id'] = $order_id;
            $_SESSION['billing_id'] = $billing_id;
            $_SESSION['courier_id'] = $courier_id;

            //--------------- dummy insert for signup
            insert_dummy_row_into_billing_info_av($billing_id, $con);
            // // cart_id,pdt_id,order_id
            insert_dummy_row_into_cart_av($cart_id, $con);
            insert_dummy_row_into_courier_av($courier_id, $con);
            insert_dummy_row_into_order_info_av($order_id,$con);


            oci_commit($con);
            oci_free_statement($stmt);
            oci_close($con);

            echo "<head>";
                echo "<title>done</title>";
                echo "<meta http-equiv = \"refresh\" content = \"0; url = ../customer/index.php\" />";
            echo "</head>";
        }

        exit;
    }


?>
