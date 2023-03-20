<?php
   include_once('models/products.php');
   $f= new Product();
   $slug= $_GET['slug'];
   $p=$f->getProductBySlug($slug);
?>
</section>
<section class="clearfix header pt-4">
    <div class="container mt-3">
    </div>
</section>
<section class="clearfix header pt-3">
    <div class="container mt-3">
        <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?=$routing->site_url('trang-chu')?>">Trang Chủ</a></li>
            <li class="breadcrumb-item active" aria-current="page">Sản phẩm</li>
        </ol>
        </nav>
    </div>
</section>
<section class="clearfix header">
    <div class="container">
        <h3 class="mt-2">Sản phẩm </h3>
            <div class="row mt-1">
            <?php
                    foreach($p as $value):
                    ?>
                          <div class="col-6 col-md mt-2">
                          <div class="card" style="width: 80%">
                              <img src="<?= $routing->base_url; ?>assets/img/<?=$value['image']; ?>" class="card-img-top" alt="...">
                              <div class="card-body">
                                <h6 class="card-title text-center"><?= $value['product_name']; ?></h6>
                                <p class="card-text"><?=number_format($value['price']);?> VNĐ</p>
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