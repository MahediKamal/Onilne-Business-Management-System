<html>
<head>
<meta charset="utf-8">
<meta content="IE-edge" http-equiv="X-UA-Compatible">
<meta content="width=device-width, intial-scale=1.0" name="viewport">
<title>Shoppers Stop</title>

<!--JQuery--------------->
<script src="../js/JQuery.js"></script>
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
    background-color: #ffffff;
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
nav{
    width:100%;
    box-shadow: 2px 2px 30px rgba(0,0,0,0.05);
    z-index: 100;
}
.social-call{
    height: 40px;
    border: 1px solid rgba(0,0,0,0.05);
    display: flex;
    justify-content: center;
    align-items: center;
}
.social a{
    margin: 0px 5px;
    color: rgba(0,0,0,0.7);
    font-size: 0.9rem;
}
.phone{
    color: rgba(0,0,0,0.7);
    margin-left: 30px;
    font-size: 0.9rem;
}
.social a:hover{
    color: #0b9d8a;
    transition: all ease 0.3s;
}
.navigation{
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 0px 45px;
}
.navigation h1{
    font-family: poppins;
    font-size: xx-large;
}
.logo img{
    height: 30px;
}
.menu{
    display: flex;
}
.menu li{
    position: relative;
    margin: 20px;
    display: flex;
    text-transform: uppercase;
    font-weight: 500;
    text-decoration: none;
}
.menu li a{
    color: #555555;
}
.right-menu a{
    margin: 0px 10px;
    font-size: 1.2rem;
    color: rgba(0,0,0,0.7);
}
.menu a:hover,
.right-menu a:hover,
.search-cancel:hover,
.form-cancel:hover{
    color: #0b9d8a;
    transition: all ease 0.3s;
}
.sale-lable{
    width:38px;
    height: 17px;
    background-color: #f76b6a;
    color: #ffffff;
    font-weight: 400;
    display: flex;
    justify-content: center;
    align-items: center;
    font-size: 0.7rem;
    text-transform: uppercase;
    position: absolute;
    top: -20px;
    right: -20px;
}
.sale-lable:after{
    content: '';
    width:0px;
    height: 0px;
    border-bottom: 5px solid transparent;
    border-left: 3px solid transparent;
    border-top: 7px solid #f76b6a;
    border-right: 5px solid transparent;
    position: absolute;
    left: 10%;
    top: 100%;
}
.fa-shopping-cart{
    position: relative;
}
.num-cart-product{
    position: absolute;
    top: -17px;
    right: -17px;
    width:25px;
    height: 25px;
    font-size: 0.8rem;
    border-radius: 50%;
    background-color: #0b9d8a;
    color: #ffffff;
    display: flex;
    justify-content: center;
    align-items: center;
    font-weight: 400;
}

.search-bar{
    width:100%;
    height: 300px;
    background-color: #ffffff;
    position: fixed;
    left: 0px;
    bottom: 0px;
    display: flex;
    justify-content: center;
    box-shadow: 2px -5px 30px rgba(0,0,0,0.1);
    z-index: 101;
    animation: search 0.3s;
}
.search-input{
    width:90%;
    border-bottom: 2px solid #555555;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100px;
    margin-top: 20px;
}
.search-bar input{
    width:100%;
    padding: 30px;
    border: none;
    outline: none;
    font-size: 2rem;
    margin: 20px;
    padding: 0px 20px;
}
.search-cancel{
    color: #272727;
    font-size: 2rem;
    padding-right: 40px;
}
.search-bar{
    display: none;
}
.search-bar-active{
    display: flex;
}
@keyframes search{
    0%{
        bottom: -300px;
    }
    100%{
        bottom: 0px;
    }
}

.banner-box-1{
    width:100%;
     height: 67vh;
    margin: 0px 0px;
    display: flex;
    justify-content: center;
    align-items: center;
    background-image: url(../images/Slider_01.jpg);
    background-size: cover;
    background-repeat: no-repeat;
    background-position: center;
}

