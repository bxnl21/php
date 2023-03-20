<?php 
    include_once("models/M_cart.php");
    $f = new Cart();
    $id = $_GET['id'];
    $f->delItemCart($id);
    $url = $routing->site_url('gio-hang');
    header("Location: $url");
?>