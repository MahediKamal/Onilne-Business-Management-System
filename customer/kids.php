<?php
    $title = "kids";
    require_once 'navigation.php';
    require_once '../includes/connection.php';
    require_once '../includes/function.php';
    require_once 'customer_header.php';

?>


<!--NEW ARRIVAL-------------------------------->
<section class="new-arrival">
            
  <!--heading-------->
  <div class="arrival-heading">
      <strong>KIDS</strong>
      <p>We Provide You New Fasion Design Clothes</p>
  </div>
    <!--products----------------------->
    <div class="product-container">
        
          <?php
            $query = "select pdt_name, pdt_picture, pdt_price from product where pdt_description = 'kids'";
            $section = "kids"; // folder name of images
            createCart_av($query, $con, $section);
          ?>


    </div>
</section>

 

</body>
</html>

<?php

    require_once 'footer.php';

?>