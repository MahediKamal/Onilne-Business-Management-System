<?php
    $title = "men";
    require_once '../includes/connection.php';
    require_once '../includes/function.php';
    require_once 'customer_header.php';
    require_once 'navigation.php';

?>

<!--NEW ARRIVAL-------------------------------->
<section class="new-arrival">
            
  <!--heading-------->
  <div class="arrival-heading">
      <strong>MEN</strong>
      <p>We Provide You New Fasion Design Clothes</p>
  </div>
    <!--products----------------------->
    <div class="product-container">
        
          <?php
            $query = "select pdt_id, pdt_name, pdt_picture, pdt_price from product where pdt_description = 'Men'";
            $section = "men"; // folder name of images
            createCart_av($query, $con, $section);
          ?>
    </div>

          
      
    
</section>


</body>
</html>

<?php

    require_once 'footer.php';

?>