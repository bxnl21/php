<?php 
  include_once("libs/routing.php");
  include_once("libs/common.php");
  include_once("models/category.php");
  include_once("models/products.php");
  include_once("models/M_cart.php");
  $db = new common();
  $c=new Category();
  $routing= new Routing();
  $path = $routing->get_path();
?>
<?php
  include_once("views/header.php");
  ?>
        <!--Content-->
            <?php
            include_once($path);
            ?>
          <!--END Content-->
        <section class="clearfix info bg-primary mt-5 py-3">
           <?php
            include_once("views/info.php");
            ?>
        </section>
            <?php 
                    include_once("views/footer.php");
              ?>