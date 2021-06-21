
<style>
        body{
   background-image: url(https://images.unsplash.com/photo-1522441815192-d9f04eb0615c?ixid=MnwxMjA3fDB8MHxzZWFyY2h8Nnx8YmFja2dyb3VuZHxlbnwwfHwwfHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60) ;
   background-size: cover;
   background-attachment: fixed;

    }
    .form-container{
        border: 1px solid white;
        padding: 40px 60px;
        margin-top: 20vh;
        box-shadow: -1px 4px 26px 11px rgba(0,0,0,0.25);
    }
    .btn1
    {
        border: none;
                outline: none;
                height: 45px;
                width: 100%;
                background-color: black;
                color: white;
                border-radius: 4px;

    }
    .btn1:hover{
        background: white;
        border: 1px solid;
        color: black;
    }
</style>

<?php 
    $title = "signup";
    require_once '../includes/connection.php';
    require_once '../includes/header.php';
    require_once '../includes/function.php';

    // Check if the form is submitted
    if ( isset( $_POST['submit'] ) ) {



        $cst_email = $_REQUEST['mail'];
        $cst_password = $_REQUEST['pass'];
        // $check = $_REQUEST['chk'];

        // echo   $cst_email .' ' . $cst_password;

        // validation
        

        // $sql = 'SELECT cst_email,cst_password, cst_name'.
        // ' FROM customer '.
        // ' WHERE cst_email = :ml AND cst_password = :ps';

        $sql = 'SELECT customer.cst_name, customer.cst_email, login.login_password ' . 
        'FROM (customer ' .
        'INNER JOIN login ON ' . 
        ' customer.cst_email = :ml AND login.login_password = :ps AND customer.cst_id = login.cst_id)';
        
        
        $stmt = oci_parse($con, $sql);
        
        oci_bind_by_name($stmt, ':ml', $cst_email, -1);
        oci_bind_by_name($stmt, ':ps', $cst_password, -1);
        
        
        // echo $sql;


        $rc = oci_execute($stmt);

        if(!$rc){
            $e = oci_error($stmt);
            var_dump($e);
        }



        $res_nm = 0;
        $cst_name;
        while (($row = oci_fetch_array($stmt, OCI_ASSOC+OCI_RETURN_NULLS)) != false) {
            foreach ($row as $item) {
                $res_nm++;
                if($res_nm == 1) $cst_name = htmlspecialchars($item, ENT_QUOTES|ENT_SUBSTITUTE);
            }
        }


        if($res_nm == 3){ // -------------------- valid input
            // echo $res_nm . "valid user";
            ///------------------------------start----------------
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
            ///------------------------------end-------------------
            $cart_id++; $order_id++; $courier_id++; $billing_id++;
            

            /// initializing sesson and session variable
            session_start();
            $_SESSION['customer_mail'] = $cst_email;
            $_SESSION['customer_password'] = $cst_password;
            $_SESSION['customer_name'] = $cst_name;
            $_SESSION['cst_id'] = $cst_id;
            $_SESSION['cart_id'] = $cart_id;
            $_SESSION['orde_id'] = $order_id;
            $_SESSION['billing_id'] = $billing_id;
            $_SESSION['courier_id'] = $courier_id;
            $_SESSION['total'] = 0;

            // echo $order_id. ' ' .$cart_id . ' ' . $billing_id. ' '. $courier_id;
            // had to initialize billing_info table (as order id is foreign key of cart)
            insert_dummy_row_into_billing_info_av($billing_id, $con);
            // // cart_id,pdt_id,order_id
            insert_dummy_row_into_cart_av($cart_id, $con);
            insert_dummy_row_into_courier_av($courier_id, $con);
            insert_dummy_row_into_order_info_av($order_id,$con);


            oci_commit($con);
            oci_free_statement($stmt);
            oci_close($con);


            //-------------------redirect
            echo "<head>";
            echo "<meta http-equiv = \"refresh\" content = \"0; url = ../customer/index.php\" />";
            echo "</head>";
            
            exit;

        }else{ // invalid input
            // -------------------warning
            echo "<div class=\"alert alert-danger\" role=\"alert\">";
                echo "Invalid username or password !\n Try again.";
            echo "</div>";
            
            // -----------------form
            echo "<div class=\"container-fluid bg\">";

            echo "<div class=\"row\">";
                echo "<div class=\"col-md-4 col-sm-4 col-xs-12\"></div>";
                    echo "<div class=\"col-md-4 col-sm-4 col-xs-12\">";

                        echo "<form action=\"customer_login_post.php\" method=\"post\" class=\"form-container\">";
                            echo "<h1>Login</h1>";
                            echo "<div class=\"mb-3\">";
                                echo "<label for=\"exampleInputEmail1\" class=\"form-label\">Email</label>";
                                echo "<input type=\"email\" name=\"mail\" placeholder=\"Enter email\" class=\"form-control\" id=\"exampleInputEmail1\" aria-describedby=\"emailHelp\">";
                            echo "</div>";
                            echo "<div class=\"mb-3\">";
                                echo "<label for=\"exampleInputPassword1\" class=\"form-label\">Password</label>";
                                echo "<input type=\"password\" name=\"pass\" placeholder=\"Enter password\" class=\"form-control\" id=\"exampleInputPassword1\">";
                            echo "</div>";
                            echo "<div class=\"mb-3 form-check\">";
                                echo "<input type=\"checkbox\" name=\"chk\" class=\"form-check-input\" id=\"exampleCheck1\">";
                                echo "<label class=\"form-check-label\" for=\"exampleCheck1\">Remember me</label>";
                            echo "</div>";    
                            echo "<input class=\"btn1\" type=\"submit\" name=\"submit\">";
                        echo "</form>";

                    echo "</div>";
                    echo "<div class=\"col-md-4 col-sm-4 col-xs-12\"></div>";
                echo "</div>";
            echo "</div>";


            
            oci_commit($con);
            oci_free_statement($stmt);
            oci_close($con);
            //-------------------redirect
            // echo "<head>";
            // echo "<title>done</title>";
            // echo "<meta http-equiv = \"refresh\" content = \"3; url = customer_login.php\" />";
            // echo "</head>";
            exit;
        }

    }


?>
