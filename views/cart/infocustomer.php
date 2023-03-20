
<?php 
    if(!isset($_SESSION['user'])){
        echo "<section class='clearfix header mt-5 pt-4'>";
        echo "<div class='container'>";
        echo "<p class='mt-5' style='margin-left:35%;'>Bạn chưa đăng nhập. Xin hãy đăng nhập <a data-toggle='modal' data-target='#exampleModal'  href='".$routing->site_url('dang-nhap')."'>tại đây</a></p>";
        echo "</div>";
        echo "</section>";  
    }
    else{
    include_once("models/M_cart.php");
    $f = new Cart();
    $p = $f->showCart();
    $a = $_SESSION['amount'];
    $info = $_SESSION['user'];
?>  
<section class="clearfix header mt-5 pt-4">
    <div class="container ">
        <div class="row">
            <div class="col-md-3" >
             <h4>Thông tin mua hàng</h4>
                <form>
                <div class="form-group">
                    <div class="form-group">
                    <label>Email</label>
                    <input name="email" type="text" class="form-control" data-bind="email" value="<?=$info['email']?>" required>
                    </div>
                    <div class="form-group">
                    <label>Họ và tên</label>
                    <input name="name"  type="text" class="form-control" data-bind="name" value="<?=$info['name']?>" required>
                    </div>
                    <div class="form-group">
                    <label>Số điện thoại</label>
                    <input name="phone"  type="text" class="form-control" data-bind="phone" value="<?=$info['phone']?>" required>
                    </div>
                    <div class="form-group">
                    <label>Địa chỉ</label>
                    <input name="address"  type="text" class="form-control" data-bind="address" value="<?=$info['address']?>" required>
                    </div>
                </div>
                </form>
            </div>
            <div class="col-4">
                <div>
                    <h4>Vận chuyển</h4>
                    <div class="form-group">
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                <input type="checkbox" aria-label="Checkbox for following text input" checked>
                                </div>
                            </div>
                            <div class="form-control">
                            <label>Giao hàng tận nơi</label>
                            <label class="ml-5 pl-5">40,000đ</label>
                            </div>
                        </div>
                    </div>
                </div>
                <div>
                    <h4>Thanh toán</h4>
                    <div class="form-group">
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                <input type="checkbox" aria-label="Checkbox for following text input" checked>
                                </div>
                            </div>
                            <div class="form-control">
                            <label>Thanh toán khi giao hàng (COD)</label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-5 " style="background-color: LightGray;">
                <div class=" p-3 border-bottom border-dark">
                    <h3><strong class="p-4"> Đơn hàng (<?=$_SESSION['number_of_item']?> sản phẩm)</strong></h3>
                </div>
                <div class="mt-2" >
                    <?php  $total=0 ;$b=0; $i=0;
                    foreach($p as $value):?>

                        <div class="row" >
                            <div class="col"><img class="p-1 img-fluid " src="<?=$routing->base_url;?>assets/img/<?= $value['image'];?>"></div>
                            <div class="col ml-1 p-1 text-center"><?=$value['product_name']?></div>
                            <div class="col p-1 "><?=number_format($value['price'])?></div>
                            <div class="col p-1 float:right"><?=$a[$i]?></div>
                        </div>
                        <?php $b=$value['price']*$a[$i];$total+=$b;$i++ ;endforeach;?>
                        </div>
                        <div style="margin-top:150px" class="border-top border-dark">
                            <div class=" p-1">
                                <span>Tạm tính: <?=number_format($total)?> </span>
                            </div>
                            <div class=" p-1">
                                <span>Tổng cộng: <?=number_format($total+40000)?></span>
                            </div>
                        </div>
            </div>
        </div>
        <div class="mt-3" style="float:right">
        <a href="<?=$routing->site_url('luu-gio-hang');?>" class="btn  btn-success"><span>Mua hàng<span></a>
        </div>
    </div>
</section>
<?php } ?>