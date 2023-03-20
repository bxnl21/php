<?php if(!defined('BASEPATH')) exit ('No direct script access allowed');?>
<?php 
    include_once("models/product.php");
    $f= new Product();
    $cid= $_GET['id'];
    $f->delItem("products",$cid);
    $url = $routing->site_url_backend("trashpro");
    header("Location: $url");
?>