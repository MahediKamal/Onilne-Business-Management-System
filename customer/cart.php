<?php
    session_start();
    
    $cart_id = $_SESSION['cart_id'];
    $order_id = $_SESSION['orde_id'];

    // $pdt_id = $_GET['pdt_id'];

    // require_once 'customer_header.php';
    require_once '../includes/connection.php';
    require_once 'navigation.php';
    require_once '../includes/function.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shopping Cart</title>

   
<!--JQuery--------------->
<script src="js/JQuery.js"></script>
<!--fav-icon---------------->
<link rel="shortcut icon" href="images/fav-icon.png"/>
<!--using FontAwesome--------------->
<script crossorigin="anonymous" src="https://kit.fontawesome.com/c8e4d183c2.js"></script>
    
    <style>
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');
    
    
    .cart-page{
            margin:50px auto;
            margin-left: 200px;
        }
        table{
            width: 80%;
            border-collapse: collapse;
            

        }
        .cart-info{
            display: flex;
            flex-wrap: wrap;
        }
        th{
            text-align: left;
            padding: 5px;
            color: white;
            background: teal;
            font-weight: normal;
        }
        td{
            padding: 10px 5px;
        }
        td input{
            width: 40px;
            height: 30px;
            padding: 5px;
        }
        td a{
            color: teal;
            font-size: 15px;
            text-decoration: none;
        }
        td img{
           
            margin-right: 10px;
        }
        .total-price{
            display: flex;
           margin-left: 580px;

        }
        .total-price table{
            border-top:3px solid teal;
            width: 100%;
           max-width: 360px;
        }
        td:last-child{
            text-align: right;
        }
        th:last-child{
            text-align: right;
        }
        .btn{
            outline: none;
            display: block;
            justify-content: right;
            align-items: right;
            margin-left: 550px;
            margin-top:15px;
            border: 0;
            font-size: 16px;
            padding: 16px 30px;
            border-radius: 30px;
            line-height: 1;
            background:teal;
            color: white;
            font-weight: bold;
             
        }
        .btn:hover{
            background: white;
            color: teal;
            border: 1px solid teal;
        }
        /* //// */
        .plus{
            font-family:"Roboto",sans-serif;
            font-size:16px;
            font-weight:bold;
            background:teal;
            width:100px;
            padding:10px;
            text-align:center;
            text-decoration:none;
            color:white;
            border-radius:5px;
            cursor:pointer;
            box-shadow:0 0 10px rgba(0,0,0,0.1);
        }
       
    </style>


</head>
<body>

    
    <div class="small-container cart-page">

    <?php
        create_details_cart_av($con, $cart_id);
    ?>



    <div class="item">
    <a href="checkout.php"> <button class="btn">Checkout</button></a>
       
    </div>


    </div>

     
    
</body>
</html>

<?php

    require_once 'footer.php';

?>