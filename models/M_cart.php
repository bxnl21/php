<?php 
    include_once('libs/common.php');
    include_once('products.php');
    class Cart extends Common{
        function addToCart(){
            if(!isset($_SESSION['cart'])){
                $_SESSION['cart'] = array();    
                $_SESSION['amount'] = array();
                $_SESSION['number_of_item'] = 0;
            }
            $id = $_GET['id'];
            $k = array_search($id, $_SESSION['cart']);
            if($k === false){
                array_push($_SESSION['cart'],$id);
                array_push($_SESSION['amount'],1);
                $_SESSION['number_of_item']++;
            }
            else{
                $_SESSION['amount'][$k]++;
            }
        }
        function showCart(){
            $p = new Product();
            $cart = $_SESSION['cart'];
            $n = count($cart);
            $pro = array();
            for ($i=0;$i<$n;$i++){
                $a = $p->getProducDetailById($cart[$i]);
                array_push($pro,$a);
            }
            return $pro;
        }
        function SaveCart(){
            $c = new Common();
            $data = $this->showCart();
            $cart = $_SESSION['cart'];
            $amount = $_SESSION['amount'];
            for($i=0;$i<count($cart);$i++)
            {
                $order = array(
                    'customer_id' => $_SESSION['user']['id'],
                    'product_id' => $cart[$i],
                    'qty' => $amount[$i],
                    'order_date' => date("Y-m-d H:i:s")
                );
                $c->addRecords("orders",$order);
            }
            session_destroy();
        }
        function delItemCart($id){
            $k = array_search($id,$_SESSION['cart']);
            array_splice($_SESSION['cart'],$k,1);
            array_splice($_SESSION['amount'],$k,1);
            $_SESSION['number_of_item']--;
        }
        function delCart(){
            unset($_SESSION['cart']);
            $_SESSION['number_of_item'] = 0;
        }
    }

?>