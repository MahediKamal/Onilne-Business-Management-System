<?php 
    $title = "login";
    require_once '../includes/header.php';
?>
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
       echo "<div class=\"container-fluid bg\">";

       echo "<div class=\"row\">";
       echo " <div class=\"col-md-4 col-sm-4 col-xs-12\"></div>";
       echo "<div class=\"col-md-4 col-sm-4 col-xs-12\">";
             //<!--form-->
             echo "<form action=\"admin_login_post.php\" method=\"post\" class=\"form-container\">";
             echo "<h1>Login</h1>";
             echo "<div class=\"mb-3\">";
             echo "<label for=\"exampleInputEmail1\" class=\"form-label\">Name</label>";
             echo "<input type=\"text\" name=\"name\" placeholder=\"Enter name\" class=\"form-control\" id=\"exampleInputEmail1\" aria-describedby=\"emailHelp\">";

             echo "</div>";
             echo "<div class=\"mb-3\">";
             echo "<label for=\"exampleInputPassword1\" class=\"form-label\">Password</label>";
             echo "<input type=\"password\" name=\"pass\" placeholder=\"Enter password\" class=\"form-control\" maxlength=\"8\" id=\"exampleInputPassword1\">";
             echo "</div>";
            
             echo "<input class=\"btn1\" type=\"submit\" name=\"submit\">";
             echo "</form>";

             echo "</div>";
             echo "<div class=\"col-md-4 col-sm-4 col-xs-12\"></div>";
             echo "</div>";
             echo "</div>";

             ?>
      <?php require_once '../includes/footer.php'; ?>

      </body>
      </html>

  
