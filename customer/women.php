<?php

    require_once 'navigation.php';

?>

<html>
<head>
<meta charset="utf-8">
<meta content="IE-edge" http-equiv="X-UA-Compatible">
<meta content="width=device-width, intial-scale=1.0" name="viewport">
<title>Women</title>

<!--JQuery--------------->
<script src="js/JQuery.js"></script>
<!--fav-icon---------------->
<link rel="shortcut icon" href="images/fav-icon.png"/>
<!--using FontAwesome--------------->
<script crossorigin="anonymous" src="https://kit.fontawesome.com/c8e4d183c2.js"></script>
	<!--style----->
	<style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');
    
    body{
    margin:0px;
    padding: 0px;
    font-family: poppins;
    background-color: white;
}
*{
    box-sizing: border-box;
}
ul{
    list-style: none;
}
a{
    text-decoration: none;
}
#autoWidth{
    display: flex;
    justify-content: center !important;
    margin: 10px auto 40px auto;
}

.arrival-heading strong{
    font-size: 1.2rem;
    letter-spacing: 1px;
    color: #1b1919;
    text-transform: uppercase;
    font-weight: 600;
    margin-top: 40px;
    padding: 5px 30px;
    border: 1px solid #e0e0e0;
}
.arrival-heading{
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;
}
.arrival-heading strong{
    color: white;
    background-color: black;
    font-weight: 500;
    font-size: 20px;
}
.arrival-heading p{
    color: #808080;
    margin: 10px;
    font-size: 0.9rem;
}
.product-container{
    width:90%;
    display: flex;
    justify-content: center;
    align-items: center;
    flex-wrap: wrap;
    margin-top: 20px;
}
.product-box{
    display: flex;
    flex-grow: 0.5;
    flex-direction: column;
    align-items: center;
    border: 1px solid #f7f7f7;
    border-radius: 10px;
    margin: 20px;
}
.product-img{
    width:200px;
    height: 210px;
    margin: 20px;
    cursor: pointer;
    position: relative;
}
.product-img img{
    width:100%;
    height: 100%;
    object-fit: contain;
    object-position: center;
}
.product-details{
    display: flex;
    flex-direction: column;
    align-items: center;
    width: 100%;
    padding: 10px 20px;
    border-top: 1px solid #f3f3f3;
}
.p-name{
    color: #727272;
}
.p-name:hover{
  color: #0b9d8a;
}
.p-price{
    color: #333333;
    font-size: 1.2rem;
    font-weight: 400;
}
.product-box:hover{
    box-shadow: 2px 2px 30px rgba(0,0,0,0.1);
}
.add-cart{
    position: absolute;
    right: -20px;
    top: 10px;
    width:50px;
    height: 50px;
    border-radius: 50%;
    display: flex;
    justify-content: center;
    align-items: center;
    color: #ffffff;
    background-color: #0b9d8a;
    box-shadow: 2px 2px 30px rgba(0,0,0,0.1);
    display: none;
    animation: fade 0.3s;
 
}
.add-cart:hover{
    background-color: #f76b6a;
    transition: all ease 0.2s;
}
.product-box:hover .add-cart{
    display: flex;
}
.new-arrival{
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
}

</style>
	
    </head>

    <body>


