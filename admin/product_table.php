<?php
    session_start();
    $title = "admin: product";
    $table_title = "Product list:";
    $admin_name = $_SESSION['adminName'];
    require_once '../includes/header.php';
    require_once '../includes/connection.php';
    require_once '../includes/function.php';
    require_once '../admin/navigation.php';

    
    
    $query = "select * from product";
    // PDT_ID	PDT_NAME	UNIT_ORDER	PDT_DESCRIPTION	PDT_QUANTITY	PDT_PICTURE	PDT_PRICE	PDT_WEIGHT	PDT_STOCK	PDT_DISCOUNT
    //	CATEGORY_ID	SUPPLIER_ID
    $action = 1; // action 1, means we want add & delete button in the table
    $table = "product";
    CreateTable_av($query, $con, $action, $table);

?>
    
    <!-- .....................add butttom ...................... -->
    <div>
    <h3>Add new product:</h3>
    <form action="post_into_product_table.php" method="post" class="form">
        <!-- <input type="text" name="PDT_ID" placeholder="id" /> -->
        <input type="text" name="PDT_NAME" placeholder="NAME" />

        <input type="text" name="UNIT_ORDER" placeholder="UNIT_ORDER" />
        <input type="text" name="PDT_DESCRIPTION" placeholder="description" />
        <input type="text" name="PDT_QUANTITY" placeholder="quantity" />
        <input type="text" name="PDT_PICTURE" placeholder="picture" />

        <input type="text" name="PDT_PRICE" placeholder="price" />
        <input type="text" name="PDT_WEIGHT" placeholder="weight" />
        <input type="text" name="PDT_STOCK" placeholder="stock" />
        <input type="text" name="PDT_DISCOUNT" placeholder="discount" />
        <input type="text" name="CATEGORY_ID" placeholder="CATEGORY_ID" />
        <input type="text" name="SUPPLIER_ID" placeholder="SUPPLIER_ID" />
        
        <input type="submit" name="submit" class="btn btn-outline-success btn-sm"/>
    </form> 
    </div>   


<?php require_once '../includes/footer.php'; ?>