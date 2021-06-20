<style>
        .popup-container{
            position: absolute;
            left: 25%;
            top: 10%;
            z-index: 11111;
            width:50%;
            padding:20px;
            border:1px solid #ccc;
            box-shadow: 0px 0px 10px #ccc;
            /* display: none; */
            }
        h2,h3,h4{
            text-align: center;
            margin-bottom: 0px;
        }
       .items{
           width: 60%;
           background-color: teal;
           color: white;
           display: flex;
           height: 40px;
           margin-left: 130px;
           margin-top: 10px;
           margin-bottom: 2px;
           font-size: 18px;
           font-family:sans-serif;
           text-align: center;
           padding-bottom: 10px;
           padding-left: 50px;
       }
       .info p{
           text-align: center;
           font-size: 20px;
           font-family: 'Times New Roman', Times, serif
       }
       .mail p{
        text-align: center;
           font-size: 20px;
           font-family: 'Times New Roman', Times, serif
       }
        .close-btn{
            float: right;
            cursor: pointer;
        }
        
        .btn{
            background-color: teal;
    color: white;
    padding: 12px;
    margin: 10px 0;
    margin-left: 470px;
    border: none;
    width: 30%;
    border-radius: 3px;
    cursor: pointer;
    font-size: 17px;
    box-shadow: 0 0 1rem 0 rgba(99, 123, 150, 0.329);

        }
        .btn:hover{
            background: white;
            color: teal;
            border: 1px solid teal;
        }
</style>
<?php
    session_start();
    $cart_id = $_SESSION['cart_id'];
    $cst_email = $_SESSION['customer_mail'];
    $cst_password = $_SESSION['customer_password'];
    $cst_name = $_SESSION['customer_name'];
    $cst_id = $_SESSION['cst_id'];
    $order_id = $_SESSION['orde_id'];
    $billing_id = $_SESSION['billing_id'];
    $courier_id = $_SESSION['courier_id'];
    require_once '../includes/connection.php';
    require_once '../includes/function.php';

    if ( isset( $_POST['submit'] ) ) {
        $ac_num = $_REQUEST['ac_num'];
        $payment_type = $_REQUEST['payment_type'];
        $delivary = $_REQUEST['delivary'];
        // echo $ac_num . ' ' . $payment_type .' ' . $delivary .' '. $cst_id;
        // echo "doe";

        //update billing_info, order_info and courier table
        // ---------------update billing_info
        $sql = 'UPDATE billing_info 
        SET payment_type = :typ ,pin_number = :ac_nm 
        WHERE billing_id = :b_id';

        $stmt = oci_parse($con, $sql);

        oci_bind_by_name($stmt, ':typ', $payment_type, -1);
        oci_bind_by_name($stmt, ':ac_nm', $ac_num, -1);
        oci_bind_by_name($stmt, ':b_id', $billing_id, -1);
        
        $rc = oci_execute($stmt);
        if(!$rc){
            $e = oci_error($stmt);
            var_dump($e);
        }

        //-------------------update courier
        $sql = 'UPDATE courier 
        SET courier_company = :cmp 
        WHERE courier_id = :c_id';

        $stmt = oci_parse($con, $sql);
        oci_bind_by_name($stmt, ':cmp', $delivary, -1);
        oci_bind_by_name($stmt, ':c_id', $courier_id, -1);
        
        $rc = oci_execute($stmt);
        if(!$rc){
            $e = oci_error($stmt);
            var_dump($e);
        }
        //--------------order_info
        $sql = "UPDATE order_info
        SET order_date=sysdate ,estimated_date=sysdate+5 ,delivery_date=sysdate+5 ,freight_charge='1$' ,payment_status='due' ,total_discount= '1$',
        order_cancel='NO' 
        WHERE order_id= :o_id";

        // echo $sql;
        $stmt = oci_parse($con, $sql);
        oci_bind_by_name($stmt, ':o_id', $order_id, -1);
        
        $rc = oci_execute($stmt);
        if(!$rc){
            $e = oci_error($stmt);
            var_dump($e);
        }
        // echo "<head>";
        //     echo "<title>done</title>";
        //     echo "<meta http-equiv = \"refresh\" content = \"5; url = ./index.php\" />";
        // echo "</head>";
        // exit;

    }

?>
<div class="popup-container">
    <div class="close-btn">
        <!-- <span class="close-btn">close</span> -->
        <i class="fas fa-times"></i>
    </div>
    <h2>YOUR ORDER PLACED SUCCESSFULLY!</h2>
    <?php
     echo "<h3>ORDER ID: $order_id</h3>";
    ?>
  <div class="items">
      <p>Items Purchased:
       <?php Show_added_product_normally_av($con, $cart_id); ?>
      </p>
  </div>
  <div class="info">
    <?php
        echo "<p> Name:$cst_name <br>";
        echo "Email:$cst_email <br>";
        //  Phone:01745587740 <br>
        //  Address:Dhaka <br>
        //  Amount to be paid:1000.00$ <br>
        echo "Payment Mode:$payment_type ";
        echo "</p>";
    ?>
  </div>

    <div class="mail">
        <p>Thank you!You will get mail from your chosen courier service soon.</p>
    </div>

    <div class="item">
            <a href="../customer/index.php"> <button class="btn">Continue Shopping</button></a>
               
    </div>

</div>

<?php
    oci_commit($con);
    oci_free_statement($stmt);
    oci_close($con);
?>