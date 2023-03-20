<?php
    include_once('../libs/common.php');
    include_once('../libs/routing.php');
    include_once('../libs/paginator.php');
    class Category extends Common{
        function __construct(){
            parent::__construct();
            $this->routing = new Routing();
            $this->p = new Paginator();
        }
        function getCategory($limit = 10,$page = 1){
            $sql = "SELECT * FROM category WHERE trash = 0 ";
            $result= $this->getAll($sql);
            $config = array(
                'base_url'=>$this->routing->site_url_backend('category'),
                'total_rows' => count($result),
                'per_page' =>$limit,
                'cur_page' => $page
            );
            $this->p->init($config);
            $sql = "SELECT * FROM category WHERE trash = 0 ORDER BY parent LIMIT ".(($page-1)*$limit)." , ".$limit;
            $data = array();
            $data['category'] = $this->getAll($sql);
            $data['paginator'] = $this->p->createLinks();
            return $data;
        }
        function getParentNameCategory($id){
            $sql = "SELECT category_name from category where id =$id ";
            $result =  $this->getOne($sql);
            return $result;
        }
        function addNewCategory(){
            $cat= array(
                'category_name'=> $_POST['catname'],
                'slug'=> $_POST['slug'],
                'parent'=> $_POST['parent'],
                'status'=> $_POST['status'],
                'created_at'=> date('Y-m-d H:i:s'),
            );
            $message = "";
            $message = $this->checkExits("category","category_name",$cat["category_name"]);
            if($message != 1)
            {
                return $message;
            }
            $message = $this->checkExits("category","slug",$cat["slug"]);
            if($message != 1)
            {
                return $message;
            }
            $this->addRecords("category",$cat);
            return 1;
        }
        function editCategory($id){
            $cat= array(
                'category_name'=> $_POST['catname'],
                'slug'=> $_POST['slug'],
                'parent'=> $_POST['parent'],
                'status'=> $_POST['status'],
                'created_at'=> date('Y-m-d H:i:s'),
            );
            $message = '';
            $message = $this->checkExits('category','category_name',$cat["category_name"]);
            if($message != 1)
            {
                return $message;
            }
            $message = $this->checkExits('category','slug',$cat["slug"]);
            if($message != 1)
            {
                return $message;
            }
            $this->editRecord('category', $id, $cat);
            return 1;
        }
        function trashCategory(){
            $sql = "SELECT * FROM category WHERE trash = 1 ";
            $result= $this->getAll($sql);
            return $result;
        }
    }
?>