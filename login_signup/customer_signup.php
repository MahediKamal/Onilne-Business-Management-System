<?php 
    $title = "signup";
    require_once '../includes/header.php';
?>

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
                        // echo "<div class=\"form-row\">";
                        // echo "<div class=\"col-lg-7\">";
                        // echo " <input type=\"number\" name=\"cst_id\" placeholder=\"ID\" class=\"form-control my-2 p-2 mx-4\" >";
                        // echo "</div>";
                        echo "<div class=\"form-row\">";
                        echo "<div class=\"col-lg-7\">";
                        echo "<input type=\"text\" name=\"cst_name\" placeholder=\"Name\" class=\"form-control my-2 p-2 mx-4\" required>";
                        echo "</div>";
                        echo "<div class=\"form-row\">";
                        echo "<div class=\"col-lg-7\">";
                        echo "<input type=\"text\" name=\"cst_phone\" placeholder=\"Phone-number\" maxlength=\"11\" minlength=\"11\" class=\"form-control my-2 p-2 mx-4\" required>";
                        echo "</div>";
                        echo "<div class=\"form-row\">";
                        echo "<div class=\"col-lg-7\">";
                        echo "<input type=\"email\" name=\"cst_email\" placeholder=\"Email\" class=\"form-control my-2 p-2 mx-4\" required>";
                        echo "</div>";
                        echo " <div class=\"form-row\">";
                        echo "<div class=\"col-lg-7\">";
                        echo "<input type=\"text\" name=\"cst_city\" placeholder=\"City\" class=\"form-control my-2 p-2 mx-4\" required>";
                        echo "</div>";
                        echo "<div class=\"form-row\">";
                        echo " <div class=\"col-lg-7\">";
                        echo "<input type=\"number\" name=\"cst_houseno\" placeholder=\"Holding Number\" class=\"form-control my-2 p-2 mx-4\" required>";
                        echo " </div>";

                        echo "<div class=\"form-row\">";
                        echo "<div class=\"col-lg-7\">";
                        echo "<input type=\"text\" name=\"cst_street\" placeholder=\"Street Number\" class=\"form-control my-2 p-2 mx-4\" required>";
                        echo "</div>";
                        echo "<div class=\"form-row\">";
                        echo "<div class=\"col-lg-7\">";
                        echo "<input type=\"password\" name=\"cst_password\" placeholder=\"Password\" maxlength=\"8\" minlength=\"8\" class=\"form-control my-2 p-2 mx-4\" required>";
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
?>

<?php require_once '../includes/footer.php'; ?>