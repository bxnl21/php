<?php 
    include_once('libs/common.php');
    class Product extends Common{
        function getNewProduct()
       {
            $c = new Common();
            $sql = "SELECT * FROM products WHERE status = 1 AND trash = 0 ORDER BY created_at DESC limit 0,4";
            $p = $c->getAll($sql);
            return $p;
       }
       function getProduct()
       {
            $c = new Common();
            $sql = "SELECT * FROM products WHERE status = 1 AND trash = 0 limit 0,4";
            $p = $c->getAll($sql);
            return $p;
       }
       function getProductByBrand()
        {
            $c = new Common();
            $sql = "SELECT * FROM products WHERE brand_id = 1 and status = 1 AND trash = 0  limit 0,4";
            $p = $c->getAll($sql);
            return $p;
        }
       function getProductBySlug($slug)
       {
            $c = new Common();
            $sql = "SELECT * FROM products WHERE status = 1 AND trash = 0 AND product_category =(select id from category where slug='".$slug."')";
            $p = $c->getAll($sql);
            return $p;
       }
       function getProducDetailBySlug($slug)
        {
            $c = new Common();
            $sql = "SELECT * FROM products WHERE slug='".$slug."' AND status = 1 AND trash = 0";
            $p = $c->getOne($sql);
            return $p;
        }
        function getProducDetailById($id)
        {
            $c = new Common();
            $sql = "SELECT * FROM products WHERE id='".$id."' AND status = 1 AND trash = 0";
            $p = $c->getOne($sql);
            return $p;
        }
    }
    
?>