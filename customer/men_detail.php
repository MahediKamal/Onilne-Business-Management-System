<?php
    $title = "details";
    require_once 'customer_header.php';
    require_once 'navigation.php';

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
<title>Men-Details</title>
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
  <div class="row">
    <div class="col-md-12"> HOME &GT SHOP &GT MEN &GT MEN DRESS </div>
  </div>
</div>
<div class="container">
  <div class="row">
    <div class="col-md-6">
      <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active"> <img class="d-block w-100" src="../images/p-3.png" alt="First slide"> </div>
          <div class="carousel-item"> <img class="d-block w-100" src="../images/p-1.png" alt="Second slide"> </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev"> <span class="carousel-control-prev-icon" aria-hidden="true"></span> <span class="sr-only">Previous</span> </a> <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next"> <span class="carousel-control-next-icon" aria-hidden="true"></span> <span class="sr-only">Next</span> </a> </div>
    </div>
    <div class="col-md-6">
      <div class="row">
        <h2>Basic T-shirt</h2>
      </div>
      <div class="row">
        <h1><i class="fa fa-inr" aria-hidden="true"></i> 299</h1>
        &nbsp; &nbsp;
        <h3><del>599</del></h3>
        &nbsp; &nbsp;
        <h2 class="text-success">30% off</h2>
      </div>
      <div class="row">
        <h3 class="text-warning"><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star-half-o" aria-hidden="true"></i><i class="fa fa-star-o" aria-hidden="true"></i></h3>
        &nbsp; &nbsp;
        <h5>1200 star rating  and 250 reviews</h5>
      </div>
      <div class="row">
        <p><i class="text-success fa fa-check-square-o" aria-hidden="true"></i> <strong>Availablity:</strong>IN STOCK! </p><br>
        <p><i class="text-success fa fa-check-square-o" aria-hidden="true"></i> <strong>Quantity:</strong>10 In stock </p><br>
        <p><i class="text-success fa fa-check-square-o" aria-hidden="true"></i> <strong>Weight:</strong>10gm</p>
        <!-- <p><i class="text-success fa fa-check-square-o" aria-hidden="true"></i> <strong>Bank Offer</strong>20% Instant Discount on pay with <i class="fa fa-google-wallet" aria-hidden="true"></i> google wallet </p> -->
      </div>
      <div class="row mt-4">
        <h3 class="text-info"><i class="fa fa-map-marker" aria-hidden="true"></i></h3>
        <p style="font-size: 20px"> &nbsp; Delivery by23 Jul, Tuesday | &nbsp; <span class="text-success">FREE</span> </p>
      </div>
      <div class="row mt-4">
        <h4>Size: &nbsp; &nbsp;</h4>
        <div class="dropdown show"> <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> Select size</a>
          <div class="dropdown-menu" aria-labelledby="dropdownMenuLink"> <a class="dropdown-item" href="#">Small</a> <a class="dropdown-item" href="#">Medium </a> <a class="dropdown-item" href="#">Large</a> </div>
        </div>
      </div>
      <div class="row mt-4">
      	<h4>Colors: &nbsp; &nbsp; </h4>
      	
      	<a class="btn btn-primary text-light">Sky Blue</a> &nbsp; <a class="btn btn-danger text-light"> red</a>&nbsp; <a class="btn btn-info text-light"> blue </a> &nbsp; <a class="btn btn-warning text-light"> yellow</a> &nbsp; <a class="btn btn-success text-light"> green</a>
      </div>
      
      <div class="row mt-4">
      	<h4>Seller: &nbsp; &nbsp;</h4>
      	<p style="font-size: 18px">G.M Garments </p>
      </div>

       <a href="cart.php" class="btn btn-danger text-light"><i class="fa fa-cart-plus" aria-hidden="true"></i>  Add To Cart</a> <br/><br/>
      
      
    </div>
  </div>
</div>


<div class="container">
   <div class="row mt-5">
   	 <h2>Similar Products</h2>
   </div>
   
   <div class="row mt-5">
   	<div class="col-md-4">
   		<div class="card">
   			<img class="card-img-top img-fluid" src="../images/p-2.png">
   			<div class="card-title">
   				<h4>Basic Shirt</h4>
   			</div> 
   			<div class="card-text">
   				Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repudiandae fugiat et voluptate sunt officia vero molestias.<br/><br/>
   				<a class="btn btn-success text-light"> Buy Now</a> &nbsp; <a class="btn btn-danger text-light"><i class="fa fa-cart-plus" aria-hidden="true"></i>  Add To Cart</a> <br/><br/>
   			</div>
   		</div>
   	</div>
   	
   	
   	<div class="col-md-4">
   		<div class="card">
   			<img class="card-img-top img-fluid" src="../images/p-5.png">
   			<div class="card-title">
   				<h4>Basic Jacket</h4>
   			</div> 
   			<div class="card-text">
   				Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repudiandae fugiat et voluptate sunt officia vero molestias.<br/><br/>
   				<a class="btn btn-success text-light"> Buy Now</a> &nbsp; <a class="btn btn-danger text-light"><i class="fa fa-cart-plus" aria-hidden="true"></i>  Add To Cart</a> <br/><br/>
   			</div>
   		</div>
   	</div>
   	
   	
   	<div class="col-md-4">
   		<div class="card">
   			<img class="card-img-top img-fluid" src="../images/p-6.png">
   			<div class="card-title">
   				<h4>Denim Jacket</h4>
   			</div> 
   			<div class="card-text">
   				Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repudiandae fugiat et voluptate sunt officia vero molestias.<br/><br/>
   				<a class="btn btn-success text-light"> Buy Now</a> &nbsp; <a class="btn btn-danger text-light"><i class="fa fa-cart-plus" aria-hidden="true"></i>  Add To Cart</a> <br/><br/>
   			</div>
   		</div>
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


<?php

    require_once 'footer.php';

?>