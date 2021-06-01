<?php
    $title = "admin: supplier";
    require_once '../includes/header.php';
    require_once '../includes/connection.php';
    require_once '../includes/function.php';
    require_once '../admin/navigation.php';

    $query = "select * from supplier_info";
    $action = 1; // action 1, means we want add & delete button in the table
    CreateTable_av($query, $con, $action);

?>
    <!-- .....................add butttom ...................... -->
    <form action="post_into_supplier_table.php" method="post">
        <input type="text" name="supplier_id" placeholder="ID" />
        <input type="text" name="supplier_name" placeholder="NAME" />

        <input type="text" name="supplier_company" placeholder="CITY" />
        <input type="text" name="supplier_phone" placeholder="PHONE" />
        <input type="text" name="supplier_country" placeholder="COUNTRY" />

        <input type="submit" name="submit" class="btn btn-outline-success btn-sm"/>
    </form> 
    
    
    <h1> supplier table page <h1>


<?php require_once '../includes/footer.php'; ?>