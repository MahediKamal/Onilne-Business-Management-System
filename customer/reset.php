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
$total = $_SESSION['total'];
require_once '../includes/connection.php';
require_once '../includes/function.php';

// ------------------------------------------------------------new order cretate
$sql = "INSERT INTO courier VALUES (courier_id_sequence.nextval, '__')";
$stmt = oci_parse($con, $sql);
$rc = oci_execute($stmt);
if(!$rc){
    $e = oci_error($stmt);
    var_dump($e);
}


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
$sql = "SELECT cst_id FROM customer WHERE cst_email='$cst_email'";
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



/// initializing sesson and session variable
// $_SESSION['customer_mail'] = $cst_email;
// $_SESSION['customer_password'] = $cst_password;
// $_SESSION['customer_name'] = $cst_name;
// $_SESSION['cst_id'] = $cst_id;
$_SESSION['cart_id'] = $cart_id;
$_SESSION['orde_id'] = $order_id;
$_SESSION['billing_id'] = $billing_id;
$_SESSION['courier_id'] = $courier_id;
$_SESSION['total'] = 0;


        echo "<head>";
            echo "<title>done</title>";
            echo "<meta http-equiv = \"refresh\" content = \"0; url = ./index.php\" />";
        echo "</head>";

?>