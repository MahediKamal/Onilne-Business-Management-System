
<?php
    $title = "admin: supplier";
    $table_title = "Supplier list:";
    require_once '../includes/header.php';
    require_once '../includes/connection.php';
    require_once '../includes/function.php';
    require_once '../admin/navigation.php';

    $query = "select * from supplier_info";
    $action = 1; // action 1, means we want add & delete button in the table
    $table = "supplier_info";
    CreateTable_av($query, $con, $action, $table);

?>
    <!-- .....................add butttom ...................... -->
    <div>
    <h3>Add new supplier:</h3>
    <form action="post_into_supplier_table.php" method="post" class="form">
        <input type="text" name="supplier_id" placeholder="SUPPLIER_ID" />
        <input type="text" name="supplier_name" placeholder="SUPPLIER_NAME" />

        <input type="text" name="supplier_company" placeholder="SUPPLIER_COMPANY" />
        <input type="text" name="supplier_phone" placeholder="SUPPLIER_PHONE" />
        <input type="text" name="supplier_country" placeholder="SUPPLIER_COUNTRY" />

        <input type="submit" name="submit" class="btn btn-outline-success btn-sm"/>
    </form> 
    </div>

  
    
    
    


<?php require_once '../includes/footer.php'; ?>