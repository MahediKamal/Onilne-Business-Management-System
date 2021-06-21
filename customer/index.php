
<?php
    $title = "Shoppers Shop";
    // require_once '../includes/connection.php';
    // require_once '../includes/function.php';
    require_once 'customer_header.php';
    require_once 'navigation.php';

?>

    
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
      <?php
            $query = "SELECT *
            FROM (select pdt_id, pdt_name, pdt_picture, pdt_price FROM product where pdt_description='Men' ORDER BY pdt_id)
            WHERE ROWNUM <= 8";
            $section = "men"; // folder name of images
            createCart_av($query, $con, $section);

    ?>
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
      <?php
            $query = "SELECT *
            FROM (select pdt_id, pdt_name, pdt_picture, pdt_price FROM product where pdt_description='Electronics' ORDER BY pdt_id)
            WHERE ROWNUM <= 4";
            $section = "electronics"; // folder name of images
            createCart_av($query, $con, $section);



    ?>
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
