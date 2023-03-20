<?php 
    include_once("models/M_cart.php");
    $f = new Cart();
    if(!isset($_SESSION['cart'])){
        ?>
        <section class="clearfix header mt-5 pt-4">
        <div class="container " >
        <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?=$routing->site_url('trang-chu')?>">Trang Chủ</a></li>
            <li class="breadcrumb-item active"  aria-current="page">Giỏ hàng</li>
        </ol>
        </nav>
        <table class="table" >
            <tr>
                <th scope="col">STT</th>
                <th scope="col">Hình ảnh</th>  
                <th scope="col">Sản phẩm</th>  
                <th scope="col">Số lượng</th>  
            </tr>
        </table>
        <?php echo"không có sp nào trong giỏ hàng"; ?>
        </div>
</section>
       <?php exit();
    }
    $i=0;
    $sum = 0;
    $cart = $_SESSION['cart'];
    $amount = $_SESSION['amount'];
    $n = count($cart);
    $p = $f->showCart();
?>
<section class="clearfix header mt-5 pt-4">
    <div class="container ">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?=$routing->site_url('trang-chu')?>">Trang Chủ</a></li>
            <li class="breadcrumb-item"><a href="">Giỏ hàng</a></li>
            <li class="breadcrumb-item active" aria-current="page">Sản phẩm(
                <?php if(!isset($_SESSION['number_of_item']))
                {
                    echo "0";
                }else{
                    echo $_SESSION['number_of_item'];
                }
                ?>)</li>
        </ol>
        </nav>
    <table class="table">
        <thead>
        <tr>
            <th scope="col">STT</th>
            <th scope="col" style="width:200px;">Hình ảnh</th>  
            <th scope="col">Sản phẩm</th>  
            <th scope="col">Số lượng</th>
            <th scope="col">Đơn giá</th>
            <th scope="col">Số tiền</th>
            <th scope="col"></th>  
        </tr>
        </thead>
        <tbody>
        <?php 
            $i=0;
            $s=0;
            $total=0;
            foreach ($p as $cart1 ):
            $s += $amount[$i];
            $tien =  $amount[$i]*$cart1['price'];
            ?>
        <tr>       
            <td scope="row"><?= $i ?></td>
            <td><img class="img-fluid" src="<?=$routing->base_url("assets/img/".$cart1['image'])?>"/></td>  
            <td><?= $cart1['product_name'] ?></td>  
            <td><?= $amount[$i]  ?></td>
            <td><?= number_format($cart1['price']);  ?></td>
            <td><?= number_format($tien);  ?></td>
            <td><a href="<?=$routing->site_url('xoa-item-gio-hang');?>/<?=$cart1['id'];?>"><i class="fas fa-trash"></i></a></td>
            </td>
        </tr>
        <?php  $total+=$tien; $i++; endforeach; ?>
        </tbody>
        <tfoot>
        <tr>
            <td colspan="2">Số lượng sản phẩm: <?= $_SESSION['number_of_item']?></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td colspan="2">Tổng số lượng sản phẩm: <?= $s?></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td colspan="2">Tổng cộng: </td>
            <td></td>
            <td></td>
            <td></td>
            <td><?=number_format($total);?> đ</td>
            <td></td>
        </tr>
        </tfoot>
    </table>
    <table class="table">
        
    </table>    
    <div class="mb-3"></div>
    <a href="<?=$routing->site_url('xoa-gio-hang');?>" class="btn btn-sm btn-danger"><i class="fas fa-trash"></i> Xóa giỏ hàng</a></td>
    <div class="mt-3" style="float:right">
        <a href="<?=$routing->site_url('checkout-gio-hang');?>" class="btn  btn-success"><span>Mua hàng<span></a>
    </div>
    </div>
</section>