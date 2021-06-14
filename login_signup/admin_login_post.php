
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

    // Check if the form is submitted
    if ( isset( $_POST['submit'] ) ) {



        $admin_name = $_REQUEST['name'];
        $admin_password = $_REQUEST['pass'];
        // $check = $_REQUEST['chk'];

        // echo   $cst_email .' ' . $cst_password;

        // validation
        

        $sql = 'SELECT admin_name,admin_password'.
        ' FROM admin_login '.
        ' WHERE admin_name = :nm AND admin_password = :ps';
        
        $stmt = oci_parse($con, $sql);
        
        oci_bind_by_name($stmt, ':nm', $admin_name, -1);
        oci_bind_by_name($stmt, ':ps', $admin_password, -1);
        
        
        // echo $sql;


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


        if($res_nm == 2){ // valid input
            // echo $res_nm . "valid user";
            oci_commit($con);
            oci_free_statement($stmt);
            oci_close($con);

            //-------------------redirect
            echo "<head>";
            echo "<meta http-equiv = \"refresh\" content = \"0; url = ../admin/index.php\" />";
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
                                echo "<label for=\"exampleInputEmail1\" class=\"form-label\">Name</label>";
                                echo "<input type=\"text\" name=\"name\" placeholder=\"Enter name\" class=\"form-control\" id=\"exampleInputEmail1\" aria-describedby=\"emailHelp\">";
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
            echo "<head>";
            echo "<title>done</title>";
            echo "<meta http-equiv = \"refresh\" content = \"3; url = admin_login.php\" />";
            echo "</head>";
            exit;
        }

    }


?>
