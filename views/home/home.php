<?php 
  include_once('models/category.php');
  include_once('models/products.php');
  $f = new Category();
  $p = new Product();
?>
<section class="clearfix header mt-5 pt-4">
    <div class="container ">
                <div class="row">
                    <div class="col-2.5 col-md-3 bg-light">
                        <nav class="nav flex-column">
                          <?php
                            $c1=$f->getCategoryByParent(0);
                            foreach($c1 as $value1):
                              {
                                $c2 = $f->getCategoryByParent($value1['id']);
                                if(count($c2)>0)
                                {    
                                  echo"<ul><a class='btn dropdown-toggle' href='' role='button' id='dropdownMenuLink' data-toggle='dropdown' aria-haspopup='true' aria-expanded='false' >".$value1['category_name']."</a>";
                                  echo"<div class='dropdown-menu'>";
                                      foreach($c2 as $value2):
                                      {       
                                        ?>
                                        <li><a class='dropdown-item' href='<?=$routing->site_url('san-pham/'.$value2['slug'])?>'><?=$value2['category_name']?></a></li>
                                     <?php
                                      }
                                    endforeach;
                                  echo"</div></ul>";
                                  }
                                  else
                                    { ?>
                                      <li><a class='dropdown-item' href='<?=$routing->site_url('san-pham/'.$value1['slug'])?>'><?=$value1['category_name']?></a></li>
                                    <?php
                                     }         
                                }
                              endforeach;
                              ?>
                        </nav>
                    </div>
                   <div class="col-6">
                        <section class="clearfix slideshow">
                            <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                                <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="<?php echo $routing->base_url("assets/img/slideshow1.png")?>" class="d-block w-100" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="<?php echo $routing->base_url("assets/img/slideshow2.png")?>" class="d-block w-100" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="<?php echo $routing->base_url("assets/img/slideshow3.png")?>" class="d-block w-100" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="<?php echo $routing->base_url("assets/img/slideshow5.png")?>" class="d-block w-100" alt="...">
                                </div>
                                </div>
                                <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                                </a>
                                <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                                </a>
                            </div>
                        </section>
                   </div>
                   <div class="col-3">
                       <img class="img-fluid" src="<?php echo $routing->base_url("assets/img/GARENA1.png")?>" alt="garena">
                       <img class="img-fluid" src="<?php echo $routing->base_url("assets/img/ITUNES1.png")?>" alt="itunes">
                   </div>
                </div>
            </div>
        </section>
