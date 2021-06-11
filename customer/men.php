<?php

    require_once 'navigation.php';

?>

<html>
<head>
<meta charset="utf-8">
<meta content="IE-edge" http-equiv="X-UA-Compatible">
<meta content="width=device-width, intial-scale=1.0" name="viewport">
<title>Men</title>

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
      <strong>MEN</strong>
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
              <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSTa5nRGbhEDEDxVFPnzDfK46jyjGQBYP4oSQ&usqp=CAU">
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
                <img src="data:image/jpeg;base64,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">
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
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRUtU2WLbShEaZdmDNLs-BiRlxkv2AasdjEuw&usqp=CAU">
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
            <img src="https://assets.myntassets.com/h_1440,q_90,w_1080/v1/assets/images/12422336/2020/10/16/e32c67ad-606d-42c9-8417-e263ac31801e1602863511849BoxersRoadsterMenBoxersRoadsterMenBoxersRoadsterMenBoxersRoa1.jpg">
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
          <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRfWY0iJ7JHCaF2qhgnk-M7AmX8vRoj8Dtb3Q&usqp=CAU">
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
            <img src="../images/p-2.png">
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
          <a href="cart.php" class="add-cart"><i class="fas fa-shopping-cart"></i></a>
          <!--img------>
        <img src="../images/p-3.png">
      </div>
      <!--product-details-------->
      <div class="product-details">
          <a href="men_detail.php" class="p-name">Drawstring T-Shirt</a>
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
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTlF106yYsJQh-JAXnaLbXGH4NP1oI8mzCqQQ&usqp=CAU">
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