<?php

    require_once 'navigation.php';

?>
<html>
<head>
<meta charset="utf-8">
<meta content="IE-edge" http-equiv="X-UA-Compatible">
<meta content="width=device-width, intial-scale=1.0" name="viewport">
<title>Kids</title>

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
      <strong>KIDS</strong>
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
              <img src="https://assets.myntassets.com/f_webp,dpr_1.0,q_60,w_210,c_limit,fl_progressive/assets/images/productimage/2021/3/25/0f5bec48-7d81-45eb-b6db-3d06ab7ccdfd1616657453241-1.jpg">
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
                <img src="https://assets.myntassets.com/f_webp,dpr_1.0,q_60,w_210,c_limit,fl_progressive/assets/images/11862620/2020/6/15/c10e66c2-0222-49e2-99b9-16a23432f31c1592196182641-Toonyport-Boys-Clothing-Set-2001592196180857-1.jpg">
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
            <img src="https://assets.myntassets.com/f_webp,dpr_1.0,q_60,w_210,c_limit,fl_progressive/assets/images/productimage/2021/5/27/bef55b4e-5bd3-406b-a088-7aef53cd49d01622127246934-1.jpg">
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
            <img src="https://assets.myntassets.com/f_webp,dpr_1.0,q_60,w_210,c_limit,fl_progressive/assets/images/productimage/2021/5/7/555a3a70-5605-4c51-b916-a909e8c64ca11620381278511-1.jpg">
            
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
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT-nDlImRUxsYVaq6bJawq9YE0uMw1gEvkD6w&usqp=CAU">
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
            <img src="data:image/jpeg;base64,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">
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
            <img src="data:image/jpeg;base64,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">
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
          <img src="data:image/jpeg;base64,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">
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
        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR3pAUeBUE_7woxG2j03zb5OWIPCgro4DTjiA&usqp=CAU">
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
        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS46jtMC03N8mqCksmIc45oWEGyv1Fq4WGgPw&usqp=CAU">
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
              <a href="cart.php" class="add-cart">
                  <i class="fas fa-shopping-cart"></i>
              </a>
              <!--img------>
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSARQGUD2NA6FT-eVxyVW6tKM4Jj3u9q1jTnA&usqp=CAU">
          </div>
          <!--product-details-------->
          <div class="product-details">
              <a href="kids_detail.php" class="p-name">Drawstring T-Shirt</a>
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