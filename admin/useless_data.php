<?php
    $title = "useless data";
    require_once '../includes/connection.php';
    require_once '../includes/header.php';
    require_once '../includes/function.php';

    $query = "SELECT billing_info.billing_id, cart.cart_id, courier.courier_id, order_info.order_id, has_product_in_cart.cart_id
    FROM billing_info 
    LEFT JOIN cart ON billing_info.billing_id = cart.billing_id
    LEFT JOIN has_product_in_cart ON has_product_in_cart.cart_id = cart.cart_id
    LEFT JOIN order_info ON order_info.order_id = has_product_in_cart.order_id
    LEFT JOIN courier ON courier.courier_id = order_info.courier_id";

    $action = 2; $table ="t";
    CreateTable_av($query, $con, $action, $table);
?>