<?php
    include_once('../libs/routing.php');
    include_once('../libs/paginator.php');
    include_once('../libs/common.php');
    class Orders extends Common{
        function __construct(){
            parent::__construct();
            $this->routing = new Routing();
            $this->p= new Paginator();
        }
        function getOrders($limit = 10,$page = 1){
            $sql = "SELECT * FROM orders where trash = 0";
            $result = $this->getAll($sql);
            $config = array(
                'base_url'=>$this->routing->site_url_backend('quan-ly-don-hang'),
                'total_rows' => count($result),
                'per_page' => $limit,
                'cur_page' => $page
            );
            $this->p->init($config);
            $sql = "SELECT * FROM orders where trash = 0 order by order_date LIMIT ".(($page-1)*$limit)." , ".$limit;
            $data = array();
            $data['orders'] = $this->getAll($sql);
            $data['paginator'] = $this->p->createLinks();
            return $data;
        }
        function orderDetail($id){
            $c = new Common();
            $sql = "SELECT customer_id,email,phone,name,address,order_date FROM users,orders where users.id = orders.customer_id  and users.trash = 0 and status = 1 and orders.id = $id ";
            $p = $c->getOne($sql);
            return $p;
        }
        function orderDetail1($id){
            $c = new Common();
            $sql = "SELECT orders.id,name,product_name,price,qty,order_date,delivered from users,orders,products where users.id = orders.customer_id 
            and products.id = orders.product_id and customer_id = $id";
            $p = $c->getAll($sql);
            return $p;
        }


}
?>