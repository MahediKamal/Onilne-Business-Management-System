<link rel="stylesheet" href="../style.css">
<?php
    session_start();
    $title = "admin";
    require_once '../includes/header.php';
    require_once '../includes/connection.php';
    require_once '../includes/function.php';
    if(!isset($_SESSION['adminName'])){
        echo "<head>";
            echo "<meta http-equiv = \"refresh\" content = \"0; url = ../customer/index.php\" />";
        echo "</head>";
    }
    
?>
   
<style>
    body{
        background: black;
        /* background: white; */
    }
    .container{
        margin-top:110px !important;
    }
    .card{
        border:none;
        outline:none;
        background-color:white;
        border-radius:20px;
        transition: transform .3s;
    }
    .card:hover{
        transform: translateY(-15px);
        transition: transform .3s;
    }
    .admin span a{
        font-size: 27px;
        font-weight:bold;
        padding-top:0 !important;
        text-decoration:none;
        color:black !important;
    }
    .span a:hover{
        color:teal;

    }
    /* ///// */
    table{
        width: 100%;
        color: white;
        font-family: "Times New Roman", Times, serif;
    }
    td {
    height: 80px;
    width: 160px;
    text-align: center;
    vertical-align: middle;
    }
    hr{
        color: white;
    }
    
    


    

 </style>   
    

                <section class="colorlib-about" style="background-color:white;" data-section="about">
                  <div class="colorlib-narrow-content">
                     <div class="row">
                        <div class="col-md-12">
							<div class="row">
                              <div class="col-md-4 animate-box" data-animate-effect="fadeInRight">
                                 <a href="customer_details_table.php" target="_blank">
                                    <div class="services color-5">
                                       <span class="icon2"><i class="fa fa-desktop"></i></span>
                                       <h3>Customer <br> Details</h3>
                                    </div>
                                 </a>
                              </div>
                              <div class="col-md-4 animate-box" data-animate-effect="fadeInRight">
                                 <a href="product_table.php" target="_blank">
                                    <div class="services color-2">
                                       <span class="icon2"><i class="fa fa-drupal" aria-hidden="true"></i>
</span>
                                       <h3>Product<br> Details</h3>
                                    </div>
                                 </a>
                              </div>
                              
                              <div class="col-md-4 animate-box" data-animate-effect="fadeInRight">
                                 <a href="supplier_table.php" target="_blank">
                                    <div class="services color-4">
                                       <span class="icon2"><i class="fa fa-bar-chart" aria-hidden="true"></i></span>
                                       <h3>Supplier<br> Details</h3>
                                    </div>
                                 </a>
                              </div>
                              <div class="col-md-4 animate-box" data-animate-effect="fadeInRight">
                                 <a href="order_table.php" target="_blank">
                                    <div class="services color-5">
                                       <span class="icon2"><i class="fa fa-pie-chart" aria-hidden="true"></i></span>
                                       <h3>Order<br> Details</h3>
                                    </div>
                                 </a>
                              </div>
                              <div class="col-md-4 animate-box" data-animate-effect="fadeInRight">
                                 <a href="competitiveProgramming.html" target="_blank">
                                    <div class="services color-2">
                                       <span class="icon2"><i class="fa fa-balance-scale" aria-hidden="true"></i>
</span>
                                       <h3>Supplier<br> Details</h3>
                                    </div>
                                 </a>
                              </div>
                           </div>
						 </div>
					  </div>
				   </div>
				</section


<?php 
    $total_pdt = count_total_in_stock_product($con);
    
    $new_orders = count_new_orders($con);
    
    $tot_cst = count_total_customers($con);
    
    // echo '<h1>Total products: ' . $total_pdt . '</h1>';
    // echo '<h1>Total products:: ' . $new_orders . '</h1>';
    echo "<hr>";
    echo "<table>";
    echo "<tr>";
        echo "<td>";
        echo "<h1>Total products:  <span class=\"badge bg-warning text-dark\">$total_pdt</span></h1>";
        echo "</td>";
    echo "</tr>";
    echo "<tr>";
        echo "<td>";
        echo "<h1>Orderd to process:  <span class=\"badge bg-warning text-dark\">$new_orders</span></h1>";
        echo "</td>";
    echo "</tr>";
    
    echo "<tr>";
        echo "<td>";
        echo "<h1>Numer of customers:  <span class=\"badge bg-warning text-dark\">$tot_cst</span></h1>";
        echo "</td>";
    echo "</tr>";
    echo "</table>";
    echo "<hr>";
    // echo '<h1>Numer of customers: ' . $new_orders . '</h1>';


    // echo "<h1 class=\".middle\">Example heading <span class=\"badge bg-warning text-dark\">New -----------</span></h1>";


    require_once '../includes/footer.php'; 
?>