<?php 
    include_once("models/M_cart.php");
    $f = new Cart();
    $p = $f->SaveCart();
    $url = $routing->site_url("trang-chu");
    header("Location: $url");
?>