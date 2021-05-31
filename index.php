<?php 
    $title = "home";
    require_once 'includes/header.php';
?>
    
    <h1> Main index page <h1>

    


    <div class="container">
        <div class="row">
            <div class="col-sm-1"></div>

            
            <div class="col-sm-4">
                <a href="./admin/index.php" class="btn"> 
                    <div class="card bg-dark text-white">
                        <img src="images/cst.png" class="card-img" alt="ooo">
                        <div class="card-img-overlay">
                            <h6 class="card-title">Admin</h6>
                            <!-- <h1 class="card-title">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</h1> -->
                        
                        </div>
                    </div>
                </a>
            </div>
            

            <div class="col-sm-2"></div>

            <div class="col-sm-4">
                <a href="./customer/index.php" class="btn"> 
                    <div class="card bg-dark text-white">
                        <img src="images/cst.png" class="card-img" alt="ooo">
                        <div class="card-img-overlay">
                            <h6 class="card-title">Customer</h6>
                            <!-- <h1 class="card-title">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</h1> -->
                        
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-sm-1"></div>

        </div>
    </div>




<?php require_once 'includes/footer.php'; ?>