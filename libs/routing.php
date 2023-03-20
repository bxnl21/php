<?php 
    class Routing{
        var $base_url ="http://localhost:8080/Laptrinhweb/";
        var $base_url_backend ="http://localhost:8080/Laptrinhweb/backend/";
        var $index_page ="index.php";
        var $config = array (
            "trang-chu"=>["url"=>"views/home/home.php","params"=>[]],
            "lien-he"=>["url"=>"views/contact/contact.php","params"=>[]],
            "san-pham"=>["url"=>"views/products/product.php","params"=>["slug"]],
            "chi-tiet"=>["url"=>"views/products/detail.php","params"=>["slug"]],
            "dang-nhap"=>["url"=>"views/login/dologin.php","params"=>[]],
            "dang-ky"=>["url"=>"views/login/doReg.php","params"=>[]],
            "dang-xuat"=>["url"=>"views/login/logout.php","params"=>[]],
            "thong-tin-tai-khoan"=>["url"=>"views/info/info.php","params"=>['id']],

            "gio-hang"=>["url"=>"views/cart/cart.php","params"=>[]],
            "luu-gio-hang"=>["url"=>"views/cart/saveCart.php","params"=>[]],
            "checkout-gio-hang"=>["url"=>"views/cart/infocustomer.php","params"=>[]],
            "them-gio-hang"=>["url"=>"views/cart/addtocart.php","params"=>["id"]],
            "xoa-item-gio-hang"=>["url"=>"views/cart/delItemCart.php","params"=>["id"]],
            "xoa-gio-hang"=>["url"=>"views/cart/delCart.php","params"=>[]],
            
            //backend
            "dang-xuat-back"=>["url"=>"logout.php","params"=>[]],
            //cate
            "category"=>["url"=>"views/category/list.php","params"=>['page','size']],
            "addcategory"=>["url"=>"views/category/add.php","params"=>[]],
            "editcat"=>["url"=>"views/category/edit.php","params"=>["id"]],
            "deltrashcat"=>["url"=>"views/category/trash.php","params"=>["id"]],
            "trashcat"=>["url"=>"views/category/listtrash.php","params"=>[]],
            "restore"=>["url"=>"views/category/restore.php","params"=>["id"]],
            "delcat"=>["url"=>"views/category/delcat.php","params"=>["id"]],
            "status"=>["url"=>"views/category/status.php","params"=>["id","status"]],
                //order
            "order"=>["url"=>"views/orders/list.php","params"=>['page','size']],
            "order_detail"=>["url"=>"views/orders/detail.php","params"=>['id']],
                //product
            "products"=>["url"=>"views/product/list.php","params"=>['page','size']],
            "addproduct"=>["url"=>"views/product/add.php","params"=>[]],
            "editpro"=>["url"=>"views/product/edit.php","params"=>["id"]],
            "deltrashpro"=>["url"=>"views/product/trash.php","params"=>["id"]],
            "trashpro"=>["url"=>"views/product/listtrash.php","params"=>[]],
            "restorepro"=>["url"=>"views/product/restore.php","params"=>["id"]],
            "delpro"=>["url"=>"views/product/delpro.php","params"=>["id"]],
            "statuspro"=>["url"=>"views/product/status.php","params"=>["id","status"]],
        );
        function base_url($path)
        {
            return $this->base_url . $path;
        }
        function base_url_backend($path)
        {
            return $this->base_url_backend . $path;
        }
        function site_url($path)
        {
            return $this->base_url . $this->index_page."/".$path;
        }
        //khai bao backend
        function site_url_backend($path)
        {
            return $this->base_url_backend . $this->index_page."/".$path;
        }
        ///end khai bao back end
        function get_path()
        {
            $view="";
            $url=$_SERVER['REQUEST_URI'];
            $arr=explode("/",$url);
            while (count($arr)>0 && $arr[0]!= "index.php")
            {
                $arr = array_slice($arr,1);
            }
            if(count($arr)<=1)
            {
                $view = "views/home/home.php";
            } 
            if(count($arr)>1)
            {
                $view = $this->config[$arr[1]]['url'];
                if(count($arr)>2)
                {
                    $params = $this->config[$arr[1]]["params"];
                    $i=1;
                    foreach($params as $param)
                    {
                        $i++;
                        $_GET[$param]=$arr[$i];
                    }
                }
            }
            return $view;
        }
    }
?>