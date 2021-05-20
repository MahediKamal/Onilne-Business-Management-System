<?php
    $title = "admin";
    require_once '../includes/header.php';
    require_once '../includes/connection.php';
    require_once '../includes/function.php';


    $query = "select * from customer";
    CreateTable_av($query, $con);
    // CreateTable_av($APEX$_ACL, $c);

?>
    
    <h1> Admin index page <h1>


<?php require_once '../includes/footer.php'; ?>