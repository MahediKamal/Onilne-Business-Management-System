<?php
    session_start();
    $cart_id = $_SESSION['cart_id'];
    $cst_email = $_SESSION['customer_mail'];
    $cst_password = $_SESSION['customer_password'];
    $cst_name = $_SESSION['customer_name'];
            // $_SESSION['cst_id'] = $cst_id;
            // $_SESSION['cart_id'] = $cart_id;
            // $_SESSION['orde_id'] = $order_id;
            // $_SESSION['billing_id'] = $billing_id;
            // $_SESSION['courier_id'] = $courier_id;

    require_once 'navigation.php';
    require_once '../includes/connection.php';
    require_once '../includes/function.php';

?>

<!DOCTYPE html>
<html>
<head>
    <title>Checkout Card</title>
    <link href='https://www.soengsouy.com/favicon.ico' rel='icon' type='image/x-icon'/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- library validate -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.js"></script>
    <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/additional-methods.js"></script>
    <!-- style css -->
  
<style>
    body {
        font-family: Arial;
        font-size: 17px;
        padding: 8px;
    }
    * {
        box-sizing: border-box;
    }

    .error {
        color: red;
        border-color: red;
    }

    .row {
        display: -ms-flexbox; /* IE10 */
        display: flex;
        -ms-flex-wrap: wrap; /* IE10 */
        flex-wrap: wrap;
        margin: 0 -10px;
    }

    .col-25 {
        -ms-flex: 25%; /* IE10 */
        flex: 25%;
    }

    .col-50 {
        -ms-flex: 50%; /* IE10 */
        flex: 50%;
    }

    .col-75 {
        -ms-flex: 75%; /* IE10 */
        flex: 75%;
    }

    .col-25,.col-50,.col-75 {
        padding: 0 16px;
    }

    .container {
        background-color: #FFFFFF;
        padding: 3px 18px 13px 18px;
        border: 1px solid lightgrey;
        border-radius: 3px;
        box-shadow: 0 0 2rem 0 rgba(168, 180, 194, 0.37);
    }


    input[type=text] {
        width: 100%;
        margin-bottom: 20px;
        padding: 12px;
        border: 1px solid grey;
        border-radius: 1px;
    }

    label {
        margin-bottom: 10px;
        display: block;
    }

    .icon-container {
        margin-bottom: 20px;
        padding: 7px 0;
        font-size: 24px;
    }

    .btn {
        background-color: #0b9d8a;
        color: white;
        padding: 12px;
        margin: 10px 0;
        border: none;
        width: 100%;
        border-radius: 3px;
        cursor: pointer;
        font-size: 17px;
        box-shadow: 0 0 1rem 0 rgba(99, 123, 150, 0.329);

    }

    .btn:hover {
        background-color: white;
        color:#0b9d8a;
    }

    a {
        color: #0b9d8a;
    }

    hr {
        border: 1px solid lightgrey;
    }

    span.price {
        float: right;
        color: grey;
    }

    /* Responsive layout - when the screen is less than 800px wide, make the two columns 
        stack on top of each other instead of next to each other (also change the direction 
        - make the "cart" column go on top) 
    */
    @media (max-width: 800px) {
        .row {
            flex-direction: column-reverse;
        }
        .col-25 {
            margin-bottom: 20px;
        }
    }

</style>

</head>
<body>


<div class="row">
    <div class="col-75">
        <div class="container">

            <form id="validate" action="./place_order.php" method="post">
                <div class="row">
                    <div class="col-50">
                    <?php
                        echo "<h3>Billing Address</h3>";
                        echo "<label for=\"fname\"><i class=\"fa fa-user\"></i> Full Name</label>";
                        echo "<input type=\"text\" id=\"fname\" name=\"fullname\" placeholder=$cst_name disabled>";
                        echo "<label for=\"email\"><i class=\"fa fa-envelope\"></i> Email</label>";
                        echo "<input type=\"text\" id=\"email\" name=\"email\" placeholder=$cst_email disabled>";
                        echo "<label for=\"adr\"><i class=\"fa fa-address-card-o\"></i> Address</label>";
                        echo "<input type=\"text\" id=\"adr\" name=\"address\" placeholder=\"110 W. 15th Phnom Penh\" disabled>";
                        echo "<label for=\"city\"><i class=\"fa fa-institution\"></i> City</label>";
                        echo "<input type=\"text\" id=\"city\" name=\"city\" placeholder=\"Phnom Penh\" disabled>";
                    ?>
                        <!-- <div class="row">
                            <div class="col-50">
                                <label for="state">State</label>
                                <input type="text" id="state" name="state" placeholder="Phnom Penh"required>
                            </div>
                            <div class="col-50">
                                <label for="zip">Zip</label>
                                <input type="text" id="zip" name="zip" placeholder="12000"required>
                            </div>
                        </div> -->
                    </div>

                    <div class="col-50">
                        <h3>Payment</h3>

                        <label for="fname">Payment Methods</label>
                        <!-- <div class="icon-container">
                            <i class="fa fa-cc-visa" style="color:navy;"></i>
                            <i class="fa fa-cc-amex" style="color:blue;"></i>
                            <i class="fa fa-cc-mastercard" style="color:red;"></i>
                            <i class="fa fa-cc-discover" style="color:orange;"></i>
                        </div> -->
                        <select id="cars" name="payment_type">
                            <option value="Bkash">Bkash</option>
                            <option value="Nagad">Nagad</option>
                            <option value="Cash on delivery">Cash on delivery</option>
                            <!-- <option value="audi">Audi TT</option> -->
                        </select>
                        <label for="fname">delivary</label>
                        <select id="cars" name="delivary">
                            <option value="pathao">pathao</option>
                            <option value="Shundorbon courier">Shundorbon courier</option>
                            <!-- <option value="audi">Audi TT</option> -->
                        </select>
                        <label for="ccnum">Bkash/Nagad number</label>
                        <input type="text" id="ccnum" name="ac_num" placeholder="01837-633353"required>
                      
                      
                        <div class="row">
                            <div class="col-50">
                               
                            </div>
                            <div class="col-50">
                              
                            </div>
                        </div>
                    </div>
                </div>
                <label>
                <!-- <input type="checkbox" checked="checked" name="sameadr"> Shipping address same as billing -->
                </label>
                <input type="submit" name="submit" value="Place Order" class="btn">
            </form>
        </div>
    </div>
    <div class="col-25">
        <?php create_added_product_av($con, $cart_id); ?>
    </div>
</div>
<!-- script validate js -->
<script>
    $('#validate').validate({
        roles: {
            fullname: {
                required: true,
            },
            email: {
                required: true,
            },
            address: {
                required: true,
            },
            city: {
                required: true,
            },
            state: {
                required: true,
            },
            zip: {
                required: true,
            },
            cardname: {
                required: true,
            },
            cardnumber: {
                required: true,
            },
            expmonth: {
                required: true,
            },
            expyear: {
                required: true,
            },
            cvv: {
                required: true,
            },
           
        },
        messages: {
            fullname:"Please input full name*",
            email:"Please input email*",
            city:"Please input city*",
            address:"Please input address*",
            state:"Please input state*",
            zip:"Please input address*",
            cardname:"Please input card name*",
            cardnumber:"Please input card number*",
            expmonth:"Please input exp month*",
            expyear:"Please input exp year*",
            cvv:"Please input cvv*",
        },
    });
</script>
</body>
</html>

<?php

    require_once 'footer.php';

?>