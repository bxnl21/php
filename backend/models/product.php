<?php
    include_once('../libs/common.php');
    include_once('../libs/routing.php');
    include_once('../libs/paginator.php');
    include_once('../libs/upload.php');

    class Product extends Common{
        function __construct(){
            parent::__construct();
            $this->routing = new Routing();
            $this->p = new Paginator();
        }
        function getProduct($limit = 10,$page = 1){
            $sql = "SELECT * FROM products WHERE trash = 0 ";
            $result= $this->getAll($sql);
            $config = array(
                'base_url'=>$this->routing->site_url_backend('products'),
                'total_rows' => count($result),
                'per_page' =>$limit,
                'cur_page' => $page
            );
            $this->p->init($config);
            $sql = "SELECT * FROM products WHERE trash = 0 ORDER BY product_category LIMIT ".(($page-1)*$limit)." , ".$limit;
            $data = array();
            $data['products'] = $this->getAll($sql);
            $data['paginator'] = $this->p->createLinks();
            return $data;
        }
        function getCategoryName($id){
            $sql = "SELECT category_name from category where id =$id ";
            $result =  $this->getOne($sql);
            return $result;
        }
        function addNewProduct(){
            $i = "default.png";
            if($_FILES['image']['size'] == 0){
                echo $_FILES['image']['error'];
            } else {
                $file = $_FILES['image'];
                $i = $file['name'];
                $u = new Upload();
                $u -> doUpload($file);
            }
            $pro = array(
                'product_name' => $_POST['product_name'],
                'slug'=> $_POST['slug'],
                'product_category'=> $_POST['category'],
                'brand_id'=>1,
                'image'=> $i,
                'status'=> $_POST['status'],
                'price'=> $_POST['price'],
                'quantity'=> $_POST['quantity'],
                'product_detail'=> $_POST['detail'],
                'created_at'=> date('Y-m-d H:i:s'),
            );
            $this->addRecords("products", $pro);
        }
        function editProduct($id){
            $i = "default.png";
            if($_FILES['image']['size'] == 0){
                echo $_FILES['image']['error'];
            } else {
                $file = $_FILES['image'];
                $i = $file['name'];
                $u = new Upload();
                $u -> doUpload($file);
            }
            $pro= array(
                'product_name' => $_POST['product_name'],
                'slug'=> $_POST['slug'],
                'product_category'=> $_POST['category'],
                'brand_id'=>1,
                'image'=> $i,
                'status'=> $_POST['status'],
                'price'=> $_POST['price'],
                'quantity'=> $_POST['quantity'],
                'product_detail'=> $_POST['detail'],
                'created_at'=> date('Y-m-d H:i:s'),
            );
            $this->editRecord("products", $id, $pro);
        }
        function trashProduct(){
            $sql = "SELECT * FROM products WHERE trash = 1 ";
            $result= $this->getAll($sql);
            return $result;
        }
    }
?>