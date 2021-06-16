<?php
    $title = "electronics";
    require_once '../includes/connection.php';
    require_once '../includes/function.php';
    require_once 'customer_header.php';
    require_once 'navigation.php';

?>



<!--NEW ARRIVAL-------------------------------->
<section class="new-arrival">
            
  <!--heading-------->
  <div class="arrival-heading">
      <strong>Electronics</strong>
      <p>We Provide You New Fasion Design Clothes</p>
  </div>
    <!--products----------------------->
    <div class="product-container">
        
          <?php
            $query = "select pdt_id, pdt_name, pdt_picture, pdt_price from product where pdt_description = 'Electronics'";
            $section = "electronics"; // folder name of images
            createCart_av($query, $con, $section);
          ?>
    </div>
</section>


</body>
</html>

<?php

    require_once 'footer.php';

?>
