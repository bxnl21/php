<?php if(!defined('BASEPATH')) exit ('No direct script access allowed');?>
<?php 
    include_once("models/category.php");
    $f= new Category();
    $cid= $_GET['id'];
    $f->delItem("category",$cid);
    $url = $routing->site_url_backend("trashcat");
    header("Location: $url");
?>