
<?php
    session_start();
    $title = "admin: supplier";
    $table_title = "Supplier list:";
    $admin_name = $_SESSION['adminName'];
    require_once '../includes/header.php';
    require_once '../includes/connection.php';
    require_once '../includes/function.php';
    require_once '../admin/navigation.php';

    if(!isset($_SESSION['adminName'])){
        echo "<head>";
            echo "<meta http-equiv = \"refresh\" content = \"0; url = ../customer/index.php\" />";
        echo "</head>";
    }

    $query = "select * from supplier_info";
    $action = 1; // action 1, means we want add & delete button in the table
    $table = "supplier_info";
    CreateTable_av($query, $con, $action, $table);

?>
    <!-- .....................add butttom ...................... -->
    <div>
    <h3>Add new supplier:</h3>
    <form action="post_into_supplier_table.php" method="post" class="form">
        <!-- <input type="text" name="supplier_id" placeholder="SUPPLIER_ID" /> -->
        <input type="text" name="supplier_name" required placeholder="SUPPLIER_NAME" />

        <input type="text" name="supplier_company" required placeholder="SUPPLIER_COMPANY" />
        <input type="tel"  name="supplier_phone" pattern="[0]{1}[0-9]+" required placeholder="01XXXXXXXXX"/>
        <input type="text" name="supplier_country" required placeholder="SUPPLIER_COUNTRY" />

        <input type="submit" name="submit" class="btn btn-outline-success btn-sm"/>
    </form> 
    </div>

  
    
    
    


<?php require_once '../includes/footer.php'; ?>