.feature-box{
    width:155px;
    height: 160px;
    margin: 0px 20px;
    border-radius: 10px;
    overflow: hidden;
}
.feature-box a img{
    width:100%;
    height: 100%;
    object-fit: cover;
    object-position: center;
}
.item span{
    font-size: 1rem;
    font-weight: 600;
    margin: 5px;
    color: #444444;
}
.item{
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
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
    color: #ffffff;
    background-color: #202020;
    font-weight: 500;
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

.sale{
    width:95%;
    display: flex;
    justify-content: center;
    align-items: center;
    flex-wrap: wrap;
    margin: 20px auto;
  
}
.sale-box{
    width:280px;
    border-radius: 20px;
    margin: 20px;
    position: relative;
    flex-grow: 0.5;
}
.sale-box img{
    width:100%;
    height: 100%;
    object-fit: cover;
    object-position: center right;
}
.sale-text{
    position: absolute;
    left: 20%;
    top: 50%;
    transform: translate(-20%,-50%);
    display: flex;
    flex-direction: column;
}
.sale-box a{
    color: #1b1919;
}
.sale-text strong{
    font-size: 1.2rem;
    font-weight: 500;
    width: 80%;
    line-height: 23px;
}

.banner-box{
    width:100%;
     height: 40vh;
    margin: 20px 0px;
    display: flex;
    justify-content: center;
    align-items: center;
    background-image: url(../images/Slider_03.jpg);
    background-size: cover;
    background-repeat: no-repeat;
    background-position: center;
}
 
.banner-text-container{
    width:80%;
    height: 90%;
    display: flex;
    align-items: center;
}
 
.banner-text{
    display: flex;
    flex-direction: column;
    margin-right: auto;
}
 
.banner-text strong{
    color: #333333;
    font-size: 3rem;
    line-height: 55px;
    margin-top: 10px;
    letter-spacing: 1px;
}
 
.banner-text span{
    text-transform: uppercase;
    letter-spacing: 6px;
    font-weight: 500;
    color: #666666;
    font-size: 1.2rem;
}
 
.banner-btn{
    width:170px;
    height: 40px;
    display: flex;
    justify-content: center;
    align-items: center;
    color: #ffffff;
    background-color: #0b9d8a;
    text-transform: uppercase;
    letter-spacing: 2px;
    margin-top: 14px;
}
.banner-text strong font{
    color: #0b9d8a;
}

.services{
    display: flex;
    width: 90%;
    justify-content: center;
    align-items: center;
    flex-wrap: wrap;
    margin: auto;
}
.services-box{
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    border: 1px solid rgba(0,0,0,0.1);
    min-width: 250px;
    padding: 20px;
    margin: 15px;
    flex-grow: 0.7;
}
.services-box i{
    color: #0b9d8a;
    font-size: 2rem;
    margin: 15px;
}
.services-box span{
    color: #222222;
    font-weight: 600;
    letter-spacing: 0.5px;
    font-size: 1rem;
}
.services-box p{
    color: #878787;
    margin: 0px;
    font-size: 0.9rem;
}
footer{
    display: flex;
    justify-content: space-around;
    align-items: center;
    padding: 10px;
    border-top: 1px solid rgba(0,0,0,0.1);
    flex-wrap: wrap;
    margin-top: 20px;
}
.copyright{
    font-size: 0.9rem;
    color: #4e4e4e;
    letter-spacing: 1px;
}
.subscribe input{
    width:240px;
    height: 43px;
    padding: 0px 20px;
    border: 1px solid rgba(0,0,0,0.1);
    outline: none;
    box-shadow: 2px 2px 30px rgba(0,0,0,0.05);
}
.subscribe input[type="submit"]{
    width:120px;
    background-color: #0b9d8a;
    color: #ffffff;
    margin: 0px 5px;
}

	</style>
	
</head>
<body>
    <nav> 
        <!--social-links-and-phone-number----------------->
 <div class="social-call">
     <!--social-links--->
     <div class="social">
         <a href="#"><i class="fab fa-facebook-f"></i></a>
         <a href="#"><i class="fab fa-twitter"></i></a>
         <a href="#"><i class="fab fa-youtube"></i></a>
         <a href="#"><i class="fab fa-instagram"></i></a>
     </div>
     <!--phone-number------>
     <div class="phone">
         <span>Call: +123456789</span>
     </div>
 </div>
 <!--menu-bar----------------------------------------->
 <div class="navigation">
     <!--logo------------>
    <h1>Shoppers Stop</h1>
     <!--menu-icon------------->
     <div class="toggle"></div>
     <!--menu----------------->
     <ul class="menu">
         <li><a href="index.php">Home</a></li>
         <li  class="shop"><a href="women.php" >Women</a></li>
         <li><a href="men.php">Men</a>
             <!--lable---->
             <span class="sale-lable">Sale</span>
         </li>
         <li><a href="kids.php">Kids</a></li>
         <li><a href="electronics.php">Electronics</a></li>
     </ul>
     <!--right-menu----------->
     <div class="right-menu">
         <a href="javascript:void(0);" class="search">
             <i class="fas fa-search"></i>
         </a>
         <a href="javascript:void(0);" class="user">
             <i class="far fa-user"></i>
         </a>
         <a href="cart.php">
             <i class="fas fa-shopping-cart">
                 <span class="num-cart-product">0</span>
             </i>
         </a>
     </div>
     </div>
 </nav>

 <!-----------full-slider----------------------------->
 <div class="banner-box-1 f-slide-1">
   
        
    <div class="banner-text-container">
    <div class="banner-text">
        <span>Limited Offer</span>
        <strong>30% Off<br/> With <font>Promo Code</font></strong>
        <a href="#" class="banner-btn">Shop Now</a>
    </div>
    </div>

</div> 

 <!--search-bar----------------------------------->
 <div class="search-bar">
    
    <!--search-input------->
    <div class="search-input">
    <input type="text" placeholder="Search For Product" name="search" />
    <!--cancel-btn--->
    <a href="javascript:void(0);" class="search-cancel">
        <i class="fas fa-times"></i>
    </a>
</div>
</div>

<!--product-categories-slider---------------------->
<div class="arrival-heading">
    <strong>Featured Categories</strong>
    <p>We Provide You New Fasion Design Clothes</p>
        </div>

<ul id="autoWidth" class="container" class="cs-hidden">
    <!--box-1--------------------->
    
    <li class="item">
        <div class="feature-box">
            <a href="#">
                <img src="../images/feature_1.jpg">
            </a>
        </div>
        <span>T-Shirts</span>
    </li>
    <!--box-2--------------------->
    <li class="item">
        <div class="feature-box">
            <a href="#">
                <img src="../images/feature_2.jpg">
            </a>
        </div>
        <span>Men T-Shirts</span>
    </li>
    <!--box-3--------------------->
    <li class="item">
        <div class="feature-box">
            <a href="#">
                <img src="../images/feature_3.jpg">
            </a>
        </div>
        <span>Kids T-Shirts</span>
    </li>
    <!--box-4--------------------->
    <li class="item">
        <div class="feature-box">
            <a href="#">
                <img src="../images/feature_4.jpg">
            </a>
        </div>
        <span>Pillow</span>
    </li>
    <!--box-5--------------------->
    <li class="item">
        <div class="feature-box">
            <a href="#">
                <img src="../images/feature_5.jpg">
            </a>
        </div>
        <span>Phone Cover</span>
    </li>
    <!--box-6--------------------->
    <li class="item">
        <div class="feature-box">
            <a href="#">
                <img src="../images/feature_6.jpg">
            </a>
        </div>
        <span>Shopping Bags</span>
    </li>
</ul>
    

<!--NEW ARRIVAL-------------------------------->
<section class="new-arrival">
            
    <!--heading-------->
    <div class="arrival-heading">
        <strong>New Arrival</strong>
        <p>We Provide You New Fasion Design Clothes</p>
    </div>
      <!--products----------------------->
      <div class="product-container">
          
        <!--product-box-1---------->
          <div class="product-box">
              <!--product-img------------>
              <div class="product-img">
                  <!--add-cart---->
                  <a href="#" class="add-cart">
                      <i class="fas fa-shopping-cart"></i>
                    </a>
                  <!--img------>
                <img src="../images/p-1.png">
              </div>
              <!--product-details-------->
              <div class="product-details">
                  <a href="#" class="p-name">Drawstring T-Shirt</a>
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
                  <img src="../images/p-2.png">
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
              <img src="../images/p-3.png">
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
              <img src="../images/p-4.png">
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
              <img src="../images/p-5.png">
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
              <img src="../images/p-6.png">
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
              <img src="../images/p-7.png">
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
              <img src="../images/p-8.png">
            </div>
            <!--product-details-------->
            <div class="product-details">
                <a href="#" class="p-name">Drawstring T-Shirt</a>
                <span class="p-price">$22.00</span>
            </div>
        </div>
      </div>
  </section>


  <!---sale------------------------------------>
  <section class="sale">
    <!--sale-box-1-------------------->
    <div class="sale-box sale-1">
        <img src="../images/sale-1.jpg">
        
        <a href="#">
        <div class="sale-text">
          <strong>Bag with rose pattern</strong>
          <span>Sale off 25%</span>
        </div></a>
    
      </div>
       <!--sale-box-2-------------------->
    <div class="sale-box sale-1">
      <img src="../images/sale-2.jpg">
      
      <a href="#"><div class="sale-text">
        <strong>Hello Summer</strong>
        <span>Sale off 20%</span>
      </div></a>
  
    </div>
     <!--sale-box-3-------------------->
     <div class="sale-box sale-1">
      <img src="../images/sale-3.jpg">
      
      <a href="#">
      <div class="sale-text">
        <strong>Let's Party Hard Pillow</strong>
        <span>Sale off 25%</span>
      </div></a>
  
    </div>
 
</section>

<!--Feature-items-------------------------------->
<section class="feature-item">
            
    <!--heading-------->
    <div class="arrival-heading">
    <strong>Featured Items</strong>
    <p>We Provide You New Fasion Design Clothes</p>
        </div>
      <!--products----------------------->
      <div class="product-container">
          
        <!--product-box-1---------->
          <div class="product-box">
              <!--product-img------------>
              <div class="product-img">
                  <!--add-cart---->
                  <a href="#" class="add-cart"><i class="fas fa-shopping-cart"></i></a>
                  <!--img------>
                <img src="../images/p-1.png">
              </div>
              <!--product-details-------->
              <div class="product-details">
                  <a href="#" class="p-name">Drawstring T-Shirt</a>
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
                  <img src="../images/p-2.png">
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
              <img src="../images/p-3.png">
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
              <img src="../images/p-4.png">
            </div>
            <!--product-details-------->
            <div class="product-details">
                <a href="#" class="p-name">Drawstring T-Shirt</a>
                <span class="p-price">$22.00</span>
            </div>
        </div>
          
            </div>
            </section>

            <!--banner-->
          <div class="banner-box f-slide-3">
        
            <div class="banner-text-container">
            <div class="banner-text">
                <span>Limited Offer</span>
                <strong>30% Off<br/> With <font>Promo Code</font></strong>
                <a href="#" class="banner-btn">Shop Now</a>
            </div>
            </div>
        
        </div> 

        <!--services------------------------->
    <section class="services">
        <!--services-box---------->
        <div class="services-box">
            <i class="fas fa-shipping-fast"></i>
            <span>Free Shipping</span>
            <p>Free Shipping for all US order</p>
        </div>
        <!--services-box---------->
        <div class="services-box">
            <i class="fas fa-headphones-alt"></i>
            <span>Support 24/7</span>
            <p>We support 24h a day</p>
        </div>
        <!--services-box---------->
        <div class="services-box">
            <i class="fas fa-sync"></i>
            <span>100% Money Back</span>
            <p>You have 30 days to Return</p>
        </div>
        
    </section>
    <!--footer---------------------------->
    <footer>
        <!--copyright-------------->
        <span class="copyright">
            Copyright 2020 - Shoppers Stop
        </span>
        <!--subcribe---------------->
        <div class="subscribe">
            <form>
            <input type="email" placeholder="Example@gmail.com" required/>
            <input type="submit" value="Subscribe">
            </form>
        </div>
    </footer>


 <!--js-script--->
<script type="text/javascript">
/*-----For Search Bar-----------------------------*/
$(document).on('click','.search',function(){
        $('.search-bar').addClass('search-bar-active')
    });
 
    $(document).on('click','.search-cancel',function(){
        $('.search-bar').removeClass('search-bar-active')
    });


   
</script>


   

</body>
</html>
