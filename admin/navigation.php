<?php
    require_once '../includes/header.php';
?>
<style>
 @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');
*{
    padding:0;
    margin:0;
    box-sizing:border-box;
    font-family:'Poppins';
}
body{
    background-color:rgb(230, 244, 245);
}
nav{
    width:100%;
    height:50px;
    background-color:black;
    line-height:50px;
    padding:0px 100px;
    
    z-index:1;
}
nav ul{
    float:right;
}
nav ul li{
    display:inline-block;
    list-style:none;
}
nav ul li a{
    color:white;
    text-decoration:none;
    font-size:17px;
    text-transform:uppercase;
    padding:0px 25px;
}
nav ul li a:hover{
    color:rgb(182, 220, 222);
}
.cus{
    padding:0;
    margin:5px ;
}
</style>

<body>
<nav>
   <ul>
   <li><a href="../index.php">Home</a></li>
   <li><a href="customer_details_table.php">Customers</a></li>
   <li><a href="product_table.php">Products</a></li>
   <li><a href="supplier_table.php">Suppliers</a></li>
   <?php echo "<li>";
        echo "<i class=\"fa fa-user-circle-o fa-lg\" aria-hidden=\"true\" style=\"color:#00cc6a\">";
        echo"<span class=\"badge badge-warning\" style=\"color:#00cc6a\">$admin_name</span></li></i>"; 
    ?>
   <!-- <li><i class="fa fa-user-circle-o" aria-hidden="true" style="color:#00cc6a"></i></li> -->
   </ul>
  </nav>

</body>

<?php
    echo "<div class=\"cus\">";
        echo "<h2>$table_title</h2>";
    echo "</div>";
?>
  

  