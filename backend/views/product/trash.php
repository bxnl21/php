<?php if(!defined('BASEPATH')) exit ('No direct script access allowed');?>
<?php 
    include_once("models/product.php");
    $f= new Product();
    $cid= $_GET['id'];
    $f->trashItem("products",$cid);
    $url = $routing->site_url_backend("products");
    header("Location: $url");
?>