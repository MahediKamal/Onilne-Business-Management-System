<?php
    $title = "details";
    require_once 'customer_header.php';
    require_once 'navigation.php';
    require_once '../includes/connection.php';
    $pdt_id = $_GET['pdt_id'];

    $query='select pdt_name,pdt_description,pdt_quantity,pdt_picture,pdt_price,pdt_weight,pdt_stock,pdt_discount from product where pdt_id=:id';
   
    
    $s = oci_parse($con, $query);
    oci_bind_by_name($s, ':id', $pdt_id, -1);
        if (!$s) {
            $m = oci_error($con);
            trigger_error('Could not parse statement: '. $m['message'], E_USER_ERROR);
        }
        $r = oci_execute($s);
        if (!$r) {
            $m = oci_error($s);
            trigger_error('Could not execute statement: '. $m['message'], E_USER_ERROR);
        }

        $ncols = oci_num_fields($s);

        // price, name, img -> pdt_name, pdt_picture, pdt_price
        $pdt_name; $pdt_description; $pdt_quantity; $pdt_picture; $pdt_price; $pdt_weight; $pdt_stock; $pdt_discount;
        while (($row = oci_fetch_array($s, OCI_ASSOC+OCI_RETURN_NULLS)) != false) {
            $i = 1;            
            foreach ($row as $item) {
                if($i == 1) $pdt_name = htmlspecialchars($item, ENT_QUOTES|ENT_SUBSTITUTE);
                if($i == 2) $pdt_description = htmlspecialchars($item, ENT_QUOTES|ENT_SUBSTITUTE);
                if($i == 3) $pdt_quantity = htmlspecialchars($item, ENT_QUOTES|ENT_SUBSTITUTE);
                if($i == 4) $pdt_picture = htmlspecialchars($item, ENT_QUOTES|ENT_SUBSTITUTE);
                if($i == 5) $pdt_price = htmlspecialchars($item, ENT_QUOTES|ENT_SUBSTITUTE);
                if($i == 6) $pdt_weight = htmlspecialchars($item, ENT_QUOTES|ENT_SUBSTITUTE);
                if($i == 7) $pdt_stock = htmlspecialchars($item, ENT_QUOTES|ENT_SUBSTITUTE);
                if($i == 8) $pdt_discount = htmlspecialchars($item, ENT_QUOTES|ENT_SUBSTITUTE);
                $i++;
            }
          }
?>

<!doctype html>
<html lang="en">
<head>
<!-- Required meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<!-- Bootstrap CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<title>Women-Details</title>
<style>
.card{text-align: center; border: none; border-radius: 5px;-webkit-box-shadow: 12px 14px 22px 2px rgba(0,0,0,0.75);
-moz-box-shadow: 12px 14px 22px 2px rgba(0,0,0,0.75);
box-shadow: 12px 14px 22px 2px rgba(0,0,0,0.75);
margin-bottom: 100px;
}

</style>

</head>
<body>

<div class="container mt-5">
  <!-- <div class="row">
    <div class="col-md-12"> HOME &GT SHOP &GT WOMEN &GT WOMEN DRESS </div>
  </div> -->
</div>
<div class="container">
  <div class="row">
    <div class="col-md-6">
      <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
        <?php echo"<div class=\"carousel-item active\"> <img class=\"d-block w-100\" src=\"../images/$pdt_picture\" alt=\"First slide\"> </div>"; 
        echo"<div class=\"carousel-item\"> <img class=\"d-block w-100\" src=\"../images/$pdt_picture\" alt=\"Second slide\"> </div>";
        ?>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev"> <span class="carousel-control-prev-icon" aria-hidden="true"></span> <span class="sr-only">Previous</span> </a> <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next"> <span class="carousel-control-next-icon" aria-hidden="true"></span> <span class="sr-only">Next</span> </a> </div>
    </div>
    <div class="col-md-6">
      <div class="row">
      <?php echo"<h2>$pdt_name</h2>"; ?>
      
      </div>
      <div class="row">
      <?php echo"<h1><i class=\"fa fa-inr\" aria-hidden=\"true\"></i>$pdt_price</h1>"; ?>
        &nbsp; &nbsp;
      </div>
      <div class="row">
        <h3 class="text-warning"><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star-half-o" aria-hidden="true"></i><i class="fa fa-star-o" aria-hidden="true"></i></h3>
        &nbsp; &nbsp;
        <h5>1200 star rating  and 250 reviews</h5>
      </div>
      <div class="row">
      <?php
      if($pdt_stock>0)
      {
        echo"<p><i class=\"text-success fa fa-check-square-o\" aria-hidden=\"true\"></i> <strong>Availablity:</strong>In Stock!</p>";
      }
      else{
        echo"<p><i class=\"text-success fa fa-check-square-o\" aria-hidden=\"true\"></i> <strong>Availablity:</strong>Out of stock!</p>";
      }
         echo"&nbsp; &nbsp;";
           echo"<p><i class=\"text-success fa fa-check-square-o\" aria-hidden=\"true\"></i> <strong>Quantity:</strong>$pdt_quantity </p>"; 
           echo"&nbsp; &nbsp;";
           echo" <p><i class=\"text-success fa fa-check-square-o\" aria-hidden=\"true\"></i> <strong>Weight:</strong>$pdt_weight gm </p>"; ?>
      </div>
      <div class="row mt-4">
      <h4>Product Details: &nbsp; &nbsp;</h4>
      </div>
      <div><p style="font-size: 16px">If you’ve been thinking of treating yourself to a new summer wardrobe, you don’t want to pass on this beautiful summer floral dress. There’s no better way to express to yourself than with a new outfit that will stand out and turn heads.
