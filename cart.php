<?php

    require_once './customer/navigation.php';

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

    
    <div class="small-container cart-page">
        <table>
            <tr>
                <th>Product</th>
                <th>Quantity</th>
                <th>Subtotal</th>
            </tr>
            <tr>
                <td>
                    <div class="cart-info">
                        <img src="images/p-1.png" alt=""  width="90px"
                        height="90px" >
                        <div>
                            <p>Basic T-shirt</p>
                            <small>Price: $50.00</small>
                            <br>
                            <a href="">Remove</a>
                        </div>
                    </div>
                </td>    
                <td><input type="number" value="1"></td>
                <td>$50.00</td>            
            </tr>
            <tr>
                <td>
                    <div class="cart-info">
                        <img src="images/p-2.png" alt=""  width="90px"
                        height="90px" >
                        <div>
                            <p>Basic Shirt</p>
                            <small>Price: $60.00</small>
                            <br>
                            <a href="">Remove</a>
                        </div>
                    </div>
                </td>    
                <td><input type="number" value="1"></td>
                <td>$60.00</td>            
            </tr>
        </table>

<div class="total-price">
    <table>
        <tr>
            <td>Subtotal</td>
            <td>$110.00</td>
        </tr>
        <tr>
            <td>Shipping Charge</td>
            <td>$50.00</td>
        </tr>
        <tr>
            <td>Total</td>
            <td>$160.00</td>
        </tr>
    </table>
</div>


    <div class="item">
        <button class="btn">Checkout</button>
    </div>


    </div>

     <!--footer---------------------------->
     <footer>
        <!--copyright-------------->
        <span class="copyright">
            Copyright 2020 - Shoppers Stop
        </span>
        <!--subcribe---------------->
        <div class="subscribe">
            <form>
            <input type="email" placeholder="Example@gmail.com" required/>
            <input type="submit" value="Subscribe">
            </form>
        </div>
    </footer>

    
    
</body>
</html>