<section class="clearfix header">
            <div class="container">
                <h3 class="mt-2">Sản phẩm nổi bật</h3>
                <div class="row mt-1">
                <?php
                    $newproduct = $p->getNewProduct();
                    foreach($newproduct as $value):
                    ?>
                          <div class="col-6 col-md mt-2">
                          <div class="card" style="width: 80%">
                              <img src="<?= $routing->base_url; ?>assets/img/<?=$value['image']; ?>" class="card-img-top" alt="...">
                              <div class="card-body">
                                <h6 class="card-title text-center"><?= $value['product_name']; ?></h6>
                                <p class="card-text"><?= number_format($value['price']); ?> VNĐ</p>
                                <a href="<?=$routing->site_url("chi-tiet/".$value['slug']."")?>" class="btn btn-primary">Mua ngay</a>
                              </div>
                            </div>
                        </div>
                  <?php
                    endforeach;
                 ?>
                 </div>
            </div>
        </section>
         <!--end sp nổi bật-->
          <!-- kẻ ngang -->
        <section>
            <div class="container border-top mt-3"> 
            </div>
        </section>
          <!-- end kẻ-->
        <!--Sản phẩm bán chạy-->
        <section class="clearfix header">
            <div class="container">
                <h3 class="mt-2">Sản phẩm bán chạy</h3>
                <div class="row mt-1">
                <?php
                    $newproduct = $p->getProduct();
                    foreach($newproduct as $value):
                    ?>
                          <div class="col-6 col-md mt-2">
                          <div class="card" style="width: 80%">
                              <img src="<?= $routing->base_url; ?>assets/img/<?=$value['image']; ?>" class="card-img-top" alt="...">
                              <div class="card-body">
                                <h6 class="card-title text-center"><?= $value['product_name']; ?></h6>
                                <p class="card-text"><?= number_format($value['price']); ?> VNĐ</p>
                                <a href="<?=$routing->site_url("chi-tiet/".$value['slug']."")?>" class="btn btn-primary">Mua ngay</a>
                              </div>
                            </div>
                        </div>
                  <?php
                    endforeach;
                 ?>
                 </div>
            </div>
        </section>
        <!--san pham theo loai-->
         <section class="clearfix header">
            <div class="container">
                <h3 class="mt-2">Sản phẩm team</h3>
                <div class="row mt-1">
                <?php
                    $newproduct = $p->getProductByBrand();
                    foreach($newproduct as $value):
                    ?>
                          <div class="col-6 col-md mt-2">
                          <div class="card" style="width: 80%">
                              <img src="<?= $routing->base_url; ?>assets/img/<?=$value['image']; ?>" class="card-img-top" alt="...">
                              <div class="card-body">
                                <h6 class="card-title text-center"><?= $value['product_name']; ?></h6>
                                <p class="card-text"><?= number_format($value['price']); ?> VNĐ</p>
                                <a href="<?=$routing->site_url("chi-tiet/".$value['slug']."")?>" class="btn btn-primary">Mua ngay</a>
                              </div>
                            </div>
                        </div>
                  <?php
                    endforeach;
                 ?>
                 </div>
            </div>
        </section>
        <!--end sp bán chạy-->
          <!-- kẻ ngang -->
          <section>
            <div class="container border-top mt-3"> 
            </div>
          </section>
          <!-- end kẻ-->
        <!--caigido-->
        <div class="clearfix mt-3">
            <div class="container">
              <h3 class="mt-2">Sản phẩm khuyến mãi</h3>
                <div class="row mt-3">
                    <div class="col-5">
                        <img class="img-fluid" src="<?=$routing->base_url('assets/img/caigido.png')?>" alt="">
                    </div>
                    <div class="col-7">
                        <h3>Gói nạp Steam Wallet ~1660k (Nạp chậm )</h3>
                        <h7 class=" text-uppercase>">Giá sản phẩm: 1.760.000 VNĐ</h7>
                        <h6 class="font-weight-bold">Sale: 1.660.000 VNĐ</h6>
                        <a href="#" class="btn btn-primary">Mua ngay</a>
                    </div>
                </div>
                <div class="row mt-1">
                    <div class="col-6 col-md mt-2">
                        <div class="card" style="width: 80%">
                            <img src="<?=$routing->base_url('assets/img/netflix1.png')?>" class="card-img-top" alt="...">
                            <div class="card-body">
                              <h6 class="card-title">Netflix Pre 1User</h6>
                              <p class="card-text">80.000đ</p>
                              <a href="#" class="btn btn-primary">Mua ngay</a>
                            </div>
                          </div>
                    </div>
                    <div class="col-6 col-md mt-2">
                        <div class="card" style="width: 80%">
                            <img src="<?=$routing->base_url('assets/img/canva30k.png')?>" class="card-img-top" alt="...">
                            <div class="card-body">
                              <h6 class="card-title text-center">Win10 Key</h6>
                              <p class="card-text">500.000đ</p>
                              <a href="#" class="btn btn-primary">Mua ngay</a>
                            </div>
                          </div>
                    </div>
                    <div class="col-6 col-md mt-2">
                        <div class="card" style="width: 80%">
                            <img src="<?=$routing->base_url('assets/img/titanfall.jpg')?>" class="card-img-top" alt="...">
                            <div class="card-body">
                              <h6 class="card-title text-center">Titanfall™ 2</h6>
                              <p class="card-text">500.000đ</p>
                              <a href="#" class="btn btn-primary">Mua ngay</a>
                            </div>
                          </div>
                    </div>
                    <div class="col-6 col-md mt-2">
                        <div class="card" style="width: 80%">
                            <img src="<?=$routing->base_url('assets/img/runeclassic.jpg')?>" class="card-img-top" alt="...">
                            <div class="card-body">
                              <h6 class="card-title text-center">Rune Classic</h6>
                              <p class="card-text">500.000đ</p>
                              <a href="#" class="btn btn-primary">Mua ngay</a>
                            </div>
                          </div>
                    </div>
                </div>
            </div>
        </div>
        <!--end caigido-->