<!--NEW ARRIVAL-------------------------------->
<section class="new-arrival">
            
  <!--heading-------->
  <div class="arrival-heading">
      <strong>WOMEN</strong>
      <p>We Provide You New Fasion Design Clothes</p>
  </div>
    <!--products----------------------->
    <div class="product-container">
        
      <!--product-box-1---------->
        <div class="product-box">
            <!--product-img------------>
            <div class="product-img">
                <!--add-cart---->
                <a href="cart.php" class="add-cart">
                    <i class="fas fa-shopping-cart"></i>
                  </a>
                <!--img------>
              <img src="https://img10.joybuy.com/N0/s560x560_jfs/t1/93557/17/6220/177017/5df1f766Eb7eb7be1/00701a965586f70a.jpg.dpg">
            </div>
            <!--product-details-------->
            <div class="product-details">
                <a href="women_detail.php" class="p-name">Drawstring T-Shirt</a>
                <span class="p-price">$22.00</span>
            </div>
        </div>
          <!--product-box-2---------->
          <div class="product-box">
              <!--product-img------------>
              <div class="product-img">
                  <!--add-cart---->
                <a href="#" class="add-cart"><i class="fas fa-shopping-cart"></i></a>
                <!--img------>
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRw4UqXxjxdu5JxVIkuDAbQFwY-wWfzZgrKIQ&usqp=CAU">
              </div>
              <!--product-details-------->
              <div class="product-details">
                  <a href="#" class="p-name">Drawstring T-Shirt</a>
                  <span class="p-price">$22.00</span>
              </div>
          </div>
        <!--product-box-3---------->
        <div class="product-box">
          <!--product-img------------>
          <div class="product-img">
              <!--add-cart---->
              <a href="#" class="add-cart"><i class="fas fa-shopping-cart"></i></a>
              <!--img------>
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSlQapypuB1M8S_IeekFyKqTE3XRbFHpqyL7Q&usqp=CAU">
          </div>
          <!--product-details-------->
          <div class="product-details">
              <a href="#" class="p-name">Drawstring T-Shirt</a>
              <span class="p-price">$22.00</span>
          </div>
      </div>
        <!--product-box-4---------->
        <div class="product-box">
          <!--product-img------------>
          <div class="product-img">
              <!--add-cart---->
              <a href="#" class="add-cart"><i class="fas fa-shopping-cart"></i></a>
              <!--img------>
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQbJQmMLoyuQnnbwN99wUyUzl20dtVQnuGYpA&usqp=CAU">
            
          </div>
          <!--product-details-------->
          <div class="product-details">
              <a href="#" class="p-name">Drawstring T-Shirt</a>
              <span class="p-price">$22.00</span>
          </div>
      </div>
        <!--product-box-5---------->
        <div class="product-box">
          <!--product-img------------>
          <div class="product-img">
              <!--add-cart---->
              <a href="#" class="add-cart"><i class="fas fa-shopping-cart"></i></a>
              <!--img------>
            <img src="https://stylesatlife.com/wp-content/uploads/2020/05/Light-Blue-Full-Sleeve-Formal-Shirt.jpg.webp">
          </div>
          <!--product-details-------->
          <div class="product-details">
              <a href="#" class="p-name">Drawstring T-Shirt</a>
              <span class="p-price">$22.00</span>
          </div>
      </div>
        <!--product-box-6---------->
        <div class="product-box">
          <!--product-img------------>
          <div class="product-img">
              <!--add-cart---->
              <a href="#" class="add-cart"><i class="fas fa-shopping-cart"></i></a>
              <!--img------>
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTzDmhxNezANVqsqdu3P-YJU4e1AcQhAL7aWA&usqp=CAU">
          </div>
          <!--product-details-------->
          <div class="product-details">
              <a href="#" class="p-name">Drawstring T-Shirt</a>
              <span class="p-price">$22.00</span>
          </div>
      </div>
        <!--product-box-7---------->
        <div class="product-box">
          <!--product-img------------>
          <div class="product-img">
              <!--add-cart---->
              <a href="#" class="add-cart"><i class="fas fa-shopping-cart"></i></a>
              <!--img------>
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSbSPWE9_cw5nA_7kR3Il_Sdrxk2EAXZHtFJg&usqp=CAU">
          </div>
          <!--product-details-------->
          <div class="product-details">
              <a href="#" class="p-name">Drawstring T-Shirt</a>
              <span class="p-price">$22.00</span>
          </div>
      </div>
      <!--product-box-8---------->
      <div class="product-box">
        <!--product-img------------>
        <div class="product-img">
            <!--add-cart---->
            <a href="#" class="add-cart">
                <i class="fas fa-shopping-cart"></i>
              </a>
            <!--img------>
          <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQcYHljZDwlXq1Naa1wPXPQ_ZW27PsIB4vQeg&usqp=CAU">
        </div>
        <!--product-details-------->
        <div class="product-details">
            <a href="#" class="p-name">Drawstring T-Shirt</a>
            <span class="p-price">$22.00</span>
        </div>
    </div>
      <!--product-box-9---------->
      <div class="product-box">
          <!--product-img------------>
          <div class="product-img">
              <!--add-cart---->
            <a href="#" class="add-cart"><i class="fas fa-shopping-cart"></i></a>
            <!--img------>
            <img src="data:image/jpeg;base64,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">
          </div>
          <!--product-details-------->
          <div class="product-details">
              <a href="#" class="p-name">Drawstring T-Shirt</a>
              <span class="p-price">$22.00</span>
          </div>
      </div>
    <!--product-box-10---------->
    <div class="product-box">
      <!--product-img------------>
      <div class="product-img">
          <!--add-cart---->
          <a href="#" class="add-cart"><i class="fas fa-shopping-cart"></i></a>
          <!--img------>
        <img src="data:image/jpeg;base64,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">
      </div>
      <!--product-details-------->
      <div class="product-details">
          <a href="#" class="p-name">Drawstring T-Shirt</a>
          <span class="p-price">$22.00</span>
      </div>
  </div>
    <!--product-box-11---------->
    <div class="product-box">
      <!--product-img------------>
      <div class="product-img">
          <!--add-cart---->
          <a href="#" class="add-cart"><i class="fas fa-shopping-cart"></i></a>
          <!--img------>
        <img src="data:image/jpeg;base64,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">
      </div>
      <!--product-details-------->
      <div class="product-details">
          <a href="#" class="p-name">Drawstring T-Shirt</a>
          <span class="p-price">$22.00</span>
      </div>
  </div>
        <!--product-box-12---------->
        <div class="product-box">
          <!--product-img------------>
          <div class="product-img">
              <!--add-cart---->
              <a href="#" class="add-cart">
                  <i class="fas fa-shopping-cart"></i>
              </a>
              <!--img------>
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcROkhKRN-A5T5JOUgpdCnBSjRamsqJaswxcnw&usqp=CAU">
          </div>
          <!--product-details-------->
          <div class="product-details">
              <a href="#" class="p-name">Drawstring T-Shirt</a>
              <span class="p-price">$22.00</span>
          </div>
      </div>
    </div>
</section>



</body>
</html>

<?php

    require_once 'footer.php';

?>