<ul>
<li ><i class="text-success fa fa-check-square-o" aria-hidden="true"></i>100% Original Products</li>
<li ><i class="text-success fa fa-check-square-o" aria-hidden="true"></i>Easy 30 days returns and exchanges</li>
<li ><i class="text-success fa fa-check-square-o" aria-hidden="true"></i>This product is already at its best price</li>
<li ><i class="text-success fa fa-check-square-o" aria-hidden="true"></i>Pay on delivery is available</li>
</ul>
    </p></div>

    <?php echo"<a class=\"btn btn-danger text-light\" href=\"../includes/add_to_cart.php?pdt_id=$pdt_id&pdt_name=$pdt_name&pdt_picture=$pdt_picture&pdt_price=$pdt_price\"><i class=\"fa fa-cart-plus\" aria-hidden=\"true\"></i> Add To Cart</a> <br/><br/>"; ?>
    
    </div>
  </div>
</div>


<!-- <div class="container">
   <div class="row mt-5">  -->
   <h2 style="padding-left: 100px;margin-top: 100px;">More Products</h2>
   </div> 
   <div class="product-container" style="padding-left: 15px;border-right-style:none;margin-left: 70px;margin-top: 20px;">
   <?php
            $query = "SELECT *
            FROM (select pdt_id, pdt_name, pdt_picture, pdt_price FROM product where pdt_description='Electronics' ORDER BY pdt_id)
            WHERE ROWNUM <= 4";
            $section = "electronics"; // folder name of images
            createCart_av($query, $con, $section);



    ?>
   	</div>
   
   
</div>


<div class="container mt-5 mb-5">
	<div class="row">
		<h2>Ratings & Reviews</h2>
	</div>
	
	<div class="row mt-5 mb-5">
		<div class="media">
  <img class="mr-3" src="11.jpg" alt="Generic placeholder image">
  <div class="media-body">
    <h5 class="mt-0">Very nice product. <span class="text-warning"><i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star-half-o" aria-hidden="true"></i> <i class="fa fa-star-o" aria-hidden="true"></i> </span></h5>
    Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
  </div>
</div>
	</div>
	
	<div class="row mb-5">
    <div class="media"> <img class="mr-3" src="12.jpg" alt="Generic placeholder image">
      <div class="media-body">
        <h5 class="mt-0">Best product best material.<span class="text-warning"><i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> </span></h5>
        Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus. </div>
    </div>
  </div>
  
  
  <div class="row mb-5">
    <div class="media"> <img class="mr-3" src="13.jpg" alt="Generic placeholder image">
      <div class="media-body">
        <h5 class="mt-0"> Bad product.dont take this<span class="text-warning"><i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star-o" aria-hidden="true"></i> <i class="fa fa-star-o" aria-hidden="true"></i> <i class="fa fa-star-o" aria-hidden="true"></i> </span></h5>
        Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus. </div>
    </div>
  </div>
  
  
  <div class="row mb-5">
    <div class="media"> <img class="mr-3" src="14.jpg" alt="Generic placeholder image">
      <div class="media-body">
        <h5 class="mt-0">really nice product,value for money.<span class="text-warning"><i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star-half-o" aria-hidden="true"></i> <i class="fa fa-star-o" aria-hidden="true"></i> </span></h5>
        Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus. </div>
    </div>
  </div>
	
	<div class="row mb-5">
		<h2> Post Your Own Reviews</h2>
	</div>
	
	
	<form>
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <textarea type="text" class="form-control" id="exampleInputtextarea" placeholder="write your own reviews" rows="3"></textarea>
  </div>
  <div class="form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
	
</div>

<!-- Optional JavaScript --> 
<!-- jQuery first, then Popper.js, then Bootstrap JS --> 
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script> 
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script> 
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>

