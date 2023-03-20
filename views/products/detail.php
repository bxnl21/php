<?php
    include_once('models/products.php');
    $f= new Product();
    $slug= $_GET['slug'];
    $p=$f->getProducDetailBySlug($slug);
?>
<section class="clearfix header pt-4">
    <div class="container mt-5">
        <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?=$routing->site_url('trang-chu')?>">Trang Chủ</a></li>
            <li class="breadcrumb-item"><a href="">Sản phẩm</a></li>
            <li class="breadcrumb-item active" aria-current="page"><?php echo $p['product_name']?></li>
        </ol>
        </nav>
        <div class="row mt-3">
            <div class="col-12 col-md-5">
                <img src = "<?=$routing->base_url("assets/img/".$p['image'])?>" style="width:100%;" alt = "prd"/>
            </div>
                <div class="col-12 col-md-7">
                    <h3><?= $p['product_name']?></h3>
                    <h6 class=" text-uppercase>">Giá sản phẩm: <?=number_format($p['price']);?> VNĐ</h6>
                    <h6 class=" text-uppercase>">Số lượng: <?= $p['quantity']?></h6>
                    <a href="<?=$routing->site_url("them-gio-hang");?>/<?= $p['id']?>" class="btn btn-primary"><i class="fas fa-cart-plus"></i> Thêm vào giỏ hàng</a>
                </div>
        </div>
    </div>
    <section>
            <div class="container border-top mt-3"> 
            </div>
    </section>
    <div class="container">
        <h3>Chi tiết sản phẩm</h3>
        <?php echo $p['product_detail']; ?>
    </div>
    <section>
            <div class="container border-top mt-3"> 
            </div>
    </section>
    <div class="container mt-3">
        <h2 class="col-12 col-md-4" style="font-size: 18px;font-weight: bold"> Gửi câu hỏi và ý kiến của bạn về sản phẩm (Chúng tôi sẽ phản hồi trong 5 phút)</h2>
    </div>
    <section>
            <div class="container border-top mt-3"> 
            </div>
    </section>
        <!--phần comment của mình-->
    <section>
            <div class="container border-top mt-3"> 
            </div>
    </section>
     <!--phần comment của ng #-->
</section>