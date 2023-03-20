<?php 
    include_once("models/M_cart.php");
    $f = new Cart();
    $f->delCart();
    $url = $routing->site_url('trang-chu');
    header("Location: $url");
?>