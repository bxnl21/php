<?php if(!defined('BASEPATH')) exit ('No direct script access allowed');?>
<?php 
    include_once('models/product.php');
    $f = new Product();
    $id = $_GET['id'];
    $status = $_GET['status'];
    $query = $f->changeStatus("products",$id,$status);
    $url = $routing->site_url_backend("products");
    header("Location: $url");
?>