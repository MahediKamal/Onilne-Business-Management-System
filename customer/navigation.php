<?php
    require_once '../includes/connection.php';
    require_once '../includes/function.php';
    if (isset($_SESSION['customer_name'])){
        $cart_id = $_SESSION['cart_id'];
    }
?>

<html>
<head>
<meta charset="utf-8">
<meta content="IE-edge" http-equiv="X-UA-Compatible">
<meta content="width=device-width, intial-scale=1.0" name="viewport">


<!--JQuery--------------->
<script src="../js/JQuery.js"></script>
<!--fav-icon---------------->
<link rel="shortcut icon" href="images/fav-icon.png"/>
<!--using FontAwesome--------------->
<script crossorigin="anonymous" src="https://kit.fontawesome.com/c8e4d183c2.js"></script>
	<!--style----->
<style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');
    
    body{
    margin:0px;
    padding: 0px;
    font-family: poppins;
    background-color: #ffffff;
    }
    *{
        box-sizing: border-box;
    }
    ul{
        list-style: none;
    }
    a{
        text-decoration: none;
    }
    nav{
        width:100%;
        box-shadow: 2px 2px 30px rgba(0,0,0,0.05);
        z-index: 100;
    }
    .social-call{
        height: 40px;
        border: 1px solid rgba(0,0,0,0.05);
        display: flex;
        justify-content: center;
        align-items: center;
    }
    .social a{
        margin: 0px 5px;
        color: rgba(0,0,0,0.7);
        font-size: 0.9rem;
    }
    .phone{
        color: rgba(0,0,0,0.7);
        margin-left: 30px;
        font-size: 0.9rem;
    }
    .social a:hover{
        color: #0b9d8a;
        transition: all ease 0.3s;
    }
    .navigation{
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 0px 45px;
    }
    .navigation h1{
        font-family: poppins;
        font-size: xx-large;
    }
    .logo img{
        height: 30px;
    }
    .menu{
        display: flex;
    }
    .menu li{
        position: relative;
        margin: 20px;
        display: flex;
        text-transform: uppercase;
        font-weight: 500;
        text-decoration: none;
    }
    .menu li a{
        color: #555555;
    }
    .right-menu a{
        margin: 0px 10px;
        font-size: 1.2rem;
        color: rgba(0,0,0,0.7);
    }
    .pop{
        position: absolute;
        top: 43px;
        background: #0b9d8a;
        color:white;
        font-size:16px;
        margin-left:36px;
        padding:5px 10px;
        border-radius:10px;
        box-shadow:0 10px 10px rgba(0,0,0,0.1);
        opacity:0;
        pointer-events:none; 
    }
    .user:hover .pop{
        opacity: 1;
        pointer-events:auto;
    }
    .pop2{
        position: absolute;
        top: 43px;
        background: #0b9d8a;
        color:white;
        font-size:16px;
        margin-left:36px;
        padding:5px 10px;
        border-radius:10px;
        box-shadow:0 10px 10px rgba(0,0,0,0.1);
        opacity:0;
        pointer-events:none; 
    }
    .user2:hover .pop{
        opacity: 1;
        pointer-events:auto;
    }
    .menu a:hover,
    .right-menu a:hover,
    .search-cancel:hover,
    .form-cancel:hover{
        color: #0b9d8a;
        transition: all ease 0.3s;
    }
    .sale-lable{
        width:38px;
        height: 17px;
        background-color: #f76b6a;
        color: #ffffff;
        font-weight: 400;
        display: flex;
        justify-content: center;
        align-items: center;
        font-size: 0.7rem;
        text-transform: uppercase;
        position: absolute;
        top: -20px;
        right: -20px;
    }
    .sale-lable:after{
        content: '';
        width:0px;
        height: 0px;
        border-bottom: 5px solid transparent;
        border-left: 3px solid transparent;
        border-top: 7px solid #f76b6a;
        border-right: 5px solid transparent;
        position: absolute;
        left: 10%;
        top: 100%;
    }
    .fa-shopping-cart{
        position: relative;
    }
    .num-cart-product{
        position: absolute;
        top: -17px;
        right: -17px;
        width:25px;
        height: 25px;
        font-size: 0.8rem;
        border-radius: 50%;
        background-color: #0b9d8a;
        color: #ffffff;
        display: flex;
        justify-content: center;
        align-items: center;
        font-weight: 400;
    }

    .search-bar{
        width:100%;
        height: 300px;
        background-color: #ffffff;
        position: fixed;
        left: 0px;
        bottom: 0px;
        display: flex;
        justify-content: center;
        box-shadow: 2px -5px 30px rgba(0,0,0,0.1);
        z-index: 101;
        animation: search 0.3s;
    }
    .search-input{
        width:90%;
        border-bottom: 2px solid #555555;
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100px;
        margin-top: 20px;
    }
    .search-bar input{
        width:100%;
        padding: 30px;
        border: none;
        outline: none;
        font-size: 2rem;
        margin: 20px;
        padding: 0px 20px;
    }
    .search-cancel{
        color: #272727;
        font-size: 2rem;
        padding-right: 40px;
    }
    .search-bar{
        display: none;
    }
    .search-bar-active{
        display: flex;
    }
    @keyframes search{
        0%{
            bottom: -300px;
        }
        100%{
            bottom: 0px;
        }
    }

    .banner-box-1{
        width:100%;
        height: 67vh;
        margin: 0px 0px;
        display: flex;
        justify-content: center;
        align-items: center;
        background-image: url(../images/Slider_01.jpg);
        background-size: cover;
        background-repeat: no-repeat;
        background-position: center;
    }
    .feature-box{
        width:155px;
        height: 160px;
        margin: 0px 20px;
        border-radius: 10px;
        overflow: hidden;
    }
    .feature-box a img{
        width:100%;
        height: 100%;
        object-fit: cover;
        object-position: center;
    }
    .item span{
        font-size: 1rem;
        font-weight: 600;
        margin: 5px;
        color: #444444;
    }
    .item{
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
    }
    .sale{
        width:95%;
        display: flex;
        justify-content: center;
        align-items: center;
        flex-wrap: wrap;
        margin: 20px auto;
    
    }
    .sale-box{
        width:280px;
        border-radius: 20px;
        margin: 20px;
        position: relative;
        flex-grow: 0.5;
    }
    .sale-box img{
        width:100%;
        height: 100%;
        object-fit: cover;
        object-position: center right;
    }
    .sale-text{
        position: absolute;
        left: 20%;
        top: 50%;
        transform: translate(-20%,-50%);
        display: flex;
        flex-direction: column;
    }
    .sale-box a{
        color: #1b1919;
    }
    .sale-text strong{
        font-size: 1.2rem;
        font-weight: 500;
        width: 80%;
        line-height: 23px;
    }
    .banner-box{
        width:100%;
        height: 40vh;
        margin: 20px 0px;
        display: flex;
        justify-content: center;
        align-items: center;
        background-image: url(../images/Slider_03.jpg);
        background-size: cover;
        background-repeat: no-repeat;
        background-position: center;
    }
    
    .banner-text-container{
        width:80%;
        height: 90%;
        display: flex;
        align-items: center;
    }
    
    .banner-text{
        display: flex;
        flex-direction: column;
        margin-right: auto;
    }
    
    .banner-text strong{
        color: #333333;
        font-size: 3rem;
        line-height: 55px;
        margin-top: 10px;
        letter-spacing: 1px;
    }
    
    .banner-text span{
        text-transform: uppercase;
        letter-spacing: 6px;
        font-weight: 500;
        color: #666666;
        font-size: 1.2rem;
    }
    
    .banner-btn{
        width:170px;
        height: 40px;
        display: flex;
        justify-content: center;
        align-items: center;
        color: #ffffff;
        background-color: #0b9d8a;
        text-transform: uppercase;
        letter-spacing: 2px;
        margin-top: 14px;
    }
    .banner-text strong font{
        color: #0b9d8a;
    }
    .services{
        display: flex;
        width: 90%;
        justify-content: center;
        align-items: center;
        flex-wrap: wrap;
        margin: auto;
    }
    .services-box{
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        border: 1px solid rgba(0,0,0,0.1);
        min-width: 250px;
        padding: 20px;
        margin: 15px;
        flex-grow: 0.7;
    }
    .services-box i{
        color: #0b9d8a;
        font-size: 2rem;
        margin: 15px;
    }
    .services-box span{
        color: #222222;
        font-weight: 600;
        letter-spacing: 0.5px;
        font-size: 1rem;
    }
    .services-box p{
        color: #878787;
        margin: 0px;
        font-size: 0.9rem;
    }
    footer{
        display: flex;
        justify-content: space-around;
        align-items: center;
        padding: 10px;
        border-top: 1px solid rgba(0,0,0,0.1);
        flex-wrap: wrap;
        margin-top: 20px;
    }
    .copyright{
        font-size: 0.9rem;
        color: #4e4e4e;
        letter-spacing: 1px;
    }
    .subscribe input{
        width:240px;
        height: 43px;
        padding: 0px 20px;
        border: 1px solid rgba(0,0,0,0.1);
        outline: none;
        box-shadow: 2px 2px 30px rgba(0,0,0,0.05);
    }
    .subscribe input[type="submit"]{
        width:120px;
        background-color: #0b9d8a;
        color: #ffffff;
        margin: 0px 5px;
    }


