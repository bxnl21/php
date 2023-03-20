<?php if(!defined('BASEPATH')) exit ('No direct script access allowed');?>
<?php 
    include_once('models/category.php');
    $f = new Category();
    $id = $_GET['id'];
    $status = $_GET['status'];
    $query = $f->changeStatus("category",$id,$status);
    $url = $routing->site_url_backend("category");
    header("Location: $url");
?>