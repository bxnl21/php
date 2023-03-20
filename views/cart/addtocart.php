<?php 
    include_once("models/M_cart.php");
    $c = new Cart();
    $c->addToCart();
    $url = $routing->site_url('trang-chu');
    ob_clean();
    header("Location: $url");
    // exit;
?>