</style>
	
    </head>

    <body>
    <nav> 
        <!--social-links-and-phone-number----------------->
 <div class="social-call">
     <!--social-links--->
     <div class="social">
         <a href="#"><i class="fab fa-facebook-f"></i></a>
         <a href="#"><i class="fab fa-twitter"></i></a>
         <a href="#"><i class="fab fa-youtube"></i></a>
         <a href="#"><i class="fab fa-instagram"></i></a>
     </div>
     <!--phone-number------>
     <div class="phone">
         <span>Call: +123456789</span>
     </div>
 </div>
 <!--menu-bar----------------------------------------->
 <div class="navigation">
     <!--logo------------>
    <h1>Shoppers Stop</h1>
     <!--menu-icon------------->
     <div class="toggle"></div>
     <!--menu----------------->
     <ul class="menu">
         <li><a href="./index.php">Home</a></li>
         <li  class="shop"><a href="./women.php" >Women</a></li>
         <li><a href="./men.php">Men</a>
             <!--lable---->
             <span class="sale-lable">Sale</span>
         </li>
         <li><a href="./kids.php">Kids</a></li>
         <li><a href="./electronics.php">Electronics</a></li>
     </ul>
     <!--right-menu----------->
     <div class="right-menu">
         <a href="javascript:void(0);" class="search">
             <i class="fas fa-search"></i>
         </a>

        <?php
            // session_start();
            if (isset($_SESSION['customer_name'])){
                $cst_name = $_SESSION['customer_name'];
            }
            $page = "customer_login.php";
            if (isset($_SESSION['customer_name'])){
                $page = "customer_logout.php";
            }
        ?>

        <?php 
         echo "<a href=\"../login_signup/$page\" class=\"user\">";
            $state = "login";
            if (isset($_SESSION['customer_name'])){
                $state = "logout";
            }
            echo "<div class=\"pop\">$state</div>";
        ?>
                
                <?php 
                    if (isset($_SESSION['customer_name'])){
                        echo "<i class=\"far fa-user\" style=\"color:#00cc6a\"></i>";
                        echo "<span style=\"color:#00cc6a\"> $cst_name </span>";
                    }else{
                        echo "<i class=\"far fa-user\" style=\"color:#00cc6a\"></i>";
                    }
                ?>
         </a>
         <a href="./cart.php">
             <i class="fas fa-shopping-cart">
                <?php
                    if(isset($_SESSION['customer_name']) && count_total_product($con, $cart_id)!=0){
                        $pdt_nm = count_total_product($con, $cart_id);
                        echo "<span class=\"num-cart-product\">$pdt_nm</span>";
                    }else{
                        echo "<span class=\"num-cart-product\">0</span>";
                    }
                 ?>
             </i>
         </a>
         <a href="./my_order.php" class="user2">
            <?php
                $state = "My orders";
                echo "<div class=\"pop2\">$state</div>";
            ?>
            <i class="fa fa-address-book-o" aria-hidden="true"></i>
         </a>
     </div>
     </div>
 </nav>

 <!--search-bar----------------------------------->
 <div class="search-bar">
    
    <!--search-input------->
    <div class="search-input">
    <input type="text" placeholder="Search For Product" name="search" />
    <!--cancel-btn--->
    <a href="javascript:void(0);" class="search-cancel">
        <i class="fas fa-times"></i>
    </a>
</div>
</div>

<!--js-script--->
<script type="text/javascript">
/*-----For Search Bar-----------------------------*/
$(document).on('click','.search',function(){
        $('.search-bar').addClass('search-bar-active')
    });
 
    $(document).on('click','.search-cancel',function(){
        $('.search-bar').removeClass('search-bar-active')
    });


   
</script>

</body>
</html>
