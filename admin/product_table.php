<?php
    $title = "admin: product";
    $table_title = "Product list:";
    require_once '../includes/header.php';
    require_once '../includes/connection.php';
    require_once '../includes/function.php';
    require_once '../admin/navigation.php';

    
    
    $query = "select * from product";
    $action = 1; // action 1, means we want add & delete button in the table
    $table = "product";
    CreateTable_av($query, $con, $action, $table);

?>
    
    <!-- .....................add butttom ...................... -->
    <div>
    <h3>Add new supplier:</h3>
    <form action="post_into_product_table.php" method="post" class="form">
        <input type="text" name="PDT_ID" placeholder="id" />
        <input type="text" name="PDT_NAME" placeholder="NAME" />

        <input type="text" name="UNIT_ORDER" placeholder="UNIT_ORDER" />
        <input type="text" name="PDT_DESCRIPTION" placeholder="description" />
        <input type="text" name="PDT_QUANTITY" placeholder="quantity" />

        <input type="text" name="PDT_PRICE" placeholder="price" />
        <input type="text" name="PDT_WEIGHT" placeholder="weight" />
        <input type="text" name="PDT_STOCK" placeholder="stock" />
        <input type="text" name="PDT_DISCOUNT" placeholder="discount" />
        
        <input type="submit" name="submit" class="btn btn-outline-success btn-sm"/>
    </form> 
    </div>   


<?php require_once '../includes/footer.php'; ?>