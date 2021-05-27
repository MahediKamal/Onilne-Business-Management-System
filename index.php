<?php 
    $title = "home";
    require_once 'includes/header.php';
?>
    
    <h1> Main index page <h1>

    
    <div class="btn-group" role="group" aria-label="Basic example">
        <button type="button" class="btn btn-light"></button>
        <button type="button" class="btn btn-light"></button>
        <button type="button" class="btn btn-light"></button>
        <a href="./customer/index.php">
            <button type="button" class="btn btn-primary">Customer</button>
        </a>
        <button type="button" class="btn btn-light"></button>
        <a href="./admin/index.php">
            <button type="button" class="btn btn-primary">Admin</button>
        </a>
        <button type="button" class="btn btn-light"></button>
    </div>

<?php require_once 'includes/footer.php'; ?>