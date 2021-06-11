<?php

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
<title>Kids-Details</title>
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
    <div class="col-md-12"> HOME &GT SHOP &GT KIDS &GT KIDS SHOE </div>
  </div>
</div>
<div class="container">
  <div class="row">
    <div class="col-md-6">
      <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active"> <img class="d-block w-100" src="data:image/jpeg;base64,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" alt="First slide"> </div>
          <div class="carousel-item"> <img class="d-block w-100" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSARQGUD2NA6FT-eVxyVW6tKM4Jj3u9q1jTnA&usqp=CAU" alt="Second slide"> </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev"> <span class="carousel-control-prev-icon" aria-hidden="true"></span> <span class="sr-only">Previous</span> </a> <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next"> <span class="carousel-control-next-icon" aria-hidden="true"></span> <span class="sr-only">Next</span> </a> </div>
    </div>
    <div class="col-md-6">
      <div class="row">
        <h2>Kids Shoe</h2>
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

       <a class="btn btn-danger text-light"><i class="fa fa-cart-plus" aria-hidden="true"></i>  Add To Cart</a> <br/><br/>
      
      
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
   			<img class="card-img-top img-fluid" src="data:image/jpeg;base64,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">
   			<div class="card-title">
   				<h4>Basic Shoes</h4>
   			</div> 
   			<div class="card-text">
   				Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repudiandae fugiat et voluptate sunt officia vero molestias.<br/><br/>
   				<a class="btn btn-success text-light"> Buy Now</a> &nbsp; <a class="btn btn-danger text-light"><i class="fa fa-cart-plus" aria-hidden="true"></i>  Add To Cart</a> <br/><br/>
   			</div>
   		</div>
   	</div>
   	
   	
   	<div class="col-md-4">
   		<div class="card">
   			<img class="card-img-top img-fluid" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR3pAUeBUE_7woxG2j03zb5OWIPCgro4DTjiA&usqp=CAU">
   			<div class="card-title">
   				<h4>Feeder</h4>
   			</div> 
   			<div class="card-text">
   				Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repudiandae fugiat et voluptate sunt officia vero molestias.<br/><br/>
   				<a class="btn btn-success text-light"> Buy Now</a> &nbsp; <a class="btn btn-danger text-light"><i class="fa fa-cart-plus" aria-hidden="true"></i>  Add To Cart</a> <br/><br/>
   			</div>
   		</div>
   	</div>
   	
   	
   	<div class="col-md-4">
   		<div class="card">
   			<img class="card-img-top img-fluid" src="data:image/jpeg;base64,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">
   			<div class="card-title">
   				<h4>School Bag</h4>
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